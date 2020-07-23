<?php

include_once("config.php");
include_once("entidades/cliente.php");
include_once("entidades/provincia.php");


$cliente = new Cliente();
$cliente->cargarFormulario($_REQUEST);

$provincia = new Provincia();
$array_provincia = $provincia->obtenerTodos();


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

        <div class="row">
            <div class="col-12">  
                <div class="card mb-3">
                    <div class="card-header">
                        <i class="fa fa-table"></i> Domicilios
                        <div class="pull-right">
                            <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#modalDomicilio">Agregar</button>
                            <!-- Button trigger modal -->
                            <div class="modal fade" id="modalDomicilio" tabindex="-1" role="dialog" aria-labelledby="modalDomicilioLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="modalDomicilioLabel">Domicilio</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <label for="lstTipo">Tipo:</label>
                                            <select name="lstTipo" id="lstTipo" class="form-control">
                                                    <option value="" selected disabel>Seleccionar</option>
                                                    <option value="1">Personal</option>
                                                    <option value="2">Laboral</option>
                                                    <option value="3">Comercial</option>
                                            </select><br>
                                            <label for="lstProvincia">Provincia:</label>
                                            <select name="lstProvincia" id="lstProvincia" class="form-control">
                                                <option value="" selected disabel>Seleccionar</option>
                                                <?php foreach ($array_provincia as $prov) {
                                                            if ($provincia->idprovincia == $prov->idprovincia) {
                                                                echo "<option selected value=" . $prov->idprovincia . "> $prov->nombre </option>";
                                                            } else {
                                                                echo "<option value=" . $prov->idprovincia . "> $prov->nombre </option>";
                                                            }
                                                        }?>
                                            </select><br>
                                            <label for="lstLocalidad">Localidad:</label>
                                            <select name="lstLocalidad" id="lstLocalidad" class="form-control">
                                                <option value="" selected disabel>Seleccionar</option>
                                            </select><br>
                                            <label for="txtDireccion" >Dirección:</label>
                                            <input type="text" name="txtDireccion" id="txtDireccion" class="form-control">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                            <button type="button" class="btn btn-primary">Agregar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <table id="grilla" class="display" style="width:98%">
                            <thead>
                                <tr>
                                    <th>Tipo</th>
                                    <th>Provincia</th>
                                    <th>Localidad</th>
                                    <th>Dirección</th>
                                </tr>
                            </thead>
                        </table> 
                    </div>
                </div>          
            </div>
        </div>
    </div>
</div>

<script>
window.onload = function(){
$(document).ready( function () {
    $('#grilla').DataTable();
} );
}   
</script>
<?php
include_once("footer.php");
?>