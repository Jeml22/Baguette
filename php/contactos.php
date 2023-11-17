<?php
include("conexion.php");
$conectar =conectar();
$name=$_POST["nombre"];
$apellido=$_POST["apellido"];
$correo=$_POST["correo"];
$mensaje=$_POST["mensaje"];


try{
    $sentencia = "INSERT INTO contactos (nombre,apellido,correo,mensaje) VALUES ('".$name."','".$apellido."','".$correo."','".$mensaje."')";
    mysqli_query($conectar,$sentencia) or die ("NO SE LOGRA INSERTAR LOS DATOS".mysqli_error($conectar));
    $sql= mysqli_query($conectar,$sentencia);
    echo "<script>alert('Envio de mensaje exitoso'); window.location.href='/baguette/Index.html'</script>";
    }
    catch(PDOException $e){
        echo "Error al insertar el registro:";
        
    }  

?>
