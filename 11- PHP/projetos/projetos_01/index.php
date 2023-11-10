<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="descrição do meu website">
    <meta name="keyword" content="sistema, tema">
    <link rel="stylesheet" type="text/css" href="css/css/all.css">
    <link href="css/style.css" rel="stylesheet">
    <title>Projeto 01</title>
</head>
<body>
    <header>
        <div class="container">
            <div class="logo left">
                LOGOMARCA
            </div><!--logo-->
            <div class="menuDesktop right">
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">Sobre</a></li>
                    <li><a href="">Serviços</a></li>
                    <li><a href="">Contato</a></li>
                </ul>
            </div><!--menuDesktop-->
            <div class="menuMobileIcon right" onclick="openMenu()">
                <img src="images/menu_icon.png" alt="Menu" class="icon_menu_responsive">
            </div><!--menumobileicon-->
            <div class="clear"></div>
            <div class="menuMobile hidden">
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">Sobre</a></li>
                    <li><a href="">Serviços</a></li>
                    <li><a href="">Contato</a></li>
                </ul>
            </div><!--menuMobile-->
            <div class="clear"></div>
        </div><!--container-->
    </header>

    <section class="bannerPrincipal">
        <div class="container">
            <form action="" method="POST">
                <h2>Qual é o seu melhor E-Mail?</h2>
                <input type="email" name="email" required>
                <input type="submit" name="acao" class="btn" value="Cadastrar">
            </form>
        </div>
    </section><!--bannerPrincipal-->

    <section class="descricaoAutor">
        <div class="container">         
            <div class="w50 left">
                <h2>Luiz Gustavo Gomes</h2>
                <p>
                Lorem ipsum dolor sit amet, consectetur 
                adipiscing elit. Vestibulum non mi sit amet ligula pellentesque cursus at at quam. Curabitur tincidunt quam eu fermentum imperdiet. 
                Pellentesque placerat vel neque id finibus. 
                </p>
                <p>
                Quisque eget dictum quam. Nulla lobortis elementum nisi eu dictum. Aenean vulputate pretium diam eget tincidunt. In hac habitasse platea dictumst.    
                </p>
            </div><!--w50-->
            <div class="clear"></div>
            <div class="w50">
                <img src="images/autorFoto.png" class="iconMobile" alt="Luiz Gustavo Gomes">
            </div>          
        </div>
    </section><!--descricaoAutor-->

    <section class="especialidades">
        <div class="container">
            <h2>Especialidades</h2>
            <div class="boxEspecialidade w33 left">
                <h3><i class="fa-solid fa-code"></i></h3>
                <h3>CSS3</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    Ut tortor nisl, semper sit amet justo eget, pellentesque porta sem. Nunc nibh odio, tristique ut commodo ut, 
                    viverra dictum arcu. 
                </p>
            </div><!--boxEspecialidades-->
            <div class="boxEspecialidade w33 left">
                <h3><i class="fa-solid fa-laptop-code"></i></h3>
                <h3>HTML5</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    Ut tortor nisl, semper sit amet justo eget, pellentesque porta sem. Nunc nibh odio, tristique ut commodo ut, 
                    viverra dictum arcu. 
                </p>
            </div><!--boxEspecialidades-->
            <div class="boxEspecialidade w33 left">
                <h3><i class="fa-solid fa-file-code"></i></h3>
                <h3>JavaScript</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    Ut tortor nisl, semper sit amet justo eget, pellentesque porta sem. Nunc nibh odio, tristique ut commodo ut, 
                    viverra dictum arcu. 
                </p>
            </div><!--boxEspecialidades-->
        </div>
    </section><!--especialidades-->

    <section class="extras">
        <div class="container">
            <div class="w50 left">
                <h2 class="title">Depoimentos</h2>
                    <div class="depoimentoSingle">
                        <p>
                        Quisque finibus dictum arcu sit amet gravida. 
                        Phasellus eros est, lobortis eget mauris vitae, 
                        volutpat volutpat ligula. Duis vel purus eget 
                        orci vulputate luctus. Aliquam eros ipsum, vestibulum 
                        at mattis sit amet.
                        </p>
                        <p class="nomeAuthor">
                            Lorem Ipsum
                        </p>
                    </div><!--depoimentoSingle-->

                    <div class="depoimentoSingle">
                        <p>
                        Quisque finibus dictum arcu sit amet gravida. 
                        Phasellus eros est, lobortis eget mauris vitae, 
                        volutpat volutpat ligula. Duis vel purus eget 
                        orci vulputate luctus. Aliquam eros ipsum, vestibulum 
                        at mattis sit amet.
                        </p>
                        <p class="nomeAuthor">
                            Lorem Ipsum
                        </p>
                    </div><!--depoimentoSingle-->

                    <div class="depoimentoSingle">
                        <p>
                        Quisque finibus dictum arcu sit amet gravida. 
                        Phasellus eros est, lobortis eget mauris vitae, 
                        volutpat volutpat ligula. Duis vel purus eget 
                        orci vulputate luctus. Aliquam eros ipsum, vestibulum 
                        at mattis sit amet.
                        </p>
                        <p class="nomeAuthor">
                            Lorem Ipsum
                        </p>
                    </div><!--depoimentoSingle-->
            </div><!--w50-->
            <div class="clear"></div>
            <div class="w50">
                <h2 class="title">Serviços</h2>
                <div class="servicos">
                    <ul>
                        <li> Quisque finibus dictum arcu sit amet gravida. 
                        Phasellus eros est, lobortis eget mauris vitae, 
                        volutpat volutpat ligula. Duis vel purus eget 
                        orci vulputate luctus.</li>
                        <li> Quisque finibus dictum arcu sit amet gravida. 
                        Phasellus eros est, lobortis eget mauris vitae, 
                        volutpat volutpat ligula. Duis vel purus eget 
                        orci vulputate luctus.</li>
                        <li> Quisque finibus dictum arcu sit amet gravida. 
                        Phasellus eros est, lobortis eget mauris vitae, 
                        volutpat volutpat ligula. Duis vel purus eget 
                        orci vulputate luctus.</li>
                    </ul>
                </div>
            </div><!--w50-->
        </div><!--container-->
    </section><!--extras-->
    <footer>
        <p>Todos os direitos reservados</p>
    </footer>
    <script src="script/script.js"></script>
</body> 
</html>