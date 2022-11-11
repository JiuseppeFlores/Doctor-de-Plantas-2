<?php
    $db_host = "204.93.216.11";
    $db_user = "rodolfo1_doctor";
    $db_pass = "rodolfo1_doctor";
    $db_name = "rodolfo1_doctor";

	global $conexion; 
	$conexion = mysqli_connect($db_host, $db_user, $db_pass,$db_name);
	
	if(mysqli_connect_errno()){
	    echo 'No se pudo conectar a la base de datos : '.mysqli_connect_error();
    }
?>