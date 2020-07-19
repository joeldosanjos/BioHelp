<?php

include ("conexao.php");

$login = $_POST['login'];
$nome = $_POST['nome'];
$senha = $_POST['senha'];
$cpf = $_POST['cpf'];
$nascimento = $_POST['nascimento'];

$sql = "insert into guarda(login, nome, senha,cpf,nascimento)
        values ('$login','$nome','$senha','$cpf','$nascimento')";

if (mysqli_query($conexao, $sql)) {
    echo "<script> alert ('Dados inseridos com sucesso. Redirecionando para página principal.') </script>";
    echo "<script> window.location.href = '../index.html' </script>";
}
    else {
        echo "erro".mysqli_error($conexao);
}
?>
