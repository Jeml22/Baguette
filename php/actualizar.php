<?php
session_start();
error_reporting(0);
$varsesion = $_SESSION['role'];
if ($varsesion == NULL || $varsesion == '') {
    header("location: ../IniciarSesion.html");
    // session_destroy();
    die();
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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

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
                    <form for="btn-modal"><a href="#infopersonal">Actualizar información personal</a></form>
                </div>
                <div class="">
                    <form for="btn-modal"><a href="#metodopago">Actualizar método de pago</a></form>
                </div>
                <div>
                    <form>
                        <a href="usuario.php">Volver a Datos personales </a>
                    </form>
                </div>
            </div>
        </div>
        <div class="linea">
        </div>
            <div class="imfoper">
            <form action="actualizarCuenta.php" method="post">
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
                        <button onclick="actualizar()" id="bot" class="bot">Guardar cambios </button>
                        <div class="frafi">
                            <div>
                                <p>No se puede editar</p>
                            </div>
                            <div>
                                <P>No se puede editar</P>
                            </div>
                            <div>
                                <p><input type="date" name="fnaci" required></p>
                            </div>
                        </div>
                    </div>
                    <div class="anun" id="infopersonal">
                        <div class="titu">
                            <p>Información de contacto</p>
                        </div>
                        <div class="franu">
                            <div class="container ott">
                                <p>Correo electronico</p>
                            </div>
                            <div class="container ott">
                                <p>Telefono</p>
                            </div>
                        </div>
                        <div class="frafi">
                            <div>
                                <p><input type="email" name="correo" required></p>
                            </div>
                            <div>
                                <p><input type="number" name="numcont" required></p>
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
                        </div>
                        <div class="frafi">
                            <div>
                                <p><input type="address" name="direccion" required></p>
                            </div>
                            <div>
                                <p><input type="address" name="direccion"></p>
                            </div>
                        </div>
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
                                <input type="number" name="numeroTarjeta" required></p>
                            </div>
                            <div class="container ott">
                                <P><input type="number" name="fechaVencimiento" required></P>
                            </div>
                            <div class="container ott">
                                <p><input type="text" name="titularTarjeta" required></p>
                            </div>
                        </div>
                    </div>
                    <div class="anun ult">
                        <div class="titu">
                            <p>Transferencias bancarias</p>
                        </div>
                        <div class="franu">
                            <div class="container ott">
                                <p>Correo electronico</p>
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
                            <button type="button" onclick="actualizar()" id="bot" class="bot">Guardar cambios </button>
                        </div>
                        <div class="frafi">
                            <div>
                            <p><input type="email" name="correoElectronico" required></p>
                            </div>
                            <div>
                                <p><input type="text" name="Banco" required></p>
                            </div>
                            <div class="tarjet"><input type="checkbox" name="opcion1" value="1"><span>Ahorros</span></div>
                            <div class="tarjet"><input type="checkbox" name="opcion2" value="2"><span>Corrientes</span></div>
                            <div>
                                <p><input type="number" name="Cuenta" required></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="overlay" id="overlay">
                <div class="popup" id="popup">
                    <div class="lol">
                        <p>Estas seguro que quieres continuar con la actualización de datos</p>
                        <p>NOTA:¡tambien debes actualizar tu metodo de pago si tienes una cuenta guardada!</p>
                    </div>
                    <div class="sec">
                        <button type="submit" class="bota">Continuar</button>
                        <a href="actualizar.php"><button type="button" class="bota">Volver</button></a>
                    </div>
                </div>
            </div>
            </form>
            </div>

    </div>
    </div>

</body>
<script src="../assets/js/tipoPago.js"></script>

</html>