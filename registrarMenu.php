<html>
<head>
  <title>Deli Rapid- Pagina web</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
.table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 50%;
}
</style>

</head>
<body>

<?php
   include ('menu.php');


    $nombre=""; $descripcion=""; $telefono=""; $correo=""; 
    $latitud=""; $longitud=""; $nombreImagen=""; $archivo="";
  

    if(isset($_POST['nombre'])) $nombre = $_REQUEST['nombre'];
    if(isset($_POST['descripcion'])) $descripcion = $_REQUEST['descripcion'];
    if(isset($_POST['telefono'])) $telefono = $_REQUEST['telefono'];
    if(isset($_POST['correo'])) $correo = $_REQUEST['correo'];
    if(isset($_POST['latitud'])) $latitud = $_REQUEST['latitud'];
    if(isset($_POST['longitud'])) $longitud = $_REQUEST['longitud'];
    //if(isset($_POST['imagen'])) $nombreImagen =$_FILES['fileToUpload']['name'];
    //if(isset($_POST['imagen']))  $archivo = $_FILES['fileToUpload']['tmp_name'];
    
    $target_dir = "imagenes/";
    $target_file = $target_dir . basename($_FILES["imagen"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    
    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
      $check = getimagesize($_FILES["imagen"]["tmp_name"]);
      if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
      } else {
        echo "File is not an image.";
        $uploadOk = 0;
      }
    }
    
    // Check if file already exists
    if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
    }
    
    // Check file size
    if ($_FILES["imagen"]["size"] > 5000000) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }
    
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
      echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
      $uploadOk = 0;
    }
    
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {$target_dir = "imagenes/";
      $target_file = $target_dir . basename($_FILES["imagen"]["name"]);
      $uploadOk = 1;
      $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
      
      // Check if image file is a actual image or fake image
      if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["imagen"]["tmp_name"]);
        if($check !== false) {
          echo "File is an image - " . $check["mime"] . ".";
          $uploadOk = 1;
        } else {
          echo "File is not an image.";
          $uploadOk = 0;
        }
      }
      
      // Check if file already exists
      if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
      }
      
      // Check file size
      if ($_FILES["imagen"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
      }
      
      // Allow certain file formats
      if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
      && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
      }
      
      // Check if $uploadOk is set to 0 by an error
      if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
      // if everything is ok, try to upload file
      } else {
        if (move_uploaded_file($_FILES["imagen"]["tmp_name"], $target_file)) {
          echo "The file ". basename( $_FILES["imagen"]["name"]). " has been uploaded.";
        } else {
          echo "Sorry, there was an error uploading your file.";
        }
      }
      echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
      if (move_uploaded_file($_FILES["imagen"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["imagen"]["name"]). " has been uploaded.";
      } else {
        echo "Sorry, there was an error uploading your file.";
      }
    }
          // Create connection
          $conexion = mysqli_connect("localhost", "root", "", "delirapid") or
          die("Problemas con la conexión");
          
          $sql= "insert into lugarescomida(nombre,descripcion,telefono,correo,latitud,longitud,imagen) 
          values ('$nombre','$descripcion','$telefono','$correo','$latitud','$longitud','$target_file')";
        
            if (mysqli_query($conexion, $sql)) {
              $last_id = mysqli_insert_id($conexion);

              mysqli_close($conexion);
             
                
   echo "<div class='container'>
          <h3>Tu codigo de registro es <strong> " . $last_id."</strong></h3>
          <strong><p>Felicidades tu registro fue exitoso. No esperes mas para registrar tus deliciosos platillos</p></strong>
        </div>";


  
        

              }
              else {
              echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
              }

        
       
                ?>
                <form action="nuevo_prod1.php" method="">
              <button class="btn btn-primary" name="enviar" type="submit">Agregar</button>
                </form>

</body>
</html>