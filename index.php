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
$p1=new Personne("Melki","Yoel",34);
$p1->afficher();

echo "<br />";
$p2=new Personne("Axel","Doe",35); 
$p2->afficher();

?>
