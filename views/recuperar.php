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
                <form action="" method="POST">
                    <input type="text" name="usuário" placeholder="USUÁRIO" autocomplete="off">
                    <input type="password" name="senha" placeholder="TOKEN MESTRE" autocomplete="off">
                    <br>
                    <br>
                    <br>
                </form>
                <button id="submitform" class="buttonStyled" value="RECUPERAR">RECUPERAR</button>
                <br>
                <br>
                <br>
                <a href="login.php" class="circle-invert"><i class="material-icons">arrow_back</i></a>
            </div>
        </div>

    </div>

    <div id="modal1" class="modal">
        <div class="modal-content ">
            <div class="">
                <div class="text-justify" align="center">
                    <h4>RECUPERAÇÃO DE ACESSO </h4>
                    <p>O NOVO ACESSO É</p>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <a id="modalclose" class="modal-close waves-effect waves-grey btn-flat">Concluir</a>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="../assets/js/login.js"></script>
</body>

</html>