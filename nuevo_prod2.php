<?php

$idlugar=""; $idcomida=""; $nombre=""; $descripcion=""; 
    $precio=""; 

    if(isset($_POST['idlugar'])) $idlugar = $_REQUEST['idlugar'];
    if(isset($_POST['idcomida'])) $idcomida = $_REQUEST['idcomida'];
    if(isset($_POST['nombre'])) $nombre = $_REQUEST['nombre'];
    if(isset($_POST['descripcion'])) $descripcion = $_REQUEST['descripcion'];
    if(isset($_POST['precio'])) $precio = $_REQUEST['precio'];
    
$target_dir = "menus/";
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
if ($uploadOk == 0) {$target_dir = "menus/";
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

  $conexion = mysqli_connect("localhost", "root", "", "delirapid") or
    die("Problemas con la conexión");

    
  mysqli_query($conexion, "insert into comidas(idcomida,nombre,descripcion,precio,imagen,idlugarcomida) 
                           values ('$idcomida','$nombre','$descripcion','$precio','$target_file','$idlugarcomida')") or
    die("Problemas en el select" . mysqli_error($conexion));
  mysqli_close($conexion);
  echo "El alumno fue dado de alta.";
  ?>
<script type="text/javascript">
	alert("Producto Ingresado exitosamente");
	window.location.href='VerRegistros.php';
</script>