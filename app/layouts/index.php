<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lily+Script+One&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../../public/assets/css/Home.css">
    <script src="../../public/assets/js/Home.js"></script>

    <link rel="icon" type="image/x-icon" href="../../public/assets/img/LogoPreta.png">
    <title>ToHelp - Home</title>
</head>

<body>
    <!-- Cabeçalho -->
    <header id="cabecalho">  

        <div id="logo">
            <img src="../../public/assets/img/LogoBranca.png" alt="">
        </div> 

        <div id="menu_desktop">  
                <a href="#cuidadores" class="linkUL2">Nossos Cuidadores</a>
                <a href="#quemSomos" class="linkUL2">Quem Somos</a>
                <a href="" class="linkUL2">Serviços</a>
                <a href="#sobre" class="linkUL2">Sobre</a>    
        </div>

        <div id="btnEntrar">
            <a href="/login/contratante" class="linkEntrar2">LOGIN</a>
        </div>

        <div id="gaveta">
            <img src="../../public/assets/img/menu.png" id="imgLogo" onclick="showMenu()" alt="">
        </div>

    </header>

    <!-- Menu Mobile -->
        <div id="menu_mobile">
            <ul id="ul1">
                <li class="itemUL"><a href="#sobre" class="linkUL">Sobre</a></li>
                <li class="itemUL"><a href="" class="linkUL">Serviços</a></li>
                <li class="itemUL"><a href="#quemSomos" class="linkUL">Quem Somos</a></li>
                <li class="itemUL"><a href="#cuidadores" class="linkUL">Nossos Cuidadores</a></li>
                <li class="itemEntrar"><a href="/contratante/login" class="linkEntrar">LOGIN</a></li>
                <li class="itemUL"><a href="/contratante/cadastro" class="linkC">Cadastre-se</a></li>
            </ul>
        </div>


    <!-- Banner -->
    <section id="banner">

        <div id="textBanner">
            <p>Sua Saúde é</p>
            <p id="ps">Nossa Prioridade.</p>
        </div>

        <div id="linkBanner">
            <a href="">SAIBA MAIS</a>
        </div>    

    </section>

    <!-- Cuidadores -->
    <section id="cuidadores">

        <div class="text">
            <h2>Cuidadores <br> verificados</h2>
            <p>Os melhores cuidadores da sua região e verificados profissionalmente.</p>
        </div>
        <br>


        <div class="carrosel">


                <div class="area">
        
                    <div class="box">
                        <img src="../../public/assets/img/cuidadora.png" alt="Cuidador">
            
                        <div class="nome">
                            <strong><p>Mônica Rodrigues</p></strong>
                        </div>
            
                        <div class="valor">
                            <p>R$ 75/hr</p>
                        </div>
                        
                        <div class="descricao">
                            <p>Graduação em Farmácia. Curso técnico em Cuidados ao Idoso. 2 anos de experiência.</p>
                        </div>
            
                    </div>
        
                        <div class="box">
                            <img src="../../public/assets/img/cuidadora.png" alt="Cuidador">
                
                            <div class="nome">
                                <strong><p>Mônica Rodrigues</p></strong>
                            </div>
                
                            <div class="valor">
                                <p>R$ 75/hr</p>
                            </div>
                            
                            <div class="descricao">
                                <p>Graduação em Farmácia. Curso técnico em Cuidados ao Idoso. 2 anos de experiência.</p>
                            </div>
                
                        </div>
        
                    <div class="box">
                        <img src="../../public/assets/img/cuidadora.png" alt="Cuidador">
            
                        <div class="nome">
                            <strong><p>Mônica Rodrigues</p></strong>
                        </div>
            
                        <div class="valor">
                            <p>R$ 75/hr</p>
                        </div>
                        
                        <div class="descricao">
                            <p>Graduação em Farmácia. Curso técnico em Cuidados ao Idoso. 2 anos de experiência.</p>
                        </div>
            
                    </div>

                    <div class="box">
                        <img src="../../public/assets/img/cuidadora.png" alt="Cuidador">
            
                        <div class="nome">
                            <strong><p>Mônica Rodrigues</p></strong>
                        </div>
            
                        <div class="valor">
                            <p>R$ 75/hr</p>
                        </div>
                        
                        <div class="descricao">
                            <p>Graduação em Farmácia. Curso técnico em Cuidados ao Idoso. 2 anos de experiência.</p>
                        </div>
            
                    </div>

                    <div class="box">
                        <img src="../../public/assets/img/cuidadora.png" alt="Cuidador">
            
                        <div class="nome">
                            <strong><p>Mônica Rodrigues</p></strong>
                        </div>
            
                        <div class="valor">
                            <p>R$ 75/hr</p>
                        </div>
                        
                        <div class="descricao">
                            <p>Graduação em Farmácia. Curso técnico em Cuidados ao Idoso. 2 anos de experiência.</p>
                        </div>
            
                    </div>
            </div>

        </div>

    </section>

    <!-- Quem Somos -->
    <section id="quemSomos">

        <div class="text">
            <h2>Quem <br> somos</h2>
            <p>Bem-vindos ao nosso site, um espaço dedicado a estabelecer uma ponte essencial entre cuidadores de idosos e suas respectivas famílias.</p>
            <br>
            <p>Nosso objetivo é oferecer um ambiente seguro e confiável, onde famílias preocupadas possam encontrar cuidadores experientes e dedicados para seus idosos amados. Acreditamos que cada idoso merece atenção personalizada, respeito e um cuidado compassivo.</p>
            <img src="../../public/assets/img/idosos.png" alt="">
        </div>

    </section>

    <!-- Sobre -->
    <section id="sobre">

        <div id="textSobre">
            <h2>Sobre</h2>
            <p>Ao utilizar o ToHelp, você terá acesso a uma ampla variedade de cuidadores disponíveis para contratação. Além disso, nosso site oferece recursos adicionais para tornar o processo de busca e seleção ainda mais fácil. Você pode filtrar os cuidadores com base em suas habilidades, horários disponíveis, localização e muito mais.</p>
        </div>

        <div id="sobreImg">
            <img src="../../public/assets/img/idososEcuidadores.png" alt="">
        </div>

    </section>

    <!-- Rodapé -->
    <footer id="rodape">

        <div id="f1">
            <img src="../../public/assets/img/LogoBranca.png" alt="">
                <li><a href="Home.html">Home</a></li>
                <li><a href="">Saiba Mais</a></li>
                <li><a href="#quemSomos">Quem Somos</a></li>
                <li><a href="#sobre">Sobre</a></li>
        </div>

        <div id="f2">
            <h3>Serviços</h3>
            <li><a href="#cuidadores">Nossos Cuidadores</a></li>
            <li><a href="Cadastro.html">Seja um Cuidador</a></li>
            

        </div>

        <div id="f3">
            <img src="../../public/assets/img/redes.png" alt="">
        </div>

    </footer>
    
</body>
</html>