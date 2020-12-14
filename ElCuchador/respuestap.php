<?php
session_start();
include 'conexion.php';
$clave = $_REQUEST['clave'];
$control = $_REQUEST['control'];
if($control == 1 or $control == 2){
  $query = mysqli_query($conn,"SELECT * FROM solicitudp WHERE clave = '".$clave."'");
  while($row = $query->fetch_array()){
      $idnegocio = $row['idnegocio'];
      $descripcion = $row['descripcion'];
      $nombre = $row['nombre'];
      $precio = $row['precio'];
      $tipo = $row['tipo'];
      $imagen = $row['imagen'];
      $tcomida = $row['tcomida'];
    }
    $query = mysqli_query($conn,"DELETE FROM solicitudp WHERE clave = '".$clave."'");

  if($control == 1){
      $query = mysqli_query($conn,"INSERT INTO publicaciones (clave,idnegocio,descripcion,nombre,precio,tipo,imagen,tcomida) 
      VALUES (null,'$idnegocio','$descripcion','$nombre','$precio','$tipo','$imagen','$tcomida')");
      #$query = mysqli_query($conn,"SELECT * FROM seguidores WHERE clave = '".$idnegocio."'");
      #while($row = $query->fetch_array()){
       #   $destinatario = $row['correo'];
        #  $asunto = '¡Nueva publicacion!';
       #   $mensaje = 'Esta es una prueba';
        #  mail($destinatario, $asunto, $mensaje);
      #}
      
  }
  header('location:solicitudesp.php');

}

if($control == 3){
  $query = mysqli_query($conn,"DELETE FROM publicaciones WHERE clave = '".$clave."'");
  if($_SESSION['tipo'] == 1 or $_SESSION['tipo'] == 2){
    header('location:index.php');
  }
  elseif($_SESSION['tipo'] == 3){
    header('location:publicaciones.php');
  }
  
}
?>
