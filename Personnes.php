<?php
class Personnes {

    // propriété
    private $nom; // Nom et prenom soient des chaines de caractere < 10 c.
    private $prenom;
    private $age;



    public function __construct($nom,$prenom,$age)
    { 
        $this->setNom($nom);
        $this->setPrenom($prenom);
        $this->setAge($age);
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

    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of prenom
     */ 
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set the value of prenom
     *
     * @return  self
     */ 
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }
}

?>