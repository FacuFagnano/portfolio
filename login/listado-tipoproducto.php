<?php


include_once("config.php");
include_once("entidades/tipo_producto.php");

$tipoproducto = new Tipoproducto();


if (isset($_GET["id"]) && ($_GET["id"] > 0) && isset($_GET["do"]) && $_GET["do"] == "eliminar") {
    $tipoproducto->idtipoproducto = $_GET["id"];
    $tipoproducto->eliminar();
    }

$array_tipoproducto = $tipoproducto->obtenerTodos();

include_once("header.php");

?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Tipo de Productos</h1>
    <form action method="POST">
        <div class="row">
            <div class="col-12 mb-3">
                <a href="tipoproducto-formulario.php" class="btn btn-primary mr-2">Nuevo</a>
            </div>
        </div>
        <table class="table table-hover border text-left">
            <tr>
                <th>Nombre</th>
                <th>Acciones</th>
            </tr>
            <?php foreach ($array_tipoproducto as $item) { ?>
                <tr>
                    <td><?php echo $item->nombre ?></td>
                    <td><a href="tipoproducto-formulario.php?id=<?php echo $item->idtipoproducto ?>"><span class="btn btn-success mr-2" id="btnModificar" name="btnModificar">Modificar</span></a>
                        <a href="listado-tipoproducto.php?id=<?php echo $item->idtipoproducto ?>&do=eliminar"><span class="btn btn-danger" id="btnBorrar" name="btnBorrar">Borrar</span></a></td>
                <?php } ?>
                </tr>
        </table>


</div>
</div>

<?php
include_once("footer.php")
?>