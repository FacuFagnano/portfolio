<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre mí</title>
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
        <section id="sobre-mi">
            <div class="row pt-5">
                <div class="col-12 col-sm-7">
                    <div class="row">
                        <div class="col-12">
                            <h1>Sobre mí</h1>
                        </div>
                        <div class="col-12 mt-3">
                            <h2>Dando mis primeros pasos en la programación, con la intención de correr.
                                <br> Ex periodista especializado en deportes.
                            </h2>
                        </div>
                        <div class="col-6 my-5">
                            <a href="files/FacundoDamianFagnanoCV.pdf" class="btn">Descargar CV</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-5 text-center">
                    <div class="col-12 mt-3 text-center">
                        <img src="images/facu.jpg" alt="FacuFagnano">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-6 mt-3">
                    <div class="bg-white conocimientos">
                        <div class="row mx-2 mt-1 bg-white">
                            <div class="col-12 my-3">
                                <div class="icon">
                                    <i class="fas fa-code"></i>
                                </div>
                            </div>
                            <div class="col-12 pb-4">
                                <h2>LENGUAJES DE PROGRAMACIÓN</h2>
                                <br>
                                <p>PHP, Laravel, HTML, CSS, Bootstrap, Javascrpit, jQuery, React.js, MySQL/MariaDB</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 mt-3">
                    <div class="bg-white conocimientos">
                        <div class="row mx-2 mt-1 bg-white">
                            <div class="col-12 my-3">
                                <div class="icon">
                                    <i class="fas fa-laptop"></i>
                                </div>
                            </div>
                            <div class="col-12 pb-4">
                                <h2>SOFTWARE</h2>
                                <br>
                                <p>Git, Heidi SQL, Sublime Text, XAMPP, Word, Excel</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-6 mt-3">
                    <div class="bg-white conocimientos">
                        <div class="row mx-2 mt-1 bg-white">
                            <div class="col-12 my-3">
                                <div class="icon">
                                    <i class="fas fa-comment-alt"></i>
                                </div>
                            </div>
                            <div class="col-12 pb-4">
                                <h2>IDIOMAS</h2>
                                <br>
                                <p>INGLES - Intermediate B1 <br>
                                    ESPAÑOL - Nativo
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 mt-3">
                    <div class="bg-white conocimientos">
                        <div class="row mx-2 mt-1 bg-white">
                            <div class="col-12 my-3">
                                <div class="icon">
                                    <i class="fas fa-puzzle-piece"></i>
                                </div>
                            </div>
                            <div class="col-12 pb-4">
                                <h2>HOBBIES</h2>
                                <br>
                                <p>Actividad física, viajar, fútbol.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <section class="experiencias">
        <div class="container">
            <div class="row mt-3">
                <div class="col-12 pt-4">
                    <h2>Experiencia laboral</h2>
                </div>
            </div>
            <div class="row mt-4 py-4" id="underline">
                <div class="col-sm-2 text-sm-left col-12 text-center">
                    <h6>2016 - PRESENTE</h6>
                    <p>C.A.B.A., Argentina</p>
                    <img src="images/AOMA.png" alt="AOMA">
                </div>
                <div class="col-sm-4 col-12 text-center py-sm-0 py-3">
                    <h6>ASOCIACIÓN OBRERA MINERA ARGENTINA</h6>
                    <p>Administrativo Contable</p>
                </div>
                <div class="col-sm-6 text-sm-left col-12 text-center">
                    <p>Control y carga de facturación; asientos contables; manejo de caja; balances; pagos a
                        prestadores y proveedores; manejo sistema Interbanking.</p>
                </div>
            </div>
            <div class="row py-4">
                <div class="col-sm-2 text-sm-left col-12 text-center">
                    <h6>2012 - 2018</h6>
                    <p>Argentina</p>
                    <img src="images/lxr.png" alt="Loco X El Rojo">
                </div>
                <div class="col-sm-4 col-12 text-center py-sm-0 py-3">
                    <h6><a href="http://www.locoxelrojo.com/independiente/author/facundo-fagnano/" target="_blank">www.locoxelrojo.com</a></h6>
                    <p>Periodista Gráfico</p>
                </div>
                <div class="col-sm-6 text-sm-left col-12 text-center">
                    <p>Crónicas; entrevistas; notas de color; puntajes; notas de opinión; recopilación de datos;
                        estadísticas.</p>
                </div>
            </div>
            <div class="row d-sm-none">
                <div class="col-12 text-right pb-5">Patrocinado por <br>
                    <a href="http://depcsuite.com" target="_blank">DePC Suite</a>
                </div>
            </div>
        </div>
    </section>
    <div>
        <?php include_once("footer.php") ?>
    </div>
</body>

</html>