<?php
include 'Header.php';
$clave = $_REQUEST['clave'];
$query = mysqli_query($conn,"SELECT * FROM solicitudp WHERE clave = '".$clave."'");
while($row = $query->fetch_array()){
    $idnegocio = $row['idnegocio'];
    $descripcion = $row['descripcion'];
    $nombre = $row['nombre'];
    $precio = $row['precio'];
    $tipo = $row['tipo'];
    $ruta = $row['imagen'];
    $tcomida = $row['tcomida'];
  }
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
        <div class="col-lg-8">
          <br>
          
          <!--Tabla-->
          <table class="table table-striped table-dark mt-3">
              <tr>
                <td colspan="2">
                <h3 style="font-family: fantasy;">-- Información de la publicacion --</h3>
                </td>
              </tr>
              <tr>
                  <td>ID</td>
                  <td><?php echo $clave; ?></td>  
             </tr>
             <tr>
                <td>Nombre</td>
                <td><?php echo $nombre; ?></td>
             </tr>
            <tr>
                <td>Descripcion</td>
                <td><?php echo $descripcion; ?></td>
            </tr> 
            <tr>
                <td>Precio</td>
                <td><?php echo $precio; ?></td>
            </tr>
            <tr>
                <td>Tipo</td> 
                <td><?php echo $tipo; ?></td>
            </tr>
            <tr>
                <td>Tipo de comida</td> 
                <td><?php echo $tcomida; ?></td>
            </tr>
             <tr>
                <td>Imagen</td>                    
                <td><button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#imagen">
                  Ver imagen</button></td>   
             </tr>
             <tr>
                <td>Informacion de la empresa</td>                    
                <td><a href="visualizar.php?clave=<?php echo $idnegocio; ?>&id=1" class="btn btn-outline-info" >Ver empresa</a></td>   
             </tr>
          </table>
        </div>
        <div class="col">
        </div>
      </div>
    </div>

        <div class="modal fade" id="imagen" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-body">
          <?php echo '<img src="'.$ruta.'" class="img-fluid" alt="Responsive image">';?>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary btn-lg btn-block" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

  </body>
</html>

