<?php
include '../conexion.php';

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$clave = $_POST['clave'];
$clave2 = $_POST['clave2'];
if($clave != $clave2)
{
    ?>
    <?php
    include ("registro.html");
    ?>
    <div class="alert alert-danger text-center" role="alert">Las contraseñas no coinciden</div>
    <?php
}
else{
    $query = mysqli_query($conn,"INSERT INTO usuario (clave,nombre,contra,correo,tipo) VALUES (null,'$nombre','$clave','$email','4')");
if (!$query)
{
    ?>
    <?php
    include ("registro.html");
    ?>
    <div class="alert alert-danger text-center" role="alert">Error al registrar al usuario</div>
    <?php
}
else
{
    header('Location: login.html');
}
}

?>