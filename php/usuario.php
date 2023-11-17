<?php
session_start();
error_reporting(0);
$varsesion = $_SESSION['role'];
if ($varsesion == NULL || $varsesion == '') {
  header("location: ../IniciarSesion.html");
  // session_destroy();
  die();
}
include("conexion.php");
$conectar =conectar();

$user=$_SESSION['numb'];
$select="SELECT id,tdoc,ndocu,nombre,fnaci,correo,direccion,numcont,numeroTarjeta,titularTarjeta,tarjetaDebito1,tarjetaCredito2,fechaVencimiento,pinTarjeta,correoElectronico,Cuenta,Banco,cuentaAhorros,cuentaCorriente FROM clientes WHERE ndocu='".$user."'";
$resul=$conectar->query($select);
while($data=$resul->fetch_assoc()){
    $id=$data['id'];
    $tdocu=$data['tdoc'];
    $ndocu=$data['ndocu'];
    $nombre=$data['nombre'];
    $fnaci=$data['fnaci'];
    $correo=$data['correo'];
    $direccion=$data['direccion'];
    $numcont=$data['numcont'];
    $numeroTarjeta=$data['numeroTarjeta'];
    $titularTarjeta=$data['titularTarjeta'];
    $tarjetaDebito1=$data['tarjetaDebito1'];
    $tarjetaCredito2=$data['tarjetaCredito2'];
    $fechaVencimiento=$data['fechaVencimiento'];
    $pinTarjeta=$data['pinTarjeta'];
    $correoElectronico=$data['correoElectronico'];
    $Banco=$data['Banco'];
    $Cuenta=$data['Cuenta'];
    $cuentaAhorros=$data['cuentaAhorros'];
    $cuentaCorriente=$data['cuentaCorriente'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/usuario/usuario.css">
    <link rel="stylesheet" href="../assets/css/usuario/EstilosIndex.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

</head>

<body>
    <div class="tds">
        <div class="inte">
            <div class="prin">
                <img class="ima" src="../assets/img/static/Datos de usuario/user.png">
                <i class="fa fa-user"></i>
            </div>
            <div class="bts-imfo">
                <div class="">
                    <form for="btn-modal"><a href="#infopersonal">Información personal</a></form></div>
                <div class="">
                    <form for="btn-modal"><a href="#metodopago">Método de pago</a></form>
                </div>
                <div>
                    <form>
                        <a href="iniciado.php">Volver al inicio</a>
                    </form>
                </div>
                <div><form><a href="CerrarSesion.php"> Cerrar Sesión</a></form></div>
            </div>
        </div>
        <div class="linea">
        </div>
        <div class="imfoper">
            <div>
            <div class="anun">
                <div class="titu">
                    <p>Información Basica</p>
                </div>
                <div class="franu">
                    <div class="container ott">
                        <p>Nombre</p>

                    </div>
                    <div class="container ott">
                        <p>Genero</p>

                    </div>
                    <div class="container ott">
                        <p>Fecha de nacimiento</p>

                    </div>
                </div>
                <div class="frafi">
                    <div>
                        <p><?php echo $nombre?></p>
                    </div>
                    <div>
                        <P>Genero</P>
                    </div>
                    <div>
                        <p><?php echo $fnaci?></p>
                    </div>
                </div>
            </div>
            <div class="anun" id="infopersonal">
                <div class="titu">
                    <p>Información de contacto</p>
                </div>
                <div class="franu">
                    <div class="container ott">
                    <p>Correo</p>
                    </div>
                    <div class="container ott">
                    <p>Telefono</p>
                    </div>
                </div>
                <div class="frafi">
                    <div>
                    <p><?php echo $correo?></p>
                    </div>
                    <div>
                        <p><?php echo $numcont?></p>

                    </div>
                </div>
            </div>
            <div class="anun">
                <div class="titu">
                    <p>direcciones</p>
                </div>
                <div class="franu">
                    <div class="container ott">
                        <p>Casa</p>
                    </div>
                    <div class="container ott">
                        <p>Trabajo</p>
                    </div>
                    <div class="container ott">
                        <p>Otras direcciones</p>
                    </div>    
                </div>
                <div class="frafi">
                    <div>
                        <p><?php echo $direccion?></p>
                    </div>
                    <div>
                        <p>Sin configurar</p>
                    </div>
                    <div>
                        <p>Sin configurar</p>
                    </div>
                </div>
                <a href="actualizar.php"><button id="bot" class="bot">Actualizar datos de la cuenta</button></a>
                <button type="button" onclick="deletes()" id="botos" class="botos">Borrar cuenta</button>
            </div>
            </div>
            <div class="container-modal show" id="metodopago">
                <div class="anun num2">
                    <div class="titu">
                        <p>Pagos con tarjeta de credito o debito</p>
                    </div>
                    <div class="franu2">
                        <div class="container ott">
                            <p>Numero de tarjeta</p>

                        </div>
                        <div class="container ott">
                            <p>MM / AA</p>

                        </div>
                        <div class="container ott">
                            <p>Titular de la targeta</p>

                        </div>
                    </div>
                    <div class="frafi2">
                        <div class="container ott">
                        <p><?php echo $numeroTarjeta?></p>
                        </div>
                        <div class="container ott">
                        <p><?php echo $fechaVencimiento?></p>
                        </div>
                        <div class="container ott">
                        <p><?php echo $titularTarjeta?></p>
                        </div>
                    </div>
                </div>
                <div class="anun ult">
                    <div class="titu">
                        <p>Transferencias bancarias</p>
                    </div>
                    <div class="franu">
                        <div class="container ott">
                            <p>Correo</p>
                        </div>
                        <div class="container ott">
                            <p>Banco</p>
                        </div>
                        <div class="container ott">
                            <p>Tipo de cuenta</p>
                        </div>
                        <div class="container ott">
                            <p>Numero de cuenta</p>
                        </div>

                    </div>
                    <div class="frafi">
                        <div>
                        <p><?php echo $correoElectronico?></p>
                        </div>
                        <div>
                        <p><?php echo $Banco?></p>
                        </div>
                        <div>
                        <p><?php echo $cuentaAhorros,$cuentaCorriente?></p>
                        </div>
                        <div>
                        <p><?php echo $Cuenta?></p>
                        </div>
                    </div>
                </div>
            
        </div>
        </div>
    </div>
    </div>
    <div class="overlay" id="overlays">
        <div class="popup" id="popups">
                <div class="lol">
                    <p>Estas seguro que quieres borrar la cuenta</p>
                </div>
                <div class="sec">
                <a href="borrar.php"><button class="bota">Continuar</button></a>
                    <a href="usuario.php"><button class="bota">Volver</button></a>
                </div>
        </div>
     </div>
</body>
<script src="../assets/js/tipoPago.js"></script>
</html>