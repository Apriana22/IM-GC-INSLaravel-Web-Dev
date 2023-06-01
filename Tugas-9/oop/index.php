<?php

require_once 'animal.php';
require_once 'Frog.php';
require_once 'Ape.php';

$sheep = new Animal("shaun");
echo "Name: " . $sheep->name . "\n <br>"; // Name: shaun
echo "Legs: " . $sheep->legs . "\n <br>"; // Legs: 4
echo "Cold Blooded: " . $sheep->cold_blooded . "\n <br>"; // Cold Blooded: no
echo "<br>";

$sungokong = new Ape("kera sakti");
echo "Name: " . $sungokong->name . "\n <br>"; // Name: kera sakti
echo "Legs: " . $sungokong->legs . "\n <br>"; // Legs: 2
echo "Cold Blooded: " . $sungokong->cold_blooded . "\n <br>"; // Cold Blooded: no
echo "Yell: ";
$sungokong->yell(); // "Auooo"
echo "<br>";
echo "<br>";

$kodok = new Frog("buduk");
echo "Name: " . $kodok->name . "\n <br>"; // Name: buduk
echo "Legs: " . $kodok->legs . "\n <br>"; // Legs: 4
echo "Cold Blooded: " . $kodok->cold_blooded . "\n <br>"; // Cold Blooded: no
echo "Jump: ";
$kodok->jump(); // "hop hop"
?>