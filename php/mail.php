<?php
include("conexion.php");
$conectar =conectar();
$correo=$_POST["correo"];
// // mensaje
// $mensaje = '
// <html>
// <head>
//   <title>codigo de verificacion</title>
// </head>
// <body>
//   <p>¡Este es tu codigo de verificacion!</p>
//   <h2>'.$codigo.'</h2>
// </body>
// </html>
// ';
$verificar=mysqli_query($conectar,"SELECT * FROM clientes WHERE correo='$correo' ");
date_default_timezone_set('America/Bogota');
$tiempo_limite = date('Y-m-d H:i:s', strtotime('-1 minutes'));

if(mysqli_num_rows($verificar) < 1){
  echo"<script>alert('Este correo no esta registrado'); window.location.href='/baguette/olvideContraseña.html'</script>";
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Generar un código de verificación aleatorio
  $codigo_verificacion = rand(100000, 999999);

  // Obtener la dirección de correo electrónico proporcionada por el usuario
  $correo=$_POST["correo"];

  // Configurar el correo
  $to = $correo;
  $subject = "Código de verificación";
  $message = "Su código de verificación es: " . $codigo_verificacion ."\nEste codigo solo funcionara por los proximos 5 minutos";
  $headers = "From:labaguettedufour@gmail.com" . "\r\n" .
             "Reply-To:labaguettedufour@gmail.com" . "\r\n" .
             "x-Mailer: PHP/" . phpversion();

  // Enviar el correo
  if (@mail($to, $subject, $message, $headers)) {
      //$conectar->query("INSERT INTO clientes (codigos) VALUES('$codigo_verificacion')")or die($conectar->errno);
      $conectar->query("UPDATE clientes SET codigos =('$codigo_verificacion') WHERE correo =('$correo');")or die($conectar->errno);
      sleep(300);
      try {
          $conectar->query("UPDATE clientes SET codigos = NULL WHERE codigos = ('$codigo_verificacion')") or die($conectar->error);
         
      } catch (Exception $e) {
          echo "Error: " . $e->getMessage();
      }
    echo"<script>alert('Ha sido enviado un correo con el codigo de verificacion exitosamente a $correo'); window.location.href='./verificar.php'</script>";
  } else {
    echo"<script>alert('Ha habido un error al enviar el correo'); window.location.href='/baguette/olvideContraseña.html'</script>";
  }
}
?>