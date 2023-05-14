<?php
$server='localhost';
$user = 'root';
$pass = '';
$db = 'dbprojek_uts';

$aksi = mysqli_connect($server, $user, $pass, $db);

mysqli_select_db($aksi, $db);


?>