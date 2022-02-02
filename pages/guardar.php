<!DOCTYPE html>
<html>
<head>
	<title>Guardando...</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="CSS/style1.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
	<center>
		<br>
		<h1>Formulario enviado</h1><br>
		<h4>la factura ha sido enviada a su correo</h4>
		<a href="/proyectoTiendaOnline/tienda/index.php" style="width: 12rem" type="submit" name="volver" class="btn btn-primary">Inicio</a>
	</center>
</body>
</html>

<?php

include("config_bd.php");

	if (isset($_POST['Registrar'])) {
	    $Nombre=$_POST['Nombre'];
	    $Correo=$_POST['Correo'];
	    $Direccion=$_POST['Direccion'];
	    $Telefono=$_POST['Telefono'];
	    $consulta="INSERT INTO formulario(Nombre,Correo,Direccion,Telefono) 
	          VALUES ('$Nombre','$Correo','$Direccion','$Telefono')";
	    $resultado=mysqli_query($conex,$consulta);
	    if ($resultado) {
	      echo " ";
	    }else{
	      echo "Ha ocurrido un error";
	    }

	}
?>