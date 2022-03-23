<?php

class Patron extends Employee {

    private $voiture;

    public function __construct($nom,$prenom,$age,$voiture)    {
        parent::__construct($nom,$prenom,$age);
        // $this->nom=$nom;
        // $this->prenom=$prenom;
        // if ($this->age>0 && $this->age<120) $this->age=$age;
        $this->voiture=$voiture;
    }

    public function rouler(){
        echo "je roule c'est pas mal !  et je m'appelle ".$this->nom;
        // je ne peux pas faire this->nom si il reste en private. Seul la classe employee peut.
    }
}