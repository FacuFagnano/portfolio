<?php


include_once("config.php");
include_once("entidades/cliente.php");

$cliente = new Cliente();



if (isset($_GET["id"]) && $_GET["id"] > 0 && isset($_GET["do"]) && $_GET["do"] == "eliminar") {
    $cliente->idcliente = $_GET["id"];
    $cliente->eliminar();
    }

$array_cliente = $cliente->obtenerTodos();

include_once("header.php");

?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Clientes</h1>
    <form action method="POST">
        <div class="row">
            <div class="col-12 mb-3">
                <a href="cliente-formulario.php" class="btn btn-primary mr-2">Nuevo</a>
            </div>
        </div>
        <table class="table table-hover border text-center">
            <tr>
                <th>Nombre</th>
                <th>CUIT</th>
                <th>Teléfono</th>
                <th>eMail</th>
                <th>Fecha de Nacimiento</th>
                <th>Acciones</th>
            </tr>
            <?php foreach ($array_cliente as $item) { ?>
                <tr> 
                    <td><?php echo $item->nombre ?></td>
                    <td><?php echo $item->cuit ?></td>
                    <td><?php echo $item->telefono ?></td>
                    <td><?php echo $item->correo ?></td>
                    <td><?php echo date_format(date_create($item->fecha_nac),"d/m/Y") ?></td>
                    <td><a href="cliente-formulario.php?id=<?php echo $item->idcliente ?>"><span class="btn btn-success mr-2" id="btnModificar" name="btnModificar">Modificar</span></a>
                    <a href="listado-cliente.php?id=<?php echo $item->idcliente ?>&do=eliminar"><span class="btn btn-danger" id="btnBorrar" name="btnBorrar">Borrar</span></a></td>
                <?php } ?>
                </tr>
        </table>


</div>
</div>

<?php
include_once("footer.php")
?>