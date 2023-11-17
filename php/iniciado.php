<?php
session_start();
error_reporting(0);
$varsesion=$_SESSION['role'];
if ($varsesion==NULL || $varsesion==='') {
    header("location: ../IniciarSesion.html");
    // session_destroy();
    die();
}
include("conexion.php");
$conectar =conectar();

$user=$_SESSION['numb'];
$select="SELECT nombre FROM clientes WHERE ndocu='".$user."'";
$resul=$conectar->query($select);
while($data=$resul->fetch_assoc()){
    $nombre=$data['nombre'];

}
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/Default-Styles/EstilosIndex.css">
    <link rel="stylesheet" href="../assets/css/Default-Styles/PagarCarrito.css">
    <link rel="stylesheet" href="../assets/css/usuario/EstilosIndex.css">
    <link rel="icon" href="https://raw.githubusercontent.com/Ronaldo07rgr/Repositorio_LaBaguette/master/assets/Icon/LaBaguette.ico">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/c34d8fffbe.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../assets/css/Default-Styles/Footer-and-Header.css">
    <link rel="stylesheet" href="../assets/css/carrito/puntodepago.css">
    <link rel="stylesheet" href="..assets/css/CambiarContraseña/cambiarContraseña.css">
    <link rel="stylesheet" href="..assets/css/Login/EstilosIniciarSesion.css">
    <link rel="stylesheet" href="../assets/css/Default-Styles/trajetas.css">
    <link rel="stylesheet" href="../assets/css/Default-Styles/efectivo.css">
    <link rel="stylesheet" href="../assets/css/Default-Styles/transferencia.css">
    <link rel="stylesheet" href="../assets/css/carrito/compras.css">
    <script src="main.js"></script>
    <title>LaBaguette | Horneamos con amor</title>
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
                        <a style="color:#eae3d7;"><?php echo $nombre?></a>
                            <a href="usuario.php">
                                <i class="fa fa-user"></i>
                            </a>
                            <a href="../php/CerrarSesion.php">
                                <span>Cerrar sesion</span>
                            </a>

                        </div>
                        <div class="shopping">
                            <i class="fa fa-shopping-cart" onclick="showCartMenu()"></i>
                            <div class="cart-menu" id="cartMenu">
                                <h2>Mi Carrito</h2>
                                <div class="direction">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <p>Direccion de Residencia</p>
                                </div>
                                <hr>
                                <button class="close" onclick="hideCartMenu()">X</button>
                                <div class="cart-items">

                                </div>
                                <div class="buttons">
                                    <button onclick="button1()" id="button1">Seleccionar metodo de pago</button>

                                    <div class="cam">

                                        <button onclick="subtotal()" class="bott" id="subtotal subtotalBtn">Pagar Subtotal: $0.00</button>
                                    </div>
                                </div>
                            </div>
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
                            <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Encabezado%20y%20pie%20de%20pagina/LaBaguette-Encabezado.png?raw=true">
                        </div>

                        <nav>
                            <a href="ContactosUsuario.php">
                                <p>CONTACTOS</p>
                            </a>
                            <a href="Sucursales.php">
                                <p>SUCURSALES</p>
                            </a>
                        </nav>

                    </div>
                </div>
            </div>
        </header>
        <div class="Reloj">
            <div id="clock">12:00<span class="am-pm"> AM</span></div>
            <div id="message">Abierto</div>
        </div>
        <main>
            <!-- Este código ph representa la sección principal de una página web, que contiene un carrusel de imágenes con botones de paginación para cambiar entre ellas. La sección se encuentra dentro de una etiqueta <main>, que indica que es el contenido principal de la página.
        El carrusel de imágenes está implementado mediante la etiqueta <input> con el atributo type establecido en "radio", que se utiliza para mantener un control de la imagen que se está mostrando actualmente. Cada imagen se muestra dentro de un contenedor con la clase "img", y las imágenes son referenciadas por sus URLs en el atributo src de la etiqueta <img>.
        Finalmente, los botones de paginación se implementan mediante etiquetas <label> que están vinculadas a cada imagen mediante el atributo for con el mismo valor que el atributo id de la etiqueta <input> correspondiente.-->
            <div class="hero">
                <div class="conteiner-slider">

                    <input type="radio" id="1" name="slider-img" hidden />
                    <input type="radio" id="2" name="slider-img" hidden />
                    <input type="radio" id="3" name="slider-img" hidden />

                    <div class="slider">

                        <div class="img">
                            <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Carrusel%20Index/Carrusel%20(1).webp?raw=true">
                        </div>

                        <div class="img">
                            <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Carrusel%20Index/Carrusel%20(2).webp?raw=true">
                        </div>

                        <div class="img">
                            <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Carrusel%20Index/Carrusel%20(3).webp?raw=true">
                        </div>

                    </div>

                    <div class="pagination">

                        <label class="img-pag" for="1">
                            <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Carrusel%20Index/Carrusel%20(1).webp?raw=true">
                        </label>

                        <label class="img-pag" for="2">
                            <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Carrusel%20Index/Carrusel%20(2).webp?raw=true">
                        </label>

                        <label class="img-pag" for="3">
                            <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Carrusel%20Index/Carrusel%20(3).webp?raw=true">
                        </label>

                    </div>
                </div>
            </div>

        </main>

        <aside>
            <!--Este código ph corresponde a una sección de una página web que presenta los productos que ofrece un negocio de panadería y repostería. La sección está estructurada en tres columnas que contienen imágenes, títulos, descripciones y botones para ver más detalles de cada producto.
        Cada columna se define con la clase "letters" y contiene una imagen del producto y un bloque de texto que incluye el título y descripción del mismo. Además, cada columna tiene un botón "Ver Productos" que lleva a otra página donde se pueden ver más detalles sobre los productos.
        La sección está contenida dentro de un elemento <aside>, que se utiliza comúnmente para contenido secundario que complementa el contenido principal de la página.-->
            <div class="conteiner">
                <div>
                    <h2>te ofrecemos</h2>
                </div>

                <div class="letter-content">

                    <div class="letters">
                        <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Carts/Variedad%20De%20Pan.webp?raw=true">

                        <div>

                            <h3>Variedad de Pan</h3>
                            <p>Panes saludables y nutritivos con opciones de pan que puedes encontrar en diferentes culturas y regiones del mundo. Cada uno con su propio sabor especial y características únicas ideales para usted. ¡Buen provecho!</p>
                            <section>
                                <a href="CatalogoPan.php">
                                    <button>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        Ver Productos
                                    </button>
                                </a>
                            </section>

                        </div>
                    </div>

                    <div class="letters">

                        <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Carts/Variedad%20De%20Pasteles.webp?raw=true">

                        <div>

                            <h3>Variedad de Pasteles</h3>
                            <p>Pasteles elegantes y distintivos son solo una muestra de la amplia variedad de opciones disponibles para satisfacer cualquier antojo dulce. Desde los clásicos hasta los más innovadores, siempre hay un pastel perfecto para cada ocasión y temporada. ¡Disfruta cada delicioso bocado!</p>
                            <section>
                                <a href="CatalogoPasteles.php">
                                    <button>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        Ver Productos
                                    </button>
                                </a>
                            </section>

                        </div>


                    </div>

                    <div class="letters">

                        <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Carts/Variedad%20De%20Otros.webp?raw=true">

                        <div>

                            <h3>Variedad de Otros</h3>
                            <p>Estas variedades sirven para quitar el antojo y ofrecen una amplia gama de sabores y opciones para satisfacer cualquier preferencia. ¡Disfrútalas en compañía de familiares y amigos en cualquier ocasión!</p>
                            <section>
                                <a href="CatalogoOtros.php">
                                    <button>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        Ver Productos
                                    </button>
                                </a>
                            </section>

                        </div>

                    </div>

                </div>

            </div>
        </aside>

        <footer>
            <!--El footer está compuesto por cuatro secciones, incluyendo una sección de empresa con enlaces a la página de inicio, contacto y nosotros, una sección de servicios con enlaces a domicilios y pedidos especiales, una sección de redes sociales con enlaces a Facebook, Twitter, WhatsApp e Instagram, y una sección de derechos de autor y políticas de privacidad. -->

            <div class="conteiner">

                <hr>

                <div class="section">

                    <div>
                        <h2>Empresa</h2>
                        <a href="Index.html">Inicio</a>
                        <a href="Contactos.html">Contactanos</a>
                        <a href="Nosotros.html">Nosotros</a>
                    </div>

                    <div class="container">
                        <div class="logo">
                            <span></span>
                        </div>
                    </div>

                    <div>
                        <h2>Redes Sociales</h2>
                        <div class="shop-cart">
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
                        </div>
                    </div>

                </div>

                <div class="Rights">
                    <p>Copyright©2023LaBaguette. Todos los derechos reservados</p>
                    <p>Política de privacidad Términos y condiciones</p>
                </div>

            </div>
    </div>
    </footer>

    </div>
    <form class="todo">
        <div class="c-formulario" id="overlay">
            <div class="inputs" id="popup">
                <div class="welcome">
                    <div>
                        <br>
                        <p><button class="close cerrar" id="card" onclick="hideCard()">X</button>seleccione el metodo de pago con el que deseas pagar.</p>

                    </div>
                    <div class="linea"></div>
                    <div class="tarjeta"><input for="showPopup" type="checkbox" name="" id="botn2" onclick="datos()"><span>tarjeta Debito o Crédito</span></div>
                    <div class="tarjeta"><input for="showPopup" type="checkbox" name="" id="boton3" onclick="info()"><span>Transferencia Bancaria</span></div>
                    <div class="tarjeta"><input for="showPopup" type="checkbox" name="" id="boton4" onclick="date()"><span>Efectivo</span></div>
                </div>
                </br>

            </div>
        </div>



    </form>
    <form action="tarjetas.php" method="post" class="tarje">
        <div class="d-formu" id="Titular">
            <div class="inp" id="tipo">
                <div class="wel">
                    <div>
                        <strong>
                            <p><button type="button" class="close cerrar" id="card" onclick="hideCard()"><a href="iniciado.php">X</a></button>Tarjeta de crédito o débito</p>
                        </strong>
                    </div>
                </div>
                <div class="link">
                </div>

                <div>
                    <br>
                    <p class="tex">seleccione tipo de tarjeta</p>
                </div>
                <div class="card"><input name="opcion1" value="1" type="checkbox" id=""><span>Debito</span></div>
                <div class="card"><input name="opcion2" value="2" value="Credito" type="checkbox" name="Credito" id=""><span>Crédito</span></div>
                <div>
                    <p class="regis">
                    <p class="tex2">Número de tarjeta</p>
                    <input class="relleno" type="number" id="password" name="numero">
                </div>
                <div style="margin-top: 1rem;">
                    <div style="display: flex; padding-left: 0.5rem;">
                        <div>
                            <div class="tex3">MM</div>
                            <input class="relleno2" type="text" id="password" name="fvence">
                        </div>
                    </div>

                    <div>
                        <p>/</p>
                    </div>

                    <div>
                        <div class="tex3"> AA</div>
                        <input class="relleno2" type="text" id="password" name="pin">
                    </div>
                    <p class="tex1">Titular de la tarjeta</p>
                    <input class="rel" type="text" id="password" name="titular">
                    <div>
                        <div style="display: flex; margin-left: 10rem; padding-top: 2rem;">
                            <div class="bod ">
                                <button class="botons" type="submit">Guardar método de pago</button>
                            </div>
                            <div class="bod ">
                                <button class="botons" id="confi" type="button" onclick="confirma()">Confirmar</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>



        </div>
        </div>

        </div>
        </div>
    </form>

    <form class="efecty">
        <div class="e-form" id="e-form">
            <div class="puts" id="puts">
                <div class="bien">
                    <div>
                        <strong>
                            <p><button type="button" class="close cerrar" id="card" onclick="hideCard()"><a href="iniciado.php">X</a></button>Efectivo</p>
                        </strong>
                    </div>
                </div>
                <div class="line"></div>
                <div class="regis">
                    <div class="tex">Metodo de pago</div>
                    <div>
                        <select class="seleccion">
                            <option value="CC" selected>Paypal</option>
                            <option value="CE" selected>Pse</option>
                            <option value="TI" selected>Efecty</option>
                            <option value="TI" selected>Seleccione el Banco</option>
                        </select>
                        <div class="bod ">
                            <div style="display: flex; margin-left: 20rem; padding-top: 2rem;">
                                <button class="botons" id="confi" type="button" onclick="confirma()">Confirmar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <form action="pagos.php" method="post" class="f-lario" id="primero">
        <div class="label" id="segundo">
            <div class="poop">
                <div class="blob">
                    <div>
                        <strong>
                            <p><button type="button" class="close cerrar" id="card" onclick="hideCard()"><a href="iniciado.php">X</a></button>Transferencia Bancaria</p>
                        </strong>
                    </div>
                </div>
                <div class="lin"></div>
                <div>

                    <p class="texto">Tipo de cuenta</p>
                </div>
                <div class="tarjet"><input type="checkbox" name="opcion1" value="1"><span>Ahorros</span></div>
                <div class="tarjet"><input type="checkbox" name="opcion2" value="2"><span>Corrientes</span></div>
                <div class="regis">
                    <div class="texto">Banco (Campo Obligatorio)</div>
                    <div>
                        <select class="selecciones" name="banco">
                            <p>Texto de ejemplo <span class="dropdown-arrow"></span></p>
                            <option value="CC" selected>Banco Agrario</option>
                            <option value="CE" selected>Bancolombia</option>
                            <option value="TI" selected>Davivienda</option>
                            <option value="TI" selected>Banco Bogota</option>
                            <option value="TI" selected>Seleccione el Banco</option>
                        </select>
                    </div>
                </div>
                <div class="regis">
                    <p class="texto2">Correo Electronico (Campo Obligatorio)</p>
                    <div>
                        <input class="barras" type="text" id="tex" name="correo" required>
                    </div>
                    <p class="texto2">Numero de cuentas (Campo Obligatorio)</p>
                    <div>
                        <input class="barras" type="text" name="cuenta" required>
                    </div>
                </div>
                <div>
                    <div style="display: flex; margin-left: 10rem; padding-top: 2rem;">
                        <div class="bod">
                            <button class="botons" type="submit">Guardar método de pago</button>
                        </div>
                        <div class="bod ">
                            <button class="botons" id="confi" type="button" onclick="confirma()">Confirmar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <div class="parent-container">
        <!--Este código es responsable de mostrar un logotipo en el encabezado de una página web y vincularlo a otra página HTML..-->
        <main>
            <div class="conte" id="fondo">
                <div class="f-formu" id="parte">
                    <div class="inpots">
                        <div class="good">
                        </div>
                        <div>
                            <p class="texts">tu informacion de pago estara asegurada</p>
                        </div>
                        <div class="bodo">
                            <button class="botoneso" type="submit" value="Cambiar Contraseña"><a href="iniciado.php">Continuar con la compra</a></button>
                        </div>
                    </div>
                </div>

            </div>
    </div>

</body>
<script src="../assets/js/main.js"></script>
<script src="../assets/js/reloj.js"></script>
<script src="../assets/js/tipoPago.js"></script>
</html>