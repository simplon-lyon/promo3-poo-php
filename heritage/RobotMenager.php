<?php

/*
 * Héritage :
 * L'héritage en POO permet à une classe de 
 * "dériver"/hériter d'une autre classe, cela signifie que
 * la classe qui hérite, possèdera toutes les méthodes
 * de la classe parent en plus d'éventuelles méthodes
 * supplémentaires qu'on lui définira qui ne seront 
 * accessible que par elle.
 * 
 * Constructeur :
 * Dans le cas où la classe parent possède un constructeur
 * mais que la classe enfant n'en définie pas, alors 
 * par défaut la classe enfant utilisera le constructeur
 * du parent lorsqu'on voudra l'instancier.
 */
class RobotMenager extends Robot{
    public function faireMenage() {
        return  "je passe l'aspirateur bip boup bip";
    }
}
