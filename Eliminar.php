<?php
include("conexion.php");// Se hace un llamado de la conexion
    $ID=$_REQUEST['ID'];// Toma el id del usuario que se eliminara
    $borrar="DELETE FROM datos  WHERE ID='".$ID."'";    
    $resultado=$conexion->query($borrar); // Realiza la busqueda y la eliminacion
     if($resultado){
    	header("Location: Tabla.php"); // Realiza el envio a la tabla
     }else{
        echo "Error al eliminar"; // Notifica si ocurrio algun error
     }
?>