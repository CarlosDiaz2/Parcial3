 <?php

 if($_SERVER['REQUEST_METHOD']=="POST"){

 	$Correo_Electronico = $_POST["Correo_Electronico"];
 	$Contrasena = $_POST["Contrasena"];

 	require_once("../Model/Conexion2.php");
 	$obj = new Conecction();
 	$obj = $obj->insert_login($Correo_Electronico, $Contrasena);

 	echo json_encode(["estado"=>$obj]);
 }
#Se necesita crea una base de datos con los datos que se mencionan.
