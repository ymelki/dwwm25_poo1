<?php

class Lutin  extends Personnage implements Monstre{
 
    
    public function rugir(Hero $h){
        $h->setSante($h->getSante()-5);
    }
    function regenerer(){
        $this->sante=$this->sante+3;
     }
}