<?php

$nombre = $_GET['nombre'];

require_once('db_connect.php');

$sql = "DELETE FROM contactos WHERE nombre='$nombre';";

    if (mysqli_query($con, $sql)){
        echo 'Contacto eliminado';
    }else{
        echo 'Error: Contacto no eliminado';
    }
    
    mysqli_close($con);      
        
    

