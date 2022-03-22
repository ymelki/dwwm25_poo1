<?php
class Personne {

    // propriété
    public $nom;
    public $prenom;
    public $age;

    public function __construct($nom,$prenom,$age)
    { 
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->age=$age;

    }
    //Méthode (fonctions qui vont appartenir a ma classe)
    function afficher(){
        echo "je m'appelle  ".$this->nom." ".$this->prenom." et j'ai ".$this->age;
    }
}

?>