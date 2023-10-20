<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <link rel="stylesheet" href="../../public/assets/css/CadastroContratante.css">

    <link rel="icon" type="image/x-icon" href="../../public/assets/img/LogoPreta.png">
    <title>To Help - Cadastro</title>
</head>

<body>

    <header id="cabecalho">

        <div id="logo">
            <img src="../../public/assets/img/LogoBranca.png" alt="">
        </div>

        <div id="setinha">
            <a href="index.html"><img src="../../public/assets/img/iconamoon_arrow-up-2-duotone.png" alt=""></a>
        </div>

    </header>

    <!-- Login -->
    <main>
        <section id="form">

            <h1 id="h1">Cadastre-se</h1>

            <div class="divArea">
                <div id="area">
                    <div id="areaP1" onclick="contratante()">
                        <span class="material-icons">elderly</span>
                        <p>Contratante</p>
                    </div>
                    <div id="areaP2" onclick="cuidador()">
                        <span class="material-icons">&#xE87C;</span>
                        <p>Cuidador</p>
                    </div>
                </div>
            </div>

            <!-- Formulario -->
            <form action="">

                <div class="divArea">
                    <div>
                        <div id="checkbox">
                            <label>
                                <input type="checkbox" id="check" name="escolha" value="1" onclick="textBox(this)">
                                <span class="checkmark"></span>
                            </label>
                            <br>
                            <p>Sou responsável por mim e desejo me cadastrar</p>
                        </div>
                        <div id="checkbox2">
                            <label>
                                <input type="checkbox" id="check2" name="escolha" value="2" onclick="textBox(this)">
                                <span class="checkmark"></span>
                            </label>
                            <br>
                            <p>Sou responsável legal e desejo cadastrar meu dependente</p>
                        </div>
                    </div>
                </div>

                <div id="inputs">

                    <div class="divInputs">
                        <label for="nome">Nome Completo</label>
                        <br>
                        <input class="input" type="text" id="nome">

                        <br><br>

                        <label for="email">E-mail</label>
                        <br>
                        <input class="input" type="email" id="email">

                        <br><br>

                        <label for="tel">Telefone</label>
                        <br>
                        <input class="input" type="text" id="tel" maxlength="14" placeholder="(00) 00000-0000"
                        onkeypress="return event.charCode >= 48 && event.charCode <= 57">

                        <div id="dependente">
                            <br>
                            <label for="dependentes">Relação com o dependente</label>
                            <br>
                            <input class="input" type="text" id="dependentes">
                        </div>
                    </div>

                    <br>

                    <div class="divInputs">
                        <label for="cpf">CPF</label>
                        <br>
                        <input class="input" type="text" id="cpf" maxlength="14" placeholder="000.000.000-00" 
                        onkeypress="return event.charCode >= 48 && event.charCode <= 57">
                        <br><br>

                        <div class="input-area">

                            <div id="inputs-special">
                                <label for="state">Estado</label>
                                <input class="input" type="text" id="state">
                            </div>

                            <div id="inputs-state-city">
                                <label for="city">Cidade</label>
                                <input class="input" type="text" id="city">
                            </div>

                        </div>

                        <br>

                        <label for="endereco">Endereço</label>
                        <br>
                        <input class="input" type="text" id="endereco">

                        <br><br>

                        <div class="input-area">

                            <div id="inputs-special">
                                <label for="numero">Número</label>
                                <input class="input" type="text" id="numero" 
                                
                                onkeypress="return event.charCode >= 48 && event.charCode <= 57">
                            </div>

                            <div id=" inputs-state-city">
                                <label for="complemento">Complemento</label>
                                <input type="text" class="input" id="complemento">
                            </div>

                        </div>
                    </div>

                </div>



            </form>
            <div id="botao">
                <button id="btn" onclick="analisar()">Cadastrar-se</button>
            </div>
        </section>
    </main>
    <script src="../../public/assets/js/Cadastro.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
</body>

</html>