<?php
require './Personnage.php';
require './Monstre.php';
require './Hero.php';
require './Lutin.php';
require './Ogre.php';
require './Chevalier.php';
require './Princesse.php';


class App {

    public static function run(){

        
        
        $c=new Chevalier();

        $o=new Ogre();
        var_dump($o);
        $c->coupspecial($o);
        var_dump($o);

        $o->rugir($c);
        var_dump($c);

    }
}