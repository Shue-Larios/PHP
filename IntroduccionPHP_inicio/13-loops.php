<?php include 'includes/header.php';

// for loops en PHP

//While se va a ejuctar hasta que una condicion sea evaluada como falsa
$i = 0; // este es el incializador

while ($i < 10){
    echo $i . "<br>";

    $i++; // incremento de 1 en 1
}

echo "<br>";
// Do While
//  se va a ejuctar hasta que una condicion sea evaluada como falsa
// con la diferencia que primero ejecuta el codigo y despues lo evalua 

$i = 0; // valor inicial
do {
    echo $i . "<br>";
 $i++; // en la parte dl DO vamos a poner el aumento 
} while($i < 10);  // Condicion ciclo termina mientras esto sea verdadero

echo "<br>";

// For Loop
 // $i = 0;es el inicio de la variable y el ciclo terminara hasta que se cumpla $i < 10
 // $i++ incrementa en 1 en 1
 for ($i = 0; $i < 10; $i++ ){ 
    echo $i . "<br>";
    }
    echo "<br>";
    // ejercicio Fizz con for
    /**
     * multiplos de 3 imprimir Fizz
     * multiplos de 5 imprimir Buzz
     * multiplos de 3 y 5 imprimir Fizz Buzz
     */
    for ($i = 1; $i < 1000; $i++ ){
        if($i % 15 === 0){
            echo $i . "--  Fizz  Buzz <br/>";
        }else if ($i % 3 === 0){
            echo $i . "-- Fizz <br/>";
        } else if ($i % 5 === 0){
            echo $i . "-- Buzz <br/>";
        } else{
            echo $i. "<br>";
        }
    }



include 'includes/footer.php';