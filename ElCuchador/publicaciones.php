<?php
include 'Header.php';
$clave = $_SESSION['clave'];
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
        <div class="col"></div>
        <div class="col-9">
        <div class="row">
        <?php
        $query = mysqli_query($conn,"SELECT * FROM publicaciones WHERE idnegocio = '".$clave."'");
        $aux = 0;
        while($row = $query->fetch_array()){
        ?>
        <div class="col-lg-4 col-md-6 col-sm-12 mt-4">
          <div class="card border-info mb-3">
                <div class="card-header bg-transparent border-info"><?php echo '<img src="'.$row['imagen'].'" class="card-img-top fluid-image" height="180" alt="Responsive image">';?></div>
                <div class="card-body bg-transparent border-info">
                  <h5 class="card-title"><?php echo $row['nombre'] ?></h5>
                  <h6 class="card-subtitle text-muted mb-2">$<?php echo $row['precio'] ?></h6>
                  <p class="card-text"><?php echo $row['descripcion'] ?></p>
                  <a type="button" href="respuestap.php?clave=<?php echo $row['clave']; ?>&control=3" class="btn btn-danger">Eliminar</a>
                  <button type="submit" class="btn btn-info" data-toggle="modal" data-target="#vermas" name='vermas' 
                  onClick="mostrarDatos('<?php echo $row['clave']; ?>','<?php echo $row['idnegocio']; ?>','<?php echo $row['descripcion']; ?>','<?php echo $row['nombre']; ?>','<?php echo $row['precio']; ?>','<?php echo $row['tipo']; ?>')">Ver más</button>
                </div>     
            </div>
        </div>
        
        <?php } ?>  
        </div>
        </div>           
        <div class="col-2">
        <br><br>    
          <a href="nuevap.php" class="btn" role="button" aria-pressed="true"><img src="assets/imagenes/nueva.png" class="rounded" width="30"   alt="...">
          <br><h6>Nueva publicacion</h6></a>
        </div>
        </div>
    </div>
  <?php ?>
    <!-- Modal -->
  <div class="modal fade" id="vermas" tabindex="-1" aria-labelledby="vermas" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5> Informacion de la publicacion</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
              <table class="table table-dark table-striped">
                <tbody>
                  <tr>
                    <th scope="row">ID</th>
                    <td><label id="clave"></label></td>
                  </tr>
                  <tr>
                    <th scope="row">Nombre</th>
                    <td><label id="nombre"></label></td>
                  </tr>
                  <tr>
                    <th scope="row">ID negocio</th>
                    <td><label id="idnegocio"></label></td>
                  </tr>
                  <tr>
                    <th scope="row">Descripcion</th>
                    <td><label id="descripcion"></label></td>
                  </tr>
                  <tr>
                    <th scope="row">Precio</th>
                    <td><label id="precio"></label></td>
                  </tr>
                  <tr>
                    <th scope="row">Tipo</th>
                    <td><label id="tipo"></label></td>
                  </tr>
                </tbody>
            </table>
            </h6>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>


    <script type="text/javascript">
      function mostrarDatos(clave,idnegocio,descripcion,nombre,precio,tipo){
        var objetivo = document.getElementById('clave');
        objetivo.innerHTML = clave;
        var objetivo = document.getElementById('idnegocio');
        objetivo.innerHTML = idnegocio;
        var objetivo = document.getElementById('descripcion');
        objetivo.innerHTML = descripcion;
        var objetivo = document.getElementById('nombre');
        objetivo.innerHTML = nombre;
        var objetivo = document.getElementById('precio');
        objetivo.innerHTML = precio;
        var objetivo = document.getElementById('tipo');
        objetivo.innerHTML = tipo;
      }
    </script>
    <script src="/js/confirmacion.js"></script>
  </body>
</html>