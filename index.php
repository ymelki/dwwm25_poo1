<?php
// Personne 1
$nom1="Melki";
$prenom1="Yoel";
$age1=34;

// Personne 2
$nom2="Axel";
$prenom2="Doe";
$age2=35;

function afficher($nom,$prenom,$age){
    echo "je m'appelle  ".$nom." ".$prenom." et j'ai ".$age;
}
//afficher($nom1,$prenom1,$age1);

//afficher($nom2,$prenom2,$age2);
require "Personne.php";
$p1=new Personne("Melki","Yoel",34); // lance la methode constructeur
$p1->afficher();

echo "<br />";
$p2=new Personne("Axel","Doe",35); // lance la methode constructeur
$p2->afficher();


echo "<br />";
require "Feu_route.php";

$f1=new Feu_route("rouge");
var_dump($f1);
$f1->change();
$f1->change();
$f1->change();
$f1->change();
$f1->change();

require "vehicule.php";
$v1=new Vehicule("bleu","Audi",0);
$v1->anticiper(new Feu_route("vert"));
$v1->anticiper(new Feu_route("vert"));
$v1->anticiper(new Feu_route("orange"));
$v1->anticiper(new Feu_route("rouge"));


?>
