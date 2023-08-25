<?php require_once "vistas/parte_superior.php"?>

<!--INICIO del cont principal-->
<div class="container">
    <h1>Habitaciones Reservadas</h1>
    
    
 <?php
include_once '../bd/conexion.php'; //conecta a la bd a la pag principal de habitaciones
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$consulta = "SELECT id, fecha_llegada, fecha_salida, num_personas FROM reserva";
$resultado = $conexion->prepare($consulta);
$resultado->execute();
$data=$resultado->fetchAll(PDO::FETCH_ASSOC);
?>


   
    <br>  
<div class="container">
        <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive">        
                        <table id="tablaReserva" class="table table-striped table-bordered table-condensed" style="width:100%">
                        <thead class="text-center">
                            <tr>
                                <th>Id Reservaciones</th>
                                <th>Fecha llegada</th>
                                <th>Fecha Salida</th>                                
                                <th>Numero Personas</th> 
                            </tr>
                        </thead>
                        <tbody>
                            <?php                            
                            foreach($data as $dat) {                                                        
                            ?>
                            <tr>
                                <td><?php echo $dat['id'] ?></td>
                                <td><?php echo $dat['fecha_llegada'] ?></td>
                                <td><?php echo $dat['fecha_salida'] ?></td>
                                <td><?php echo $dat['num_personas'] ?></td>
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
        <form id="formReservas">    
            <div class="modal-body">
                <div class="form-group">
                <label for="fecha_llegada" class="col-form-label">Fecha llegada</label>
                <input type="date" class="form-control" id="fecha_llegada">
                </div>
                <div class="form-group">
                <label for="fecha_salida" class="col-form-label">Fecha Salida</label>
                <input type="date" class="form-control" id="fecha_salida">
                </div>                
                <div class="form-group">
                <label for="num_personas" class="col-form-label">Numero de Personas</label>
                <input type="number" class="form-control" id="num_personas">
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