<?php
abstract class Employe {
    private $id;
    private $matricule;
    private $etat;

    public function __construct($id, $matricule, $etat) {
        $this->id = $id;
        $this->matricule = $matricule;
        $this->etat = $etat;
    }

    public abstract function calculerSalaire();

    public function getId() {
        return $this->id;
    }

    public function getMatricule() {
        return $this->matricule;
    }

    public function getEtat() {
        return $this->etat;
    }

}
