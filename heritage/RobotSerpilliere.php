<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of RobotSerpilliere
 *
 * @author simplon
 */
class RobotSerpilliere extends RobotMenager{
    /* Surcharge : Lorsqu'on définie une méthode dans
     * un enfant qui a le même nom qu'une méthode de son
     * parent, on fait ce qu'on appelle une surcharge ou
     * override en anglais, de la méthode. Cela revient
     * à redéfinir/remplacer la méthode du parent par 
     * celle définie dans l'enfant
     * Ca ne vaut bien sûr que pour la classe enfant,
     * si j'appelle faireMenage() sur une instance de
     * RobotMenager, il n'appelera pas la méthode surchargée
     * par l'enfant, mais bien celle du RobotMenager.
     */
    public function faireMenage() {
        /*
         * On peut faire appelle aux méthodes du parent, comme
         * ici lorsqu'on a surchargée la méthode en question,
         * en utilisant la syntaxe parent::faireMenage()
         */
       return parent::faireMenage() 
                . ' et je passe la serpillière';
    }
    
}
