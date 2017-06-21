<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            include_once './PetitChien.php';
            /*
             * Pour créer une nouvelle instance de notre
             * PetitChien, on utilise le mot clef new.
             * Cette instance possèdera toutes les propriétés
             * que nous avons défini dans notre classe
             */
            $chien1 = new PetitChien("rex", "corgi", "24/05/2017", "marron");
            /*
             * Pour accéder aux propriétés de notre classe en
             * lecture (et en ecriture dans ce cas là), on
             * utilise -> sur l'instance, suivi du nom de
             * la propriété à accéder. Si on la suit d'un =
             * on peut changer sa valeur (pasque public) si
             * non, c'est en lecture.
             * le -> est l'équivalent du . en javascript
             * (document.getElementById() donnerait en
             * PHP document->getElementById() )
             */
//            $chien1->nom = 'rex';
//            $chien1->race = 'corgi';
//            $chien1->couleur = 'marron';
//            $chien1->dateNaissance = '20/05/2017';
            
            echo $chien1->nom . ' ';
            echo $chien1->race . ' ';
            echo $chien1->couleur . ' ';
            echo $chien1->dateNaissance;
            
            $chien1->aboyer();
            
            echo $chien1;
        ?>
    </body>
</html>
