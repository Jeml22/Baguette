<?php
session_start();
error_reporting(0);
$varsesion=$_SESSION['role'];
if ($varsesion==NULL || $varsesion=='') {
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
    <link rel="stylesheet" href="../assets/css/Contactos/EstilosContactos.css">
    <link rel="stylesheet" href="../assets/css/Default-Styles/Contacts-and-Branches.css">
    <link rel="stylesheet" href="../assets/css/Default-Styles/Footer-and-Header.css">
    <link rel="icon" href="https://raw.githubusercontent.com/Ronaldo07rgr/Repositorio_LaBaguette/master/assets/Icon/LaBaguette.ico">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/c34d8fffbe.js" crossorigin="anonymous"></script>
    <title> Contactos | La Baguette </title>
</head>

<body>

    <div class="parent-container">
        <header>
            <div class="menu_encabezadop1">
            <!-- Encabezado Parte 1: este código HTML describe una sección de encabezado que incluye enlaces a las páginas de redes sociales del usuario, enlaces para iniciar sesión en el sitio web y un ícono de carrito de compras.-->
                <div class="conteiner">
                        <div class="social">
                            <ul>
                                <li>
                                    <a href="https://www.facebook.com/ronaldo.stiven52">
                                        <i class="fab fa-facebook-f icon"></i>    
                                    </a>
                                </li>
    
                                <li>
                                    <a href="https://twitter.com/?lang=es">
                                    <i class="fa-brands fa-x-twitter"></i>
                                    </a>
                                </li>
    
                                <li>
                                    <a href="https://wa.me/+573154875304">
                                        <i class="fab fa-whatsapp icon"></i>
                                    </a>
                                </li>
    
                                <li>
                                    <a href="https://www.instagram.com/ronaldo07_rg/">
                                        <i class="fab fa-instagram icon"></i>
                                    </a>
                                </li>
                            </ul>

                            <div class="user">

                                <a href="usuario.php">
                                    <i class="fa fa-user"></i>
                                </a>
                                <a href="../php/CerrarSesion.php">
                                <span>Cerrar sesion</span>
                            </a>

                            </div>

                            <div class="shopping">
                                
                                <i class="fa fa-shopping-cart"></i>
                                


                            </div>
                            
                        </div>
                </div>
            </div>


            <div class="conteiner">
            <!-- Encabezado Parte 2 menu: este código HTML describe una sección de encabezado que incluye una barra de navegación con enlaces a diferentes páginas del sitio web y un logotipo.-->  
                <div class="menuconteiner">

                    <div class="menu">

                    <nav>
                            <a href="../php/iniciado.php"><p>INICIO</p></a>
                            <a href="#" class="has-submenu"><p>NOSOTROS</p></a>
                            <ul class="submenu">
                              <li><a style="border:#744f28 solid 1px;
                                border-radius: 12px;" class="MV" href="Nosotros.php">MISION Y VISION</a></li>
                              <li><a style="border:#744f28 solid 1px;
                                border-radius: 12px;" class="QS" href="Nosotros.php">QUIENES SOMOS</a></li>
                            </ul>
                        </nav>
                        
                        <div class="logo">
                            <a href="iniciado.php"><img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Encabezado%20y%20pie%20de%20pagina/LaBaguette-Encabezado.png?raw=true"></a>
                        </div>

                        <nav>
                            <a href="ContactosUsuario.php"><p>CONTACTOS</p></a>
                            <a href="Sucursales.php"><p>SUCURSALES</p></a>
                        </nav>
                
                    </div>
                </div>
            </div>

        </header>
    
        <main>
            <form action="assets/php/contactos.php"method="post">
            <div class="background-image">
                <div class="img-and-text">
                    <div class="overlay">
                        <div class="conteiner">
                            <div class="contac">
                                <h1>Contactos</h1>
                                <p>Por favor, no dude en ponerse en contacto con nosotros para más <br>información.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="side">
                <div class="conteiner">
                    <div class="comments">
                        <h3>DEJA TU MENSAJE EN EL SIGUIENTE <br>FORMULARIO</h3>
                        <div class="name">
                          <div class="field-container">
                            <input type="text"name="nombre" class="field" required>
                            <label class="label">Nombre</label>
                          </div>
                          <div class="field-container">
                            <input type="text"name="apellido"class="field" required>
                            <label class="label">Apellido</label>
                          </div>
                        </div>
                        <div class="email">
                          <div class="field-container">
                            <input type="email"name="correo" class="field" required>
                            <label class="label">Correo electrónico</label>
                          </div>
                        </div>
                        <div class="message">
                          <div class="field-container">
                            <textarea class="field message-field"name="mensaje" required></textarea>
                            <label class="label">Mensaje</label>
                          </div>
                          <input class="botons" type="submit" value="ENVIAR">
                        </div>
                    </div>

                        <div class="modal" style="display: none;">
                        <p>Gracias por tu mensaje.</p>
                        <button class="close">Volver</button>
                        </div>
                        
                </div>
                <div class="opacidad" style="display: none;"></div>
            </div>
        </form>
        </main>




        <footer>
            <div class="conteiner">

                <div class="header">
                    <div class="logo">
                        <span></span>
                    </div>

                </div>

                <hr>

                <div class="section">

                    <div>
                        <h2>Empresa</h2>
                        <a href="Index.php">Inicio</a>
                        <a href="ContactosUsuario.php">Contactanos</a>
                        <a href="Nosotros.php">Nosotros</a>
                    </div>


                    <div>
                        <h2>Redes Sociales</h2>
                        <div class="shop-cart">
                            <ul>
                                <li>
                                    <a
                                        href="https://www.facebook.com/ronaldo.stiven52">
                                        <i class="fab fa-facebook-f icon"></i>
                                    </a>
                                </li>
                                
                                <li>
                                    <a href="https://twitter.com/?lang=es">
                                    <i class="fa-brands fa-x-twitter"></i>
                                    </a>
                                </li>

                                <li>
                                    <a href="https://wa.me/+573154875304">
                                        <i class="fab fa-whatsapp icon"></i>
                                    </a>
                                </li>

                                <li>
                                    <a
                                        href="https://www.instagram.com/ronaldo07_rg/">
                                        <i class="fab fa-instagram icon"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>

                <div class="Rights">
                    <p>Copyright©2023LaBaguette. All right reserved</p>
                    <p>Privacy Policy Terms and conditions</p>
                </div>

            </div>

        </footer>

    </div> 
</body>
<script src="../assets/js/Contactos.js"></script>

</html>