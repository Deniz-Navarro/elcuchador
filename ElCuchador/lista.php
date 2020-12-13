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
             </tr>
             <?php
                $id = $_REQUEST['id'];
                if($id==1){
                    $query = mysqli_query($conn,"SELECT * FROM negocio");
                }elseif($id == 2){
                    $query = mysqli_query($conn,"SELECT * FROM rechazada");
                }         
                while($row = $query->fetch_array()){          
             ?>
             <tr>
                  <td><?php echo $row['clave']; ?></td>
                  <td><?php echo $row['nombre']; ?></td>
                  <td><?php echo $row['correo']; ?></td>
                  <td><a href="visualizar.php?clave=<?php echo $row['clave']; ?>&id=<?php echo $id; ?>" class="btn btn-outline-info" >Ver más</a></td>
             </tr>
             <?php } ?>
          </table>
        </div>
        <div class="col">
        </div>
        </div>
    </div>
    <script src="/js/confirmacion.js"></script>
  </body>
</html>