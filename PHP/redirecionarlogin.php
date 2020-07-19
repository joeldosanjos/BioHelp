<?php

$tipo = $_POST['tipo'];

if ($tipo == "comum") {

    header("location: ../HTML/logincomum.html");
}

if ($tipo == "guarda") {

    header("location: ../HTML/loginguarda.html");
}

?>
