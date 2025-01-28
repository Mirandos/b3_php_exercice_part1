<?php

/**
 * ÉNONCÉ :
 * Écrivez une classe PHP nommée Person avec des propriétés first_name, last_name et age en protected.
 * Ajouter un conctructeur
 * Ajouter les getters et setters
 * Implémentez une methode afficheInfos() pour afficher les informations de la personne.
 * Créer un nouvel objet et afficher les information
 */
class Person{
    public function __construct(
        private string $first_name,
        private string $last_name,
        private int $age
    ){}

    public function afficheInfos(){
        return "Je m'appelle ".$this->getFirstName()." ". $this->getLastName()." et j'ai ".$this->getAge();
    }

        /**
         * Get the value of first_name
         *
         * @return  string
         */
        public function getFirstName()
        {
                return $this->first_name;
        }

        /**
         * Set the value of first_name
         *
         * @param  string  $first_name
         *
         * @return  self
         */
        public function setFirstName( $first_name)
        {
                $this->first_name = $first_name;

                return $this;
        }

        /**
         * Get the value of last_name
         *
         * @return  string
         */
        public function getLastName()
        {
                return $this->last_name;
        }

        /**
         * Set the value of last_name
         *
         * @param  string  $last_name
         *
         * @return  self
         */
        public function setLastName( $last_name)
        {
                $this->last_name = $last_name;

                return $this;
        }

        /**
         * Get the value of age
         *
         * @return  int
         */
        public function getAge()
        {
                return $this->age;
        }

        /**
         * Set the value of age
         *
         * @param  int  $age
         *
         * @return  self
         */
        public function setAge( $age)
        {
                $this->age = $age;

                return $this;
        }
}

$theo = new Person("Théo","Miranda",21);
echo $theo->afficheInfos();
