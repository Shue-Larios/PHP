<?php include 'includes/header.php';
// empty revisa si un arreglo no esta vacio

$clientes = [];
$clientes2 = array();
$clientes3 = array("Rene", "Shue", "Larios");
$clientes4 = [
    "nombre" => "Rene",
];

var_dump(empty($clientes)); // devuelve un true diciendo q si esta vacio
var_dump(empty($clientes2)); // devuelve un true diciendo q si esta vacio
var_dump(empty($clientes3)); // devuelve un false diciendo q no esta vacio


// isset va a revisar si una propiedad o un arreglo ha sido creado o esta definido 
echo "<br>";
var_dump(isset($clientes4)); // devuelve un false xk no esta definido
var_dump(isset($clientes)); // devuelve un tru xk si esta definido
echo "<br>";
var_dump(isset($clientes4["nombre"])); // para ver si la propiedad existe dentro del arreglo


include 'includes/footer.php';