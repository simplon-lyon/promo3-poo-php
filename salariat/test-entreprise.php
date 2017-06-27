<?php

require_once './Employe.php';
require_once './Entreprise.php';
//On crée une instance d'entreprise en lui fournissant
//trois instances d'Employe en argument ainsi qu'un CA
$entreprise = new Entreprise([
    new Employe("Bobson", "Bobby", 35, "Rhône Alpes", new DateTime('2010-10-05'), 4000),
    new Employe("Johnson", "Peter", 22, "Rhône Alpes", new DateTime('2015-09-05'), 3000),
    new Employe("Maxson", "Larry", 28, "Rhône Alpes", new DateTime('2017-01-14'), 3450)
], 100000);
//On lance la méthode de réévaluation des salaires
$entreprise->reevaluation();

$entreprise->verserSalaire();
echo '<pre>';
var_dump($entreprise);
echo '</pre>';


//require_once './Caisse.php';
//
//$caisse = new Caisse();
//echo $caisse->cotisation(10000);
//var_dump($caisse);
//
//
//$employe = new Employe("test", 
//        "test", 
//        10, 
//        "test", 
//        new DateTime(), 
//        100);
//
//$employe->toucherSalaire();
//echo '<pre>';
//var_dump($employe);
//echo '</pre>';