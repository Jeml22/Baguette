<?php
include("conexion.php");
session_start();
$conectar =conectar();
$user=$_SESSION['numb'];
$correo=$_POST["correo"];
$cuenta=$_POST["cuenta"];
$banco=$_POST["cuenta"];
$opcion1 = isset($_POST['opcion1']) ? 1 : 0;
$opcion2 = isset($_POST['opcion2']) ? 1 : 0;

$sente="UPDATE clientes SET correo=('$correo'),cuenta=('$cuenta'),banco=('$banco'),cuentaAhorros=('$opcion1'),cuentaCorriente=('$opcion2') WHERE ndocu=('$user')";
$verificando=mysqli_query($conectar,"SELECT * FROM clientes WHERE cuenta='$cuenta'");
if(mysqli_num_rows($verificando) > 0){
    echo"
    <script>alert('Esta cuenta ya esta registrada'); window.location.href='iniciado.php'</script>";
    exit;
}else{
    $sql=mysqli_query($conectar,$sente);
    echo"<script>alert('Cuenta Guardada'); window.location.href='iniciado.php'</script>";
}
?>