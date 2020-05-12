<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon navbar-toggler-icon fa fa-bars"></span>
</button>
<div class="container">
    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav pt-4 pt-sm-0 mr-auto">
            <li class="nav-item mx-5 mx-sm-0">
                <a class="nav-link text-left text-sm-center <?php echo $pg == "index"? "active": "";?>" href="index.php">INICIO</a>
            </li>
            <li class="nav-item mx-5 mx-sm-0">
                <a class="nav-link text-left text-sm-center <?php echo $pg == "sobre-mi"? "active": "" ?>" href="sobre-mi.php">SOBRE MÍ</a>
            </li>
            <li class="nav-item mx-5 mx-sm-0">
                <a class="nav-link text-left text-sm-center <?php echo $pg == "proyecto"? "active": "" ?>" href="proyecto.php">PROYECTOS</a>
            </li>
            <li class="nav-item mx-5 mx-sm-0">
                <a class="nav-link text-left text-sm-center <?php echo $pg == "contacto"? "active": "" ?>" href="contacto.php">CONTACTO</a>
            </li>
        </ul>
    </div>
</div>