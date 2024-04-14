<?php
class Contractuel extends Employe {
    private $salaireBrut;
    private $prime;
    private $retenue;
    private $service;

    public function __construct($id, $matricule, $etat, $salaireBrut, $prime, $retenue, $service) {
        parent::__construct($id, $matricule, $etat);
        $this->salaireBrut = $salaireBrut;
        $this->prime = $prime;
        $this->retenue = $retenue;
        $this->service = $service;
    }

    public function calculerSalaire() {
        return $this->salaireBrut + $this->prime - $this->retenue;
    }
}
