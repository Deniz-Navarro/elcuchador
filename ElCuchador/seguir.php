<?php
session_start();
include 'conexion.php';
$email = $_SESSION['email'];
$clave = $_SESSION['clave'];
$idnegocio = $_REQUEST['idnegocio'];
$control = $_REQUEST['control'];
if($control == 1){
    $query = mysqli_query($conn,"INSERT INTO seguidores (id,idnegocio,correo,idusuario) VALUES (null,'$idnegocio','$email','$clave')");
}elseif($control == 2){
    $query = mysqli_query($conn,"DELETE FROM seguidores WHERE idnegocio = '".$idnegocio."' and idusuario = '".$clave."'");
}

if ($query)
{
    header('Location: index.php');
}



?>