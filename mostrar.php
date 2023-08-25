<?php
include("conexion.php");
if($conexion){
	echo "conexion correcta";
}else{
	echo "Error";
}

$result=array();
$result['datos']=array();
$query="SELECT * FROM habitacion where estado = 'Disponible'";

$responce= mysqli_query($conexion,$query);

while ($row = mysqli_fetch_array($responce)){
	// code...
	$index['id']=$row['0'];
	$index['tipo']=$row['1'];
	$index['num_hab']=$row['2'];
	$index['max_personas']=$row['3'];
	$index['descripcion']=$row['4'];
	$index['costo_base']=$row['5'];

	array_push($result['datos'], $index);

}

$result["exito"]="1";
echo json_encode($result);
?>