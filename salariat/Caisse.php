<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Caisse
 *
 * @author simplon
 */
class Caisse {
    /*
     * Lorsqu'on utilise le mot clef static, on rend
     * une propriété d'une classe statique, cela signifie
     * que cette propriété sera partagée par TOUTES les
     * instances de la classe Caisse, si on la modifie
     * dans une instance, elle sera modifiée dans les
     * autres.
     */
    private static $depot = 0;
    /**
     * Une méthode qui prélève les cotisations sociales à
     * un salaire super-brut et les met dans sa caisse de
     * dépôt en retournant le reste.
     * @param int $salaire le salaire dont il faudra prélever
     * les cotisations (plus ou moins 45%)
     * @return int le salaire prélevée de cotisations
     */
    public function cotisation(int $salaire) {
        /* Pour accéder à une propriété statique d'une
         * classe où l'on se trouve, on utilise le
         * mot clef self suivit de :: puis de la
         * variable statique à accéder avec dollar.
         */
        self::$depot += $salaire * 0.45;
        echo self::$depot . '<br/>';
        return $salaire * 0.55;
    }
}
