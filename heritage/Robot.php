<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Robot
 *
 * @author simplon
 */
class Robot {
    /*
     * Les propriétés private ne sont accessibles que
     * dans la classe actuelle. Ce qui veut dire qu'une
     * classe enfant de Robot n'aurait pas accès à ses
     * propriétés privées.
     * Pour rendre une propriété inaccessible depuis 
     * l'exterieur mais accessible pour les classes enfants
     * on utilise la visibilité protected.
     * Ici, le $numeroDeSerie sera accessible pour la 
     * classe Robot et pour la classe RobotMenager
     */
    protected $numeroDeSerie;
    
    public function __construct($numero) {
        $this->numeroDeSerie = $numero;
    }
    
    public function saluer() {
        return "Bonjour bip boup je suis le robot n°".
                $this->numeroDeSerie;
    }
}
