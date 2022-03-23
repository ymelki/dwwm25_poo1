<?php
require './Personne.php';
require "./Aemployee.php";
require "./Ingenieur.php";
require "./Grh.php";
$p=new Personne("Yoel","Melki",34);
$Ingenieur=new Ingenieur();
$grh=new grh();
$grh->setEmployee($Ingenieur);
?>