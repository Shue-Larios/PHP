<?php 

// types en PHP
declare (strict_types=1);
include 'includes/header.php';
// en ?string le decimos que puede ser un string o null
function usuarioAutenticado (bool $autenticado): ?string{
    if ($autenticado){
        return "El usuario esta autenticado";
    }else {
        return null;
    }
}

$usuario = usuarioAutenticado(true);

echo $usuario;

include 'includes/footer.php';