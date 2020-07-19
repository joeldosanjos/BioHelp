<?php

include ("conexao.php");

$login = $_POST['login'];
$nome = $_POST['nome'];
$senha = $_POST['senha'];

$sql = "insert into comum(login, nome, senha)
        values ('$login','$nome','$senha')";

if (mysqli_query($conexao, $sql)) {
    echo "<script> alert ('Dados inseridos com sucesso') </script>";
    echo "<script> window.location.href = '../index.html' </script>";
}
    else {
        echo "erro".mysqli_error($conexao);
}
?>
