<?php

Interface Hero {
    public function coupspecial(Monstre $m); // baisser la santé du monstre
    public function getSante();
    public function setSante($Sante);
    
}

?>