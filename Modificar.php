<meta charset="utf-8"/>

<?php
include("conexion.php");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Modificaciones</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/css/materialize.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="Pro.css">
</head>
    <script type="text/javascript" src="Pro.js"></script>
	<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js"></script>
	<!-- Se realiza un respectivo llamado a los componentes que se va a usar (JavaScript, css, paginas web) -->
<body>
	<?php
	$id=$_REQUEST['ID']; // se toma el id de la persona que se desea modificar

    		include("conexion.php"); // se incluye la conexion a la base de datos
    		$query="select * from datos where ID='$id'";
    		$resultado= $conexion-> query($query);
    		$row=$resultado->fetch_assoc();// hace el respectivo llamado de la informacion que se va a modificar
    		?>

<section class="container">
		<div class="row">
		<h3 class="center-align">Formulario</h3>
			<article class="col s6 offset-s3">
<form action="Guardardos.php?ID=<?php echo $row['ID'];?>" method="POST"><!-- Se asigna el destino donde se va a enviar lainformacion modificada -->

	<div class="input-field">
						<i class="material-icons prefix">perm_identity</i>
						<label for="nombre">Nombres</label>
						<input id="nombre" type="text" name="nombre" required value="<?php echo $row['nombre']; ?>"> <!-- Seccion para realizar la modificacion -->
					</div>

					<div class="input-field">
						<i class="material-icons prefix">perm_identity</i>
						<label for="apellido">Apellidos</label>
						<input id="apellido" type="text" name="apellido" required value="<?php echo $row['apellido']; ?>"> <!-- Seccion para realizar la modificacion -->
					</div>
					
					<div class="input-field">
						<i class="material-icons prefix">mail</i>
						<label for="email">Correo</label>
						<input id="email" type="email" name="correo" required value="<?php echo $row['correo']; ?>"> <!-- Seccion para realizar la modificacion -->
					</div>

					<div class="input-field">
						<label for="tarjeta"></label>
  						<select id="tar" name="tarjeta" class="browser-default" value="<?php echo $row['tarjeta']; ?>">
    						<option value="" disabled selected>Tarjeta de Credito</option>
                  			<option value="bancolombia">Bancolombia</option>
                  			<option value="visa">Visa</option>
                  			<option value="mastercard">Mastercard</option>
                  			<option value="cajasocial">Caja Social</option>
                  			<option value="davivienda">Davivienda</option>
                  			<option value="colpatria">Colpatria</option>
  						</select> <!-- Seccion para realizar la modificacion -->
  					</div>

  					<div class="input-field">
						<i class="material-icons prefix">card_membership</i>
						<label for="titular">Titular de la Tarjeta</label>
						<input id="titular" type="text" name="titular" required value="<?php echo $row['titular']; ?>"> <!-- Seccion para realizar la modificacion -->
					</div>
					
					<div class="input-field">
						<i class="material-icons prefix">card_giftcard</i>
						<label for="numero">Numero de la Tarjeta</label>
						<input id="numero" type="text" name="numero" required value="<?php echo $row['numero']; ?>"> <!-- Seccion para realizar la modificacion -->
					</div>

					<div class="input-field">
						<i class="material-icons prefix">card_travel</i>
						<label for="cvv2">CVV2</label>
						<input id="cvv2" type="text" name="cvv" required value="<?php echo $row['cvv2']; ?>"> <!-- Seccion para realizar la modificacion -->
					</div>

					<div class="input-field">
						<i class="material-icons prefix">date_range</i>
						<label for="Fecha"><P>Fecha de Expedicion</P></label>
						<input id="fecha" type="date" name="fe" required value="<?php echo $row['fecha']; ?>"> <!-- Seccion para realizar la modificacion -->
					</div>

					<div class="input-field">
						<i class="material-icons prefix">pin_drop</i>
						<label for="direccion">Direccion</label>
						<input id="direccion" type="text" name="direc" required value="<?php echo $row['direccion']; ?>"> <!-- Seccion para realizar la modificacion -->
					</div>

					<div class="input-field">
						<i class="material-icons prefix">location_city</i>
						<label for="ciudad">Ciudad</label>
						<input id="ciudad" type="text" name="ciu" required value="<?php echo $row['ciudad']; ?>"> <!-- Seccion para realizar la modificacion -->
					</div>

					<div class="input-field">
						<i class="material-icons prefix">code</i>
						<label for="zipcode">ZIP Code</label>
						<input id="zipcode" type="text" name="zip" required value="<?php echo $row['zipcode']; ?>"> <!-- Seccion para realizar la modificacion -->
					</div>

					<div class="input-field">
						<label for="pais"></label>
  						<select id="pais" name="pais" class="browser-default" value="<?php echo $row['pais']; ?>">
  							<option value="" disabled selected>Pais</option>
                  			<option value="agfanistan">Afganistan</option>
                  			<option value="alemania">Alemania</option>
                  			<option value="arabia">Arabia</option>
                 			<option value="argentina">Argentina</option>
                 			<option value="australia">Australia</option>
                  			<option value="belgica">Belgica</option>
                  			<option value="bolivia">Bolivia</option>
                  			<option value="brasil">Brasil</option>
                  			<option value="bulgaria">Bulgaria</option>
                  			<option value="camerun">Camerun</option>
                  			<option value="canada">Canada</option>
                  			<option value="chile">Chile</option>
                  			<option value="colombia">Colombia</option>
                  			<option value="costarica">Costa Rica</option>
                  			<option value="ecuador">Ecuador</option>
                  			<option value="espana">Espana</option>
                  			<option value="estadosunidos">Estados Unidos</option>
                  			<option value="francia">Francia</option>
                  			<option value="italia">Italia</option>
                  			<option value="mexico">Mexico</option>
                  			<option value="nicaragua">Nicaragua</option>
                  			<option value="suiza">Suiza</option>
                  			<option value="uruguay">Uruguay</option>
                  			<option value="venezuela">Venezuela</option>
  						</select> <!-- Seccion para realizar la modificacion -->
  					</div>

  					<div class="input-field">
						<i class="material-icons prefix">phone_android</i>
						<label for="tel">Telefono</label>
						<input id="tel" type="text" name="tel" required value="<?php echo $row['telefono']; ?>"> <!-- Seccion para realizar la modificacion -->
					</div>

  					<div class="input-field">
						<i class="material-icons prefix">no_encryption</i>
						<label for="code">Codigo de Seguridad</label>
						<input id="code" type="text" name="code" required value="<?php echo $row['codigo']; ?>"> <!-- Seccion para realizar la modificacion -->
					</div>

					<div class="input-field">
						<label for="pregunta"></label>
  						<select id="pregunta" name="pregu" class="browser-default" value="<?php echo $row['pregunta']; ?>">
    						<option value="" disabled selected>¿Eres mayor de 18 años?</option>
                  			<option value="si">SI</option>
                  			<option value="no">NO</option>
  						</select> <!-- Seccion para realizar la modificacion -->
  					</div>

					<p class="center-align">
						<button type="submit" class="waves-effect waves-light btn" ><i class="material-icons right">send</i>enviar</button> <!-- Se implementar el boton de envio de informacion modificada -->
					</p>
</form>
</center>
</body>
</html>