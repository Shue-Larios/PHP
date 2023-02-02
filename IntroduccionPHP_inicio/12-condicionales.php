<?php include 'includes/header.php';

// Condicionales en PHP


// con este || va evaluar  y con una que sea verdadera va a pasar por if sino a else
// con && va evaluar  y todas tienen que ser verdadera va a pasar if sino a else

$autenticado = true;
$admin = false;

if ($autenticado && $admin) {
    
echo "Usuario autenticado correctamente";
}else{
    echo "Usuario sin autenticarse";
}



// if anidado...
$cliente = [
"nombre" => "Rene",
"saldo" => 200,
"informacion" => [
    "tipo" => "premium"
]
];
if (!empty($cliente)) {
    echo "<br>";
    echo "el Arreglo no esta vacio";

    if ($cliente["saldo"]>0){
        echo "<br>";
        echo "si hay dinero disponible";
   
    } else {
    echo "<br>";
        echo "No hay dinero disponible";
    }
} 

echo "<br>";

// else if
if ($cliente["saldo"]>0){
    echo "El cliente tiene saldo";
} else if ($cliente["informacion"]["tipo"] === "premium") {
    echo "El cliente es premuim";
}else{
echo "No hay cliente";
}

echo "<br>";

// switch 
$tecnologia = "JavaScript";
switch ($tecnologia) {
    case "PHP":
        echo "PHP, un excelente lenguaje";
        break;// esto es obligatorio tenerlo junto con el default
    case "JavaScript":
        echo "el lenguaje de la web";
        break;
    case "HTML":
    echo "emmmm....";
        break;
default:
        echo "Algun lenguaje que no se cual es";
        break;
}

include 'includes/footer.php';