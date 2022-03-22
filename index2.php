<?php

require "Personnes.php";
$p1=new Personnes("Yoel","Melki",34);


/**
 * 
 * Age => Bonjour
 * 
 */
$p1->setAge(25);
// solution de Houda : Déclarer la variable en int
// solution de POO : 
/**
 * Declarer ma variable age en privée 
 * Ensuite creez des méthode (fonctions) getter & setter
 */

 echo $p1->getAge();

require "Homme.php";
$h=new homme("John","Axel",33);
$h->afficher();
$h->marche();
var_dump($h);

