<?php include 'includes/header.php';

//Json en PHP 

$productos = [
    [
        "nombre" => "Tablet",
    "precio" => 200,
    "disponible" => true
    ],
    [
        "nombre" => "Televisión",
    "precio" => 300,
    "disponible" => true
    ],
    [
        "nombre" => "Monitor",
    "precio" => 400,
    "disponible" => false
    ]    
    ];

echo "<pre>";
var_dump($productos);


//convertimos el arreglo que esta en php a Json ( json_encode() es una funcion ya definida )
// json_encode va a convertir un arreglo a un string
// json_decode va a convertir de string a arreglo
// JSON_UNESCAPED_UNICODE para que muestre los acentos con el string
$json = json_encode($productos, JSON_UNESCAPED_UNICODE);
var_dump($json);
echo "</pre>";

$json_array = json_decode($json);
echo "<pre>"; // saltos de linea cada que imprima una
var_dump($json_array);
echo "</pre>";


include 'includes/footer.php';