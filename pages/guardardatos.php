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