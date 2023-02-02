<?php include 'includes/header.php';

$nombreCliente = "Rene Larios";

echo strlen($nombreCliente); //strlen permite conocer la extension del string cuenta los espacios en blanco
var_dump($nombreCliente); // tambien nos dice la extension de una variable


// Eliminar el espacio en blancos
$texto = trim($nombreCliente);
echo $texto;

//Convertirlo a mayusculas      
echo strtoupper($nombreCliente);

// convertirlo a minusculas
echo strtolower($nombreCliente);

// esto es bueno hacerlo por las personas que ingresan su correo en mayusculas
$email1 = "correo@correo.com";
$email2 = "Correo@correo.com";

var_dump(strtolower($email1) === strtolower($email2));

// para reemplazer una letra
echo str_replace('Rene', 'Shue', $nombreCliente);

//revisar si un string existe o no
// si existe muestra la posicion sino no imprime nada
echo strpos($nombreCliente, 'Larios');

//Concatenar un string con una variable agregar el .
echo "<br>";
$tipoCliente = "Premium";
echo "El cliente: " . $nombreCliente . " Es " . $tipoCliente;

// otra forma de concatenar
// Solo  funciona con comillas dobles
echo "<br>";
echo "nombre: $nombreCliente es  $tipoCliente ";

include 'includes/footer.php';