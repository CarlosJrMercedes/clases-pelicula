<?php
require "movie.php";

class JhonWick extends Movie
{
    private $name;
    private $time;
    private $protagonist;

function getName($n){
    $this->name =$n;
    return $this->name;
}

function getTime($t){
    $this->time = $t;
    return $this->time;
}

function getProtagonist($p){
    $this->protagonist = $p;
    return $this->protagonist;
}

}

$jhonWick = new JhonWick;
$categoryMovie =$jhonWick->assignCategory();
$lenguageMovie =$jhonWick->assignLenguage();
$premiereMovie =$jhonWick->assignPremiere();
$countreMovie =$jhonWick->assignCountry();
$producerMovie =$jhonWick->assignProducer();
$nombreMovie = $jhonWick->getName("Jhon Wick");
$time = $jhonWick->getTime("136 minutos");
$protagonistMovie = $jhonWick->getProtagonist("Keanu Charles Reeves");

echo "<br>";
echo "<b>Name : </b> ".$nombreMovie."  <b>Category :</b> ".$categoryMovie;
echo "<br>";
echo "<b>Time : </b> ".$time."  <b>Protagonist :</b> ".$protagonistMovie;
echo "<br>";
echo "<b>Lenguage : </b> ".$lenguageMovie."  <b>Premiere :</b> ".$premiereMovie;
echo "<br>";
echo "<b>Country : </b> ".$countreMovie."  <b>Premiere :</b> ".$producerMovie;


?>