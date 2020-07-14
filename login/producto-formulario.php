<?php


include_once("config.php");
include_once("entidades/tipo_producto.php");
include_once("entidades/producto.php");

$producto = new Producto();
$producto->cargarFormulario($_REQUEST);


$tipoProducto = new TipoProducto();
$array_tipo_producto = $tipoProducto->obtenerTodos();



if ($_POST) {
    if (isset($_POST["btnGuardar"])) {
        $productoAux = new Producto();
        $productoAux->idproducto = $_GET["id"];
        $productoAux->obtenerPorId();
        $imagenAnterior = $productoAux->imagen;
        if (isset($_GET["id"]) && $_GET["id"] > 0) {
            if ($_FILES["txtImagen"]["error"] === UPLOAD_ERR_OK) {
                $nombreAleatorio = date("Ymdhmsi");
                $archivo_tmp = $_FILES["txtImagen"]["tmp_name"];
                $nombreArchivo = $_FILES["txtImagen"]["name"];
                $extension = pathinfo($nombreArchivo, PATHINFO_EXTENSION);
                $nombreImagen = $nombreAleatorio . "." . $extension;
                move_uploaded_file($archivo_tmp, "archivos/$nombreImagen");
            }
            if ($_FILES["txtImagen"]["error"] !== UPLOAD_ERR_OK) {
                $nombreImagen = $imagenAnterior;
            } else {
            if ($imagenAnterior != "") {
                    unlink("archivos/$imagenAnterior");
                }
            }
            
        $producto->imagen = $nombreImagen;
        $producto->actualizar();
        } else {
            if ($_FILES["txtImagen"]["error"] === UPLOAD_ERR_OK) {
                $nombreAleatorio = date("Ymdhmsi");
                $archivo_tmp = $_FILES["txtImagen"]["tmp_name"];
                $nombreArchivo = $_FILES["txtImagen"]["name"];
                $extension = pathinfo($nombreArchivo, PATHINFO_EXTENSION);
                $nombreImagen = $nombreAleatorio . "." . $extension;
                move_uploaded_file($archivo_tmp, "archivos/$nombreImagen");
            }
        $producto->imagen = $nombreImagen;
        $producto->insertar();
        }      
    } else if (isset($_POST["btnBorrar"])) {
        $producto->eliminar();
        header("location: producto-formulario.php");
    }

}

if (isset($_GET["id"]) && $_GET["id"] > 0) {
    $producto->obtenerPorId();
}

include_once("header.php");

?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Productos</h1>
    <form action method="POST" enctype="multipart/form-data">
        <div class="row">
            <div class="col-12 mb-3">
                <a href="listado-producto.php" class="btn btn-primary mr-2">Listado</a>
                <button type="submit" class="btn btn-success mr-2" id="btnGuardar" name="btnGuardar">Guardar</button>
                <?php if (isset($_GET["id"])) {
                    echo "<button type='submit' class='btn btn-danger mr-2' id='btnBorrar' name='btnBorrar'>Eliminar</button>
                <a href='producto-formulario.php' class='btn btn-info mr-2'>Nuevo</a>";
                } ?>
            </div>
        </div>
        <div class="row">
            <div class="col-6 form-group py-3">
                <input type="text" required="" class="form-control" name="txtNombre" id="txtNombre" value="<?php echo $producto->nombre ?>" placeholder="Nombre del Producto">
            </div>
            <div class="col-6 form-group py-3">
                <select name="lstTipoProducto" id="lstTipoProducto" class="form-control">
                    <option value="0" disabled selected>Tipo de producto</option>
                    <?php foreach ($array_tipo_producto as $item) {
                        if ($producto->fk_idtipoproducto == $item->idtipoproducto) {
                            echo "<option selected value=" . $item->idtipoproducto . "> $item->nombre </option>";
                        } else {
                            echo "<option value=" . $item->idtipoproducto . "> $item->nombre </option>";
                        }
                    }
                    ?>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col-6 form-group">
                <label for="txtCantidad">Cantidad</label>
                <input type="number" required="" class="form-control" name="txtCantidad" id="txtCantidad" value="<?php echo $producto->cantidad ?>" placeholder="Cantidad">
            </div>
            <div class="col-6 form-group">
                <label for="txtPrecio">Precio:</label>
                <input type="text" class="form-control" name="txtPrecio" id="txtPrecio" value="<?php echo $producto->precio ?>" placeholder="Precio">
            </div>
        </div>
        <div class="row">
            <div class="col-6 form-group">
                <label for="txtImagen">Imagen del producto</label>
                <input type="file" class="form-control" name="txtImagen" id="txtImagen" value="<?php echo $producto->imagen ?>">
            </div>

        </div>
        <div class="row">
            <div class="col-12 form-group py-3">
                <textarea type="text" name="txtDescripcion" id="txtDescripcion" placeholder="Descripción del producto..."><?php echo $producto->descripcion ?></textarea>
            </div>
            <script>
                ClassicEditor
                    .create(document.querySelector('#txtDescripcion'))
                    .catch(error => {
                        console.error(error);
                    });
            </script>
        </div>
    </form>
</div>
</div>

<?php
include_once("footer.php");
?>