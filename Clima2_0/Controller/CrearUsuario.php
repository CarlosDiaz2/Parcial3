<?php

if ($_SERVER['REQUEST_METHOD']=="POST"){

	$Nombre_Completo = $_POST['Nombre_Completo'];
	$Correo_Electronico = $_POST['Correo_Electronico'];
	$Contrasena = $_POST['Contrasena'];

	require_once("../Model/Conexion.php");
	$obj = new Conecction();
	$resultado = $obj->insert_usuarios($Nombre_Completo,
									   $Correo_Electronico,
									   $Contrasena);
	
	echo json_encode(["estado"=>$resultado]);
}
