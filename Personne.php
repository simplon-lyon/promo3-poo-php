<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Classe représentant une personne
 *
 * @author simplon
 */
class Personne {
    private $nom;
    private $prenom;
    private $age;
    private $region;
    
    function __construct($nom, $prenom, $age, $region) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->age = $age;
        $this->region = $region;
    }
    /* Les accesseurs (ou getters/setters) sont des 
     * méthodes qui donnent accès (ou non) en lecture
     * et/ou en écriture aux propriétés privées d'une
     * classe.
     * L'intérêt d'utiliser des méthodes est la possibilité
     * d'imposer des conditions pour la lecture et/ou
     * l'écriture d'une propriété (vérifier la taille 
     * d'un paramètre, ou son type par exemple)
     * 
     */    
    function getNom() {
        return $this->nom;
    }

    function getPrenom() {
        return $this->prenom;
    }

    function getAge() {
        return $this->age;
    }

    function getRegion() {
        return $this->region;
    }

    function setNom($nom) {
        $this->nom = $nom;
    }

    function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    function setAge($age) {
        $this->age = $age;
    }

    function setRegion($region) {
        $this->region = $region;
    }


}
