<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Personnage
 *
 * @author simplon
 */
class Personnage {

    private $vie;
    private $defense;
    private $nom;
    private $force;
    
    function __construct(int $vie, 
            int $defense, 
            string $nom, 
            int $force) {
        $this->vie = $vie;
        $this->defense = $defense;
        $this->nom = $nom;
        $this->force = $force;
    }

    public function defendre() {
        $this->defense += 10;
    }
    
    /**
     * Une méthode qui attaque un autre personnage
     * @param Personnage $victime Cet argument représente
     * la cible de notre attaque. Il faudra qu'il soit
     * de type Personnage également.
     */
    public function attaquer(Personnage $victime) {
        //On commence par calculer les dégâts qui vont 
        //être fait en soustrayant la défense de
        //la cible ($victime) à l'attaque du personnage qui
        //déclenche l'attaque ($this)
        $degats = $this->force - $victime->defense;
        //On vérifie si les dégâts sont négatifs ou égaux
        //à zéro, s'ils le sont, on les passe à 1 
        //(pour éviter de soigner un perso qu'a trop de def)
        if($degats <= 0) {
            $degats = 1;
        }
        //On réduit la vie de la cible des dégâts obtenus
        $victime->vie -= $degats;
    }
    /**
     * Méthode générant le HTML d'un personnage
     * @return string renvoie les statistiques d'un
     * personnage sous forme d'une liste html
     */
    public function genererHTML():string {
        return '<ul>'
            . '<li>Nom : ' . $this->nom . '</li>'
            . '<li>Vie : ' . $this->vie . '</li>'
            . '<li>Force : ' . $this->force . '</li>'
            . '<li>Défense : ' . $this->defense . '</li>'
            . '</ul>';
    }

}
