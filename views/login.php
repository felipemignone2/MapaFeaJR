<!DOCTYPE html>
<html lang="PT-BR">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>

    <div class="container centerfy" align="center">
        <div class="row justify-content-center">
            <div class="col s12 m4 offset-m4">
                <div class="top" align="center">
                    <img class="responsive-img" src="../resources/img/LOGO_ICON.jpeg" width="38%">
                    <br>
                    <h4>
                        <img class="responsive-img" src="../resources/img/logo_6.png">
                        <br>CONTATOS
                    </h4>
                </div>
            </div>
            <div class="form col s12 m4 offset-m4">
                <form action="../assets/php/action.php" method="POST">
                    <input type="text" name="usuario" placeholder="USUÁRIO" autocomplete="off">
                    <input type="password" name="senha" placeholder="SENHA" autocomplete="off">
                    <br>
                    <br>
                    <input class="button" type="submit" class="botaomodal" value="ENTRAR">
                    <br>
                    <br>
                    <a href="recuperar.php">RECUPERAR ACESSO</a>
                </form>
            </div>
        </div>

        <footer>
            <div class="center-align">
                <div class="col s8">
                    <a href="https://feajr.com/#" target="_blank"><img class="responsive-img" src="../resources/img/Logo-FEA-ju-nior-USP--Todo-Branco-.png" width="90vw" class="logofea"></a>
                    <a href="https://ejcomp.com.br" target="_blank"><img class="responsive-img" src="../resources/img/ejcomp.png" width="90vw" class="logoejcompo"></a>
                    <br>
                    <p>Desenvolvido por EJComp - Empresa Júnior da Computação<br>2019</p>
                </div>
            </div>
        </footer>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="../assets/js/login.js"></script>
</body>

</html>