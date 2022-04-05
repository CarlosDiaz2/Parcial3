<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="shortout icon" href="../Imagenes/Ini.ico">
    <meta http-equiv="X-UA Compatible" content="ie=edge">
    <link rel="stylesheet" href="../Css/Style.css">
   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Inicio de Sesion</title>
</head>
<body>
    <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v13.0&appId=517503186294584&autoLogAppEvents=1" nonce="uoIPAN0H"></script>

    <section class="form-resgistrar">
        <h1> Climax</h1>
        <h1>Inicia Sesion Aqui 🔽</h1>
        <div id="error"></div>
        <input class="controls" type="email" name ="email" id="Correo_Electronico" placeholder="Ingrese su Correo Electronico:">
        <input class="controls" type="password" name ="Contrasena" id="Contrasena" placeholder="Ingrese su contraseña:">
        <center>
        <button type="button" class="btn-outline-dark"  id="button" >Iniciar</button>
    </center>
    <center>
        <br>
    <a href="Registrate.php" class="btn-outline-dark">¿No Tienes Cuenta?, Registrate Aqui!</a>
</center>
<center>
    <br>
<div class="fb-login-button" data-width="" data-size="medium" data-button-type="login_with" data-layout="rounded" data-auto-logout-link="true" data-use-continue-as="true"></div>
</center>
    </section>
     <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script>
    $(document).ready(function(){
        $("#button").click(function(){
          var Correo_Electronico =  $("#Correo_Electronico").val();
          var Contrasena = $("#Contrasena").val();

             if(Correo_Electronico == "" || Contrasena == ""){
                $("#error").text("Campos Vacios");
                $("#error").css("color","gold");
               }
               else
               {
                $.post("../Controller/Login.php",
                {
                    Correo_Electronico: Correo_Electronico,
                    Contrasena: Contrasena
                },
                function(data,status){
                    console.log(data);

                var obj = JSON.parse(data);

                 if(obj.estado == true)
                 {
                    window.location.replace("Dashboard.php");
                 }
                 else if(obj.estado == false){
                    $("#error").text("Error al inciar sesion");
                    $("#error").css("color","gold");
                 }
                });
               }
            });
        });
    
</script>
</body>
</html>