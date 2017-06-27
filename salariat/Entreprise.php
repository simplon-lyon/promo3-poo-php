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
    private $benefices = 0;
    
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
    /**
     * Méthode qui permet de verser le salaire à tous les
     * employés de l'entreprise et de calculer les 
     * bénéfices de celle ci en conséquence.
     */
    public function verserSalaire() {
        $totalSalaires = 0;
        foreach($this->employes as $employe) {
            $employe->toucherSalaire();
            $totalSalaires += $employe->getSalaire();
        }
        $this->benefices = $this->CA - $totalSalaires;
    }
    
}
