<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

 $pg = "index";

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <script src="js/jquery-3.4.1.slim.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</head>

<body id="home">
    <nav class="navbar navbar-expand-sm">
        <?php include_once("menu.php"); ?>
    </nav>
    <div class="container">
        <section id="index">
            <div class="row">
                <div class="col-12 my-4 mt-sm-5 pt-sm-5">
                    <h1>¡Hola! <br>
                        Soy Facundo Damián Fagnano</h1>
                    <h5>DESARROLLADOR FULL STACK.</H5>
                </div>
                <div class="col-12">
                    <a href="proyecto.php" class="btn">¡MIRÁ MI TRABAJO!</a>
                </div>
            </div>
            <div class="row d-sm-none">
                <div class="col-12 text-right py-5">Patrocinado por <br>
                    <a href="http://depcsuite.com" target="_blank">DePC Suite</a>
                </div>
            </div>
        </section>
    </div>
<div>
    <?php include_once("footer.php")?>
</div>
</body>

</html>