<?php
$usuario = $_POST ["usuario"];
$contrasenia = $_POST ["pass"];

$ckusuario= "admin";
$ckpass= 1234;

if ($usuario==$ckusuario && $contrasenia==$ckpass) {
 echo "Correcto";
} else {
    echo "incorrecto";
}

?>