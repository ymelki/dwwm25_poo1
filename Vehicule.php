<?php

class Vehicule {

    public $couleur;
    public $marque;
    public $vitesse;

    function to_string(){
        echo "la voiture est ".$this->couleur." ".$this->marque." ".$this->vitesse;
    }

    function __construct($couleur,$marque, $vitesse)
    {
        $this->couleur=$couleur;
        $this->marque=$marque;
        $this->vitesse=$vitesse;

        $this->to_string();
        
    }

    function accellerer(){
        $this->vitesse=$this->vitesse+rand(1,10);
        $this->to_string();
    }

    function ralentir(){
        $this->vitesse=$this->vitesse-rand(1,10);
        $this->to_string();
    }
    function anticiper(Feu_route $f){
        if ($f->couleur=="rouge") $this->ralentir();
        else if ($f->couleur=="orange") $this->ralentir();
        else if ($f->couleur=="vert") $this->accellerer();
    }
}