<?php

class Chevalier extends Personnage implements Hero{
     
    public function coupspecial(Monstre $m){
        $m->setSante($m->getSante()-5);
    }
     function regenerer(){
        $this->sante=$this->sante+5;
     }

    

}