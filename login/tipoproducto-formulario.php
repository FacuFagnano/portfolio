<?php


include_once("config.php");
include_once("entidades/tipo_producto.php");

$tipoproducto = new TipoProducto();
$tipoproducto->cargarFormulario($_REQUEST);

if ($_POST) {
    if (isset($_POST["btnGuardar"])) {
        if (isset($_GET["id"]) && $_GET["id"] > 0) {
            $tipoproducto->actualizar();
            $msg = "El tipo de producto se ha actualizado correctamente";
        } else {
            $tipoproducto->insertar();
            $msg = "El tipo de producto se ha agregado correctamente";
        }
    } else if (isset($_POST["btnBorrar"])) {
        $tipoproducto->eliminar();
        header("location: listado-tipoproducto.php");
        $msg = "El tipo de producto se ha eliminado correctamente";
    }
}

if (isset($_GET["id"]) && $_GET["id"] > 0) {
    $tipoproducto->obtenerPorId();
}


include_once("header.php");

?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Tipo de Producto</h1>
    <form action method="POST">
        <div class="row">
            <div class="col-12 mb-3">
                <a href="listado-tipoproducto.php" class="btn btn-primary mr-2">Listado</a>
                <button type="submit" class="btn btn-success mr-2" id="btnGuardar" name="btnGuardar">Guardar</button>
                <?php if (isset($_GET["id"])) {
                    echo "<button type='submit' class='btn btn-danger mr-2' id='btnBorrar' name='btnBorrar'>Eliminar</button> 
                    <a href='tipoproducto-formulario.php' class='btn btn-info mr-2'>Nuevo</a>";
                } ?>
            </div>
        </div>
        <div class="row">
            <div class="col-6 form-group py-2">
                <input type="text" required="" class="form-control" name="txtNombre" id="txtNombre" value="<?php echo $tipoproducto->nombre ?>" placeholder="Nombre del Tipo de Producto">
            </div>
        </div>
    </form>
</div>
</div>

<?php
include_once("footer.php");
?>