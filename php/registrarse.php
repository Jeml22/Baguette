<?php
include("conexion.php");
$conectar =conectar();
$tdoc=$_POST["tdoc"];
$ndocu=$_POST["ndocu"];
$nombre=$_POST["nombre"];
$fnaci=$_POST["fnaci"];
$correo=$_POST["correo"];
$direccion=$_POST["direccion"];
$numcont=$_POST["numcont"];
$contra=$_POST["contra"];
$confirmar=$_POST["confirmar"];
$rolUsuario=1;
$fecha_registro = date("Y-m-d H:i:s");
$hora_actual = date("H:i:s");
$hora_registro = date("h:i:s a", strtotime("-7 hours", strtotime($hora_actual)));

function calcularEdad($fnaci) {
    $hoy = new DateTime();
    $fnaci = new DateTime($fnaci);
    $diferencia = $hoy->diff($fnaci);
    return $diferencia->y;
}
//verificar que el correo no se repita en la base de datos
$verificar=mysqli_query($conectar,"SELECT * FROM clientes WHERE correo='$correo'");
if(mysqli_num_rows($verificar) > 0){
    echo"
    <script>alert('Este correo ya esta registrado, intenta otro diferente'); window.location.href='/baguette/registrarse.html'</script>";
    exit;
}
//verificar que el numero de documento que no se repita en la base de datos
$verificar_ndocu=mysqli_query($conectar,"SELECT * FROM clientes WHERE ndocu='$ndocu'");
if(mysqli_num_rows($verificar_ndocu) > 0){
    echo"
    <script>alert('Este numero de documento ya esta registrado, intenta otro diferente'); window.location.href='registrarse.html'</script>";
    exit;
}if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fnaci = $_POST["fnaci"];
    // Calcular la edad del usuario
    $edadUsuario = calcularEdad($fnaci);
    // Edad mínima requerida (18 años)
    $edadMinima = 18;
    $edadMaxima= 100;

if($edadUsuario <= $edadMaxima){
    if ($edadUsuario >= $edadMinima) {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $contra=$_POST["contra"];
            $confirmar = $_POST["confirmar"];
        
            if ($contra === $confirmar) {
                // Las contras coinciden, puedes realizar aquí la lógica para cambiar la contra en la base de datos.
                // Por ejemplo, puedes utilizar la función password_hash() para obtener el hash de la nueva contra y luego almacenarla en la base de datos.
                // Aquí un ejemplo de cómo hacerlo:
                try{
                    $sentencia = "INSERT INTO clientes (tdoc,ndocu,nombre,fnaci,correo,direccion,numcont,contra,role_id,regisFecha,regisHora) VALUES ('".$tdoc."','".$ndocu."','".$nombre."','".$fnaci."','".$correo."','".$direccion."','".$numcont."','".$contra."','.$rolUsuario.','".$fecha_registro."','".$hora_registro."')";
                    // mysqli_query($conectar,$sentencia) or die ("NO SE LOGRA INSERTAR LOS DATOS".mysqli_error($conectar));
                    $sql= mysqli_query($conectar,$sentencia);
                    echo "<script>alert('Registro exitoso'); window.location.href='/baguette/IniciarSesion.html'</script>";
                    }
                    catch(PDOException $e){
                        echo "Error al insertar el registro:";
                    }  
                // Luego, puedes guardar $hashedPassword en la base de datos para el usuario correspondiente.
            } else {
                echo"<script>alert('las contraseñas no coinciden'); window.location.href='/baguette/Registrarse.html'</script>";
            }
        }
    } else {
        // El usuario no tiene la edad suficiente para ingresar
        echo"<script>alert('Lo lamentamos pero no tienes la edad suficiente para ingresar,por favor vuelve a intentarlo mas tarde'); window.location.href='/baguette/Registrarse.html'</script>";
    }
}
}

?>