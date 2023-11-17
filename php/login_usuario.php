<?php
session_start();

include("conexion.php");
$conectar = conectar();

$tdoc = isset($_POST["tdoc"]) ? $_POST["tdoc"] : "";
$numb = isset($_POST["numb"]) ? $_POST["numb"] : "";
$contra = isset($_POST["contra"]) ? $_POST["contra"] : "";


// Utilizar consulta preparada para evitar inyección de SQL
$stmt = $conectar->prepare("SELECT role_id FROM clientes WHERE ndocu = ? AND tdoc = ? AND contra = ?");
$stmt->bind_param("sss", $numb, $tdoc, $contra);
$stmt->execute();
$result = $stmt->get_result();

if (isset($_SESSION['intento']) && $_SESSION['intento'] >= 3) {
    if (!isset($_SESSION['tiempo']) || $_SESSION['tiempo'] == 0) {
        $_SESSION['tiempo'] = time() + (1 * 60);
    }

    $actual = time();
    $tiempo = $_SESSION['tiempo'];

    if ($actual < $tiempo) {
        $contador = ceil(($tiempo - $actual) / 60);
        echo "<script>
        alert('Has agotado tus 3 intentos, intentalo de nuevo en $contador minutos o ve a cambiar contraseña en el link de olvide contraseña'); window.location.href='/baguette/IniciarSesion.html'</script>";
    } else {
        $_SESSION['intento'] = 0;
        $_SESSION['tiempo'] = 0;
    }
}

if (!isset($_SESSION['intento']) || $_SESSION['intento'] < 3) {
        if ($result->num_rows > 0) {
            $_SESSION['intento'] = 0;
            $row = $result->fetch_assoc();
            $rol = $row['role_id'];
        
            // Redirigir al usuario a la página correspondiente según su rol
            if ($rol == 2) {
                $_SESSION['role'] = 'Administrador';
                $_SESSION['numb'] = $numb;
                header("Location: back-end/index.php");
                exit;
            } elseif ($rol == 1) {
                $_SESSION['role'] = 'Cliente';
                $_SESSION['numb'] = $numb;
                header("Location: /php/iniciado.php");
                exit;
            }  elseif ($rol == 3) {
                $_SESSION['role'] = 'Supervisor';
                $_SESSION['numb'] = $numb;
                header("Location: back-end/supervisor");
                exit;
            }else {
                echo "<script>alert('Rol de usuario desconocido'); window.location.href='/baguette/IniciarSesion.html'</script>";
            }
        } else {
                echo "<script>alert('Usuario no existe o datos incorrectos'); window.location.href='/baguette/IniciarSesion.html'</script>";
                if (!isset($_SESSION['intento'])) {
                    $_SESSION['intento'] = 1;
                } else {
                    $_SESSION['intento']++;
                }
                echo "<script>alert('Credenciales incorrectas, intento '); window.location.href='/baguette/IniciarSesion.html'</script>;".$_SESSION['intento'];
        }
    }
?>

