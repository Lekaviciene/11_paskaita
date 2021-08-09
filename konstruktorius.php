<?php

//Funkcija(metodas), 
//kuri pasileidzia objekto sukurimo metu vadinamas KONSTRUKTORIUS

class Automobilis {
    public $modelis;
        public $marke;
        public $gamybosMetai;
        private $spalva;
        protected $duruSkaicius;

        function __construct($a, $b, $c){
            $this -> modelis = $a;
            $this -> marke = $b;
            $this -> gamybosMetai = $c;
            $this -> spalva = "Raudona";
            $this -> duruSkaicius = 5;
    
        }
}

//Objektas
$automobilis = new Automobilis ("VW", "PASSAT", "2010");
$automobilis1 = new Automobilis ("BMW", "320", "2011");

$automobiliuMasyvas = array ($automobilis, $automobilis1);

var_dump($automobiliuMasyvas);
var_dump($automobilis);
var_dump($automobilis1);


?>
