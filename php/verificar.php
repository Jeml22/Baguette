<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="../assets/css/olvidecontraseña/codigo.css">
    <link rel="icon" href="https://raw.githubusercontent.com/Ronaldo07rgr/Repositorio_LaBaguette/master/assets/Icon/LaBaguette.ico">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/olvidecontraseña/olvideContraseña.css">

    <title>Inicias Sesión | LaBaguette</title>
</head>

<body >
    <div>
        <img class="fondo" src="https://i.ibb.co/9yQgb8k/imagen-2023-04-26-094643241.png">
    </div>
    <form action="./codigo.php" method="post">
        <div class="overlay" id="overlay">
            <div class="popup" id="popup">
                <div class="lol">
                    <p>Para proteger tu cuenta, se quiere verificar que eres tu quien esta
                        intentando iniciar sesion</p>
                </div>
                <div class="bo">
                    <label for="mensaje">Digite en codigo enviado</label>
                    <input type="number" id="number" name="codigos" required>
                </div>
                <div class="sec">
                    <button type="submit" class="bot">siguiente</button>
                    <button type="button" class="bot"><a href="../olvideContraseña.html">Volver</a> </button>
                </div>
            </div>
        </div>
    </form>
    <script src="./assets/js/olvideContraseña.js"></script>
</body>

</html>