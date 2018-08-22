<?php

	include("conexion.php");// incluye la conexion el la operacion a realiazar
	
	// sele asignara un valor a cada uno de los campos correspondientes a tabla
	$ID=$_REQUEST['ID']; // se toma el valor del id para realizar los cambios
	$q=$_POST['nombre'];
	$w=$_POST['apellido'];
	$e=$_POST['correo'];
	$r=$_POST['tarjeta'];
	$t=$_POST['titular'];
	$y=$_POST['numero'];
	$u=$_POST['cvv'];
	$i=$_POST['fe'];
	$o=$_POST['direc'];
	$p=$_POST['ciu'];
	$a=$_POST['zip'];
	$s=$_POST['pais'];
	$d=$_POST['tel'];
	$f=$_POST['code'];
	$g=$_POST['pregu'];

	$insertar="UPDATE datos SET nombre='".$q."',apellido='".$w."',correo='".$e."',tarjeta='".$r."',titular='".$t."',numero='".$y."',cvv2='".$u."',fecha='".$i."',direccion='".$o."',ciudad='".$p."',zipcode='".$a."',pais='".$s."',telefono='".$d."',codigo='".$f."',pregunta='".$g."', WHERE ID='".$ID."'"; // se realiza el cambio de los datos en la base de datos y de la misma manera en la tabla
	$resultado=$conexion->query($insertar); // Envia el cambio realizado
	if($resultado){ // Verifica si se realizaron los cambios
		header("Location: Tabla.php");
	}else{
		echo "Error al Ingresar Datos";
		header("Location: Tabla.php");
	}
?>