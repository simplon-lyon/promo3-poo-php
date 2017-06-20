<?php

//On include notre Employe (qui lui même include la Personne)
include_once './Employe.php';
/* On crée une nouvelle instance d'Employe en lui 
 * fournissant toutes les propriétés nécessaire.
 * Pour la propriété dateArrivee, on lui fourni une
 * instance de DateTime qu'on crée avec un new DateTime()
 * en lui donnant en argument une date en string au format
 * Etats-Unien (année-mois-jour)
 * 
 */
$employe = new Employe('Bobson', 
        'Bob', 
        40, 
        'Rhône Alpes', 
        new DateTime('2011-04-02'),
        3000);
//on lance la méthode anciennete et on l'echo
echo $employe->anciennete();

echo '<br/>';
echo $employe->getSalaire() . '€';
echo '<br/>';
$employe->augmentation();
echo $employe->getSalaire() . '€';

//Rien à voir, voilà comment on affiche un DateTime
echo '<br/>';
$date = new DateTime();
//Pour afficher une date, on utilise la méthode
//format() de DateTime qui attend en argument une string
//représentant la façon dont on veut l'afficher
//Ici, on l'affiche en mode jj/mm/yyyy hh:mm
//Les codes sont dispos dans la doc php
echo $date->format('d/m/Y H:i');
