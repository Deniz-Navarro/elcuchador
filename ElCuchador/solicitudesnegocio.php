<?php
include 'Header.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>El cuchador</title>
  </head>
  <body>
<div id="linea"></div>
    <div class="text-center">
      <div class="row">
        <div class="col">
        </div>
        <div class="col-lg-7">
          <!--Tabla-->
          <table class="table table-striped table-dark mt-5">
              <tr>
                  <td>ID</td>
                  <td>Nombre</td>
                  <td>Correo</td>
                  <td>Más info</td>
                  <td>Aceptar</td>  
                  <td>Rechazar</td>    
             </tr>
             <?php
                $query = mysqli_query($conn,"SELECT * FROM solicitudn");
                while($row = $query->fetch_array()){
                    
                  
             ?>
             <tr>
                  <td><?php echo $row['clave']; ?></td>
                  <td><?php echo $row['nombre']; ?></td>
                  <td><?php echo $row['correo']; ?></td>
                  <td><a href="visualizar.php?clave=<?php echo $row['clave']; ?>&id=3" class="btn btn-outline-info" >Ver más</a></td>
                  <td><a href="respuesta.php?clave=<?php echo $row['clave']; ?>&control=1" class="btn btn-success table__item__link" >Aceptar</a></td> 
                  <td><a href="respuesta.php?clave=<?php echo $row['clave']; ?>&control=2" class="btn btn-danger table__item__link">Rechazar</a></td>   
             </tr>
             <?php } ?>
          </table>
        </div>
        <div class="col">
        </div>
        </div>
        <div class="row">
        <div class="col"></div>
        <div class="col-lg-3">
        <br><br><br><a href="lista.php?id=1" class="btn btn-outline-success btn-lg btn-block" >Lista Aceptados</a>
        </div>
        <div class="col-lg-3">
        <br><br><br><a href="lista.php?id=2" class="btn btn-outline-danger btn-lg btn-block" >Lista Rechazados</a></div>
        <div class="col"></div>
      </div>
    </div>
    <script src="/js/confirmacion.js"></script>
  </body>
</html>