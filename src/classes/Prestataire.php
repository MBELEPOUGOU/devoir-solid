<?php
class Prestataire extends Employe {
    private $periodeService;
    private $coutService;

    public function __construct($id, $matricule, $etat, $periodeService, $coutService) {
        parent::__construct($id, $matricule, $etat);
        $this->periodeService = $periodeService;
        $this->coutService = $coutService;
    }

    public function calculerSalaire() {
   
    }
}
