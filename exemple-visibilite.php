<?php

include_once './Compte.php';

$compte = new Compte();
/*
 * Plutôt que d'accéder directement à la propriété
 * solde de ma classe
 */
//$compte->solde = 200000000000000;
//echo $compte->solde;
/*
 * On accédera à une méthode getSolde() qui me renverra
 * le solde. Ce qui permet à la classe de rester évolutive
 * sans casser le code où elle est utilisée ainsi que 
 * de mettre d'éventuelles conditions pour l'accès
 * à certaines données en lecture ou ecriture
 */
echo $compte->getSolde();