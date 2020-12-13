<?php
include '../conexion.php';
session_start();
$email = $_POST['email'];
$clave = $_POST['contra'];

function sesion($query){
    while($row = $query->fetch_array()){
        $_SESSION['clave'] = $row['clave'];
        $_SESSION['nombre'] = $row['nombre'];
        $_SESSION['contra'] = $row['contra'];
        $_SESSION['tipo'] = $row['tipo'];
        $_SESSION['email'] = $row['correo'];
      }
    
    header('Location: ../usuario.php');
}

$query = mysqli_query($conn,"SELECT * FROM negocio WHERE correo = '".$email."' and contra = '".$clave."'");
$nr = mysqli_num_rows($query);
    
if ($nr == 1)
{
    sesion($query);
}
//Verifica si esta en la tabla usuario
else if($nr == 0)
{
    $query = mysqli_query($conn,"SELECT * FROM usuario WHERE correo = '".$email."' and contra = '".$clave."'");
    $nr = mysqli_num_rows($query);
if ($nr == 1)
{
    sesion($query);
}

else if($nr == 0)
{
    ?>
    <?php
    include ("login.html");
    ?>
    <div class="alert alert-danger text-center" role="alert">Contraseña o correo incorrectos</div>
    <?php
}
}
?>


