<?php
include("conexion.php");
$conectar=conectar();
$contraseña=$_POST["contraseña"];
$ndocu=$_POST["ndocu"];
$verificar=mysqli_query($conectar,"SELECT * FROM clientes WHERE ndocu='$ndocu'");
$hora_actual = date("H:i:s");
$hora_de_cambio = date("h:i:s a", strtotime("-7 hours", strtotime($hora_actual)));
$fecha_de_cambio = date("Y-m-d");
if (empty($contraseña)) {
    echo "<script>alert('Por favor, ingresa una nueva contraseña.'); window.location.href='/baguette/cambiarContraseña.html'</script>";
} if(mysqli_num_rows($verificar) < 1) {
    // Actualizar la contraseña en la base de datos para el usuario específico (asumiendo que tienes una variable $userId con el ID del usuario)

      echo"<script>alert('Este numero de documento no esta registrado'); window.location.href='/baguette/cambiarContraseña.html'</script>";
        exit;
}if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $contraseña=$_POST["contraseña"];
    $confirmarContraseña = $_POST["confirmarContraseña"];

    if ($contraseña === $confirmarContraseña) {
        // Las contraseñas coinciden, puedes realizar aquí la lógica para cambiar la contraseña en la base de datos.
        // Por ejemplo, puedes utilizar la función password_hash() para obtener el hash de la nueva contraseña y luego almacenarla en la base de datos.
        // Aquí un ejemplo de cómo hacerlo:
        $hashedPassword = password_hash($contraseña, PASSWORD_DEFAULT);
$sql=("UPDATE clientes SET contra='$contraseña', fechaContra='$fecha_de_cambio', horaContra ='$hora_de_cambio' WHERE ndocu= '$ndocu'");
$actualizar= mysqli_query($conectar,$sql) or die ("NO SE LOGRA INSERTAR".mysqli_error($conectar));
        echo"<script>alert('contraseña cambiada exitosamente'); window.location.href='/baguette/Index.html'</script>";
        // Luego, puedes guardar $hashedPassword en la base de datos para el usuario correspondiente.
    } else {
        echo"<script>alert('las contraseñas no coinciden'); window.location.href='/baguette/cambiarContraseña.html'</script>";
    }
}
