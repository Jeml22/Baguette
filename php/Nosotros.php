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
    <link rel="stylesheet" href="../assets/css/Nosotros/EstilosNosotros.css">
    <link rel="stylesheet" href="../assets/css/Default-Styles/Footer-and-Header.css">
    <link rel="icon" href="https://raw.githubusercontent.com/Ronaldo07rgr/Repositorio_LaBaguette/master/assets/Icon/LaBaguette.ico">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="main.js"></script>
    <script src="https://kit.fontawesome.com/c34d8fffbe.js" crossorigin="anonymous"></script>
    <title>Nosotros | LaBaguette</title>
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
    
        <main id="main-VisionMision">
            <div class="conteiner">
                <div class="mv">
                    <p>Misión y Visión</p>
                </div>
            </div>
            <div class="mv-conteiner">
                <div class="conteiner">
                    <div class="mision-y-vision">
                        <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Nosotros/Mision%20y%20Vision/Mision.webp?raw=true">
                        <div class="Text">
                            <h3>Misión</h3>
                            <p>Proveer a nuestros clientes productos de panadería, confitería y rotisería y servicios de cattering innovadores y de excelente calidad. Manteniendo el liderazgo con la colaboración e iniciativa de nuestro personal, asociados y franquiciados, en un entorno de constante innovación.  Manteniendo el liderazgo con la colaboración e iniciativa de nuestro personal, asociados y franquiciados, en un entorno de constante innovación. </p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="mv-conteiner">
                <div class="conteiner">
                    <div class="mision-y-vision">
                        <div class="Text">
                            <h3>Visión</h3>
                            <p>Ser la panadereia premier creando una experiencia exepcional de producto y servicio al cliente para clientes nuevos y leales en todas partes.</p>
                        </div>
                        <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Nosotros/Mision%20y%20Vision/Vision.webp?raw=true">
                    </div>
                </div>
            </div>
        </main>

        <main id="main-QuienesSomos" style="display: none;">
            <div class="conteiner">
                <div class="mv">
                    <p>¿Quienes Somos?</p>
                </div>
            </div>
            <div class="conteiner">
                <div class="QuienesSomos">
                    <div class="info">
                        <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Nosotros/Quienes%20Somo/quienesomos.webp?raw=true">
                        <div class="Text">
                            <p>La Baguette es una empresa familiar que nació a principios de los 2000 en el pueblo de La Plata, Huila, con el fin de servir pan y otra variedad de productos.</p>
                            <p>La Baguette ha sido siempre una empresa preocupada por satisfacer las necesidades de sus clientes, ofreciendo siempre la máxima calidad tanto en sus productos como en sus servicios.</p>
                            <p>A lo largo de los años, La Baguette ha apostado por la innovación, desarrollando nuevos productos.</p>
                        </div>
                    </div>
                    <div class="infopie">
                        <p>Trabajando con nuestros clientes, buscamos crear grandes cosas y así logras resultados positivos</p>
                    </div>
                </div>
            </div>
            
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
                        <h2>Servicios</h2>
                        <a href="#">Domicilios</a>
                        <a href="#">Pedios Especiales</a>
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
<script src="../assets/js/main.js"></script>
<script src="../assets/js/Nosotros.js"></script>
</html>