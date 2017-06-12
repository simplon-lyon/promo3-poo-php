<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PetitChien
 *
 * @author simplon
 */
class PetitChien {
    /*
     * On peut définir des propriétés sur notre classes
     * qui indiqueront "à quoi ressemble un PetitChien"
     */
    public $nom;
    public $race;
    public $dateNaissance;
    public $couleur;
    /**
     * Une classe peut également posséder des méthodes
     * (des fonctions liées à cette classe) qu'on pourra
     * appeler directement sur nos instances.
     */
    public function aboyer() {
        echo 'wouf wouf wouf';
    }
    /*
     * On peut utiliser le mot clef $this pour faire appel
     * à l'instance actuelle de notre chien.
     * Ce qui signifie que la valeur du $this ne sera
     * pas la même selon l'instance qui appelle la fonction
     * en question.
     * (La méthode __toString() est une fonction spéciale
     * qui sera appelée dès qu'on tente de transformer
     * une instance de chien en chaîne de caractères)
     */
    public function __toString() {
        return 'mon nom est ' . $this->nom . 
                ', ma race est ' . $this->race .
                ', ma couleur est ' . $this->couleur .
                ', je suis né le ' . $this->dateNaissance;
    }
    /* La méthode __construct sera appelée à chaque
     * fois qu'on fera un new d'une classe.
     * Si on ne la définit par, il en existe une
     * par défaut qui n'attend pas d'argument et ne
     * fait rien de particulier.
     * Mais à partir du moment où on la définit, ça sera
     * forcément elle qui sera appelée et qui s'exécutera
     * avant toute chose.
     * Cette méthode est faite pour initialiser les 
     * propriétés d'une instance (soit avec des valeurs
     * en dur par défaut, soit, le plus souvent, avec
     * des arguments passés au constructeur)
     */
    public function __construct($nom,$race,$date,$couleur) {
        $this->nom = $nom;
        $this->race = $race;
        $this->couleur = $couleur;
        $this->dateNaissance = $date;
    }
    
}
