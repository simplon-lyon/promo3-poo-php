<?php
    //On include nos classes
    include_once './Carre.php';
    include_once './Point.php';
    //On crée une instance de Carre
    $carreRouge = new Carre(50, 'red');
    //On affiche sa superficie et le carré
    echo $carreRouge->afficherSuperficie();
    echo $carreRouge->afficher();
    //On crée 2 instances de Point différentes
    $pointA = new Point(10, 100);
    $pointB = new Point(340, 400);
    //On affiche les deux points
    echo $pointA->afficher();
    echo $pointB->afficher();
    //On calcule la distance entre les deux points
    echo $pointA->distanceFrom($pointB);
    