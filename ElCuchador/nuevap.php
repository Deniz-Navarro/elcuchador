<?php 
error_reporting(0);
include 'Header.php'; 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/dropzone.min.css">
    <title>El cuchador</title>
</head>
<body>
        <div class="container">
          <div class="row justify-content-center pt-2 mt-2 mr-1">
              <div class="col-md-6 formulario">
                  <form action="upload.php" id="formulario1" method="POST">
                      <div class="form-group text-center">
                        <h3 class="text-light">Nueva publicacion</h3>
                      </div>
                      <div class="form-group pt-2 ">
                          <input type="text" class="form-control formu" name="nombre" id="p" placeholder="Titulo" required>
                      </div>
                      <div class="form-group">
                        <textarea name="descripcion" id="p" cols="69" rows="10" maxlength="1000" placeholder=" Descripción"></textarea>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group ">
                                 <select name="tipo" id="" class="form-control formu">
                                    <option value="#">Tipo</option>
                                    <option value="1">Anuncio</option>
                                    <option value="2">Oferta</option>
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <input type="number" class="form-control formu" name="precio" id="p" placeholder="Precio $" required>
                        </div>
                    </div>
                    <div class="container">
                        <div class="form-container"></div>
                    </div>
                  </form>
                  <div class="form-container">
                        <form action="upload.php" class="dropzone" id="FormUploadFile" enctype="multipart/form-data">
                            <div class="dz-message">
                                <div class="icon"><img src="assets/imagenes/iconoi.png" class="rounded" width="40" alt="..."></div>
                                <h2>Suelta tu imagen aquí</h2>
                                <span class="note">No hay archivos seleccionados</span>
                            </div>
                            <div class="fallback">
                                <input type="file" name="file" multiple>
                            </div>
                        </form>
                        
                  </div>
                  <button type="submit" class="btn btn-block login mt-2" id="botonform" name="botonform" form="formulario1">Publicar</button>
                  
              </div>
          </div>
      </div>
    <script src="js/dropzone.js"></script>
    <script type="text/javascript">
        Dropzone.options.FormUploadFile = {
        maxFilesize: 3,
        maxFiles: 1,
        acceptedFiles : ".jpg , .png",
        addRemoveLinks: true,
        init: function() {
            this.on("success", function(file) { alert("Agregar archivo."); });
        }
        };
    </script>
</body>
</html>