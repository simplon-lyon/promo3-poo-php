<?php
    include_once './Personnage.php';
/**
 * Description of MaitreJeu
 *
 * @author simplon
 */
class MaitreJeu {
    private $perso1;
    private $perso2;
    private $tour = 0;
//    private $persoActif;
//    private $persoCible;
    
    function __construct(Personnage $perso1, 
                        Personnage $perso2) {
        $this->perso1 = $perso1;
        $this->perso2 = $perso2;
    }
    
    public function attaque() {
        //Si le numéro de tour est pair
        if($this->tour % 2 == 0) {
            //alors le perso1 attaque le perso2
            $this->perso1->attaquer($this->perso2);
        }else {
            //Sinon, l'inverse
            $this->perso2->attaquer($this->perso1);
        }
        //et on augmente le numero de tour après
        $this->tour++;
    }
    
    public function defense() {
        if($this->tour % 2 == 0) {
            $this->perso1->defendre();
        }else {
            $this->perso2->defendre();
        }
        $this->tour++;
    }
    /**
     * La méthode affichage se charge de générer le html
     * de tous les personnages
     * @return string renvoie les affichage des persos
     * sous forme de <ul>'s HTML
     */
    public function affichage() {
        return $this->perso1->genererHTML() 
                . $this->perso2->genererHTML();
    }

}
