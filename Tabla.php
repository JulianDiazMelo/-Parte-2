<!DOCTYPE html>
<html>
<head>
<title>Tabla</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <center>
    	<table class="striped" border="1"> <!-- Se implementa la tabla -->
            <center>
    	   	   <thead>
    	   	       <tr>
    	   	           <th colspan="1"><a href="Formulario.php"><input type="Submit" value="Nuevo" /></a></th>
    	   	           <th colspan="17">Tabla de Formulario</th>
    		        </tr> <!-- Se asigna el tamaño y las diviciones de la tabla -->
    	       </thead>
    	       <tbody>
                    <br/><br/>
    		            <tr>
    		                <td>ID</td>
                            <td>Nombres </td>
    			            <td>Apellidos </td>  			
    			            <td>Correo </td>  			
    			            <td>Tarjeta </td>
                            <td>Titular </td>
                            <td>Numero </td>
                            <td>Cvv2 </td>
                            <td>Fecha de Expedicion </td>
                            <td>Direccion </td>
                            <td>Ciudad </td>
                            <td>Zip Code </td>
                            <td>Pais </td>
                            <td>Telefono </td>
                            <td>Codigo </td>
                            <td>¿Es Mayor de 18? </td>  				
    			            <td colspan="5">Opciones</td>
			            </tr> <!-- Se agregan los nombres de las tablas -->
    		            <?php
    		                include("conexion.php"); // se realiza un llamado a la base de datos para traer la informacion que se encuentra haya
    		                $query="select * from datos"; // se ingresa el nombre de la tabla en la base de datos
    		                $resultado= $conexion-> query($query); // trae la respectiva informacion
    		                while($row=$resultado->fetch_assoc()){ // realiza el ingreso de la informacion el la tabla inplementada en le php
    		            ?>
    		            <tr>
                            <!-- Se almacena la informacion en cada una de las secciones reviamente establecidas -->
                            <td><?php echo $row['ID']; ?></td>                  
                            <td><?php echo $row['nombre']; ?></td>
                            <td><?php echo $row['apellido']; ?></td>    				
    			            <td><?php echo $row['correo']; ?></td>  				
    			            <td><?php echo $row['tarjeta']; ?></td>  			
    			            <td><?php echo $row['titular']; ?></td>
                            <td><?php echo $row['numero']; ?></td>  
                            <td><?php echo $row['cvv2']; ?></td>
                            <td><?php echo $row['fecha']; ?></td>
                            <td><?php echo $row['direccion']; ?></td>
                            <td><?php echo $row['ciudad']; ?></td>
                            <td><?php echo $row['zipcode']; ?></td>
                            <td><?php echo $row['pais']; ?></td>
                            <td><?php echo $row['telefono']; ?></td>
                            <td><?php echo $row['codigo']; ?></td>
                            <td><?php echo $row['pregunta']; ?></td>
							<td><a href="Modificar.php?ID=<?php echo $row['ID'];?>"><input type="Submit" value="Modificar" /></a></td> <!-- Se ingresa un boton para dar la opcion de modificar la informacion -->							
    			            <td><a href="Eliminar.php?ID=<?php echo $row['ID'];?>"><input type="Submit" value="Eliminar" /></a></td>
                            <!-- Se ingresa un boton para dar la opcion de eliminar la informacion -->
    		            </tr>
    		        <?php
    		            }
    		        ?>
    	        </tbody>
            </center>
	    </table>
    </center>
</body>
</html>