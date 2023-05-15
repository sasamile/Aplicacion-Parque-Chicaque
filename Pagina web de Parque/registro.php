<?php 

include("con_db.php");

if (isset($_POST['Registrar'])) {
    if (strlen($_POST['documento']) >= 1 && strlen($_POST['nombre']) >= 1  && strlen($_POST['telefono']) >= 1 && strlen($_POST['fecha']) >= 1 && strlen($_POST['correo']) >= 1) {
	    $ducumento = trim($_POST['documento']);
	    $nombre = trim($_POST['nombre']);
        $telefono = trim($_POST['telefono']);
	    $fecha = date("d/m/y");
        $correo = trim($_POST['correo']);
	    $consulta = "INSERT INTO datos(documento,nombre,telefono,fecha,correo ) VALUES ('$ducumento','$nombre','$telefono','$fecha','$correo')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Te has inscripto correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>



