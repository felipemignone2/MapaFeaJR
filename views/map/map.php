<!DOCTYPE html>
<html lang="PT-BR">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="../../assets/css/mapstyle.css">
</head>

<body>
    <div class="over">
        <ul id="slide-out" class="sidenav">
            <li>
                <div class="user-view">
                    <div class="top" align="center">
                        <img class="responsive-img" src="../../resources/img/LOGO_ICON.jpeg" width="38%">
                        <h5>
                            <img class="responsive-img" src="../../resources/img/logo_6.png"> CONTATOS
                            <br>
                        </h5>
                    </div>
                </div>
            </li>
            <li><a href="#!"><i class="material-icons">add</i>ADICIONAR CONTATO</a></li>
            <li><a href="#!"><i class="material-icons">mode_edit</i>EDITAR CONTATO</a></li>
            <li><a href="#!"><i class="material-icons">delete_forever</i>REMOVER CONTATO</a></li>
            <br>
            <br>
            <li class="buttonStyled"><a href="#!"><i class="material-icons">storage</i>BANCO DE DADOS</a></li>
            <br>
            <br>
            <li class="buttonStyled full"><a href="#!"><i class="material-icons">keyboard_return</i>DESCONECTAR</a></li>
            <br>
            <br>
            <div class="centerfy" align="center">
                <a href="https://feajr.com/#" target="_blank"><img class="responsive-img" src="../../resources/img/Logo-FEA-ju-nior-USP--Todo-Branco-.png" width="80vw" class="logofea"></a>
                <a href="https://ejcomp.com.br" target="_blank"><img class="responsive-img" src="../../resources/img/ejcomp.png" width="80vw" class="logoejcompo"></a>
                <br>
                <p>Desenvolvido por EJComp - Empresa Júnior da Computação<br>2019</p>
            </div>
        </ul>

        <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <div class="search">
            <div class="input-field col s5">
                <i class="material-icons prefix">search</i>
                <input id="icon_prefix" type="text" class="validate" placeholder="BUSCAR ESCRITÓRIO">
            </div>
        </div>

        <div class="fixed-action-btn">
            <a class="btn-large white">
                <i class="material-icons">blur_on</i>
                <p>ALTERNAR MAPA</p>
            </a>
        </div>


    </div>


    <div id="map"></div>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDSo3IpJobBUT_Uut-48xZ1Y1jnXTX4FiI&callback=initMap" async defer></script>
    <script src="../../assets/js/map.js"></script>
</body>

</html>