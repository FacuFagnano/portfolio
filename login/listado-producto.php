<?php


include_once("config.php");
include_once("entidades/producto.php");

$producto = new Producto();


if (isset($_GET["id"]) && ($_GET["id"] > 0) && isset($_GET["do"]) && $_GET["do"] == "eliminar") {
    $producto->idproducto = $_GET["id"];
    $producto->eliminar();
    header("locaction: listado-producto.php");
}

$array_producto = $producto->obtenerTodos();

include_once("header.php");

?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Productos</h1>
    <form action method="POST">
    <div class="col-12 mb-3">
        <div class="row">
            <div class="col-12 mb-3">
                <a href="producto-formulario.php" class="btn btn-primary mr-2">Nuevo</a>
            </div>
        </div>
        <table class="table table-hover border text-center">
            <tr>
                <th>Foto</th>
                <th>Nombre</th>
                <th>Cantidad</th>
                <th>Precio</th>
                <th>Acciones</th>
            </tr>
            <?php foreach ($array_producto as $item) { ?>
                <tr>
                    <td class="w-25"><img src="archivos/<?php echo $item->imagen?>" class="w-50 img-thumbnail"></td>
                    <td><?php echo $item->nombre ?></td>
                    <td><?php echo $item->cantidad ?></td>
                    <td>$<?php echo number_format($item->precio, 2, ",", ".") ?></td>
                    <td><a href="producto-formulario.php?id=<?php echo $item->idproducto ?>"><span class="btn btn-success mr-2" id="btnModificar" name="btnModificar">Modificar</span></a>
                        <a href="listado-producto.php?id=<?php echo $item->idproducto ?>&do=eliminar"><span class="btn btn-danger" id="btnBorrar" name="btnBorrar">Borrar</span></a></td>
                <?php } ?>
                </tr>
        </table>
    </div>


</div>
</div>

<?php
include_once("footer.php")
?>