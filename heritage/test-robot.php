<?php

include_once './Robot.php';
include_once './RobotMenager.php';
//On crée une instance de Robot, il n'a accès qu'à
//sa méthode saluer()
$robot1 = new Robot(1);
echo $robot1->saluer();
//On crée maintenant une instance de RobotMenager, qui
//hérite de la classe Robot, et celui ci a accès à
//la méthode saluer() qui vient de Robot ainsi qu'à
//la méthode faireMenage() qui vient de RobotMenager
$robotMenager = new RobotMenager(2);
echo "<p>".$robotMenager->saluer()."</p>";
echo "<p>".$robotMenager->faireMenage()."</p>";
