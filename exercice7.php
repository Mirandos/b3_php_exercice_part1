<?php 
/*
 * ÉNONCÉ:
 * Créez une classe BankAccount avec la propriété balance (solde). 
 * Ajoutez des méthodes deposit($amount) pour déposer de l’argent et withdraw($amount) 
 * pour retirer de l’argent (si le solde est suffisant). 
 * Affichez un message lors de chaque opération.
 * En dessous de la classe, créer un objet et appeler les méthodes
*/

class BankAccount {
    public function __construct(
        private float $balance
    ) {}

    public function deposit($amount) {
        if ($amount > 0) {
            $this->balance += $amount;
            echo "Dépôt  $amount € effectué. Nouveau solde: " . $this->balance . " €.<br>";
        } else {
            echo "Le montant du dépôt doit être positif.";
        }
    }

    
    public function withdraw($amount) {
        if ($amount > 0 && $amount <= $this->balance) {
            $this->balance -= $amount;
            echo "Retrait de $amount € effectué. Nouveau solde: " . $this->balance . " €.<br>";
        } elseif ($amount > $this->balance) {
            echo "Fonds insuffisants pour retirer $amount €.<br>";
        } else {
            echo "Le montant du retrait doit être positif.<br>";
        }
    }
}


$account = new BankAccount(1000);  

$account->deposit(500); 
$account->withdraw(200); 
$account->withdraw(1500); 