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
    <header>
    <div class="header">
            <img id="logo" src="../../public/assets/img/LogoPreta.png" alt="">
            <a id="linkperfil" href="/contratante/conta/1">
                <span class="material-symbols-outlined">
                    account_circle
                </span>
            </a>
        </div>
    </header>
    <section id="product-page">
        <div class="product-details">
            <!--**Img*************************-->
            <div class="product-img">

                <!-- Swiper Slider -->
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">

                        <!--**1******-->
                        <div class="swiper-slide">
                            <img src="../../public/assets/img/yy.jpg" />
                        </div>
                        <!--**2******-->
                        <div class="swiper-slide">
                            <img src="../../public/assets/img/idosos.png" />
                        </div>
                        <!--**3******-->
                        <div class="swiper-slide">
                            <img src="images/3.jpg" />
                        </div>
                        <!--**4******-->
                        <div class="swiper-slide">
                            <img src="images/1.jpg" />
                        </div>

                    </div>

                    <!--btns-->
                    <div class="slider-btns">
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                </div>


                <!--social-->
                <div class="img-social-bar">
                    <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
                </div>
            </div>
            <!--**Text************************-->
            <div class="product-text">
                <!--category-->
                <span class="product-category">Código: C00002</span>
                <h3>Maria Lívia Barbosa</h3>
                <span class="product-price">R$95/hr</span>
                <p>Sou uma cuidadora de idosos experiente e apaixonada, dedicada a oferecer cuidados personalizados, incluindo assistência em atividades diárias, apoio emocional e um ambiente acolhedor. Tenho habilidades em cuidados básicos, administração de medicamentos e estou comprometida em manter-me atualizada com as melhores práticas. Estou pronta para contribuir para o bem-estar de seus entes queridos.
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
                    </form>
                </div>

                <!--btn-->
                <div class="product-button">
                    <a href="#" class="add-wishlist-btn">Contratar</a>
                </div>
            </div>
        </div>
    </section>

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
        });


        $('.s-checkbox').on('change', function() {
            $('.s-checkbox').not(this).prop('checked', false);
        });
    </script>
</body>

</html>