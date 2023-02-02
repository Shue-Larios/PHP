<?php include 'includes/header.php';

// foreach en PHP

$clientes = array('Pedro', "Juan", "Karen");
// foreach se va a estar ejecutando siempre y cuando haya informacion en el arreglo
foreach ($clientes as $cliente) {
    echo $cliente . "<br>";
}  

// foreach con arreglo asociativo
$cliente = [
    "nombre" => "Juand",
    "saldo" => 200, 
    "tipo" => "premium",
];
// $key se refier a las llaves que serian nombre, saldo, tipo
foreach ($cliente as $key => $valor) {
    echo $key . " - ". $valor . "<br>";
}  
 // foreach con ejemplo como con una base de datos
$productos = [
    [
        "nombre" => "Tablet",
    "precio" => 200,
    "disponible" => true
    ],
    [
        "nombre" => "Television",
    "precio" => 300,
    "disponible" => true
    ],
    [
        "nombre" => "Monitor",
    "precio" => 400,
    "disponible" => false
    ]    
    ];
 // la etiqueta (? >) sirve para cerrar codigo php
 // si nos toca hacer codigo HTML cerrar php y hacerlo para no cargar al servidor con algo que puede hacer el navegador que es lo HTML
    
    foreach ($productos as $producto) { ?> 
       <li>
           <!-- // <?php echo "esto lo utilizamos para imprimir algo que viene desde php" ?>  -->
           <p> Producto: <?php echo $producto["nombre"]; ?> </p>
           <p> Producto: <?php echo "$ " . $producto["precio"]; ?> </p>
           <!-- a esta linea de abajo se le dice operador ternario donde ? es la parte verdadera y : la parte false -->
           <p> <?php echo ($producto["disponible"]) ? "Disponible" : "No disponible" ?> </p>

       </li>
       <?php // aca tenemos que abrirlo a fuerza 
    }  



include 'includes/footer.php';