<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width, initial-scale=1.0">
    <title>11 paskaita</title>
</head>
<body>
    <?php
    // Klases ir objektai
    //Objekta jurem. Nebuvo sablono.
    //PHP objektas turi tureti savo sablona. Jis vadinamas klase.

    //Klase - yra objekto sablonas, pagal kurio duomenis kuriamas objekas.
    //Objektas - tai tam tikrass kintamuju ir metodu,  
    //vidiniu objekto funkciju rinkinys.

    //Kuriame automoblio objekta
    //Kuriame sablona
    class Automobilis {
        //Modeli
        //Marke
        //Gamybos metus
        //zodelis public reiskia kintamojo prieinamuma. 
        //Galime apriboti naudojimosi-matymo teises.
        //Public - reiskia kad kintamasis, arba metodas prieinamas uz objekto ribu.
        //Private - reiskia kad kintamasis, arba metodas gali buti naudojamas
        //tik pacioje klaseje.
        //Protected - kintamasis, arba metodas gali buti pacioje klaseje 
        //ir jos vaikinese klasese.
    

        public $modelis;
        public $marke;
        public $gamybosMetai;
        private $spalva;
        protected $duruSkaicius;

    //Kuriame metodus, arba kitaip vidines funkcijas
    //pagal nutylejima metodai, arba vidines funkcijos yra public

    function nustatome_kintamuosius ($a, $b, $c){
        $this -> modelis = $a;
        $this -> marke = $b;
        $this -> gamybosMetai = $c;
        $this -> spalva = "Raudona";
        $this -> duruSkaicius = 5;

    }
}

//Automobilis dabar yra objektas
$automobilis = new Automobilis ("VW", "PASSAT", "2010");
//Objekta galime issivesti su var_dump komanda
var_dump($automobilis);

$automobilis -> nustatome_kintamuosius("VW", "PASSAT", "2010 m");

//o kaip isivesti tik automobilio modeli?
echo "<br>";
echo $automobilis->modelis;
echo "<br>";
echo $automobilis->marke;
echo "<br>";
echo $automobilis->gamybosMetai;
echo "<br>";
//Su PRIVATE tipu kintamasis neveikia!!!
//echo $automobilis->spalva;//EROR
//echo $automobilis->duruSkaicius;//EROR


//ar galiu padaryti taip?
$naujasKintamasis=$automobilis->modelis;
echo $naujasKintamasis;
var_dump($automobilis);

echo "<br";
$automobilis->modelis="BMV";
echo "<br";
echo $automobilis->modelis;
echo "<br";



var_dump($automobilis);











    ?>
</body>
</html>