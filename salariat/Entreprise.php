<?php

require_once './Employe.php';
/**
 * Description of Entreprise
 *
 * @author simplon
 */
class Entreprise {
    private $employes;
    private $CA;
    
    function __construct(array $employes, int $CA) {
        $this->employes = $employes;
        $this->CA = $CA;
    }
    /**
     * Méthode qui augmentera les employés de l'employe
     * dont l'ancienneté est supérieur ou égale à un an.
     */
    public function reevaluation() {
        foreach($this->employes as $employe) {
            if($employe->anciennete() >= 1 ) {
                $employe->augmentation();
            }
        }
    }
}
