<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Une classe représentant un compte en banque (un peu nul)
 *
 * @author simplon
 */
class Compte {
    /*
     * Une propriété en visibilité private ne sera 
     * accessible que depuis l'intérieur de la classe.
     * On ne pourra pas y faire appel ailleurs que dans
     * Compte.
     * Cela nous permet de limiter l'accès (lecture/ecriture)
     * aux propriétés de nos classes.
     */
    private $solde = 2000;
    
    public function getSolde() {
        return $this->solde;
    }
}
