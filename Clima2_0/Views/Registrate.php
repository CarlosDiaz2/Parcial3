<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA Compatible" content="ie=edge">
	 <link rel="shortout icon" href="../Imagenes/Regi.ico">
	<link rel="stylesheet" href="../Css/Style.css">
	<title>Registro de Climax</title>
</head>
<body>
	<section class="form-resgistrar">
		<h1> Climax</h1>
		<h1>Registrarse Aqui 🔽</h1>

		<input class="controls" type="text" name ="Nombre_Completo" id="Nombre_Completo" placeholder="Ingrese su Nombre(s) Completo:">
		<input class="controls" type="email" name ="email" id="Correo_Electronico" placeholder="Ingrese su Correo Electronico:">
		<input class="controls" type="password" name ="Contrasena" id="Contrasena" placeholder="Ingrese su contraseña:">
		<center>
		<button type="button" class="btn-outline-dark"id="button">Registrarme</button>
	</center>
	<center>
		<br>
		<a href="Login.php" class="btn-outline-dark">¿Ya Tienes Cuenta?, Inicia Sesion Aqui!</a>
	</center>
 	</section>

 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
		$("#button").click(function(){

			  var Nombre_Completo = document.getElementById('Nombre_Completo').value;
			  var Correo_Electronico = document.getElementById('Correo_Electronico').value;
			  var Contrasena = document.getElementById('Contrasena').value;

			  $.post("../Controller/CrearUsuario.php",
			  {
			  	Nombre_Completo: Nombre_Completo,
			 	Correo_Electronico: Correo_Electronico,
			 	Contrasena: Contrasena
			 	},
			  function(data, status){
			    console.log(status);
			    console.log(data);
			    var obj= JSON.parse(data)
			    if(obj.estado=="USARIO REGISTRADO"){
			    alert('Usuario Registratdo')
			    }
			    else {
			    	alert('Problema Al Registrarse')
			    }
			  });
		});

	</script>
</body>
</html>