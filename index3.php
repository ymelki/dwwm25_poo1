<?php

require "employee.php";
require "patron.php";

$e=new Employee("Yoel","Melki",34);


// 1 probleme : on remarque que le contructeur n'est pas complet
// 2 probleme 
$p=new Patron("Axel","Doe",42,"opel");

echo $p->prenom; // protected ne peut pas . Si c'était en public il aurait pu
$p->rouler();