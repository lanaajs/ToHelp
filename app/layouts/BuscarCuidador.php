<?php
include("../controllers/BuscarCuidController.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,500,500i,700,700i">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="../../public/assets/css/BuscarCuidador.css">
    <title>Document</title>
</head>

<body>
    <header>
        <a id="linkperfil" href="/contratante/conta/1">
            <span class="material-symbols-outlined">
                account_circle
            </span>
        </a>
    </header>
    <section class="sec1">
        <div class="tudo1">
            <img id="logo" src="../../public/assets/img/LogoPreta.png" alt="">
            <div class="txt1">
                <h1>Busque Cuidadores</h1>
                <p>Nossa equipe é composta por profissionais altamente qualificados e dedicados, comprometidos em
                    proporcioContratar alto padrão de cuidados para seus entes queridos.</p>
            </div>
            <hr>
            <div class="txt2">
                <div class="subtxt">
                    <div class="circle">.</div>
                    <p id="pdif">
                        Nossa plataforma oferece um processo de seleção rigoroso, assegurando que todos os cuidadores
                        são de confiança e possuem as habilidades necessárias para atender às necessidades específicas
                        de cada indivíduo.</p>
                </div>
                <div class="subtxt">
                    <div class="circle">.</div>
                    <p id="pdif">
                        Nossa plataforma oferece um processo de seleção rigoroso, assegurando que todos os cuidadores
                        são de confiança e possuem as habilidades necessárias para atender às necessidades específicas
                        de cada indivíduo.</p>
                </div>
            </div>
        </div>
        <div class="tudo2">
            <img id="foto" src="../../public/assets/img/cuidador_idosos_2.jpg" alt="">
        </div>
    </section>
    <section class="sec2">
        <div class="topo">
            <h1 class="titulo-sec2">Encontre os melhores <br> cuidadores aqui</h1>
            <form method="GET" action="">

                <div class="input">
                    <input id="inp" name="buscar" type="text" value="<?php if (isset($_GET['busca'])) echo $_GET['busca'] ?>" placeholder="Digite o nome do cuidador">
                    <button type="submit" id="buscar"><span class="material-icons">search</span></button>
                </div>
                <div id="caixa-resultados">
                    <ul>
                    </ul>
                </div>

                <div class="caixastotal">
                    <div class="caixas">
                        <form action="">
                            <div class="div-filtro">
                                <select name="estado" id="estado">
                                    <option disabled selected>Selecione um estado</option>
                                    <?php
                                    $prepare = $conexaoPesquisa->prepare("SELECT id, nome FROM estados ORDER BY nome ASC");
                                    $prepare->execute();
                                    $estados = $prepare->fetchAll(PDO::FETCH_ASSOC);

                                    foreach ($estados as $opcao) {
                                    ?>
                                        <option value="<?php echo $opcao['id'] ?>"><?php echo $opcao['nome'] ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                                <select name="cidade" id="cidade">
                                    <option disabled selected>Selecione uma cidade</option>
                                </select>
                                <select name="genero" id="selecao">
                                    <option disabled selected>Selecione um gênero</option>
                                    <option value="">Feminino</option>
                                    <option value="">Masculino</option>
                                    <option value="">Indefinido</option>
                                </select>
                        </form>
                    </div>
                </div>
            </form>
        </div>
        <div class="cuidadores1">
            <div class="cuidadores2">
            <div class="cuidcard">
                    <img id="cuidft" src="../../public/assets/img/yy.jpg" alt="">
                    <video id="cuidVideo">
                        <source src="alana.mp4" type="video/mp4">
                        Seu navegador não suporta o elemento de vídeo.
                    </video>
                    <div class="txtcard">
                        <h2>Lucia Ferreira</p>
                            <h3>Técnica em enfermagem</p>
                                <p id="pdif">Glavi amet ritnisl libero molestie ante ut fringilla purus eros quis
                                    glavrid from dolor amet iquam lorem bibendum</p>
                    </div>
                    <button id="saiba">Contratar</button>
                </div> 
                <!-- <div class="cuidcard">
                    <img id="cuidft" src="../../public/assets/img/yy.jpg" alt="">
                    <div class="txtcard">
                        <h2>Maria Lívia Barbosa</p>
                            <h3>Técnica em enfermagem</p>
                                <p id="pdif">Glavi amet ritnisl libero molestie ante ut fringilla purus eros quis
                                    glavrid from dolor amet iquam lorem bibendum</p>
                    </div>
                    <button id="saiba">Contratar</button>
                </div>
                <div class="cuidcard">
                    <img id="cuidft" src="../../public/assets/img/yy.jpg" alt="">
                    <div class="txtcard">
                        <h2>Maria Lívia Barbosa</p>
                            <h3>Técnica em enfermagem</p>
                                <p id="pdif">Glavi amet ritnisl libero molestie ante ut fringilla purus eros quis
                                    glavrid from dolor amet iquam lorem bibendum</p>
                    </div>
                    <button id="saiba">Contratar</button>
                </div>
                <div class="cuidcard">
                    <img id="cuidft" src="../../public/assets/img/yy.jpg" alt="">
                    <div class="txtcard">
                        <h2>Maria Lívia Barbosa</p>
                            <h3>Técnica em enfermagem</p>
                                <p id="pdif">Glavi amet ritnisl libero molestie ante ut fringilla purus eros quis
                                    glavrid from dolor amet iquam lorem bibendum</p>
                    </div>
                    <button id="saiba">Contratar</button>
                </div>
                <div class="cuidcard">
                    <img id="cuidft" src="../../public/assets/img/yy.jpg" alt="">
                    <div class="txtcard">
                        <h2>Maria Lívia Barbosa</p>
                            <h3>Técnica em enfermagem</p>
                                <p id="pdif">Glavi amet ritnisl libero molestie ante ut fringilla purus eros quis
                                    glavrid from dolor amet iquam lorem bibendum</p>
                    </div>
                    <button id="saiba">Contratar</button>
                </div>
                <div class="cuidcard">
                    <img id="cuidft" src="../../public/assets/img/yy.jpg" alt="">
                    <div class="txtcard">
                        <h2>Maria Lívia Barbosa</p>
                            <h3>Técnica em enfermagem</p>
                                <p id="pdif">Glavi amet ritnisl libero molestie ante ut fringilla purus eros quis
                                    glavrid from dolor amet iquam lorem bibendum</p>
                    </div>
                    <button id="saiba">Contratar</button>
                </div>
                <div class="cuidcard">
                    <img id="cuidft" src="../../public/assets/img/yy.jpg" alt="">
                    <div class="txtcard">
                        <h2>Maria Lívia Barbosa</p>
                            <h3>Técnica em enfermagem</p>
                                <p id="pdif">Glavi amet ritnisl libero molestie ante ut fringilla purus eros quis
                                    glavrid from dolor amet iquam lorem bibendum</p>
                    </div>
                    <button id="saiba">Contratar</button>
                </div> -->
            </div>
        </div>
    </section>

    <footer>
        <p class="u-text">
            <span>Todos os direitos reservados - </span>
        </p>
        <a class="u-link" href="/" target="_blank">
            <span>ToHelp</span>
        </a>
    </footer>

    <script>
        var videosEmReproducao = false; // Variável para rastrear se algum vídeo está em reprodução

        // Função para configurar o comportamento da imagem e vídeo
        function configurarComportamento(imagem, video, txtcard, contratarBtn) {
            imagem.addEventListener("click", function() {
                // Verificar se outros vídeos estão em reprodução
                if (!videosEmReproducao) {
                    videosEmReproducao = true; // Bloquear outros vídeos
                    imagem.style.display = "none";
                    video.style.display = "block";
                    txtcard.style.display = "none";
                    contratarBtn.style.display = "none";
                    video.play();
                }
            });

            video.addEventListener("ended", function() {
                videosEmReproducao = false; // Desbloquear outros vídeos após o término
                imagem.style.display = "block";
                video.style.display = "none";
                txtcard.style.display = "block";
                contratarBtn.style.display = "block";
            });
        }

        // Obter todas as cuidcards
        var cuidcards = document.querySelectorAll(".cuidcard");

        // Iterar sobre cada cuidcard e configurar o comportamento
        cuidcards.forEach(function(cuidcard) {
            var imagem = cuidcard.querySelector("img");
            var video = cuidcard.querySelector("video");
            var txtcard = cuidcard.querySelector(".txtcard");
            var contratarBtn = cuidcard.querySelector("#saiba");

            configurarComportamento(imagem, video, txtcard, contratarBtn);
        });
    </script>

    <!-- Biblioteca responsável pela realização das buscas -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.6.0/axios.min.js" integrity="sha512-WrdC3CE9vf1nBf58JHepuWT4x24uTacky9fuzw2g/3L9JkihgwZ6Cfv+JGTtNyosOhEmttMtEZ6H3qJWfI7gIQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Biblioteca responsável por impedir a sobrecarga do servidor decorrente das constantes requisições no banco de dados -->
    <script src="https://cdn.jsdelivr.net/npm/underscore@1.13.6/underscore-umd-min.js"></script>
    <script src="../../public/assets/js/BucarCuid.js"></script>
</body>

</html>