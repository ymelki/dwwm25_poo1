<?php
class Employee {

    // propriété
    private $nom;
    protected $prenom;
    private $age;

    public function __construct($nom,$prenom,int $age)
    { 
        $this->nom=$nom;
        $this->prenom=$prenom;
        if ($this->age>0 && $this->age<120) $this->age=$age;
    }
    
    //Méthode (fonctions qui vont appartenir a ma classe)
    function afficher(){
        echo "je m'appelle  ".$this->nom." ".$this->prenom." et j'ai ".$this->age;
    }

    function travaille(){
        echo "je travaille";
    }
}

?>