<html lang="en">
<head>
  <title>Deli Rapid</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<?php include 'encabezado.html'; ?>

<body>
<br>
<br>
<div class="container">
  <h2>Registra tu local</h2>
  <form class="form-horizontal" action="registrarMenu.php" method="post" enctype="multipart/form-data">


    <div class="form-group">
      <label class="control-label col-sm-2">Nombre:</label>
      <div class="col-sm-4">
      <input type="text" class="form-control" placeholder="Ingresa el nombre del local" name="nombre">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2">Descripcion:</label>
      <div class="col-sm-4">
      <textarea type="text" class="form-control" placeholder="Ingresa una descripcion breve del local" name="descripcion"></textarea>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" >Telefono:</label>
      <div class="col-sm-4">          
        <input type="text" class="form-control" placeholder="Ingresa un numero telefonico" name="telefono">
      </div>
    </div>

    <div class="form-group">
      <label  class="control-label col-sm-2">Correo electronico:</label>
      <div class="col-sm-4">
    <input type="email" class="form-control"  placeholder="Ingresa tu correo electronico" name="correo">
  </div>
  </div>

  <div class="form-group">
      <label class="control-label col-sm-2">Ubicacion:</label>
      <div class="col-sm-4"> 
        <input type="text" class="form-control" placeholder="Latitud Ejemplo: 60.528581799999998" name="latitud">
        <br>
        <input type="text" class="form-control" placeholder="Longitud Ejemplo:-175.9535021 " name="longitud">
        <br>
        <a href="https://www.google.com.mx/maps">Ir a Google Maps</a>

      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2">Imagen:</label>
      <div class="col-sm-4">
      <input type="file" class="form-control"  name="imagen" accept="image/*">
      </div>
    </div>


    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-success ">Guardar</button>
      </div>
    </div>

  



  </form>
</div>

</body>
</html>
