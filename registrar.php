<?php 

include("con_db.php");

if (isset($_POST['Enviar'])) {
    if (strlen($_POST['Name']) >= 1 && strlen($_POST['Correo']) >= 1) {
	    $name = trim($_POST['Name']);
	    $email = trim($_POST['Correo']);
	    $fecha_reg = date("d/m/y");
	    $consulta = "INSERT INTO datos_formulario(Nombre, Correo, fecha_reg) VALUES ('$Name','$Correo','$fecha_reg')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class"marco">¡Te has inscripto correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3>¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3>¡Por favor complete los campos!</h3>
           <?php
    }
}

?>