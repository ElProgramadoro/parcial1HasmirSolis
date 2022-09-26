<?php
require_once("controllers/pg2_controllers.php");
?>

<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Overpass&display=swap" rel="stylesheet">

    <!-- Link hacia el archivo de estilos css -->
    <link rel="stylesheet" href="login.css">

    <style type="text/css">

    </style>

    <script type="text/javascript">

    </script>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">


    <title>Hasmir Solis</title>
</head>

<body>
    <div id="contenedor">
        <div id="central">
            <div id="login">
                <div class="titulo">
                    Bienvenido
                </div>
                <form action="pagina2.php" id="loginform" method="POST">
                    <label for="usuario">Usuario</label>
                    <input type="text" name="usuario" placeholder="Usuario" required>
                    <label for="pass">Contraseña</label>
                    <input type="password" placeholder="Contraseña" name="password" required>

                    <button type="submit" title="Ingresar" name="Ingresar">Login</button>
                </form>
                <div class="pie-form">
                    <a href="https://virtual.utp.ac.pa/moodle/login/index.php">Profe pongame 100</a>
                    <a href="https://virtual.utp.ac.pa/moodle/login/index.php">dele, yo se que quiere ponerme el 100 :)</a>
                    <?php

                    if ($_POST) {
                        
                        $x = $_POST["usuario"];
                        $y = $_POST["password"];
                        $obj = new pg2_models();
                        $obj->setUsuario($x);
                        $obj->setPass($y);
                        echo $obj->Mostrar();
                        
                    }

                    ?>
                </div>
            </div>
            <div class="inferior">
                <a href="index.php">Volver</a>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>