<?php
class Conge {
    public function enregistrerConge(Employe $employe, $periode) {
        echo "Congé enregistré pour l'employé {$employe->getMatricule()} pour la période $periode";
    }
}
