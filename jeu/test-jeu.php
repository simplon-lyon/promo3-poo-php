<?php

include_once './Personnage.php';
session_start();
//On vérifie s'il y a les persos actuellement stockés en 
//session
if (isset($_SESSION['perso1']) 
        && isset($_SESSION['perso2'])) {
    /*
     * Si on a effectivement les persos stockés en session
     * On les récupère et on les met dans leur variable
     * respective.
     */
    $perso1 = $_SESSION['perso1'];
    $perso2 = $_SESSION['perso2'];
} else {
    /*
     * On crée 2 instances différentes de la classe Personnage
     */
    $perso1 = new Personnage(100, 20, 'Perso1', 30);
    $perso2 = new Personnage(140, 15, 'Perso2', 25);
}
$perso1->attaquer($perso2);
$perso1->defendre();

$perso2->defendre();
$perso2->attaquer($perso1);

echo $perso1->genererHTML();
echo $perso2->genererHTML();

//On stock les personnage dans leur session respective
$_SESSION['perso1'] =$perso1;
$_SESSION['perso2'] = $perso2;



