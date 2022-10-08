<?php  
	$nombre   = $_POST['nombre'];
	$email 	  = $_POST['email'];
	$tipo 	  = $_POST['tipo'];	
	$consulta = $_POST['consulta'];	
	mail(
		"CristianDRacedo@hotmail.com",
		$tipo,
		$consulta,
		"From: $nombre <$email>
		\n Reply-To: $email
		\n Content-Type: text/html;
		\n charset=utf-8"
	);
	header( "location: ../" );
?>