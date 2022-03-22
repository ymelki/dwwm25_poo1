<?php

class Feu_route {
    public $couleur;

    public function __construct($couleur)   {
        $this->couleur=$couleur;
    }

    function change(){
        if ($this->couleur=="rouge") $this->couleur="vert";
        else if ($this->couleur=="vert") $this->couleur="orange";
        else if ($this->couleur=="orange") $this->couleur="rouge";
        echo "<br />".$this->couleur;
    }
}