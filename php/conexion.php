<?php
function conectar() {

    $servidor = "db4free.net";
    $usuario = "brayanparra";
    $contra = "BryBrayancrack00106.";
    $db = "baguettedb";
    $port = 3306;

    $conexion = mysqli_connect($servidor, $usuario, $contra, $db, $port) or die("no se logro la conexion");
    return $conexion;
}

function desconectar($conexion) {
    mysqli_close($conexion);
}
