<?php
class Journalier extends Employe {
    private $coutJournalier;
    private $nombreJourTravailler;

    public function __construct($id, $matricule, $etat, $coutJournalier, $nombreJourTravailler) {
        parent::__construct($id, $matricule, $etat);
        $this->coutJournalier = $coutJournalier;
        $this->nombreJourTravailler = $nombreJourTravailler;
    }

    public function calculerSalaire() {
        return $this->coutJournalier * $this->nombreJourTravailler;
    }
}
