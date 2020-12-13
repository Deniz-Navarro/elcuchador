<?php
include 'conexion.php';
session_start();
    if($_FILES){
        $uploadDirectory = "assets/imagenespublicaciones/";
        $file = $_FILES['file']['tmp_name'];
        $uploadFileCopy = $uploadDirectory . basename($_FILES['file']['name']);
        $_SESSION['rut'] = $uploadFileCopy;
        if(move_uploaded_file($file, $uploadFileCopy)){
            echo 'El archivo fue subido exitosamente';
        }
    }
    if (isset($_POST['botonform'])) {
        $nombre = $_POST['nombre'];
        $descripcion = $_POST['descripcion'];
        $tipo = $_POST['tipo'];
        $precio = $_POST['precio'];
        $clave = $_SESSION['clave'];
        $query = mysqli_query($conn,"SELECT * FROM negocio WHERE clave = '".$clave."'");
        while($row = $query->fetch_array()){
            $tcomida = $row['tcomida'];   
        }
        $ruta = $_SESSION['rut'];
        $query = mysqli_query($conn,"INSERT INTO solicitudp (clave,idnegocio,descripcion,nombre,precio,tipo,imagen,tcomida) 
        VALUES (null,'$clave','$descripcion','$nombre','$precio','$tipo','$ruta','$tcomida')");
        if (!$query)
        {
            include 'nuevap.php';
            ?>
            <div class="alert alert-danger text-center" role="alert">Error al solicitar publicacion</div>
            <?php
        }
        else
        {
            include 'nuevap.php';
            ?>
            <div class="alert alert-success text-center" role="alert">¡Los datos fueron enviados exitosamente! Espera ser aceptado por un validador.</div>
            <br>
            <center><a href="index.php">Volver a la pagina principal</a></center>
            <br><br>
            <?php
        }
        
    }else{
        echo 'no esta funcionando';
    }
    
    

