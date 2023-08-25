<?php
include_once '../bd/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();
// Recepción de los datos enviados mediante POST desde el JS   

//$id_cliente = (isset($_POST['id_cliente'])) ? $_POST['id_cliente'] : '';
$nombre = (isset($_POST['nombre'])) ? $_POST['nombre'] : '';
$apellidos = (isset($_POST['apellidos'])) ? $_POST['apellidos'] : '';
$telefono = (isset($_POST['telefono'])) ? $_POST['telefono'] : '';
$email = (isset($_POST['email'])) ? $_POST['email'] : '';
$procedencia = (isset($_POST['procedencia'])) ? $_POST['procedencia'] : '';
$id_cliente = (isset($_POST['id_cliente'])) ? $_POST['id_cliente'] : '';
$opcion1 = (isset($_POST['opcion1'])) ? $_POST['opcion1'] : '';

switch($opcion1){
    case 1: //alta
        $consulta = "INSERT INTO cliente (nombre, apellidos, telefono, email, procedencia) VALUES('$nombre', $apellidos', '$telefono', '$email', '$procedencia') ";			
        $resultado = $conexion->prepare($consulta);
        $resultado->execute(); 

        $consulta = "SELECT id_cliente, nombre, apellidos, telefono, email, procedencia FROM cliente ORDER BY id_cliente DESC LIMIT 1";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
    case 2: //modificación
        $consulta = "UPDATE cliente SET nombre='$nombre' apellidos='$apellidos', telefono='$telefono', email='$email', procedencia='$procedencia' WHERE id_cliente='$id_cliente' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();        
        
        $consulta = "SELECT id_cliente, nombre, apellidos, telefono, email, procedencia FROM cliente WHERE id_cliente='$id_cliente' ";       
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;        
    case 3://baja
        $consulta = "DELETE FROM cliente WHERE id_cliente='$id_cliente' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();                           
        break;        
}

print json_encode($data, JSON_UNESCAPED_UNICODE); //enviar el array final en formato json a JS
$conexion = NULL;
