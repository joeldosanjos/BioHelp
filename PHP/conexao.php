<?php

$host = "localhost";
$user = "root";
$pass = "";
$database = "biohelp";

$conexao = mysqli_connect($host,$user,$pass) or die (mysqli_error());
mysqli_select_db($conexao, $database) or die (mysqli_error($conexao));

?>