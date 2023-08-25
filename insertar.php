<?php
	require_once "conexion.php";

	$num_personas=$_POST['num_personas'];//falta
	$tipo_habitacion=$_POST['tipo_h'];
	$fecha_llegada=$_POST['fecha_llegada'];
	$fecha_salida=$_POST['fecha_salida'];
	$nombre=$_POST['name'];
	$apellidos=$_POST['apellido'];
	$telefono=$_POST['tel'];
	$direccion=$_POST['direccion'];
	$email=$_POST['email'];
	$forma_pago=$_POST['forma_pago'];

	//query para validar que hay habitacione sdisponibles
	$query = "SELECT id_habitacion FROM habitacion where tipo = '$tipo_habitacion' and estado = 'Disponible'";
	$resultado = mysqli_query($conexion, $query);

	//si hay habitaciones disponibles
	if ($resultado) {
		//traer el id de la habitacion
		$row =  $resultado->fetch_assoc();
		$id = trim($row["id_habitacion"]);// contiene el ID

		//Registramos al huesped
		$query_Insert = "INSERT INTO cliente(nombre,apellidos,telefono,email,procedencia,forma_pago) values('$nombre','$apellidos','$telefono','$email','$direccion','$forma_pago')";
		$resultado_Insert = mysqli_query($conexion, $query_Insert);

		//si se pude registrar el cliente se insertan los datos en la tabla habitacion_reservadad
		if ($resultado_Insert) {
			$cliente = mysqli_insert_id($conexion);//contiene el ID del cliente
			$query_reserva = "INSERT INTO habitacion_reservada(personas_ocupan,id_huesped,fecha_entrada,fecha_salida,id_habitacion) values('$num_personas','$cliente','$fecha_llegada','$fecha_salida','$id')";
			$resultado_Reserva = mysqli_query($conexion, $query_reserva);

			//si se realiza la reserva se pone ocupada la habitacion
			if ($resultado_Reserva) {
				$queryHabi = "UPDATE habitacion SET estado = 'Ocupado' WHERE id_habitacion = '$id'";
				$resultHabi = mysqli_query($conexion, $queryHabi);
				if ($resultHabi) {
					echo "Los Datos de la Reservacion son los siguientes : $num_personas, $tipo_habitacion, $fecha_llegada, $fecha_salida, $nombre, $apellidos, $telefono $direccion, $email, $forma_pago";
				}else{
					echo "error en actualizar habitacion";
				}
			}else{
				echo "error reserva";
			}
		}else{
			echo "error cliete";
		}
	}
	//Ocupados
	else{
		echo "Sin habitaciones";
	}
	mysqli_close($conexion);


 ?>