<?php
include_once ("phpmailer/src/PHPMailer.php");
include_once ("phpmailer/src/SMTP.php");

if ($_POST){

    $nombre = $_POST["txtNombre"];
    $correo = $_POST["txtCorreo"];
    $asunto = $_POST["txtAsunto"];
    $mensaje = $_POST["txtMensaje"];
}

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <script src="js/jquery-3.4.1.slim.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-sm">
        <?php include_once("menu.php"); ?>
    </nav>
    <div class="container">
        <section id="contacto">
            <div class="row pt-5">
                <div class="col-12">
                    <h1>¡Trabajemos juntos!</h1>
                </div>
            </div>
            <div class="row pt-3">
                <div class="col-12 col-sm-6">
                    <h2>Para más detalles sobre mi trabajo podés ver mi <a href="https://ar.linkedin.com/in/facundo-dami%C3%A1n-fagnano-10462a175" target="_blank">
                            Linkedin</a>, descargar mi <a href="files/FacundoDamianFagnanoCV.pdf">CV</a> o mandarme un <a href="">mensaje.</a>
                    </h2>
                </div>
            </div>
            <div class="row pt-5">
                <div class="col-12 col-sm-10">
                    <form action="">
                        <div class="row">
                            <div class="col-12 col-sm-6 form-group">
                                <input type="text" name="txtNombre" id="txtNombre" class="form-control" required placeholder="NOMBRE">
                            </div>
                            <div class="col-12 col-sm-6 form-group">
                                <input type="email" name="txtCorreo" id="txtCorreo" class="form-control" required placeholder="EMAIL">
                            </div>
                            <div class="col-12 form-group">
                                <input type="text" name="txtArea" id="txtArea" class="form-control" required placeholder="ASUNTO">
                            </div>
                            <div class="col-12 form-group">
                                <textarea name="txtMensaje" id="txtMensaje" rows="7" class="form-control" placeholder="MENSAJE" required></textarea>
                            </div>
                        </div>
                        <div class="row py-2 text-center">
                            <div class="col-12">
                                <input type="submit" name="btnEnviar" value="ENVIAR" class="btn">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row d-sm-none">
                <div class="col-12 text-right mt-4 pb-5">Patrocinado por <br>
                    <a href="http://depcsuite.com" target="_blank">DePC Suite</a>
                </div>
            </div>
        </section>
    </div>
    <div>
        <?php include_once("footer.php") ?>
    </div>
</body>

</html>