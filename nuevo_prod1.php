<?php
  $conexion = mysqli_connect("localhost", "root", "", "delirapid") or
  die("Problemas con la conexión");

 
?>

<!DOCTYPE html>
<html>
<head>

</head>
<?php include ('menu.php');?>
<body>
<div>
  
  
<div class="container">
  	<h1>Registra una nueva comida</h1>
  		<br>
	  <form class="form-horizontal" action="nuevo_prod2.php" method="POST">
	  	
		
	  	<div class="form-group">
      		<label class="control-label col-sm-2">Codigo de registro:</label>
      			<div class="col-sm-4">
		  			<input type="text" class="form-control" placeholder="Ingrese su codigo de registro" name="idlugar">
				</div>
		</div>



		<div class="form-group">
      		<label class="control-label col-sm-2">Id Comida:</label>
      			<div class="col-sm-4">
					  <input type="text" class="form-control" placeholder="ingrese un id para su comida" name="idcomida">
				</div>
		</div>
  		
		<div class="form-group">
      		<label class="control-label col-sm-2">Nombre de la comida:</label>
      			<div class="col-sm-4">
		  			<input type="text" class="form-control" placeholder="Ingresa un nombre"  name="nombre" >
		  		</div>
		</div>
  		
		<div class="form-group">
      		<label class="control-label col-sm-2">Descripcion:</label>
      			<div class="col-sm-4">
		  <textarea style="border-radius: 10px;"  class="form-control" rows="3" cols="50" name="descripcion" ></textarea>
		  </div>
		</div>
        
        <div class="form-group">
      		<label class="control-label col-sm-2">Precio:</label>
      			<div class="col-sm-4">
					  <input type="text"  class="form-control" placeholder="Ingrese un precio" name="precio" >
				</div>
		</div>

		<div class="form-group">
      		<label class="control-label col-sm-2">Imagen:</label>
      			<div class="col-sm-4">
      				<input type="file" class="form-control"  name="imagen" accept="image/*">
      			</div>
    	</div>
  		
  		<button type="submit" class="btn btn-success">Guardar</button>
     </form>
  	</div>
  	
  

</body>
</html>