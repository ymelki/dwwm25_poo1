<?php
require "emp.php";
require "Commercial.php";
require "Secretaire.php";
require "Ingenieur.php";
require "Patron.php";
require "grh.php";

$c=new Commercial();
$s=new Secretaire();
$i=new Ingenieur();
$patron1=new Patron("Yoel","Melki",34,"Audi");
$grh=new Grh();
$grh->setEmployee($c);
$grh->setEmployee($s);
$grh->setEmployee($i);
$grh->setEmployee($i);
var_dump($grh);
?>
