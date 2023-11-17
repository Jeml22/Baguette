<?php
include("conexion.php");
$conectar = conectar();
session_start();
$fecha_dehoy = date("Y-m-d");
function generarCodigoAleatorio($longitud) {
  $caracteres = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
  $codigo = '';
  for ($i = 0; $i < $longitud; $i++) {
    $codigo .= $caracteres[rand(0, strlen($caracteres) - 1)];
  }
  return $codigo;
}
$longitudCodigo = 11; // Puedes ajustar la longitud según tus necesidades
$codigoAleatorio = generarCodigoAleatorio($longitudCodigo);
$user = $_SESSION['numb'];
$select = "SELECT * FROM clientes WHERE ndocu='" . $user . "'";
$resul = $conectar->query($select);
while ($data = $resul->fetch_assoc()) {
  $nombres = $data['nombre'];
  $direccion = $data['direccion'];
}

$carritoJSON = json_decode($_COOKIE["carrito"]);

$groups = [];

foreach ($carritoJSON as $key => $value) {
  $arr = (array)$value;
  if (!empty($arr)) {
    $groups[$key] = $arr;
  }
}

$total = 0;

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="https://raw.githubusercontent.com/Ronaldo07rgr/Repositorio_LaBaguette/master/assets/Icon/LaBaguette.ico">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://kit.fontawesome.com/c34d8fffbe.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../assets/css/Default-Styles/PagarCarrito.css">
  <title>Productos | La Baguette</title>
</head>


<body class="mundo">
  <div id="over" class="over">
    <div id="lay" class="lay">
      <h1>Factura</h1>
      <div class="logos">
        <img class="imgs" src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Encabezado%20y%20pie%20de%20pagina/LaBaguette-Encabezado.png?raw=true"></a>
      </div class="colum">
      <div class="col1">
        <div class="lum">
          <h1>Para</h1>
          <p><?php echo $nombres ?></p>
        </div>
        <div class="lum">
          <h1>N°factura</h1>
          <p><?php echo $codigoAleatorio ?></p>
        </div>
        <div class="lum">
          <h1>Fecha</h1>
          <p><?php echo $fecha_dehoy ?></p>
        </div>
      </div>
      <div class="sol">
        <h1>Direccion de entrega</h1>
        <p><?php echo $direccion ?></p>
      </div>
      <div class="linea"></div>
      <table style="width: 100%; padding: 0 75px ">
        <thead>
          <tr>
            <th class="lum">
              <h1>Cantidad</h1>
            </th>
            <th class="lum">
              <h1>Precio</h1>
            </th>
            <th class="lum">
              <h1>Total</h1>
            </th>
          </tr>
        </thead>
        <tbody>
          <?php
          if (empty($group))  {
            ?>
              <tr>
                <td colspan="3">No hay productos en el carrito</td>
              </tr>
            <?php
          } else {
            foreach ($groups as $key => $group) {
              ?>
                <tr>
                  <td colspan="3"><b> - <?= ucfirst($key) ?></b></td>
                </tr>
                <tr>
                  <?php
                  foreach ($group as $key => $element) {
                  ?>
                    <td class="lum">
                      <p><?= $element->cantidad ?></p>
                    </td>
                    <td class="lum">
                      <p><?= $element->precio ?></p>
                    </td>
                    <td class="lum">
                      <p>
                        <span>$</span>
                        <?php
    
                        $subtotal = $element->cantidad * $element->precio;
                        $total += $subtotal;
    
                        echo $subtotal;
                        ?>
                      </p>
                    </td>
                  <?php
                  }
                  ?>
                </tr>
              <?php
              }
          }
          ?>
        </tbody>
      </table>
      <div class="linea"></div>
      <div class="col3">
        <div class="domi">
          <h1>Subtotal</h1>
          <p>$<span><?= $total ?></span></p>
        </div>
      </div>
      <div>
        <button id="bon" class="bon"><a href="iniciado.php" class="bono">Volver al inicio</a></button>
      </div>
    </div>
  </div>
</body>

</html>