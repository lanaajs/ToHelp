<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!----======== CSS ======== -->
    <link rel="stylesheet" href="../../public/assets/css/CadastroContratante.css">

    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>ToHelp Cadastro</title>
</head>

<body>

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
            <form action="/cadastro/contratante" method="POST">
                <div class="form first">
                    <div class="details personal">
                        <span class="title">Informações Pessoais</span>
                        <div class="fields">
                            <div class="input-field">
                                <label for="nome_contr">Nome</label>
                                <input type="text" placeholder="Insira seu nome" id="nome_contr" name="nome_contr" required>
                            </div>
                            <div class="input-field">
                                <label for="sobrenome_contr">Sobrenome</label>
                                <input type="text" placeholder="Insira seu sobrenome" id="sobrenome_contr" name="sobrenome_contr" required>
                            </div>
                            <div class="input-field">
                                <label for="CPF_contr">CPF</label>
                                <input type="text" placeholder="Insira seu CPF" id="CPF_contr" name="CPF_contr" required>
                            </div>
                            <div class="input-field">
                                <label for="RG_contr">RG</label>
                                <input type="text" placeholder="Insira seu RG" id="RG_contr" name="RG_contr" required>
                            </div>
                            <div class="input-field">
                                <label for="dt_nasc">Date de Nascimento</label>
                                <input type="date" id="dt_nasc" name="dt_nasc" required>
                            </div>
                            <div class="input-field">
                                <label for="email_contr">Email</label>
                                <input type="text" placeholder="Insira seu email" id="email_contr" name="email_contr" required>
                            </div>
                            <div class="input-field">
                                <label for="celular_contr">Celular</label>
                                <input type="number" placeholder="Insira seu telefone celular" id="celular_contr" name="celular_contr" required>
                            </div>
                            <div class="input-field">
                                <label for="genero">Gênero</label>
                                <select name="genero" required>
                                    <option disabled selected>Selecione o gênero</option>
                                    <option value="Masculino">Masculino</option>
                                    <option value="Feminino">Feminino</option>
                                    <option value="Outros">Outros</option>
                                </select>
                            </div>
                            <div class="input-field">
                                <label for="CEP_contr">CEP</label>
                                <input type="text" placeholder="Insira seu CEP" id="CEP" name="CEP_contr" required>
                            </div>
                            <div class="input-field">
                                <label for="estado_contr">Estado</label>
                                <input type="text" placeholder="Insira um estado" id="estado" name="estado_contr" required>
                            </div>
                            <div class="input-field">
                                <label for="cidade_contr">Cidade</label>
                                <input type="text" placeholder="Insira uma cidade" id="cidade" name="cidade_contr" required>
                            </div>
                            
                            <div class="input-field">
                                <label for="bairro_contr">Bairro</label>
                                <input type="text" placeholder="Insira uma cidade" id="bairro" name="bairro_contr">
                            </div>

                            <div class="input-field">
                                <label for="end_contr">Endereço</label>
                                <input type="text" placeholder="Insira uma cidade" id="endereco" name="end_contr">
                            </div>

                            <div id="num" class="input-field">
                                <label for="numero_contr">Número</label>
                                <input type="text" placeholder="Insira um número" name="numero_contr" required>
                            </div>

                            <div class="input-field">
                                <label for="complemento_contr">Complemento</label>
                                <input type="text" placeholder="Insira um complemento" id="complemento_contr" name="complemento_contr" required>
                            </div>
                            <div class="input-field">
                                <label for="senha_contr">Senha</label>
                                <input id="senha" type="text" placeholder="Crie uma senha" id="senha_contr" name="senha_contr" required>
                            </div>

                            <div class="input-field">
                                <label for="tipo_contr">Selecione uma opção</label>
                                <div class="mark">
                                    <input type="radio" id="check" name="tipo_contr" value="0">
                                    <p>Sou responsável por mim e desejo me cadastrar</p>
                                </div>
                                <div class="mark" id="markdois">
                                    <input type="radio" id="check" name="tipo_contr" value="1">
                                    <p>Sou responsável legal e desejo cadastrar meu dependente</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="details ID">
                        <input type="hidden" name="cadastrocontr" value="cadastrarcontr">
                        <div class="btnn">
                            <button class="nextBtn">
                                <span class="btnText">Prosseguir</span>
                                <i class="uil uil-navigator"></i>
                            </button>
                            <p style="color: black;">Já possui cadastro? <a href="/login/contratante">Faça Login</a></p>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script src="/public/assets/js/cep.js" type='module' defer></script>
</body>

</html>