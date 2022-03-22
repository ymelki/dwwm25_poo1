<?php

require "Personnes.php";
$p1=new Personnes();


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



