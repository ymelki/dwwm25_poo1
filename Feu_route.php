<?php

class Feu_route {
    public $couleur;

    public function __construct()   {
        $this->couleur="rouge";
    }
    
    function change(){
        if ($this->couleur=="rouge") $couleur="vert";
        if ($this->couleur=="vert") $couleur="orange";
        if ($this->couleur=="orange") $couleur="rouge";
    }
}