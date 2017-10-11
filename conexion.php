<?php

$servidor = 'localhost';
$user = 'root';
$pass = '';
$database = 'login';
$con = mysqli_connect($servidor, $user, $pass, $database) or die ('No se pudo establecer conexion...').mysqli_error($con);

?>