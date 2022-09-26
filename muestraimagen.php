<?php
require_once("controllers/img-controllers.php");
if (isset($_GET["num"])) {
    $num = $_GET["num"];
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="styles.css" rel="stylesheet">
    <style>
        h3 {
            color: white;
        }
        h4 {
            font-size: 17px;
            color: rgba(255, 254, 254, 0.5);
        }
    </style>
    <title>Hasmir Solis</title>
</head>
<body>
    <div class="login-box3">

    <h2>Programa 1</h2>

    <?php foreach (img_controller::Mostrar() as $imag) { 
        
            if($imag->getId() == $num){ ?>
                <h3 style="text-align: center;">ID:</h3>
                <h5 style="text-align: center;"><?php echo $imag->getId() ?></h5>

                <h3 style="text-align: center;">DESCRIPCION</h3>
                <h5 style="text-align: center;"><?php echo $imag->getDescripcion() ?></h5>

                <h3 style="text-align: center;">RUTA DE MINIATURA:</h3>
                <h5 style="text-align: center;"><?php echo $imag->getRuta() ?></h5>

                <h3 style="text-align: center;">IMAGEN MINIATURA</h3>
                <h5 style="text-align: center;"><img src="<?php echo $imag->getRuta() ?>" width="150" height="100"></h5>

                <h3 style="text-align: center;">RUTA IMAGEN GRANDE:</h3>
                <h5 style="text-align: center;"><?php echo $imag->getRuta() ?></h5>

                <h3 style="text-align: center;">IMAGEN GRANDE:</h3>
                <h5 style="text-align: center;"> <img src="<?php echo $imag->getRuta() ?>" width="500" height="333"></h5>
            <?php } 

        }?>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>