<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Point
 *
 * @author simplon
 */
class Point {
    private $top;
    private $left;
    
    public function __construct(int $top, int $left) {
        $this->top = $top;
        $this->left = $left;
    }
    
    public function afficher():string {
        $style = 'width:2px;'
                . 'height:2px;'
                . 'background-color:black;'
                . 'position:absolute;'
                . 'top:' . $this->top . 'px;'
                . 'left:' . $this->left . 'px';
        
        return '<div style="' . $style . '"></div>';
    }
    /**
     * Méthode calculant la distance entre ce Point et 
     * un autre Point
     * @param Point $point l'instance de point dont on 
     * va calculer la distance depuis celui où l'on se trouve
     */
    //Ici, on type la variable d'entrée pour signifier
    //que cette méthode n'acceptera qu'une instance de
    //la classe Point comme paramètre.
    public function distanceFrom(Point $point): float {
        return sqrt(pow($point->top-$this->top, 2) 
                + pow($point->left-$this->left, 2));
    }
    
    function getTop() {
        return $this->top;
    }

    function getLeft() {
        return $this->left;
    }


       

}
