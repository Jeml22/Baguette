<?php
include("conexion.php");
$conectar =conectar();
$codigos=$_POST["codigos"];
$res=$conectar->query("SELECT * FROM clientes WHERE codigos=('$codigos');")or die($conectar->errno);
if(mysqli_num_rows($res) > 0){
    echo "<script>alert('codigo correcto'); window.location.href='/baguette/cambiarContraseña.html'</script>";
}
else{
    echo "<script>alert('codigo incorrecto'); window.location.href='/baguette/php/verificar.php'</script>";
};
?>