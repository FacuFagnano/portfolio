<?php


include_once("config.php");
include_once("entidades/venta.php");
include_once("entidades/producto.php");
include_once("entidades/cliente.php");

$venta = new Venta();


if (isset($_GET["id"]) && ($_GET["id"] > 0) && isset($_GET["do"]) && $_GET["do"] == "eliminar") {
    $venta->idventa = $_GET["id"];
    $venta->eliminar();
}


$array_venta = $venta->obtenerTodos();
$array_venta = $venta->cargarGrilla();

include_once("header.php");

?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Ventas</h1>
    <form action method="POST">
        <div class="row">
            <div class="col-12 mb-3">
                <a href="venta-formulario.php" class="btn btn-primary mr-2">Nuevo</a>
            </div>
        </div>
        <table class="table table-hover border text-center">
            <tr>
                <th>Fecha y Hora</th>
                <th>Cantidad</th>
                <th>Producto</th>
                <th>Cliente</th>
                <th>Total</th>
                <th>Acciones</th>
            </tr>
            <?php foreach ($array_venta as $item) { ?>
                <tr>
                    <td><?php echo date_format(date_create($item->fecha),"d/m/Y H:m") ?></td>
                    <td><?php echo $item->cantidad; ?></td>
                    <td><?php echo $item->nombre_producto ?></td>
                    <td><?php echo $item->nombre_cliente ?></td>
                    <td>$<?php echo number_format($item->total, 2, ",", "."); ?></td>
                    <td><a href="venta-formulario.php?id=<?php echo $item->idventa ?>"><span class="btn btn-success mr-2" id="btnModificar" name="btnModificar">Modificar</span></a>
                        <a href="listado-venta.php?id=<?php echo $item->idventa ?>&do=eliminar"><span class="btn btn-danger" id="btnBorrar" name="btnBorrar">Borrar</span></a></td>
                <?php } ?>
                </tr>
        </table>


</div>
</div>

<?php
include_once("footer.php");
?>