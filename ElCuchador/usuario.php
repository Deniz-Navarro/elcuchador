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
        <div class="col-lg-12">
          <!--Barra de navegacion-->
          <ul class="nav justify-content-center" style="background-color: #6b8f7e">
            <li class="nav-item">
              <a class="nav-link active text-dark" href="restaurantes.php"><img src="assets/imagenes/cubiertossss.png" class="rounded" width="30"  alt="..."> Restaurantes</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark" href="puestoc.php"><img src="assets/imagenes/puesto de comida.png" class="rounded" width="23"   alt="..."> Puestos de comida</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark" href="bares.php"><img src="assets/imagenes/cervecitaaaaa.webp" class="rounded" width="30"   alt="..."> Bares</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark" href="todasof.php"><img src="assets/imagenes/oferta.png" class="rounded" width="30"   alt="..."> Todas las ofertas</a>
            </li>
          </ul>
        </div>
        <div class="col">
        </div>
      </div>
      <div class="row mt-4">
        <div class="col">
        </div>
        <div class="col-lg-7">
          <!--Carrusel de anuncios-->
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="assets/imagenes/kfcofertaaa.png" class="d-block w-100" alt="...">
              </div>
              <?php 
              $query = mysqli_query($conn,"SELECT * FROM carrusel");
              $aux = 0;
              while($row = $query->fetch_array()){?>
              <div class="carousel-item">
                <?php echo '<img src="'.$row['imagen'].'" class="d-block w-100" alt="...">';?>
              </div><?php } ?>

            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        <div class="col">
        <?php if($_SESSION['tipo'] == 1 or $_SESSION['tipo'] == 2 ){?>
            <br><br>    
          <a href="solicitudesnegocio.php" class="btn soli" role="button" aria-pressed="true">Solicitudes de negocios</a>
          <br><br>
          <a href="solicitudesp.php" class="btn soli" role="button" aria-pressed="true">Solicitudes de publicaciones</a>
          <?php } elseif($_SESSION['tipo'] == 3){?>
            <br><br>
            <a href="publicaciones.php" class="btn soli" role="button" aria-pressed="true">Publicaciones</a>
          <?php } elseif($_SESSION['tipo']== 4){?>
          Role: Usuario
          <?php }?>
        </div>
      </div>
    </div>
    <!-- Todas las publicaciones-->
      <div class="text-center">
        <div class="row">
          <div class="col"></div>
          <div class="col-lg-8">
            <div class="row">
              <?php
              $query = mysqli_query($conn,"SELECT * FROM publicaciones");
              $aux = 0;
              while($row = $query->fetch_array()){
              ?>
              <div class="col-lg-4 col-md-6 col-sm-12 mt-4">
                <div class="card border-info mb-3">
                      <div class="card-header bg-transparent border-info"><?php echo '<img src="'.$row['imagen'].'" class="card-img-top fluid-image" height="180" alt="Responsive image">';?></div>
                      <div class="card-body bg-transparent border-info">
                        <a href="perfil.php?idnegocio=<?php echo $row['idnegocio'] ?>" class="btn">
                            <h5 class="card-title"><?php echo $row['nombre'] ?></h5>
                            <h6 class="card-subtitle text-muted mb-2">$<?php echo $row['precio'] ?></h6>
                            <p class="card-text"><?php echo $row['descripcion'] ?></p>
                        </a><br>
                        <?php if($_SESSION['tipo'] == 1 or $_SESSION['tipo'] == 2 ){?>
                        <a type="button" href="respuestap.php?clave=<?php echo $row['clave']; ?>&control=3" class="btn btn-danger">Eliminar</a><?php } ?>
                        <button type="submit" class="btn btn-info" data-toggle="modal" data-target="#vermas" name='vermas' 
                        onClick="mostrarDatos('<?php echo $row['clave']; ?>','<?php echo $row['idnegocio']; ?>','<?php echo $row['descripcion']; ?>','<?php echo $row['nombre']; ?>','<?php echo $row['precio']; ?>','<?php echo $row['tipo']; ?>')">Ver más</button>
                      </div>     
                  </div>
              </div>
              <?php } ?>  
            </div>
          </div>           
          <div class="col-2"></div>
        </div>
      </div>

    <!-- Modal Ver más -->
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
  </body>
</html>