<?php

require_once __DIR__ . '/../vendor/autoload.php';






// Créer un service
$serviceRH = new Service(1, 'SVC001', 'Service RH');

// Créer un employé contractuel
$employeContractuel = new Contractuel(1, 'EMP001', 'Actif', 2000, 200, 100, $serviceRH);

// Créer un employé journalier
$employeJournalier = new Journalier(2, 'EMP002', 'Actif', 50, 20);

// Créer un employé prestataire
$employePrestataire = new Prestataire(3, 'EMP003', 'Actif', '2024-04-01 - 2024-04-30', 5000);

// Gérer le paiement du salaire
$paiement = new Paiement();
$paiement->virerSalaire($employeContractuel, $employeContractuel->calculerSalaire(), 'Virement bancaire');

// Gérer l'enregistrement d'un congé
$conge = new Conge();
$conge->enregistrerConge($employeJournalier, '2024-04-15 - 2024-04-20');
