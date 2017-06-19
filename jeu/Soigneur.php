<?php

/**
 * La classe soigneur est un type de Personnage (une classe
 * qui hérite de la classe Personnage)
 * Il pourra donc faire tout ce qu'un Personnage
 * sait faire, mais en plus de ça, il pourra soigner
 *
 * @author simplon
 */
class Soigneur extends Personnage{
    private $bandages = 10;
    /**
     * Une méthode qui permet de soigner un autre personnage
     * ou soi même
     * @param Personnage $perso Le personnage à soigner
     */
    public function soigner(Personnage $perso): bool {
        //On vérifie si le soigneur a plus de 0 bandages
        if($this->bandages > 0) {
            //Si oui, on soigne le personnage ciblé
            $perso->vie += 10;
            //et on retire un bandage au Soigneur
            $this->bandages--;
            //Le soin est réussi, la méthode renvoie true
            return true;
        }
        //le soin n'est pas fait, on renvoie false
        return false;
    }
    
    public function genererHTML():string {
        /*
         * Le parent:: permettra de faire appelle aux propriétés
         * et aux méthodes telles que définie dans la classe
         * Parent.
         * C'est utile si on veut surcharger (override) une
         * méthode du parent tout en conservant le comportement
         * de cette méthode, mais juste en lui rajoutant quelque
         * chose
         */
        return parent::genererHTML();
    }
}
