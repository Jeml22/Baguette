<?php
include("conexion.php");
session_start();
$conectar =conectar();
$user=$_SESSION['numb'];

$numero=$_POST["numero"];
$titular=$_POST["titular"];
$opcion1 = isset($_POST['opcion1']) ? 1 : 0;
$opcion2 = isset($_POST['opcion2']) ? 1 : 0;
$fechaVence=$_POST["fvence"];
$pin=$_POST["pin"];
$sente="UPDATE clientes SET numeroTarjeta=($numero),titularTarjeta=($titular),tarjetaDebito1=($opcion1),tarjetaCredito2=($opcion2),fechaVencimiento=($fechaVence),pinTarjeta=($pin) WHERE ndocu=('$user')";
$verificando=mysqli_query($conectar,"SELECT * FROM clientes WHERE numeroTarjeta='$numero' and titularTarjeta='$titular'");
if(mysqli_num_rows($verificando) > 0){
    echo"
    <script>alert('Esta Tarjeta ya esta registrada'); window.location.href='iniciado.php'</script>";
    exit;
}else{
    $sql=mysqli_query($conectar,$sente);
    echo"<script>alert('Cambio Guardado'); window.location.href='iniciado.php'</script>";
}
?>