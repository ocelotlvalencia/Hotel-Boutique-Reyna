<?php require_once "vistas/parte_superior.php"?>

<!--INICIO del cont principal-->
<div class="container">
    <h1>Clientes</h1>

 <?php
include_once '../bd/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$consulta = "SELECT id_cliente, nombre, apellidos, telefono, email, procedencia FROM cliente";
$resultado = $conexion->prepare($consulta);
$resultado->execute();
$data=$resultado->fetchAll(PDO::FETCH_ASSOC);
?>


    <br>
<div class="container">
        <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive">
                        <table id="tablaClientes" class="table table-striped table-bordered table-condensed" style="width:100%">
                        <thead class="text-center">
                            <tr>
                                <th>Id Cliente</th>
                                <th>Nombre</th>
                                <th>Apellidos</th>
                                <th>Telefono</th>
                                <th>Email</th>
                                <th>Procedencia</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach($data as $dat) {
                            ?>
                            <tr>
                                <td><?php echo $dat['id_cliente'] ?></td>
                                <td><?php echo $dat['nombre'] ?></td>
                                <td><?php echo $dat['apellidos'] ?></td>
                                <td><?php echo $dat['telefono'] ?></td>    
                                <td><?php echo $dat['email'] ?></td>
                                <td><?php echo $dat['procedencia'] ?></td>
                                <td></td>
                            </tr>
                            <?php
                                }
                            ?>
                        </tbody>
                       </table>
                    </div>
                </div>
        </div>
    </div>

<!--Modal para CRUD-->
<div class="modal fade" id="modalCRUD" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
        <form id="formClientes">
            <div class="modal-body">
                <div class="form-group">
                <input type="hidden" class="form-control" id="id_cliente">
                <input type="hidden" class="form-control" id="opcion">
                <label for="nombre" class="col-form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre">
                </div>
                <div class="form-group">
                <label for="apellidos" class="col-form-label">Apellidos</label>
                <input type="text" class="form-control" id="apellidos">
                </div>
                <div class="form-group">
                <label for="telefono" class="col-form-label">Telefono</label>
                <input type="number" class="form-control" id="telefono">
                </div>
                <div class="form-group">
                <label for="email" class="col-form-label">Email</label>
                <input type="text" class="form-control" id="email">
                </div> 
                <div class="form-group">
                <label for="procedencia" class="col-form-label">Procedencia</label>
                <input type="text" class="form-control" id="procedencia">
                </div>       
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>
                <button type="submit" id="btnGuardar" class="btn btn-dark">Guardar</button>
            </div>
        </form>
        </div>
    </div>
</div>
</div>
<!--FIN del cont principal-->
<?php require_once "vistas/parte_inferior.php"?>