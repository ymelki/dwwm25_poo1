<?php

abstract class Personnage {
    private $Sante=100;

    abstract function regenerer();
    
    /**
     * Get the value of Sante
     */ 
    public function getSante()
    {
        return $this->Sante;
    }

    /**
     * Set the value of Sante
     *
     * @return  self
     */ 
    public function setSante($Sante)
    {
        $this->Sante = $Sante;

        return $this;
    }

}

?>
