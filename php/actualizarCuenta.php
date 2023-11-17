<?php
include("conexion.php");
session_start();
$conectar =conectar();
$user=$_SESSION['numb'];

$fnaci= $_POST["fnaci"];
$direccion= $_POST["direccion"];
$correo= $_POST["correo"];
$numcont= $_POST["numcont"];
$numero= $_POST["numeroTarjeta"];
$titular= $_POST["titularTarjeta"];
$opcion1 = isset( $_POST['opcion1']) ? 1 : 0;
$opcion2 = isset( $_POST['opcion2']) ? 1 : 0;
$fechaVencimiento= $_POST["fechaVencimiento"];
$Banco= $_POST["Banco"];
$Cuenta= $_POST["Cuenta"];
$Electronico= $_POST["correoElectronico"];

$sentencias = "UPDATE clientes SET 
  fnaci = '$fnaci',
  correo = '$correo',
  direccion = '$direccion',
  numcont = '$numcont',
  numeroTarjeta = '$numero',
  titularTarjeta = '$titular',
  fechaVencimiento = '$fechaVencimiento',
  correoElectronico = '$Electronico',
  Cuenta = '$Cuenta',
  Banco = '$Banco',
  cuentaAhorros = '$opcion1',
  cuentaCorriente = '$opcion2'
  WHERE ndocu = '$user'";


if($sentencias == true){
    $sentencias= mysqli_query($conectar,$sentencias);
    echo"<script>alert('Cambios guardados exitosamente'); window.location.href='usuario.php'</script>";
    exit;
}else{
    echo"<script>alert('Error al subir los cambios'); window.location.href='actualizar.php'</script>";
}

?>