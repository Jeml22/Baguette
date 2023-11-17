<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?= $this->Html->css(['normalize.min', 'milligram.min', 'supervi']) ?>
</head>
<body>
    <?php
    $this->layout = 'supervisor_layout';

    // Función para conectar a la base de datos
    function conectar()
    {
        $servidor = "localhost";
        $usuario = "root";
        $contra = "";
        $db = "baguettedb";

        $conexion = mysqli_connect($servidor, $usuario, $contra, $db) or die("no se logro la conexion");
        return $conexion;
    }

    // Llamamos a la función conectar para obtener la conexión
    $conectar = conectar();

    // Consulta SQL para obtener todos los datos de la tabla "ventas"
    $select = "SELECT * FROM ventas";
    $result = mysqli_query($conectar, $select);

    // Arreglo asociativo para mapear nombres de columnas en la base de datos a nombres de visualización
    $columnas = array(
        'id_venta' => 'ID de Venta',
        'fecha' => 'Fecha',
        'hora' => 'Hora',
        'productos' => 'Productos',
        'cantidad' => 'cantidad',
        'total' => 'Total',
        'idfactura' => 'Número de Factura'
    );
    ?>

    <table>
        <tr>
            <?php
            // Mostrar los nombres de columnas de visualización como encabezados de la tabla
            foreach ($columnas as $nombre) {
                echo "<th>" . $nombre . "</th>";
            }
            ?>
        </tr>
        <?php
        // Mostrar los datos de la tabla
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            foreach ($columnas as $columna => $nombre) {
                echo "<td>" . $row[$columna] . "</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>

    <!-- Resto de tu código HTML -->

    <div class="row justify-content-center align-items-center"> <!-- Agregamos las clases justify-content-center y align-items-center para centrar horizontal y verticalmente -->
        <div class="salid container mt-5">

            <div class="d-flex">
                <a href="..\php\CerrarSesion.php" class="btn btn-lg">SALIR</a>
            </div>
        </div>
    </div>
</body>
</html>