<?php
/**
 * ÉNONCÉ :
 * Importer le fichier de l'exercice2 pour avoir accès à la classe Person
 * Écrivez une classe nommée Employee qui hérite de la classe Person
 * et ajoute les propriétés salary et position.
 * Surchager le constructeur et appeler le constructeur parent
 * Surcharger la méthode afficheInfos() pour afficher le salaire et le poste
 * En dessous la classe instancier un objet et afficher les infos
 */
require_once 'exercice2.php';

class Employee extends Person{
    public function __construct(
        private float $salary,
        private string $position,
        string $first_name,
        string $last_name,
        int $age
    ){parent::__construct($first_name,$last_name,$age);}

    public function afficheInfos(){
        return parent::afficheInfos().", j'ai un poste en tant que {$this->position} avec un salaire de {$this->salary}";
    }
}

$employe = new Employee(1500,"développeur","Michel","Miranda",21);
echo "<br><br>";
echo $employe->afficheInfos();
