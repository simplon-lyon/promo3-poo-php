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
//Si on reçoit du POST une clef attaque, c'est que le btn
//attaque a été cliqué, donc on déclenche l'attaque d'un
//de nos persos
if(isset($_POST['attaque'])){
    $perso1->attaquer($perso2);
}
//Si par contre on reçoit defense, alors c'est que le btn
//defense a été cliqué, donc on déclenche la défense du perso
if(isset($_POST['defense'])){
    $perso1->defendre();
}
//Bien faire en sorte de générer le html APRÈS la résolution
//des actions, sinon il y aura un décalage entre l'action
//cliqué et l'affichage de ses conséquences
echo $perso1->genererHTML();
echo $perso2->genererHTML();

//On stock les personnage dans leur session respective
$_SESSION['perso1'] =$perso1;
$_SESSION['perso2'] = $perso2;

?>
<!--On peut mettre le formulaire où on le souhaite vu que
de toute façon, les conséquences du formulaire n'arriveront
qu'une fois la page rechargée, et donc le script php
 complétement re-exécuté -->
<form method="POST">
    <button name="attaque">Attaquer</button>
    <button name="defense">Défendre</button>
</form>