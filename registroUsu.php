<?php

include 'encabezado.html';

$correo=""; $nombre=""; $apellidos=""; $telefono=""; 
$pwd=""; 

if(isset($_POST['correo'])) $correo = $_REQUEST['correo'];
if(isset($_POST['nombre'])) $nombre = $_REQUEST['nombre'];
if(isset($_POST['apellidos'])) $apellidos = $_REQUEST['apellidos'];
if(isset($_POST['telefono'])) $telefono = $_REQUEST['telefono'];
if(isset($_POST['pwd'])) $pwd = $_REQUEST['pwd'];

$conexion = mysqli_connect("localhost", "root", "", "delirapid") or
                        die("Problemas con la conexión");
                
                    mysqli_query($conexion, "insert into usuarios(correo,nombre,apellidos,telefono,pwd) 
                            values ('$_REQUEST[correo]','$_REQUEST[nombre]','$_REQUEST[apellidos]','$_REQUEST[telefono]','$_REQUEST[pwd]')") or
                            die("Problemas en el select" . mysqli_error($conexion));
                    mysqli_close($conexion);
                        echo "<br><br><br>REGISTRO EXITOSO";

                        include 'login.php';
                ?>


