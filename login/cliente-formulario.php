<?php

include_once("config.php");
include_once("entidades/cliente.php");

$cliente = new Cliente();
$cliente->cargarFormulario($_REQUEST);


if ($_POST) {
    if (isset($_POST["btnGuardar"])) {
        if (isset($_GET["id"]) && $_GET["id"] > 0) {
            $cliente->actualizar();
        } else {
            $cliente->insertar();
        }
    } else if (isset($_POST["btnBorrar"])) {
        $cliente->eliminar();
        header("location: cliente-formulario.php");
    }
}

if (isset($_GET["id"]) && $_GET["id"] > 0) {
    $cliente->obtenerPorId();
}

$msg = "Cliente guardado correctamente";


include_once("header.php");

?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Clientes</h1>
    <form action method="POST">
        <div class="row">
            <div class="col-12 mb-3">
                <a href="listado-cliente.php" class="btn btn-primary mr-2">Listado</a>
                <button type="submit" class="btn btn-success mr-2" id="btnGuardar" name="btnGuardar">Guardar</button>
                <?php if (isset($_GET["id"])) {
                    echo "<button type='submit' class='btn btn-danger mr-2' id='btnBorrar' name='btnBorrar'>Eliminar</button>
                <a href='cliente-formulario.php' class='btn btn-info mr-2'>Nuevo</a>";
                } ?>
            </div>
        </div>
        <div class="row">
            <div class="col-6 form-group py-2">
                <input type="text" required="" class="form-control" name="txtNombre" id="txtNombre" value="<?php echo $cliente->nombre ?>" placeholder="Nombre del Cliente">
            </div>
            <div class="col-6 form-group py-2">
                <input type="text" required="" class="form-control" name="txtCuit" id="txtCuit" class="form-control" value="<?php echo $cliente->cuit ?>" placeholder="CUIT">
            </div>
        </div>
        <div class="row">
            <div class="col-6 form-group py-2">
                <input type="text" required="" class="form-control" name="txtTelefono" id="txtTelefono" value="<?php echo $cliente->telefono ?>" placeholder="Telefono">
            </div>
            <div class="col-6 form-group py-2">
                <input type="email" class="form-control" name="txtCorreo" id="txtCorreo" value="<?php echo $cliente->correo ?>" placeholder="eMail">
            </div>
        </div>
        <div class="row">
            <div class="col-2 form-group">
                <a>Fecha de Nacimiento:</p>
                    <input type="date" class="form-control text-center" name="txtFechaNac" id="txtFechaNac" value="<?php echo $cliente->fecha_nac ?>">
            </div>
        </div>
    </form>
</div>
</div>

<?php
include_once("footer.php");
?>