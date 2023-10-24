<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!----======== CSS ======== -->
    <link rel="stylesheet" href="../../public/assets/css/CadastroContratante.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">   

    <!----======== JS ======== -->
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
                                <input type="text" placeholder="Insira seu nome" id="nome" required>
                            </div>
                            <div class="input-field">
                                <label>Sobrenome</label>
                                <input type="text" placeholder="Insira seu sobrenome" id="sobrenome" required>
                            </div>
                            <div class="input-field">
                                <label>CPF</label>
                                <input type="text" placeholder="Insira seu CPF" id="cpf" required>
                            </div>
                            <div class="input-field">
                                <label>RG</label>
                                <input type="text" placeholder="Insira seu RG" id="rg" required>
                            </div>
                            <div class="input-field">
                                <label>Date de Nascimento</label>
                                <input type="date" placeholder="Insira sua data de nascimento" id="date" required>
                            </div>
                            <div class="input-field">
                                <label>Email</label>
                                <input type="text" placeholder="Insira seu email" id="email" required>
                            </div>
                            <div class="input-field">
                                <label>Celular</label>
                                <input type="text" placeholder="Insira seu telefone celular" id="tel" required>
                            </div>
                            <div class="input-field">
                                <label>Gênero</label>
                                <select required id="genero">
                                    <option value="opcao1">Selecione o gênero</option>
                                    <option>Masculino</option>
                                    <option>Feminino</option>
                                    <option>Outros</option>
                                </select>
                            </div>
                            <div class="input-field">
                                <label>CEP</label>
                                <input type="text" placeholder="Insira seu CEP" id="cep" required>
                            </div>
                            <div class="input-field">
                                <label>Estado</label>
                                <input type="text" placeholder="Insira um estado" id="state" required>
                            </div>
                            <div class="input-field">
                                <label>Cidade</label>
                                <input type="text" placeholder="Insira uma cidade" id="city" required>
                            </div>
                            <div class="input-field">
                                <label>Número</label>
                                <input type="text" placeholder="Insira um número" id="number" required>
                            </div>
                        </div>
                    </div>
                    <div class="details ID">
                        <div class="fields">
                            <div class="input-field">
                                <label>Complemento</label>
                                <input type="text" placeholder="Insira um complemento" id="complemento" required>
                            </div>
                            <div class="input-field">
                                <label>Senha</label>
                                <input id="senha" type="password" placeholder="Crie uma senha" id="senha" required>
                            </div>
                            <div class="input-field">
                                <label>Selecione uma opção</label>
                                <div class="mark"><input type="radio" id="check" name="escolha" value="1"
                                        onclick="textBox(this)">
                                    <p>Sou responsável por mim e desejo me cadastrar</p>
                                </div>
                                <div class="mark" id="markdois"><input type="radio" id="check" name="escolha" value="2"
                                        onclick="textBox(this)">
                                    <p> Sou responsável legal e desejo cadastrar meu dependente</p>
                                </div>
                            </div>
                        </div>
                        <div class="btnn">                         
                            <button class="nextBtn" onclick="analisar()" id="btn">
                                <span class="btnText">Prosseguir</span>
                                <i class="uil uil-navigator"></i>
                            </button>
                            <p style="color: black;">Já possui cadastro? <a href="/login/contratante">Faça Login </a></p>
                    </div>
                    </div>
                </div>
                </form>
        </div>
    </div>
</body>
</html>