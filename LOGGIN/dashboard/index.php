<?php require_once "vistas/parte_superior.php"?>

<!--INICIO del cont principal-->
<div class="container">
    <h1>Habitaciones</h1>

 <?php
include_once '../bd/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$consulta = "SELECT id_habitacion, tipo, num_habitacion, max_personas, descripcion, costo_base, estado FROM habitacion";
$resultado = $conexion->prepare($consulta);
$resultado->execute();
$data=$resultado->fetchAll(PDO::FETCH_ASSOC);
?>

<br>
<div class="container">
        <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive">
                        <table id="tablaHabitaciones" class="table table-striped table-bordered table-condensed" style="width:100%">
                        <thead class="text-center">
                            <tr>
                                <th>Id Habitación</th>
                                <th>Tipo</th>
                                <th>Numero Habitación</th>
                                <th>Máximo Personas</th>
                                <th>Descripción</th>
                                <th>Costo Base</th>
                                <th>Estado </th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach($data as $dat) {
                            ?>
                            <tr>
                                <td><?php echo $dat['id_habitacion'] ?></td>
                                <td><?php echo $dat['tipo'] ?></td>
                                <td><?php echo $dat['num_habitacion'] ?></td>
                                <td><?php echo $dat['max_personas'] ?></td>    
                                <td><?php echo $dat['descripcion'] ?></td>
                                <td><?php echo $dat['costo_base'] ?></td>
                                <td><?php echo $dat['estado'] ?></td>
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
        <form id="formPersonas">
            <div class="modal-body">
                <div class="form-group">
                <input type="hidden" class="form-control" id="id_hab">
                <input type="hidden" class="form-control" id="opcion">
                <label for="tipo" class="col-form-label">Tipo</label>
                <input type="text" class="form-control" id="tipo">
                </div>
                <div class="form-group">
                <label for="num_habitacion" class="col-form-label">Numero Habitación</label>
                <input type="number" class="form-control" id="num_habitacion">
                </div>
                <div class="form-group">
                <label for="max_personas" class="col-form-label">Máximo de Personas</label>
                <input type="number" class="form-control" id="max_personas">
                </div>
                <div class="form-group">
                <label for="descripcion" class="col-form-label">Descripción</label>
                <input type="text" class="form-control" id="descripcion">
                </div> 
                <div class="form-group">
                <label for="costo_base" class="col-form-label">Costo Base</label>
                <input type="number" class="form-control" id="costo_base">
                </div>             
                <div class="form-group">
                <label for="estado" class="col-form-label">Estado (1= disponible, 0=no disponible)</label>
                <input type="text" class="form-control" id="estado">
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