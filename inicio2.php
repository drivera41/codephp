<?php
session_start(); 

  
  include('../bd/conec.php');

  
    include('../templates/menu2.php');
  
?>
<head>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<!--lateral izquierdo -->
<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav">
      <h4></h4>
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="#section1">DeliRapid</a></li>
        <li><a href="#section2">Lugare Populares</a></li>
        <li><a href="#section3">Mejor Calificados</a></li>
        <li><a href="#section3">Busca por ruta</a></li>
      </ul><br>
      <div class="input-group">
        <input type="text" class="form-control" id="myInput" placeholder="Search Blog..">
        <span class="input-group-btn">
          <button class="btn btn-default" type="button">
            <span class="glyphicon glyphicon-search"></span>
          </button>
        </span>
      </div>
    </div>
    <!--lateral izquierdo -->


<div class="col-sm-9">    

  <!--mensaje -->
<div class="container">
  <br>
  <div class="alert alert-info">
    
    <?php 
        
    ?>
    <h4><p>Publicitate aqui con nosotros....</p></h4>

    <p>No esperes mas, obten mayores ingresos gracias a la tecnologia...</p>
  </div>
</div>
<!--termina mensaje --> 
<!--comieza la seccion --> 
<?php
     
      $query= $conexion -> query("SELECT * FROM lugarescomida ORDER BY idlugarcomida DESC ") or die($conexion -> error);
      echo "<div class='row text-center'>";
      while ($lista = mysqli_fetch_array($query)) {
       
      //<img src="/delirapid/<?php echo $lista['imagen'];
  ?>
  
  <div class="col-sm-2 text-center">
          <img src="/delirapid/pagina/ventanas/<?php echo $lista['imagen']; ?>" class="img-circle" height="150" width="150" alt="Avatar">
        </div>
  <div id="section<?php echo $lista['id']; ?>" class="container-fluid">
  <h1><?php echo $lista['nombre'];?></h1>
  <p><?php echo $lista['descripcion'];?></p>
  <form action="detalles.php" method="POST">
                      <input type="hidden" name="nombre" value="<?php echo $lista['nombre']; ?>">
                      <input type="hidden" name="descripcion" value="<?php echo $lista['descripcion']; ?>">
                      <input type="hidden" name="telefono" value="<?php echo $lista['telefono']; ?>">
                      <input type="hidden" name="correo" value="<?php echo $lista['correo']; ?>">
                      <input type="hidden" name="latitud" value="<?php echo $lista['latitud']; ?>">
                      <input type="hidden" name="longitud" value="<?php echo $lista['longitud']; ?>">
                      <input type="hidden" name="imagen" value="<?php echo $lista['imagen']; ?>">
                      <input type="hidden" name="tipo" value="<?php echo $lista['tipo']; ?>">
                      <input type="hidden" name="calificacion" value="<?php echo $lista['calificacion']; ?>">
    <input type="submit" class="btn btn-info" value="detalles" name="detalles">
  </form>
  
</div>
<!--termina seccion --> 
<?php 
    }
?>
</div>
</div>
</div>

<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
<?php 


?>		



<?php 
	include('../templates/pie.php')	
?>