<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.css" rel="stylesheet">
    <title>Projeto 01</title>
</head>
<body>
    <header>
        <div class="container">
            <div class="headerFlex">
                <div class="logo">
                    LOGOMARCA
                </div><!--logo-->
                <div class="menuDesktop">
                    <ul>
                        <li><a href="">Início</a></li>
                        <li><a href="">Autor</a></li>
                        <li><a href="">Habilidades</a></li>
                        <li><a href="">Fale Conosco</a></li> 
                    </ul>   
                </div><!--menuDesktop-->
                <div class="menuMobileIcon">
                     <img src="script/menu.png" alt="Menu" class="icon_menu">
                </div><!--menuMobile-->
            </div><!--header-flex-->
                <div class="menuMobile hidden">
                    <ul>
                        <li><a href="">Início</a></li>
                        <li><a href="">Autor</a></li>
                        <li><a href="">Habilidades</a></li>
                        <li><a href="">Fale Conosco</a></li> 
                    </ul>  
                </div>
        </div><!--container-->
    </header>


    <!--BANNER PRINCIPAL-->
    <section class="bannerPrincipal">
        <div class="container">
            <div class="bannerPrincipalFlex">
                    <form action="" method="POST">
                        <h2>Coloque aqui o seu melhor e-mail!</h2>
                        <input type="email" name="email">
                        <input type="submit" class="botton" name="acao" value="Cadastre-se!">
                    </form>
            </div><!--bannerPrincialFlex-->
        </div><!--container-->
    </section><!--bannerPrincipal-->

    <section class="autor">
        <div class="container">
            <div class="autorFlex">
                <div class="boxTextAutor">
                    <h3>Luiz Gustavo Gomes</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                        Pellentesque ipsum enim, 
                        scelerisque vel dignissim vitae, 
                        euismod ut risus. Aenean aliquet nulla justo, ac dictum </p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                        Pellentesque ipsum enim, 
                        scelerisque vel dignissim vitae, 
                        euismod ut risus. Aenean aliquet nulla justo, ac dictum </p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                        Pellentesque ipsum enim, 
                        scelerisque vel dignissim vitae, 
                        euismod ut risus. Aenean aliquet nulla justo, ac dictum </p>
                </div><!--boxTextAutor-->
                <div class="imgAutor">
                        <img src="images/Perfil.PNG" alt="Autor || Luiz Gustavo Gomes">
                </div><!--imgAutor-->
            </div><!--autorFlex-->
        </div><!--container-->
    </section><!--autor-->

    <section class="habilidades">
        <div class="container">
            <div class="habilidadesFlex">
                <div class="boxHabilidades">
                    <div class="img">
                        <img src="images/icons/html.png" alt="HTML5">
                    </div><!--img-->     
                        <h3>HTML5</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus viverra luctus feugiat. 
                            Vivamus malesuada ante convallis faucibus ultricies.</p>
                </div><!--boxHabilidades-->

                <div class="boxHabilidades whitebg">
                        <div class="img">
                            <img src="images/icons/css.png" alt="HTML5">
                        </div><!--img-->     
                        <h3>CSS3</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus viverra luctus feugiat. 
                            Vivamus malesuada ante convallis faucibus ultricies.</p>
                </div><!--boxHabilidades-->

                <div class="boxHabilidades">
                        <div class="img">
                            <img src="images/icons/javascript.png" alt="HTML5">
                        </div><!--img-->    
                        <h3>Javascript</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus viverra luctus feugiat. 
                            Vivamus malesuada ante convallis faucibus ultricies.</p>
                </div><!--boxHabilidades-->
            </div><!--habilidadesFlex-->
        </div><!--container-->
    </section><!--habilidades-->
</body>
<script src="script/script.js"></script>
</html>