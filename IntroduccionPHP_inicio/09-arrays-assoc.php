<?php include 'includes/header.php';
// Arreglos asociativos o Associative arrays
$cliente = [
    'nombre' => 'Juan',
    'saldo' => '200',
    'informacion' => [
     'tipo' =>  'Premium',
     'disponible' =>  'No disponible',

    ]
    ];

// para agregar otra linea al arreglo
// si esta nombrada igual a una anterior la sobreescribe sino agrega una nueva
$cliente['codigo'] = 54541534613;


echo "<pre>";
var_dump($cliente); // para acceder a un campo especifico del array
echo "</pre>";

echo "<br>";
echo $cliente["saldo"];

// para acceder al campo de un array q esta dentro de otro
echo "<br>";


// strtoupper pone todo el texto en mayusculas
echo strtoupper($cliente[ "informacion"]["tipo"]);
echo "<br>";


// strtolower pone todo el texto en minusculas
echo strtolower ($cliente[ "informacion"]["disponible"]);





include 'includes/footer.php';