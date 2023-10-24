<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!----======== CSS ======== -->
    <link rel="stylesheet" href="../../public/assets/css/CadastroCuidador.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">   

    <!----======== JS ======== -->
    <script src="../../public/assets/js/CadastroCuidador.js"></script>
    <script src="../../public/assets/js/Cadastro.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>

    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>ToHelp Cadastro</title>
</head>

<body onload="senhaTAM()">
    <div class="tudo">

        <div class="total">
            <div id="logo">
                <img src="../../public/assets/img/LogoBranca.png" alt="">
            </div>
            <div id="txt">
                <p class="p1">Sua Saúde é</p>
                <p class="p2">Nossa Prioridade.</p>
                <br>
                <p class="p3">ToHelp, para <br> ajudar.</p>
            </div>
        </div>

        <div class="container">
            <div class="cad">
                <header>Cadastro</header>
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

            <form action="#">
                <div class="form first">
                    <div class="details personal">
                        <span class="title">Informações Pessoais</span>

                        <div class="fields">
                            <div class="input-field">
                                <label>Nome</label>
                                <input id="nome" type="text" placeholder="Insira seu nome">
                            </div>

                            <div class="input-field">
                                <label>Sobrenome</label>
                                <input id="sobrenome" type="text" placeholder="Insira seu sobrenome">
                            </div>

                            <div class="input-field">
                                <label>CPF</label>
                                <input id="cpf" type="text" placeholder="Insira seu CPF">
                            </div>

                            <div class="input-field">
                                <label>RG</label>
                                <input id="rg" type="text" placeholder="Insira seu RG">
                            </div>

                            <div class="input-field">
                                <label>Date de Nascimento</label>
                                <input id="date" type="date" placeholder="Insira sua data de nascimento">
                            </div>

                            <div class="input-field">
                                <label>Email</label>
                                <input id="email" type="text" placeholder="Insira seu email">
                            </div>

                            <div class="input-field">
                                <label>Celular</label>
                                <input id="tel" type="text" placeholder="Insira seu telefone celular">
                            </div>

                            <div class="input-field">
                                <label>Gênero</label>
                                <select id="genero">
                                    <option disabled selected>Selecione o gênero</option>
                                    <option>Masculino</option>
                                    <option>Feminino</option>
                                    <option>Outros</option>
                                </select>
                            </div>

                            <div class="input-field">
                                <label>CEP</label>
                                <input id="cep" type="text" placeholder="Insira seu CEP">
                            </div>

                            <div class="input-field">
                                <label>Estado</label>
                                <input id="state" type="text" placeholder="Insira um estado">
                            </div>

                            <div class="input-field">
                                <label>Cidade</label>
                                <input id="city" type="text" placeholder="Insira uma cidade">
                            </div>

                            <div class="input-field">
                                <label>Número</label>
                                <input id="number" type="text" placeholder="Insira um número">
                            </div>

                            <div class="input-field">
                                <label>Complemento</label>
                                <input id="complemento" type="text" placeholder="Insira um complemento">
                            </div>

                            <div class="input-field">
                                <label>Senha</label>
                                <input id="senha" type="password" placeholder="Crie uma senha">
                            </div>
                        </div>
                    </div>
                    <div class="btnn">
                        <button class="nextBtn" onclick="analisar()" id="btn">
                            <span class="btnText">Prosseguir</span>
                            <i class="uil uil-navigator"></i>
                        </button>
                        <p style="color: black;">Já possui cadastro? <a href="/login/cuidador">Faça Login </a></p>
                    </div>
                </div>

                <div class="form second">
                    <div class="details address">
                        <span class="title">Informações Curriculares</span>

                        <div class="fields">
                            <div class="inputAll">
                                <div class="input-field">
                                    <label for="inp1" id="difbtn">Foto do RG (frente)
                                        <span class="material-icons upload">upload</span>
                                    </label>
                                    <input id="inp1" type="file">
                                </div>
                                <div class="arqvnome">
                                    <p id="nome1">Nenhum arquivo selecionado.</p>
                                </div>
                            </div>

                            <div class="inputAll">
                                <div class="input-field">
                                    <label for="inp2" id="difbtn">Foto do RG (verso)
                                        <span class="material-icons upload">upload</span>
                                    </label>
                                    <input id="inp2" type="file">
                                </div>
                                <div class="arqvnome">
                                    <p id="nome2">Nenhum arquivo selecionado.</p>
                                </div>
                            </div>

                            <div class="inputAll">
                                <div class="input-field">
                                    <label for="inp3" id="difbtn">Currículo
                                        <span class="material-icons upload">upload</span>
                                    </label>
                                    <input id="inp3" type="file">
                                </div>
                                <div class="arqvnome">
                                    <p id="nome3">Nenhum arquivo selecionado.</p>
                                </div>
                            </div>

                            <div class="inputAll">
                                <div class="input-field">
                                    <label for="inp4" id="difbtn">Certificados
                                        <span class="material-icons upload">upload</span>
                                    </label>
                                    <input id="inp4" type="file" id="certificados" class="img" multiple>
                                </div>
                                <div class="arqvnome">
                                    <p id="nome4">Nenhum arquivo selecionado.</p>
                                </div>
                            </div>


                        </div>
                    </div>

                    <div class="details family">
                        <div class="fields">
                            <div class="container2">
                                <figure class="image-container">
                                    <img id="chosen-image">
                                    <figcaption id="file-name"></figcaption>
                                </figure>

                                <input type="file" id="upload-button" accept="image/*">
                                <label id="lbll" for="upload-button">
                                    <i class="fas fa-upload"></i> &nbsp; Selecione uma foto de perfil
                                </label>
                            </div>
                            <!-- <div class="input-field">
                                <label>Father nomee</label>
                                <input type="text" placeholder="Enter father name" >
                            </div>
    
                            <div class="input-field">
                                <label>Mother Name</label>
                                <input type="text" placeholder="Enter mother name" >
                            </div>
    
                            <div class="input-field">
                                <label>Grandfather</label>
                                <input type="text" placeholder="Enter grandfther name" >
                            </div>
    
                            <div class="input-field">
                                <label>Spouse Name</label>
                                <input type="text" placeholder="Enter spouse name" >
                            </div>
    
                            <div class="input-field">
                                <label>Father in Law</label>
                                <input type="text" placeholder="Father in law name" >
                            </div>
    
                            <div class="input-field">
                                <label>Mother in Law</label>
                                <input type="text" placeholder="Mother in law name" >
                            </div> -->
                        </div>

                        <div class="buttons">
                            <div class="backBtn">
                                <i class="uil uil-navigator"></i>
                                <span class="btnText">Voltar</span>
                            </div>

                            <button class="submit">
                                <span class="btnText">Concluir</span>
                                <i class="uil uil-navigator"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    
</body>

</html>