<?php
include 'Header.php';
$clave = $_REQUEST['clave'];
$id = $_REQUEST['id'];
if($id == 1){
  $query = mysqli_query($conn,"SELECT * FROM negocio WHERE clave = '".$clave."'");
}elseif($id == 2){
  $query = mysqli_query($conn,"SELECT * FROM rechazada WHERE clave = '".$clave."'");
}elseif($id == 3){
  $query = mysqli_query($conn,"SELECT * FROM solicitudn WHERE clave = '".$clave."'");
}

while($row = $query->fetch_array()){
    $nombre2 = $row['nombre'];
    $correo = $row['correo'];
    $direccion = $row['direccion'];
    $telefono = $row['telefono'];
    $ruta = $row['imagen'];
    $tnegocio = $row['tnegocio'];
    $tcomida = $row['tcomida'];
    $pagina = $row['pagina'];
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
                <h3 style="font-family: fantasy;">-- Información de la empresa --</h3>
                </td>
              </tr>
              <tr>
                  <td>ID</td>
                  <td><?php echo $clave; ?></td>  
             </tr>
             <tr>
                <td>Nombre</td>
                <td><?php echo $nombre2; ?></td>
             </tr>
            <tr>
                <td>Correo</td>
                <td><?php echo $correo; ?></td>
            </tr> 
            <tr>
                <td>Direccion</td>
                <td><?php echo $direccion; ?></td>
            </tr>
            <tr>
                <td>Telefono</td> 
                <td><?php echo $telefono; ?></td>  
            </tr>  
            <tr>
                <td>Negocio</td> 
                <td><?php echo $tnegocio; ?></td>
            </tr>
            <tr>
                <td>Categoría</td> 
                <td><?php echo $tcomida; ?></td>
            </tr>        
             <tr>
                <td>Pagina</td>                    
                <td><?php echo '<a href="'.$pagina.'">'.$pagina.'</a>' ?></td>   
             </tr>
             <tr>
                <td>Imagen</td>                    
                <td><button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#imagen">
                  Ver imagen</button></td>   
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