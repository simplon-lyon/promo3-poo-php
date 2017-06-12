<?php

include_once './PetitChien.php';

/*
 * On fournit au new la liste des arguments de notre
 * constructeur qui seront utilisés par celui ci.
 */
$chien = new PetitChien('rex', 'corgi', '20/05/2017', 'bleu');

echo $chien->nom . ' ' . $chien->race;
