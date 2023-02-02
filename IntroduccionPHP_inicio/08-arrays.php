<!-- Arreglos indexados en PHP -->
<?php include 'includes/header.php';

// forma de crear arreglo
$carrito1 = array();
$clientes = array('Cliente 1','Cliente 2','Cliente 3');

// otra forma de crear arreglo
// separando cada uno de los elementos del arreglo por coma
$carrito = ['Tablet', 'Television','Computadora' ]; // esto dice que esta variable va hacer una arreglo


//acceder a un elemento del array
echo $carrito[1];


//Agregar nuevo producto en el indice 3 del arreglo hay que conocer el indice
$carrito[3] = "Nuevo Producto";

//Añadir un elemento nuevo al final del arreglo
array_push($carrito, "Audifonos");

//Añadir elemento al principio del arreglo
array_unshift($carrito, "Smartwatch");



// util para ver los contenidos de un array
echo "<pre>"; // un mejor formato muy util para revisar los resultados 
var_dump($carrito);
echo "</pre>";



include 'includes/footer.php';