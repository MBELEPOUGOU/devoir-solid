<?php
class ModePaiement {
    public static function payerParVirementBancaire($montant, $employe) {
   
        echo "Paiement de $montant € effectué à l'employé {$employe->getMatricule()} par virement bancaire";
    }

    public static function payerParOM($montant, $employe) {
        echo "Paiement de $montant € effectué à l'employé {$employe->getMatricule()} via OM";
    }

    public static function payerParWave($montant, $employe) {
        echo "Paiement de $montant € effectué à l'employé {$employe->getMatricule()} via Wave";
    }
}
