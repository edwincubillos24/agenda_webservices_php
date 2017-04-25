<?php

$nombre = $_GET['nombre'];

require_once('db_connect.php');

$sql = "SELECT * FROM contactos WHERE nombre='$nombre';";
$r = (mysqli_query($con, $sql));
 
$result = array();
$row = mysqli_fetch_array($r);
array_push($result, array(
    "id" => $row['id'],
    "nombre" => $row['nombre'],
    "telefono" => $row['telefono'],
    "correo" => $row['correo']        
));

echo json_encode(array('result'=>$result));

mysqli_close($con);
?>
     
        
  

