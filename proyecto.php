<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$pg = "proyecto";

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyectos</title>
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
        <section id="proyectos">
            <div class="row pt-5">
                <div class="col-12">
                    <h1>Mis proyectos</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12 mt-2">
                    <h2>Estos son algunos de los trabajos que he realizado:
                    </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-6 mt-3">
                    <div class="bg-white clientes">
                        <img src="images/abmclientes.png" alt="AMB Clientes" class="img-fluid">
                        <div class="row mx-2 mt-1">
                            <div class="col-12">
                                <h2>AMB Clientes</h2>
                                <p>Alta, Baja, modificación de un registro de clientes empleando. Realizado en HTML,
                                    CSS, PHP, Bootstrap y Json.</p>
                            </div>
                        </div>
                        <div class="row m-2 pt-4">
                            <div class="col-6 pb-3">
                                <a href="./nueva-carpeta/index.php" target="_blank" class="btn">Ver Online</a>
                            </div>
                            <div class="col-6 mt-1 text-right">
                                <a href="https://github.com/" target="_blank">Código Fuente</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 mt-3">
                    <div class="bg-white clientes">
                        <img src="images/abmventas.png" alt="AMB Ventas" class="img-fluid">
                        <div class="row mx-2 mt-1">
                            <div class="col-12">
                                <h2>Sistema de gestión de ventas</h2>
                                <p>Gestión de clientes, productos y ventas. Realizado en HTML, CSS, PHP, MVC, Bootstrap,
                                    Js, Ajax, jQuery y MySQL de base de datos</p>
                            </div>
                        </div>
                        <div class="row m-2">
                            <div class="col-6 pb-3">
                                <a href="./login/login.php" target="_blank" class="btn">Ver Online</a>
                            </div>
                            <div class="col-6 mt-1 text-right">
                                <a href="https://github.com/" target="_blank">Código Fuente</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12 col-sm-6">
                    <div class="bg-white clientes">
                        <img src="images/sistema-admin.png" alt="Proyecto integrador" class="img-fluid">
                        <div class="row mx-2 mt-1">
                            <div class="col-12">
                                <h2>Proyecto integrador</h2>
                                <p>Proyecto Full Stack desarrollado en PHP, Laravel, Javascript, jQuery, AJAX, HTML,
                                    CSS, con panel administrador, gestor de usuarios, módulo de permisos y
                                    funcionalidades a fines.</p>
                            </div>
                        </div>
                        <div class="row m-2 pt-4">
                            <div class="col-6 pb-3">
                                <a href="" target="_blank" class="btn">Ver Online</a>
                            </div>
                            <div class="col-6 mt-2 text-right">
                                <a href="https://github.com/" target="_blank">Código Fuente</a>
                            </div>
                        </div>
                    </div>
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