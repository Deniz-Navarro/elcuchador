<?php
include '../conexion.php';

$nombre = $_POST['nombre'];
$direc = $_POST['direc'];
$email = $_POST['email'];
$telefono = $_POST['num'];
$clave = $_POST['clave'];
$clave2 = $_POST['clave2'];
$negocio = $_POST['negocio'];
$categoria = $_POST['tipo'];
$pagina = $_POST['pag'];
$nimagen = $_FILES['imagen']['name']; //almacena el nombre de la imagen
$archivo = $_FILES['imagen']['tmp_name']; //Contiene el archivo
$ruta = "../assets/imagennegocio";
$ruta = $ruta."/".$nimagen;

move_uploaded_file($archivo,$ruta);

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
    $query = mysqli_query($conn,"INSERT INTO solicitudn (clave,nombre,contra,correo,direccion,telefono,imagen,tnegocio,tcomida,pagina,tipo) 
    VALUES (null,'$nombre','$clave','$email','$direc','$telefono','$ruta','$negocio','$categoria','$pagina','3')");
if (!$query)
{
    ?>
    <?php
    include ("registroem.html");
    ?>
    <div class="alert alert-danger text-center" role="alert">Error al registrar al usuario</div>
    <?php
}
else
{
    ?>
    <?php
    include ("registroem.html");
    ?>
    <div class="alert alert-success text-center" role="alert">¡Los datos fueron enviados exitosamente! Espera ser aceptado por un validador.</div>
    <br>
    <center><a href="../index.php">Volver a la pagina principal</a></center>
    <br><br>
    <?php
}
}

?>