<?php

define('DB_USER',"root");
define('DB_PASSWORD',"123456");
define('DB_DATABASE',"agenda");
define('DB_SERVER',"localhost");

$con = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE) or 
        die ('Unable to connect');
?>

