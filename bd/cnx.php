<?php 
require_once"config.php";
$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

mysqli_set_charset($mysqli,"utf8");

 ?>