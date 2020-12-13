<?php
include 'conexion.php';
session_start();
$email = $_SESSION['email'];
$clave = $_SESSION['clave'];
$nombre = $_SESSION['nombre'];
$contra = $_SESSION['contra'];
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/estilos.css">
    <title>El cuchador</title>
  </head>
  <body>
    <!--Header-->
    <div class="text-center header">
      <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
          <a href="index.php" class="btn">
        <img src="assets/imagenes/logito.png" class="rounded mt-2" width="70"   alt="...">
        <p style="font-family: fantasy;" class="h2 font-weight-bold  ">EL CUCHADOR</p></a>
        </div>
        <div class="col-2">
           <!-- Boton al modal -->
          <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal"><img src="assets/imagenes/usuario.png" class="rounded mt-3" width="30"   alt="...">
          <?php if($_SESSION['tipo'] == 1){?>
          <h5 class="text-center">Administrador</h5>
          <?php } elseif($_SESSION['tipo'] == 2){?>
          <h5 class="text-center">Validador</h5>
          <?php } elseif($_SESSION['tipo'] == 3){?>
          <h5 class="text-center">Negocio</h5>
          <?php } elseif($_SESSION['tipo'] == 4){?>
          <h5 class="text-center">Usuario</h5>
          <?php } ?>
          </button> <br>
          <a href="cerrarsesion.php">Cerrar sesion</a>
        </div>
      </div><div class="row"></div>
    </div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><div class="alert alert-success" role="alert">
         Bienvenido!
        </div></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h6>ID: <?php echo $clave; ?><br>
        Nombre: <?php echo $nombre; ?><br>
        Correo: <?php echo $email; ?><br>
        <?php if($_SESSION['tipo'] == 1){?>
          Role: Administrador
          <?php } elseif($_SESSION['tipo'] == 2){?>
          Role: Validador
          <?php } elseif($_SESSION['tipo'] == 3){?>
          Role: Negocio
          <?php } elseif($_SESSION['tipo'] == 4){?>
          Role: Usuario
          <?php } ?>
          </h6>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>