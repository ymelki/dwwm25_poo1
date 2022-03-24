<?php

Interface Monstre {
    public function rugir(Hero $h); // baisser la santé du monstre
    public function getSante();
    public function setSante($Sante);
}

?>