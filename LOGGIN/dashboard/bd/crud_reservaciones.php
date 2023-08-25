<?php
include_once '../bd/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();
// Recepción de los datos enviados mediante POST desde el JS   

$id = (isset($_POST['id'])) ? $_POST['id'] : '';
$nombre = (isset($_POST['nombre'])) ? $_POST['nombre'] : '';
$num_habi = (isset($_POST['num_habi'])) ? $_POST['num_habi'] : '';
$personas = (isset($_POST['personas'])) ? $_POST['personas'] : '';
$descripcion = (isset($_POST['descripcion'])) ? $_POST['descripcion'] : '';
$costo = (isset($_POST['costo'])) ? $_POST['costo'] : '';
$estado = (isset($_POST['estado'])) ? $_POST['estado'] : '';
$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';

echo "op: ";
echo $opcion;

switch($opcion){
    case 1: //altas
        $consulta = "INSERT INTO habitacion (tipo, num_habitacion, max_personas, descripcion, costo_base, estado) VALUES(' $tipo, $num_habitacion', '$max_personas', '$descripcion', '$costo_base', '$estado') ";			
        $resultado = $conexion->prepare($consulta);
        $resultado->execute(); 

        $consulta = "SELECT id_habitacion, tipo, num_habitacion, max_personas, descripcion, costo_base, estado FROM habitacion ORDER BY id_habitacion DESC LIMIT 1";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
    case 2: //modificación
        $consulta = "UPDATE habitacion SET tipo = '$nombre', num_habitacion = '$num_habi', max_personas = '$personas', descripcion = '$descripcion', costo_base = '$costo', estado = '$estado' WHERE id_habitacion = '$id' ";
        // $consulta = "UPDATE habitacion SET tipo = '$nombre' num_habitacion = '$num_habi', max_personas = '$personas', descripcion = '$descripcion', costo_base = '$costo', estado = '$estado' WHERE id_habitacion = '$id' ";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();

        // $consulta = "SELECT id_habitacion, tipo, num_habitacion, max_personas, descripcion, costo_base, estado FROM habitacion WHERE id_habitacion='$id_habitacion' ";       
        // $resultado = $conexion->prepare($consulta);
        // $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        var_dump( $data);
        break;
    case 3://baja
        $consulta = "DELETE FROM habitacion WHERE id_habitacion='$id_habitacion' ";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        break;
}

print json_encode($data, JSON_UNESCAPED_UNICODE); //enviar el array final en formato json a JS
$conexion = NULL;
