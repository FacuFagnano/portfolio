<?php


include_once("config.php");
include_once("entidades/venta.php");
include_once("entidades/cliente.php");
include_once("entidades/producto.php");

$venta = new Venta();
$venta->cargarFormulario($_REQUEST);



$producto = new Producto();
$array_producto = $producto->obtenerTodos();

$cliente = new Cliente();
$array_cliente = $cliente->obtenerTodos();

if ($_POST) {
    if (isset($_POST["btnGuardar"])) {
        if (isset($_GET["id"]) && $_GET["id"] > 0) {
            $venta->actualizar();
        } else {
            $venta->insertar();
        }
    } else if (isset($_POST["btnBorrar"])) {
        $venta->eliminar(); 
        header("location: venta-formulario.php");
    }
}

if (isset($_GET["id"]) && $_GET["id"] > 0) {
    $venta->obtenerPorId();
}

include_once("header.php");

?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Ventas</h1>
    <form action method="POST">
        <div class="row">
            <div class="col-12 mb-3">
                <a href="listado-venta.php" class="btn btn-primary mr-2">Listado</a>
                <button type="submit" class="btn btn-success mr-2" id="btnGuardar" name="btnGuardar">Guardar</button>
                <?php if (isset($_GET["id"])) {
                    echo "<button type='submit' class='btn btn-danger mr-2' id='btnBorrar' name='btnBorrar'>Eliminar</button>
                    <a href='venta-formulario.php' class='btn btn-info mr-2'>Nuevo</a>";
                } ?>
            </div>
        </div>
        <div class="row">
            <div class="col-6 form-group">
                <a>Fecha:</p>
                    <input type="date" required="" class="form-control" name="txtFecha" id="txtFecha" value="<?php echo date_format(date_create($venta->fecha), "Y-m-d") ?>">
            </div>
            <div class="col-6 form-group">
                <a>Hora:</p>
                    <input type="time" required="" class="form-control" name="txtHora" id="txtHora" value="<?php echo date_format(date_create($venta->fecha), "H:h") ?>">
            </div>
        </div>
        <div class="row">
            <div class="col-6 form-group py-3">
                <select name="lstCliente" id="lstCliente" class="form-control">
                    <option value="0" disabled selected>Cliente</option>
                    <?php foreach ($array_cliente as $item) {
                        if ($venta->fk_idcliente == $item->idcliente) {
                            echo "<option selected value=" . $item->idcliente . "> $item->nombre </option>";
                        } else {
                            echo "<option value=" . $item->idcliente . "> $item->nombre </option>";
                        }
                    }?>
                </select>
            </div>
            <div class="col-6 form-group py-3">
                <select name="lstProducto" id="lstProdcuto" class="form-control">
                    <option value="0" disabled selected>Prodcuto</option>
                    <?php foreach ($array_producto as $item) {
                        if ($venta->fk_idproducto == $item->idproducto) {
                            echo "<option selected value=" . $item->idproducto . "> $item->nombre </option>";
                        } else {
                            echo "<option value=" . $item->idproducto . "> $item->nombre </option>";
                        }
                    } ?>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-6 form-group">
                <label for="txtPreciounitario">Precio unitario:</label>
                <input type="number" class="form-control" name="txtPreciounitario" id="txtPreciounitario" value="<?php echo $venta->preciounitario ?>" placeholder="Precio Unitario">
            </div>
            <div class="col-6 form-group">
                <label for="txtCantidad">Cantidad:</label>
                <input type="number" required="" class="form-control" name="txtCantidad" id="txtCantidad" value="<?php echo $venta->cantidad ?>" placeholder="Cantidad">
            </div>
        </div>
        <div class="row">
            <div class="col-6 form-group">
                <label for="txtTotal">Total:</label>
                <input type="number" required="" class="form-control" name="txtTotal" id="txtTotal" value="<?php echo $venta->total ?>" placeholder="Total">

            </div>
        </div>
    </form>
</div>
</div>

<?php
include_once("footer.php");
?>