<html>

<head>

    <title> Cadastro - BioHelp </title>
    <meta charset = "utf-8">
    <link rel="stylesheet" type="text/css" href="../CSS/contacss.css">
    <link rel="icon" href="../IMG/poppy.png">

</head>

<body>

    <div class = "meio">

        <div class= "topo">
            <a href = "../index.html">
                <img alt = "BIOHELP" class="slogan" src="../IMG/slogan.png" align = "right">
            </a>
        </div>


        <div class = "menu">
            <div class= "home">
               <a href='../index.html' class='button'>Início</a>
            </div>

            <div class = "conta">
                <a href='../HTML/conta.html' class='button'>Conta</a>
            </div>

            <div class = "contatos">
                <a href='../HTML/contatos.html' class='button'>Contato</a>
            </div>

            <div class= "guia">
                <a href='../HTML/guia.html' class='button'>Guia</a>
            </div>
        </div>


        <div class = "meio">
            <div class = "fundomeio">
                <br> <br> <br> <br>

                    <div class="wrapper" align = "center">
                        <form class="login" method="post" action = "incluirc.php">
                            <p class="title">Cadastro de Usuário Padrão</p>
                            <input type="text" name = "nome" placeholder="Nome completo" autofocus/>
                            <i class="fa fa-user"></i>
                            <input type="text" name = "login" placeholder="Nome da conta" autofocus/>
                            <i class="fa fa-user"></i>
                            <input type="password" name = "senha" placeholder="Senha" />
                            <i class="fa fa-key"></i>
                            <button>
                                <i class="spinner"></i>
                                <span class="state">Cadastrar</span>
                            </button>
                        </form>
                    </div> <br>

            </div>
        </div>


        <div class = "rodape">
            <br>
            <h3> © 2016 - 2017 BIOHELP </h3>
        </div>

                </div>

</body>

</html>
