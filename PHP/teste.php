<?php

include("conexao.php");

if(isset($_POST['login']) && strlen($_POST['login']) > 0){

	if(!isset($_SESSION))
        session_start();

    $_SESSION['login'] = $mysqli->escape_string($_POST['login']);
    $_SESSION['senha'] = md5(md5($_POST['senha']));

    $sql_code = "SELECT senha, codigoc FROM comum WHERE login = '$_SESSION[login]'";
    $sql_query = $mysqli->query($sql_code) or die($mysqli->error);
    $dado = $sql_query->fetch_assoc();
    $total = $sql_query->num_rows;

    if($total == 0){
    	$erro[] = "Este email não pertence à nenhum usuário.";
    }else{

    	if($dado['senha'] == $_SESSION['senha']){

    		$_SESSION['usuario'] = $dado['codigo'];

    	}else{

    		$erro[] = "Senha incorreta.";

    	}

    }

    if(count($erro) == 0 || !isset($erro)){
    	echo "<script>alert('Login efetuado com sucesso'); location.href='sucesso.php';</script>";
    }

}


?>