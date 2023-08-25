<?php
include_once '../bd/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();
// Recepción de los datos enviados mediante POST desde el JS   
$tipo = (isset($_POST['tipo'])) ? $_POST['tipo'] : '';
$num_habitacion = (isset($_POST['num_habitacion'])) ? $_POST['num_habitacion'] : '';
$max_personas = (isset($_POST['max_personas'])) ? $_POST['max_personas'] : '';
$descripcion = (isset($_POST['descripcion'])) ? $_POST['descripcion'] : '';
$costo_base = (isset($_POST['costo_base'])) ? $_POST['costo_base'] : '';
$estado = (isset($_POST['estado'])) ? $_POST['estado'] : '';
$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';
$id_habitacion = (isset($_POST['id_habitacion'])) ? $_POST['id_habitacion'] : '';



switch($opcion){
    case 1: //alta
        $consulta = "INSERT INTO habitacion (tipo, num_habitacion, max_personas, descripcion, costo_base, estado) VALUES(' $tipo, $num_habitacion', '$max_personas', '$descripcion', '$costo_base', '$estado') ";           
        $resultado = $conexion->prepare($consulta);
        $resultado->execute(); 

        $consulta = "SELECT id_habitacion, tipo, num_habitacion, max_personas, descripcion, costo_base, estado FROM habitacion ORDER BY id_habitacion DESC LIMIT 1";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
    case 2: //modificación
        $consulta = "UPDATE habitacion SET tipo='$tipo' num_habitacion='$num_habitacion', max_personas='$max_personas', descripcion='$descripcion', costo_base='$costo_base', estado='$estado' WHERE id_habitacion='$id_habitacion' ";      
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();        
        
        $consulta = "SELECT id_habitacion, tipo, num_habitacion, max_personas, descripcion, costo_base, estado FROM habitacion WHERE id_habitacion='$id_habitacion' ";       
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;        
    case 3://baja
        $consulta = "DELETE FROM habitacion WHERE id_habitacion='$id_habitacion' ";     
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();                           
        break;        
}

print json_encode($data, JSON_UNESCAPED_UNICODE); //enviar el array final en formato json a JS
$conexion = NULL;
