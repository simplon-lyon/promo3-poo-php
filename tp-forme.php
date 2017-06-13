<?php
    
    include_once './Carre.php';
    
    $carreRouge = new Carre(50, 'red');
    
    echo $carreRouge->afficherSuperficie();
    echo $carreRouge->afficher();