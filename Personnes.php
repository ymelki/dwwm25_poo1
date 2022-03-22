<?php
class Personnes {

    // propriété
    public $nom;
    public $prenom;
    private $age;



    public function __construct()
    { 

    }
    //Méthode (fonctions qui vont appartenir a ma classe)
    function afficher(){
        echo "je m'appelle  ".$this->nom." ".$this->prenom." et j'ai ".$this->getAge();
    }

    /**
     * Set the value of age
     *
     * @return  self
     */ 
    public function setAge(int $age)
    {
        if ($age>0 && $age<120) $this->age=$age;

        return $this;
    }

    /**
     * Get the value of age
     */ 
    public function getAge()
    {
        return $this->age;
    }
}

?>