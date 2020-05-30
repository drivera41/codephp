<!DOCTYPE html>
<html>
<head>
  <?php include 'encabezado.html';?>


	<title></title>
</head>
<body>
  <br>
  <br>
  <br>
  <br>
  
<div class="container" align="center">
<h2>Bienvenido</h2>

     <img src="logo.png" alt="deli" style="width:150px;">

	
	<form class="form-horizontal" action="../sesiones/log.php" method="POST">
              
        
  <label>Usuario:</label>              
  <input type="mail" class="formulario__input" name="mail" placeholder="ingrese su correo">
                <label  for="" class="formulario__label" ></label>
                <br>
                <label>Contraseña:</label>   
                <input type="password" class="formulario__input" name="pass" placeholder="Contraseña">
                <label for="" class="formulario__label" ></label>
                <br>
                <div class="checkbox">
                  <label><input required="" type="checkbox" name="remember"> Remember me</label>
                </div>
                <br>
                <input type="submit" class="formulario__submit" name="ingresar" value="ingresar">
            </form>
            <form  action="registroUsuario.php" method="POST" >
           <input type="submit" class="formulario__submit" name="ingresar" value="Registrate">
</form>
</div>
</body>
</html>