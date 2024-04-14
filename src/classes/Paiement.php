<?php
class Paiement {
    public function virerSalaire(Employe $employe, $montant, $modePaiement) {
        switch ($modePaiement) {
            case 'Virement bancaire':
                ModePaiement::payerParVirementBancaire($montant, $employe);
                break;
            case 'OM':
                ModePaiement::payerParOM($montant, $employe);
                break;
            case 'Wave':
                ModePaiement::payerParWave($montant, $employe);
                break;
            default:
                throw new Exception("Mode de paiement non pris en charge");
        }
    }
}
