<?php
session_start();
error_reporting(0);

$varsesion = $_SESSION['role'];

if ($varsesion == NULL || $varsesion === '') {
  header("location: ../IniciarSesion.html");
  // session_destroy();
  die();
}
?>

<?php
include("conexion.php");
$conectar = conectar();
$select = "SELECT * FROM productos_pasteles
";

try {
  $resul = $conectar->execute_query($select);
} catch (Exception $e) {
  var_dump($e);
}

$productos = [];

while ($data = $resul->fetch_object()) {
  $data->tipo_prod = str_replace([" ", "-", "pasteles"], [""], $data->tipo_prod);
  $productos[$data->tipo_prod][] = $data;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../assets/css/Default-Styles/Catalogs.css">
  <link rel="stylesheet" href="../assets/css/Default-Styles/Footer-and-Header.css">
  <link rel="icon" href="https://raw.githubusercontent.com/Ronaldo07rgr/Repositorio_LaBaguette/master/assets/Icon/LaBaguette.ico">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://kit.fontawesome.com/c34d8fffbe.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="..assets/css/Default-Styles/EstilosIndex.css">
  <link rel="stylesheet" href="../assets/css/Default-Styles/PagarCarrito.css">
  <link rel="stylesheet" href="..assets/css/usuario/EstilosIndex.css">
  <link rel="stylesheet" href="../assets/css/Default-Styles/Footer-and-Header.css">
  <link rel="stylesheet" href="../assets/css/carrito/puntodepago.css">
  <link rel="stylesheet" href="../assets/css/Default-Styles/trajetas.css">
  <link rel="stylesheet" href="../assets/css/Default-Styles/efectivo.css">
  <link rel="stylesheet" href="../assets/css/Default-Styles/transferencia.css">
  <link rel="stylesheet" href="../assets/css/carrito/compras.css">
  <title>Productos | La Baguette</title>
</head>


<body>
  <div class="parent-container">
    <header>
      <div class="menu_encabezadop1">
        <div class="conteiner">
          <div class="social">
            <ul>
              <li>
                <a href="">
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
                <a href="">
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
                    <a href="factura.php"><button onclick="subtotal()" class="bott" id="subtotal-button" id="subtotal">Pagar Subtotal: $<span data-element="carrito-subtotal"></span></button></a>
                  </div>
                </div>
              </div>
            </div>


          </div>
        </div>
      </div>


      <div class="conteiner">


        <div class="menuconteiner">


          <div class="menu">


            <nav>
              <a href="../php/iniciado.php">
                <p>INICIO</p>
              </a>
              <a href="#" class="has-submenu">
                <p>NOSOTROS</p>
              </a>
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


    <main>
      <?php
      $isFirst = true;
      foreach ($productos as $key => $producto) {
      ?>
        <div class="product-catalog" id="<?= $key ?>" style="display: <?= $isFirst ? "block" : "none" ?>">
          <div class="hero">
            <div class="conteiner">
              <div class="Nov">
                <p><?= strtoupper($key) ?></p>
              </div>
              <hr>
            </div>
            <div id="nav-menu">
              <div class="conteiner" style="position: relative;">
                <button id="menu-button"><i class="fa fa-bars"></i></button>
                <nav id="menu">
                  <ul>
                    <li><a href="#" onclick="mostrarCatalogo('novedades')">Novedades</a></li>
                    <li><a href="#" onclick="mostrarCatalogo('fermentados')">P.Fermentados</a></li>
                    <li><a href="#" onclick="mostrarCatalogo('esponjosos')">P.Esponjosos</a></li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>

          <div class="news" style="padding-top: 70px;">
            <div class="conteiner">
              <div class="row">
                <?php
                foreach ($producto as $key => $value) {
                ?>
                  <div class="col" data-element="producto" data-group-element="pasteles" data-id="<?= $value->id_producto ?>">
                    <div class="slider">
                      <img data-element="imagen-producto" src="<?= $value->img1?>" class="active">
                      <img src="<?= $value->img2?>">
                    </div>
                    <div class="product-info">
                      <h3 data-element="nombre-producto"><?= $value->nombre_p ?></h3>
                      <p class="precio">$<span data-element="precio-producto"><?= $value->precio ?></span></p>
                      <button class="add-to-cart"><i class="fas fa-shopping-cart"></i><span>Agregar</span></button>
                    </div>
                    <div class="popup">
                      <div class="popup-content">
                        <div class="product-image">
                          <img src="<?= $value->img1?>">
                        </div>
                        <div class="product-details">
                          <div class="product-header">
                            <h3><?= $value->nombre_p ?></h3>
                            <button class="close"><i class="fas fa-times"></i></button>
                          </div>
                          <p><?= $value->descripcion ?></p>
                          <p><b>Peso:</b> <?= $value->peso ?> gramos</p>
                          <p><b>Cantidad disponible:</b><?= $value->cantidad_disponible ?></p>
                          <button class="add-to-cart1">Agregar al carrito</button>
                        </div>
                      </div>
                    </div>
                  </div>
                <?php
                  $isFirst = false;
                }
                ?>
              </div>
            </div>
          </div>
        </div>
      <?php
      }
      ?>

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
        <p>Copyright©2023LaBaguette. All right reserved</p>
        <p>Privacy Policy Terms and conditions</p>
      </div>
    </div>
  </footer>
  </div>
  </div>
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
<script src="../assets/js/mainCatalogo.js"></script>
<script src="../assets/js/main.js"></script>
<script src="../assets/js/botonSubtotal.js"></script>
<script src="../assets/js/tipoPago.js"></script>

</html>