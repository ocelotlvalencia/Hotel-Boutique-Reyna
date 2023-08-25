<?php 
	
	require_once "../metodo_reserva.php";

	$fecha_llegada=$_POST['entrada'];
	$fecha_salida=$_POST['salida'];
	$num_persona=$_POST['num.personas'];
	$id_cliente=$_POST['id_cliente'];
	
	$datos=array(
			$fecha_llegada,
			$fecha_salida,
			$num_persona
			$id_cliente,
				);
	$obj = new metodos();
	if($obj->alta_articulo($fecha_llegada,$fecha_salida,$num_persona,$id_cliente){
		header("location:../reserva.php");
	}else{
		#echo "fallo al agregar";
		header("location:.../index.php");
	}
	

 ?>