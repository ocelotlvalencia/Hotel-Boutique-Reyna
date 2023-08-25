<?php 

	require_once "../conexion.php";
	require_once "../metodosCrud.php";

	$nombredelperiodico=$_POST['txtnombredelperiodico'];
	$titulo=$_POST['txttitulo'];
	$fecha=$_POST['txtfecha'];
	$informacion=$_POST['txtinformacion'];
	$nombredelredactor=$_POST['txtnombredelredactor'];
	$imagen=$_POST['txtimagen'];
	$id=$_POST['id'];

	$datos=array(
			$nombredelperiodico,
			$titulo,
			$fecha,
			$informacion,
			$nombredelredactor,
			$imagen,
			$id
				);
	$obj= new metodos();

	if($obj->actualizaDatosNombre($datos)==1){
		header("location:../index.php");
	}else{
		echo "fallo al agregar";
	}
 ?>