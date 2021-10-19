<?php

session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/nav.css">
    <link rel="stylesheet" type="text/css" href="css/cadastro.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body class="cadastrar-js">
    <nav>
        <div class="container">
            <div class="row">
                <ul style="float: left;">
                    <li><img class="logo" src="img/logo.png"></li>
                </ul>
                <ul style="float: right;">
                    <li><a class="active" href="./home.html">Home</a></li>
                    <li><a href="./quemSomos.html">Quem somos</a></li>
                    <li><a href="./voluntarios.html">Voluntários</a></li>
                    <li><a id="nav" href="./cadastro.html">Cadastro</a></li>
                    <li><a href="./perfil.html">Perfil</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-cadastro">
        <div class="content primeiro-content">
            <div class="primeira-coluna">
                <h2 class="title title-primary">Bem-vindo de volta!</h2>
                <p class="descricao description-primary"> Para manter-se conectado a nós</p>
                <p class="descricao description-primary"> por favor, faça o login com suas informações pessoais</p>
                <button id="entrar" class="btn btn-primary">Entrar</button>
            </div>
            <div class="segunda-coluna">
                <h2 class="title title-second">Criar conta</h2>
                <div class="midias-sociais">
                    <ul class="lista-social-midia">
                        <a class="link-social-media" href="#">
                            <li class="item-socialMidia">
                                <i class="fab fa-facebook-f"></i>
                            </li>
                        </a>
                        <a class="link-social-media" href="#">
                            <li class="item-socialMidia">
                                <i class="fab fa-google-plus-g"></i>
                            </li>
                        </a>
                        <a class="link-social-media" href="#">
                            <li class="item-socialMidia">
                                <i class="fab fa-instagram"></i>
                            </li>
                        </a>

                    </ul>
                </div>
                <p class="descricao description-second"> ou utilize sua conta de E-mail:</p>
                <form class="form" method="POST" action="validaCadastro.php">
                    <label class="label-input" for="">
                        <i class="far fa-user icon-modify"></i>
                        <input name="CadNome" type="text" placeholder="Nome">
                    </label>

                    <label class="label-input" for="">
                        <i class="far fa-envelope icon-modify"></i>
                        <input name="CadEmail" type="email" placeholder="E-mail">
                    </label>

                    <label class="label-input" for="">
                        <i class="fas fa-lock icon-modify"></i>
                        <input name="CadSenha" type="text" placeholder="Senha">
                    </label>
                    <button class="btn btn-second" id="modal">Cadastrar</button>
                </form>
            </div>
        </div>
        <div class="content segundo-content">
            <div class="primeira-coluna">
                <h2 class="title title-primary">Olá voluntário!</h2>
                <p class="descricao "> insira suas informações pessoais</p>
                <p class="descricao "> e faça parte do nosso time!</p>
                <button id="cadastrar" class="btn btn-primary">Cadastrar</button>
            </div>
            <div class="segunda-coluna">
                <h2 class="title title-second">Entrar em minha conta</h2>
                <div class="midias-sociais">
                    <div class="midias-sociais">
                        <ul class="lista-social-midia">
                            <a class="link-social-media" href="#">
                                <li class="item-socialMidia">
                                    <i class="fab fa-facebook-f"></i>
                                </li>
                            </a>
                            <a class="link-social-media" href="#">
                                <li class="item-socialMidia">
                                    <i class="fab fa-google-plus-g"></i>
                                </li>
                            </a>
                            <a class="link-social-media" href="#">
                                <li class="item-socialMidia">
                                    <i class="fab fa-instagram"></i>
                                </li>
                            </a>

                        </ul>
                    </div>
                </div>
                <p class="descricao description-second"> ou utilize sua conta de E-mail:</p>
                <form class="form" method="POST" action="validaLogin.php">
                    <p>
                        <?php if (isset($_SESSION['loginErro'])) {
                            echo $_SESSION['loginErro'];
                            unset($_SESSION['loginErro']);
                        } ?>
                    </p>
                    <p class="text-center text-success">
                        <?php
                        if (isset($_SESSION['logindeslogado'])) {
                            echo $_SESSION['logindeslogado'];
                            unset($_SESSION['logindeslogado']);
                        }
                        ?>
                    </p>
                    </p>
                    <label class="label-input" for="">
                        <i class="far fa-envelope icon-modify"></i>
                        <input type="email" placeholder="E-mail" name="CadEmail">
                    </label>

                    <label class="label-input" for="">
                        <i class="fas fa-lock icon-modify"></i>
                        <input type="text" placeholder="Senha" name="CadSenha">
                    </label>

                    <a class="password" href="#">Esqueceu sua senha?</a>
                    <button class="btn btn-second">Entrar</button>
                </form>
            </div>

        </div>
    </div>

    <div class="bg-popup">
        <div class="popup-content">
            <div class="x-popup" id="x-popup">
                <button>
                    <a href="#">
                        <i class="fas fa-times"></i>
                    </a>
                </button>
            </div>
            <div class="icon-popup">
                <i class="fa fa-check"></i>
            </div>
            <div class="title-popup">
                Concluído!
            </div>
            <div class="description-popup">
                Obrigado por se cadastrar em nosso portal!
                Clique aqui para ser direcionado a página de perfil para
                que você possa configurá-lo.
            </div>
            <div class="conf-perfil">
                <button id="perfil-popup-btn">
                    <a href="./perfil.html">
                        Configurar meu perfil
                    </a>
                </button>
            </div>
        </div>
    </div>


    <footer class="footer">
        <div class="container">
            <div class="row footer-row">
                <div class="footer-col">
                    <img class="footer-logo" src="img/logo-alt.png">
                </div>
                <div class="footer-col">
                    <div class="atalhos-col">
                        <h4>Atalhos</h4>
                        <ul>
                            <li><a href="./home.html">Home</a></li>
                            <li><a href="./quemSomos.html">Quem somos</a></li>
                            <li><a href="./voluntarios.html">Voluntários</a></li>
                            <li><a href="#nav">Cadastro</a></li>
                            <li><a href="./perfil.html">Perfil</a></li>
                        </ul>
                    </div>
                </div>
                <div class="footer-col">
                    <div>
                        <h4>Contato</h4>
                        <div class="contatos">
                            <a href=""> <i class="fab fa-instagram"></i></a>
                            <a href=""> <i class="fab fa-twitter"></i></a>
                            <a href=""> <i class="fab fa-whatsapp"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="js/cadastro.js"></script>
    <script src="js/cadastro-perfil.js"></script>
</body>

</html>