<?php
require_once('animal.php');
require_once('Frog.php');
require_once('Ape.php');

$sheep = new Animal('shaun');
echo "Name : " . $sheep->name . "<br>";
echo "legs : " . $sheep->legs . "<br>";
echo "cold-blooded : " . $sheep->cold_blooded . "<br><br>";

$frog  = new Frog('buduk');
echo "Name : " . $frog ->name . "<br>";
echo "legs : " . $frog ->legs . "<br>";
echo "cold-blooded : " . $frog ->cold_blooded . "<br>";
echo $frog->jump() . "<br><br>";

$sungokong  = new Ape('kera sakti');
echo "Name : " . $sungokong ->name . "<br>";
echo "Legs : " . $sungokong ->legs . "<br>";
echo "cold-blooded : " . $sungokong ->cold_blooded . "<br>";
echo $sungokong ->yell() . "<br>";
?>