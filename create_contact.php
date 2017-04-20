<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    
    $sql = "INSERT INTO contactos (nombre,telefono,correo) VALUES"
            . "('$nombre','$telefono','$correo')";
    
    require_once ('db_connect.php');
    
    if (mysqli_query($con, $sql)){
        echo 'Contacto creado';
    }else{
        echo 'Error: Contacto no creado';
    }
    
    mysqli_close($con);      
        
    }

