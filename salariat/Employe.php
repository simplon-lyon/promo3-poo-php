<?php

include_once '../Personne.php';
include_once './Caisse.php';

/**
 * Description of Employe
 *
 * @author simplon
 */
class Employe extends Personne{
    private $dateArrivee;
    private $salaire;
    private $compteBancaire;
    private $caisse;
     
    public function __construct(string $nom, 
            string $prenom, 
            int $age, 
            string $region,
            DateTime $dateArrivee,
            int $salaire) {
        //On appel le constructeur du parent car 
        //celui ci attend des arguments pour faire une
        //personne avec toutes ses propriétés.
        parent::__construct($nom, $prenom, $age, $region);
        $this->dateArrivee = $dateArrivee;
        $this->salaire = $salaire;
        //On initialise compteBancaire et caisse directement
        $this->compteBancaire = 0;
        $this->caisse = new Caisse();
    }
    
    public function anciennete():int {
        //On récupère la date du jour avec un new DateTime()
        //sans lui fournir d'argument
        $today = new DateTime();
        //On fait la différence entre la date du jour 
        //et la date d'arrivée de l'employé avec la
        //méthode diff.
        //Cette méthode nous renvoie un objet DateInterval
        $difference = $this->dateArrivee->diff($today);
        //On récupère le nombre d'années d'écart stockées
        //dans la propriété y du DateInterval
        return $difference->y;
    }
    
    public function augmentation() {
        //On récupère l'ancienneté de l'employé avec
        //la méthode anciennete()
        $anciennete = $this->anciennete();
        //On augmente le salaire en conséquence 2%, 5%, 10%
        if($anciennete < 5) {
            $this->salaire *= 1.02;
        }elseif($anciennete < 10) {
            $this->salaire *= 1.05;
        }else{
            $this->salaire *= 1.1;
        }
        
    }
    
    public function getSalaire():int {
        return $this->salaire;
    }
    /**
     * Méthode qui permettra à l'employer de toucher son
     * salaire tout en cotisant à sa caisse de cotisations
     */
    public function toucherSalaire() {
        $this->compteBancaire += 
                $this->caisse->cotisation($this->salaire);
    }
}
