<?php
	if(!isset($_COOKIE['sesion'])){
		header("location: Login.php");
	}
	
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	 <link rel="shortout icon" href="../Imagenes/android-app-top-banner.png">
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	 <link rel="stylesheet" href="../Css/Estila.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Climax 🌤️</title>
</head>
<body> 
<hr style="color: blue; background-color: darkblue; height: 25px; width:100%;" />
<center>
<h3> <?php echo $_COOKIE['sesion']; ?> </h3>
</center>
<hr style="color: blue; background-color: gold; height: 25px; width:100%;" />
<center>
<h1>Busca el clima de tu ciudad aqui mismo! 🌎</h1>
</center>
<h2>Hola Querido Usuario.! Te doy la bienvenida a la página web Climax. En esta aplicación podrás encontrar el clima
del lugar que tú desees, al igual podrás consultarlo por ciudades. Podrás ver el clima de las últimas semanas, de
igual forma podrás consultar la hora en que sale el sol y a que hora se oculta, todo eso podrás encontrar en este sitio web. 😉✅</h2>
<hr style="color: blue; background-color: blue; height: 25px; width:100%;" />
<center>
	<div class="container">
		<h1>Busca tu clima de manera global</h1>
		<form action="" method="GET">
			<h2><label for="city"> Coloca tu ciudad</label></h2>
			<h3>El clima se encuentra en valor Kelvin, necesita buscarlo a su comodidad</h3>
			<h5><input type="text" id="ciudad" name="city placeholders="Ciudad></h5>
			<button type="button" id="button" name="button" class="btn-btn-info">Buscar ahora</button>
<br>

			<div class="output">
				<br>
				<h4>
				<div class="alert-alert-danger" role="alert" id="ciudad2">Ciudad</div>
				<br>
				<div class="alert-alert-success" role="alert" id='temp'>Temperatura</div>
				<br>
				<div class="humed-1" role="alert" id='humedad'>Humedad</div>
			</h4>
			</div>
		</form>
	</div>
</center>
<br>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
	$("#button").click(function(){

			 var ciudad = document.getElementById("ciudad").value;

			  $.get("https://api.openweathermap.org/data/2.5/weather?q="+ciudad+"&appid=fb17f34ed79db3d29d272054ad0e4adf",function(data, status){
			    	console.log(data);

			   	  document.getElementById('ciudad2').innerHTML = data.weather[0].description
			   	  document.getElementById('temp').innerHTML = data.main.temp
			   	  document.getElementById('humedad').innerHTML = data.main.humidity
			  });

		});
	</script>
</body>
</html>