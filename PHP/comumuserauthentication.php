<html>
<head>
<title>Autenticando usuário</title>
<script type="text/javascript">
    function loginsuccessfully () {
        setTimeout("window.location='../index.html'", 5000);
    }

    function loginfailed () {
        setTimeout("window.location='../HTML/logincomum.html'", 5000);
    }
</script>
</head>

<body background="../Img/fundomeio.jpg">

<?php
include ("conexao.php");

$login = $_POST['login'];
$senha = $_POST['senha'];

$sql = mysqli_query($conexao, "SELECT * FROM comum WHERE login = '$login' AND senha = '$senha'") or die(mysqli_error($conexao));
$row = mysqli_num_rows($sql);

if ($row > 0){
    session_start();
    $_SESSION['login']=$_POST['login'];
    $_SESSION['senha']=$_POST['senha'];
    echo "<center><div style = 'font-family: Bebas Neue; font-size: 40px;'>Você foi autenticado com sucesso! Aguarde um instante.</div></center>";
    echo "<script>loginsuccessfully()</script>";
} else {
    echo "<center><div style = 'font-family: Bebas Neue; font-size: 40px;'>Nome de usuário ou senha inválidos. Aguarde um instante.</div></center>";
    echo "<script>loginfailed()</script>";
}
?>

</body>
</html>
