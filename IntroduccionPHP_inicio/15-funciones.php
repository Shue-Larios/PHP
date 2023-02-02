<?php 
declare(strict_types=1); // nos ayuda a encontrar errores por tipos de datos ingresados
include 'includes/header.php';

// Funciones en PHP 
// estos $numero1, $numero2 son parametros
// int esn el tipo de dato que es entero 
// = 0 es el valor por default que le asignamos
function sumar (int $numero1 = 0, int $numero2 = 0){
    echo $numero1+ $numero2;

}
// 10 y 20 son argumentos 
sumar (10, 20); // asi se manda a llamar la funcion en PHP

// parametros nombrados
sumar (numero2: 10, numero1: 20); // asi se manda a llamar la funcion en PHP


include 'includes/footer.php';