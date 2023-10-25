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
    <script src="../../public/assets/js/Cadastro.js"></script>
    <script src="../../public/assets/js/CadastroCuidador.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>

    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>ToHelp Cadastro</title>
</head>

<body onload="senhaTAMCuid()">


        <div id="setinha">
            <a href=""><img src="../../public/assets/img/iconamoon_arrow-up-2-duotone.png" alt=""></a>
        </div>

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

            <form action="/cadastro/cuidador" method="POST">
                <div class="form first active">
                    <div class="details personal">
                        <span class="title">Informações Pessoais</span>

                        <div class="fields">
                            <div class="input-field">
                                <label for="nome_cuid">Nome</label>
                                <input type="text" placeholder="Insira seu nome" name="nome_cuid" id="nome" required>
                            </div>

                            <div class="input-field">
                                <label for="sobrenome_cuid">Sobrenome</label>
                                <input type="text" placeholder="Insira seu sobrenome" name="sobrenome_cuid" id="sobrenome" required>  
                            </div>

                            <div class="input-field">
                                <label for="CPF_cuid">CPF</label>
                                <input type="text" placeholder="Insira seu CPF" name="CPF_cuid" id="cpf" required>
                            </div>

                            <div class="input-field">
                                <label for="RG_cuid">RG</label>
                                <input type="text" placeholder="Insira seu RG" name="RG_cuid" id="rg" required>
                            </div>

                            <div class="input-field">
                                <label for="dt_nasc">Date de Nascimento</label>
                                <input type="date" placeholder="Insira sua data de nascimento" name="dt_nasc" id="date" required>
                            </div>

                            <div class="input-field">
                                <label for="email_cuid">Email</label>
                                <input type="text" placeholder="Insira seu email" name="email_cuid" id="email" required>
                            </div>

                            <div class="input-field">
                                <label for="celular_cuid">Celular</label>
                                <input type="text" placeholder="Insira seu telefone celular" name="celular_cuid" id="tel" required>
                            </div>

                            <div class="input-field">
                                <label for="genero">Gênero</label>
                                <select name="genero" id="genero" required>
                                    <option disabled selected>Selecione o gênero</option>
                                    <option value="Masculino">Masculino</option>
                                    <option value="Feminino">Feminino</option>
                                    <option value="Outros">Outros</option>
                                </select>
                            </div>

                            <div class="input-field">
                                <label for="CEP_cuid">CEP</label>
                                <input type="text" placeholder="Insira seu CEP" id="CEP" name="CEP_cuid">
                          </div>

                            <div class="input-field">
                                <label for="estado_cuid">Estado</label>
                                <input type="text" placeholder="Insira um estado" id="estado" name="estado_cuid">
                            </div>

                            <div class="input-field">
                                <label for="cidade_cuid">Cidade</label>
                                <input type="text" placeholder="Insira uma cidade" name="cidade_cuid" id="cidade" required>
                            </div>
                            <div class="input-field">
                                <label for="bairro_cuid">Bairro</label>
                                <input type="text" placeholder="Insira uma cidade" name="bairro_cuid" id="bairro" required>
                            </div>

                            <div class="input-field">
                                <label for="end_cuid">Endereço</label>
                                <input type="text" placeholder="Insira uma cidade" id="endereco" name="end_cuid">
                            </div>

                            <div class="input-field">
                                <label for="numero_cuid">Número</label>
                                <input type="text" placeholder="Insira um número" name="numero_cuid" id="numero" required>
                            </div>

                            <div class="input-field">
                                <label for="complemento_cuid">Complemento</label>
                                <input type="text" placeholder="Insira um complemento" name="complemento_cuid" id="complemento" required>
                            </div>

                            <div class="input-field ">
                                <label for="senha_cuid">Senha</label>
                                <input id="senha" type="password" placeholder="Crie uma senha" name="senha_cuid" required>
                            </div>

                            <div id="num" class="input-field">
                                <label for="senhaConfirm_cuid">Confirme sua senha</label>
                                <input type="password" placeholder="Confirme sua senha" id="senhaconfirm" name="senhaConfirm_cuid" required>
                            </div>
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
                                        <input name="rg_frente" id="inp1" type="file" required>
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
                                        <input name="rg_verso" id="inp2" type="file" required>
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
                                        <input name="curriculo" id="inp3" type="file" required>
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
                                        <input name="certificado" type="file" id="inp4" class="img" multiple> 
                                    </div>
                                    <div class="arqvnome">
                                        <p id="nome4">Nenhum arquivo selecionado.</p>
                                    </div>
                                </div>

                                <div id='inpdif' class="input-field">
                                    <label>Sobre Você</label>
                                    <input id="sobre" type="text" placeholder="Escreva sobre você" name="sobre_txt" required>
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
                            </div>
                            <input type="hidden" name="cadastrocuid" value="cadastrarcuid" required> 
                            <div class="btnn">
                                <div class="buttons">
                                    <button class="nextBtn" onclick="analisar()" id="btn">
                                        <span class="btnText">Concluir</span>
                                        <i class="uil uil-navigator"></i>
                                    </button>
                                    <p style="color: black;">Já possui cadastro? <a href="/cuidador/login">Faça Login </a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script src="../../public/assets/js/CadastroCuidador.js"></script>
    <script src="/public/assets/js/cep.js" type='module' defer></script>
</body>

</html>