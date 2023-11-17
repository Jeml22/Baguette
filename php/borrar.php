<?php
include("conexion.php");
$conectar =conectar();
session_start();
$user=isset($_SESSION['numb']);
$sql = "DELETE FROM clientes WHERE ndocu=('$user')";

if ($conectar->query($sql) == TRUE) {

    echo"<script>alert('Se borro corectamente'); window.location.href='iniciado.php'</script>";
} else {
    echo "Error al borrar el usuario: " . $conectar->error;

}


$conectar->close();


?>