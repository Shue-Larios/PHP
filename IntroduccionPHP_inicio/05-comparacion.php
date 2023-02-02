<?php include 'includes/header.php';

//Algunos comparadores en PHP

$numero1 = 20;
$numero2 = 30;
$numero3 = 30;
$numero4 = "30";

var_dump($numero1 > $numero2); // el numero 1 es mayor al 2
echo "<br>";

var_dump($numero1 < $numero2); // el numero 1 es menor al 2
echo "<br>";

var_dump($numero1 >= $numero2); //el numero 1 es mayor o igual al 2
echo "<br>";

var_dump($numero1 <= $numero2);// el numero 1 es menor o igual al 2
echo "<br>";

var_dump($numero2 == $numero3);// el numero 2 es igual al numero 3
echo "<br>";
var_dump($numero3 === $numero4);// el numero 3 es igual al numero 4 y revisa por el valor y el tipo de dato

echo "<br>";
var_dump($numero1 <=> $numero2); // si el de la izquierda es menor al de la derecha nos regresa un -1  
echo "<br>";
var_dump($numero2 <=> $numero3); //un cero si es igual
echo "<br>";
var_dump($numero2 <=> $numero1); //y un 1 si es mayor
include 'includes/footer.php';