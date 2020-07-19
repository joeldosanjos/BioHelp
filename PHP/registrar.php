<html>
    <head>
        <title>BioHelp</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="../CSS/registrarcss.css">
        <link rel="icon" href="../IMG/poppy.png">
    </head>
    <body>
        <div class="wrapper" align = "center">
            <form method = "post" class="login" action = "redirecionar.php">
                            <br>
                            <p class="title">Selecione o tipo de conta a registrar:</p>
                            <p style="font-family: arial">Tipo: <select onchange = "la (this.value)">
                            <option disabled selected>Selecione</option>
                            <option value="regcomum.php">Usuário padrão</option>
                            <option value="regguarda.php">Guarda florestal</option>
                            </select></p>

                                <script>
                                    function la (src)
                                    {

                                        window.location=src;
                                    }
                                </script>

                            <br>
                            <a rel="nofollow" rel="noreferrer"href="../index.html">Voltar</a>
            </form>
        </div>

    </body>
</html>
