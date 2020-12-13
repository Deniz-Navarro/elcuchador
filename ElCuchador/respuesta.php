<?php
include 'conexion.php';
$clave = $_REQUEST['clave'];
$control = $_REQUEST['control'];

$query = mysqli_query($conn,"SELECT * FROM solicitudn WHERE clave = '".$clave."'");
while($row = $query->fetch_array()){
    $nombre = $row['nombre'];
    $contra = $row['contra'];
    $correo = $row['correo'];
    $direccion = $row['direccion'];
    $telefono = $row['telefono'];
    $ruta = $row['imagen'];
    $tnegocio = $row['tnegocio'];
    $tcomida = $row['tcomida'];
    $pagina = $row['pagina'];
  }
  $query = mysqli_query($conn,"DELETE FROM solicitudn WHERE clave = '".$clave."'");

if($control == 1){
    $query = mysqli_query($conn,"INSERT INTO negocio (clave,nombre,contra,correo,direccion,telefono,imagen,tnegocio,tcomida,pagina,tipo) 
    VALUES (null,'$nombre','$contra','$correo','$direccion','$telefono','$ruta','$tnegocio','$tcomida','$pagina','3')");
}
elseif($control == 2){
    $query = mysqli_query($conn,"INSERT INTO rechazada (clave,nombre,correo,direccion,telefono,imagen,tnegocio,tcomida,pagina,tipo) 
    VALUES (null,'$nombre','$correo','$direccion','$telefono','$ruta','$tnegocio','$tcomida','$pagina','3')");
}

  header('location:solicitudesnegocio.php');
?>