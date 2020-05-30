<!DOCTYPE html>
<html lang="en">


<?php include 'encabezado.html';  ?>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">



<div class="jumbotron text-center">
  <h1>DeliRapid</h1> 
  <p>Cualquier lugar de comida que te pudieras imaginar</p> 
  <form>
    <div class="input-group">
  
    </div>
  </form>
</div>

<!-- Container (About Section) -->
<div id="nosotros" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
      <h2>Nosotros</h2>
      <h4>¿Qué hace DeliRapi?</h4>
      <p>DeliRapi te muestra la variedad de lugares de comida con la mejor calificacion y sabor de la ciudad de Ensenada, te permite saber su ubicacion, calificar el lugar, realizar comentarios, etc. Podrás mirar los lugares de comida más populares de la ciudad, asi como tambien, cada lugar te proporcionara su informacion de la cual podras consultar por si lo deceas.</p>
    
    <h4>¿Deseas formar parte de DeliRapid</h4>
      <p>Registrate y podrás dar a conocer tu restaurante o local de comida, delirapi te permitira proporcionar la información necesaria para poder destacar entre los lugares mas populares, como por ejemplo te permitira mostrar: menú, imagenes, número telefonico, ubicación, etc., asi como tambien los visitantes de tu negocio podrán realizar comentarios y calificar el lugar. </p>
    </div>
    <div class="col-sm-4">
     <img src="logo.png" alt="deli" style="width:200px;">
    </div>
  </div>
</div>

<div id="1" class="container-fluid bg-grey">
  <div class="row">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-cutlery logo slideanim"></span>
    </div>
    <div class="col-sm-8">
      <h2>Lugares de comida</h2>
      <h4>Encontraras los mejores restaurantes y locales de comida ubicados en la ciudad de Ensenada,B.C</h4>
      <p>En esta seccion encontraras la gran variedad de lugares, restaurantes y locales de comida ubicada en la ciudad de Ensenada, B.C., podras encontrar restaurantes de: 
          <li>Comida mexicana</li>
          <li>Comida japonesa</li>
          <li>Comida china</li>
          <li>Alitas y boneless</li>
          <li>Taquerias</li>
          <li>Y mas . . .</li>
        
        </p>
    <br><button onclick="location.href='login.php'">Ver lugares</button>
    </div>
  </div>
</div>

<div id="buscar" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
      <h2>Busca por ruta</h2>
      <h4>¿Desear buscar la ubicació de tu lugar de comida favorito?</h4>
      <p>Podrás buscar y encontrar tus lugares de comida favoritos mas cercanos a ti utilizando nuestro buscador, te marcara la ruta exacta desde el lugar en el que te encuentras hasta el lugar de comida gracias a la API de google maps</p>
      <br><button class="btn btn-default btn-lg">Buscar</button>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-map-marker logo slideanim"></span>
    </div>
  </div>
</div>

<div id="unete" class="container-fluid bg-grey">
  <div class="row">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-user logo slideanim"></span>
    </div>
    <div class="col-sm-8">
      <h2>Unete a nosotros</h2>
      <h4>¿Tienes un restaurante o local de comida?</h4>
      <p>Registrate con nosotros para dar a conocer más tu restaurante o local de comida, y haz crecer tu negocio. Puedes compartir: 
          <li>Menú</li>
          <li>Imagenes</li>
          <li>Ubicación</li>
          <li>Número telefonico</li>
          <li>Precios</li>
          <li>Y mas . . .</li>
        
        </p>
    <br><button class="btn btn-default btn-lg" onclick="location.href='registroLugarComida.php'">Unirse</button>
    </div>
  </div>
</div>
    
<!-- Container (Portfolio Section) -->
<div class="container-fluid text-center bg-grey">
  <h2>Algunos lugares</h2><br>
  <h4>Restaurantes y más . . . </h4>
  <div class="row text-center slideanim">
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="trailero.jpg" alt="trailero" width="400" height="300">
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="hijos.jpg" alt="hijos" width="400" height="300">
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="shalom.jpg" alt="shalom" width="400" height="300">
        
      </div>
    </div>
  </div><br>
  
  <h2>Lo que dicen nuestros usuarios</h2>
  <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <h4>"Delirapi me parece una gran opción cuando se trata de buscar restaurantes"<br><span>Lupita Medina</span></h4>
      </div>
      <div class="item">
        <h4>"Muy buena página!!"<br><span>Jorge Torres</span></h4>
      </div>
      <div class="item">
        <h4>"Yo pienso que delirap es una gran opción"<br><span>Anónimo</span></h4>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>


<!-- Footer -->
<footer class="container-fluid text-center">
 <p align="left">DESARROLLADO POR <u>DeliRapi</u>. <center>delirapi@gmail.com <span class="glyphicon glyphicon-envelope"></span> | (646)123 45 67  <span class="glyphicon glyphicon-earphone"></span><br>
DeliRapi ® 2020.</center></p>
    </footer>
</body>
</html>
