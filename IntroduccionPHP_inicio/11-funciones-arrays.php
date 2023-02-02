<?php include 'includes/header.php';

// in_array buscar elementos en un arreglo
$carrito = ['Tablet', 'Television','Computadora' ];

var_dump(in_array("Tablet", $carrito));
var_dump(in_array("Adufinos", $carrito)); // devuelve un false xk no existe


// Ordenar elementos de un arreglo
$numero = array(1,3,2,8,7,9,6,4,5,3,1,4,45);
sort($numero); // me ordena el array de menor a mayor
rsort ($numero); // me ordena el array de mayor a menor


echo "<pre>";
var_dump($numero);
echo "</pre>";

// Ordenar arreglo asociativo
$cliente = array (
    "saldo" => 200,
    "tipo" => "premium",
    'nombre' => "Rene"
);
asort($cliente); //va ordenarlos por los valores primero va a mostrar los numeros luego los valores por orden alfabetico
arsort($cliente); //ordena por valores Z primero
ksort($cliente); // para ordenarlo por las llaves siempre en orden alfabetico
krsort($cliente); // para ordenarlo por las llaves siempre en orden alfabetico de la Z a la A


echo "<br>";
echo "<pre>";
var_dump($cliente);
echo "</pre>";




include 'includes/footer.php';