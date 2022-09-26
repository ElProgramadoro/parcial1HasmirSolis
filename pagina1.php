<?php
require_once("controllers/img-controllers.php");

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Hasmir Solis</title>
</head>
<body>
    <div class="login-box2">

    <h2>Programa 1</h2>

    <table class="table table-light table-striped">
            <tr>
                <th style="text-align: center;">ID</th>
                <th style="text-align: center;">Descripcion</th>
                <th style="text-align: center;">Miniatura</th>
                <th style="text-align: center;">Boton 1</th>
                <th style="text-align: center;">Boton 2</th>
            </tr>
            <?php foreach (img_controller::Mostrar() as $imag) { ?>
                <tr>
                    <th style="text-align: center;" scope="row"><?php echo $imag->getId() ?></th>
                    <td style="text-align: center;"><?php echo $imag->getDescripcion() ?></td>
                    <td style="text-align: center;"><img src="<?php echo $imag->getRuta() ?>" width="150" height="100"></td>
                    
                    <td style="text-align: center;">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $imag->getId() ?>">
                            Ver imagen
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal<?php echo $imag->getId() ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <img src="<?php echo $imag->getRuta() ?>" width="500" height="333">
                                    </div>
                                    <div class="modal-footer">
                                        <!--<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                        <button type="button" class="btn btn-primary">Listo</button>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td style="text-align: center;">
                    <a href="<?php echo $imag->getUrl() ?>" style="text-declaration:none">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">                            
                            Ver datos
                        </button>
                    </a>
                    </td>
                </tr>
            <?php } ?>
        </table>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>