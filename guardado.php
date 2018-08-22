<?php

	include("conexion.php"); // incluye la conexion el la operacion a realiazar
	
	// sele asignara un valor a cada uno de los campos correspondientes a tabla
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

	$insertar="INSERT INTO datos(nombre,apellido,correo,tarjeta,titular,numero,cvv2,fecha,direccion,ciudad,zipcode,pais,telefono,codigo,pregunta) VALUES ('$q','$w','$e','$r','$t','$y','$u','$i','$o','$p','$a','$s','$d','$f','$g')"; // se realiza la insercion de los datos en la base de datos y de la misma manera en la tabla
	$resultado=$conexion->query($insertar); // Envia los datos
	if($resultado){ // notifica si se realizo el ingresode los datos o no
		header("Location: Tabla.php");
		
	}else{
		echo "Error al Ingresar Datos";
	}
?>