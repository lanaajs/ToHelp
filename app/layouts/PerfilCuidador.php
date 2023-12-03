<!--DOCTYPE html-->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--==Title============================-->
    <title>Product Page HTML</title>
    <!--==CSS==============================-->
    <link rel="stylesheet" href="../../public/assets/css/PerfilCuidador.css" />
    <!--==Poppins-font=====================-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!--==Using-Font-Awesome-for-Icons=====-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />


</head>

<body>

    <!--==Product-Page=================================-->
    <header id="cabecalho">

        <div id="logo">
            <img src="../../public/assets/img/LogoBranca.png" alt="">
        </div>

        <a id="linkperfil" href="/contratante/conta/1">
            <span class="material-symbols-outlined">
                account_circle
            </span>
        </a>
    </header>
    <div class="total">
        <div class="caixaum">
            <section id="product-page">
                <div class="product-details">
                    <!--**Img*************************-->
                    <div class="product-img">
                        <!-- Swiper Slider -->
                        <div class="swiper mySwiper">
                            <div class="swiper-wrapper">
                                <!--**1******-->
                                <?php
                                // Verifique se o parâmetro de ID está presente na URL
                                $url = $_SERVER['REQUEST_URI'];

                                // Divide a URL com base na barra ("/")
                                $parts = explode('/', $url);

                                // Obtém o último item do array, que deve ser o número desejado
                                $numero = end($parts);


                                require_once(__DIR__ . '/../../classes/Database.php');

                                $db = new classes\Database();
                                $db->ligar();


                                // Consulta para obter informações específicas do cuidador com base no ID
                                $query = 'SELECT ic.id, fpc.foto_cuid FROM infoCuidador ic
                                INNER JOIN fotoPerfilCuid fpc ON ic.id = fpc.id_cuid_FK
                                WHERE ic.id = :id';

                                $statement = $db->ligacao->prepare($query);

                                // Substitui :id pelo valor de $numero
                                $statement->bindParam(':id', $numero, PDO::PARAM_INT);

                                // Executa a consulta
                                $statement->execute();

                                // Obtém os resultados
                                $result = $statement->fetchAll(PDO::FETCH_CLASS);



                                if (!empty($result)) {
                                    foreach ($result as $row) {
                                ?>
                                        <div class="swiper-slide">
                                            <img src="../../public/assets/arqvs_cuid/<?php echo $row->foto_cuid; ?>" />
                                        </div>
                                <?php
                                    }
                                } else {
                                    echo "Nenhum resultado encontrado";
                                }

                                $db->desligar();
                                ?>
                                <!--**2******-->
                                <div class="swiper-slide">
                                    <img src="../../public/assets/img/idosos.png" />
                                </div>
                                <!--**3******-->
                                <div class="swiper-slide">
                                    <video>
                                        <source src="/public/assets/videos/video_cuidadora.mp4" type="video/mp4">
                                        Seu navegador não suporta o elemento de vídeo.
                                    </video>
                                </div>
                                <!--**4******-->
                                <div class="swiper-slide">
                                    <img src="../../public/assets/img/cuidados-atividade.png" />
                                </div>
                            </div>
                            <!--btns-->
                            <div class="slider-btns">
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-button-next"></div>
                            </div>
                        </div>
                        <!--social-->
                    </div>
                    <!--**Text************************-->
                    <?php
                    // Verifique se o parâmetro de ID está presente na URL
                    $url = $_SERVER['REQUEST_URI'];

                    // Divide a URL com base na barra ("/")
                    $parts = explode('/', $url);

                    // Obtém o último item do array, que deve ser o número desejado
                    $numero = end($parts);


                    require_once(__DIR__ . '/../../classes/Database.php');

                    $db = new classes\Database();
                    $db->ligar();


                    // Consulta para obter informações específicas do cuidador com base no ID
                    $query = 'SELECT ic.id, ic.nome_cuid, ic.sobrenome_cuid, fpc.foto_cuid, icc.sobre_txt FROM infoCuidador ic
                    INNER JOIN infoCurricular icc ON ic.id = icc.id_cuid_FK
                    INNER JOIN fotoPerfilCuid fpc ON ic.id = fpc.id_cuid_FK
                    WHERE ic.id = :id';

                    $statement = $db->ligacao->prepare($query);

                    // Substitui :id pelo valor de $numero
                    $statement->bindParam(':id', $numero, PDO::PARAM_INT);

                    // Executa a consulta
                    $statement->execute();

                    // Obtém os resultados
                    $result = $statement->fetchAll(PDO::FETCH_CLASS);



                    if (!empty($result)) {
                        foreach ($result as $row) {
                    ?>
                            <div class="product-text">
                                <!--category-->
                                <span class="product-category">Código: C000<?php echo $row->id ?></span>
                                <h3><?php echo $row->nome_cuid . " " . $row->sobrenome_cuid; ?></h3>
                                <div class="whats">
                                    <span class="product-price">R$95/hr</span>
                                    <div class="img-social-bar">
                                        <h5>(71) 9 9378-9288</h5>
                                        <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
                                    </div>
                                </div>
                                <p><?php echo $row->sobre_txt; ?>
                                </p>
                                <!--size-->
                                <div class="product-size-container">
                                    <form class="forms" action="#">
                                        <strong>Selecione as ações desejadas:</strong>
                                        <div class="product-size">
                                        </div>
                                        <input type="checkbox" name="ac1">
                                        <label for="ac1">Administração de remédios</label><br>
                                        <input type="checkbox" name="ac2">
                                        <label for="ac2">Alimentação</label><br>
                                        <input type="checkbox" name="ac3">
                                        <label for="ac3">Apoio emocional</label><br>
                                        <input type="checkbox" name="ac4">
                                        <label for="ac4">Atividades domésticas</label><br>
                                        <input type="checkbox" name="ac5">
                                        <label for="ac5">Companhia</label><br>
                                        <input type="checkbox" name="ac6">
                                        <label for="ac6">Documentação</label><br>
                                        <input type="checkbox" name="ac7">
                                        <label for="ac7">Fisioterapia e exercícios/mobilidade</label><br>
                                        <input type="checkbox" name="ac8">
                                        <label for="ac8">Gerenciamento de agenda</label><br>
                                        <input type="checkbox" name="ac9">
                                        <label for="ac9">Higiene pessoal</label><br>
                                        <input type="checkbox" name="ac10">
                                        <label for="ac10">Monitoramento de saúde</label><br>
                                        <input type="checkbox" name="ac11">
                                        <label for="ac11">Segurança</label><br>
                                        <input type="checkbox" name="ac12">
                                        <label for="ac12">Transporte</label><br><br>
                                        <strong>Selecione o dependente beneficiado:</strong>
                                        <div class="product-size">
                                        </div>
                                        <div class="input-field">
                                            <div class="mark">
                                                <input type="radio" id="check" name="tipo_contr" value="0">
                                                <p id="depen">Walter Cabral Santos - Código: D00004</p>
                                            </div>
                                            <div class="mark" id="markdois">
                                                <input type="radio" id="check" name="tipo_contr" value="1">
                                                <p id="depen">Maria Joana Santos - Código: D00008</p>
                                            </div>
                                        </div>
                                        <br>
                                        <strong>Selecione um horário:</strong>
                                        <div class="product-size">
                                        </div>
                                        <div class="input-field">
                                            <div class="mark">
                                                <input type="time" id="check" name="tipo_contr" value="0">
                                            </div>
                                    </form>
                                    <div class="product-button">
                                        <a href="#" class="add-wishlist-btn">Contratar</a>
                                    </div>
                                </div>
                                <!--btn-->
                            </div>
                    <?php
                        }
                    } else {
                        echo "Nenhum resultado encontrado";
                    }

                    $db->desligar();
                    ?>

                </div>
            </section>
        </div>
        <div id="feedback">
            <div id="feed">
                <div class="avaliacoes">Avaliações do cuidador</div>
                <div class="av">
                    <div class="nota">4.7</div>
                    <ul class="avaliacao" id="nota">
                        <li class="star-icon ativo" data-avaliacao="1"></li>
                        <li class="star-icon" data-avaliacao="2"></li>
                        <li class="star-icon" data-avaliacao="3"></li>
                        <li class="star-icon" data-avaliacao="4"></li>
                        <li class="star-icon" data-avaliacao="5"></li>
                    </ul>
                </div>
                <section class="area_av">
                    <div class="av">
                        <ul class="avaliacao1" id="nota">
                            <li class="star-icon1 ativo" data-avaliacao="1"></li>
                            <li class="star-icon1" data-avaliacao="2"></li>
                            <li class="star-icon1" data-avaliacao="3"></li>
                            <li class="star-icon1" data-avaliacao="4"></li>
                            <li class="star-icon1" data-avaliacao="5"></li>
                        </ul>
                    </div>
                    <img class="perfil_avaliacao1" src="https://img.freepik.com/fotos-gratis/pessoa-de-origem-indiana-se-divertindo_23-2150285283.jpg?w=740&t=st=1700226238~exp=1700226838~hmac=aa78b8f3441658a49ba7b6310b56c715b99d670a7c7feccfafd1e92e0f2ea28d" />
                    <div class="grupo1">
                        <div class="retangulo1">
                        </div>
                        <div class="av_txt1"> Ótima cuidadora! Cuidou muito bem da minha mãe, ela ficou muito feliz após os cuidados.</div>
                    </div>
                    <div class="av">
                        <ul class="avaliacao1" id="nota">
                            <li class="star-icon1 ativo" data-avaliacao="1"></li>
                            <li class="star-icon1" data-avaliacao="2"></li>
                            <li class="star-icon1" data-avaliacao="3"></li>
                            <li class="star-icon1" data-avaliacao="4"></li>
                            <li class="star-icon1" data-avaliacao="5"></li>
                        </ul>
                    </div>
                    <img class="perfil_avaliacao1" src="https://img.freepik.com/fotos-gratis/mulher-sorridente-e-terna-aperta-as-maos-no-peito-em-gesto-de-agradecimento-e-agradecimento-aprecia-boas-palavras-e-expressa-gratidao-sente-se-lisonjeada-por-receber-um-presente-romantico-isolado-na-parede-verde_273609-39452.jpg?t=st=1700222632~exp=1700223232~hmac=ba9191cb3f44112f5f6d56ce6b8943b3d0d74be1a146ee585650ac6f4adfe672" />
                    <div class="grupo1">
                        <div class="retangulo1">
                        </div>
                        <div class="av_txt1"> Além de gentil é uma ótima profissional. Nota 10!</div>
                    </div>
                    <div class="av">
                        <ul class="avaliacao1" id="nota">
                            <li class="star-icon1 ativo" data-avaliacao="1"></li>
                            <li class="star-icon1" data-avaliacao="2"></li>
                            <li class="star-icon1" data-avaliacao="3"></li>
                            <li class="star-icon1" data-avaliacao="4"></li>
                            <li class="star-icon1" data-avaliacao="5"></li>
                        </ul>
                    </div>
                    <img class="perfil_avaliacao1" src="https://img.freepik.com/fotos-gratis/cintura-para-cima-retrato-de-bonito-homem-serio-com-barba-por-fazer-mantem-as-maos-juntas-vestido-com-camisa-azul-escura-tem-conversa-com-o-interlocutor-fica-contra-a-parede-branca-freelancer-homem-autoconfiante_273609-16320.jpg?t=st=1700226271~exp=1700226871~hmac=d38c67978807256deaef36291ebea01f037e9731d9c7de3eef9369d91264c857" />
                    <div class="grupo1">
                        <div class="retangulo1">
                        </div>
                        <div class="av_txt1"> Recomento muito a Lucia para quem procura uma profissiional responsável.</div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <a href=""></a>

    <!--==Jquery===========================-->

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 1,
            spaceBetween: 10,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            breakpoints: {
                450: {
                    slidesPerView: 2,
                    spaceBetween: 0,
                },
                820: {
                    slidesPerView: 1,
                    spaceBetween: 0,
                },
                1024: {
                    slidesPerView: 2,
                    spaceBetween: 0,
                },
            },
            on: {
                slideChange: function() {
                    //Pausa o vídeo anterior quando o slide mudar
                    var previousSlide = swiper.slides[swiper.previousIndex];
                    if (previousSlide.querySelector("video")) {
                        previousSlide.querySelector("video").pause();
                    }
                },
                slideChangeTransitionEnd: function() {
                    // Reproduz o vídeo quando o slide ficar ativo
                    var currentSlide = swiper.slides[swiper.activeIndex];
                    if (currentSlide.querySelector("video")) {
                        currentSlide.querySelector("video").play();
                    }
                },
            },
        });

        $('.s-checkbox').on('change', function() {
            $('.s-checkbox').not(this).prop('checked', false);
        });
    </script>
</body>

</html>