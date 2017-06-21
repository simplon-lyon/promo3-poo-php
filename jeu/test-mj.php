<?php

include_once './MaitreJeu.php';
include_once './Personnage.php';
session_start();
//Si on a un mj en session, on le restore dans la variable
//$mj 
if(isset($_SESSION['mj'])) {
    $mj = $_SESSION['mj'];
}else {
    //Sinon on crée une nouvelle instance de mj en lui
    //fournissant deux instances de Personnage
    //(pas besoin de stocker les perso en variable,
    //c'est maintenant le MaitreJeu qui s'en charge)
    $mj = new MaitreJeu(
            new Personnage(100, 0, "Perso1", 10),
            new Personnage(100, 2, "Perso2", 9)
            );
}
/* filter_has_var vérifie si une variable est présente
 * dans le post ou dans le get (selon le premier argument)
 * qu'on lui passe
 */
if(filter_has_var(INPUT_POST, 'attaque')) {
    $mj->attaque();
}
/*
 * filter_has_var(INPUT_POST, 'defense') équivaut à
 * isset($_POST['defense'])
 */
if(filter_has_var(INPUT_POST, 'defense')) {
    $mj->defense();
}
//On lance l'affichage de nos personnages via le MJ
echo $mj->affichage();
//On stock le MJ en session
$_SESSION['mj'] = $mj;

?>

<form method="POST">
    <button name="attaque">Attaquer</button>
    <button name="defense">Défendre</button>
</form>