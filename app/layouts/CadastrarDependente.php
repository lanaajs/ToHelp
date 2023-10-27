<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!----======== CSS ======== -->
    <link rel="stylesheet" href="../../public/assets/css/CadastroDependente.css">
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
                <header>Cadastro Dependente</header>
            </div>
            <form action="/contratante/cadastro/<? $_SESSION['contr_id'] ?>" method="POST">
                <div class="form first">
                    <div class="details personal">
                        <span class="title">Informações Pessoais</span>
                        <div class="fields">
                            <div class="input-field">
                                <label for="nome_contr">Nome</label>
                                <input type="text" placeholder="Insira seu nome" id="nome" name="nome_dep" required>
                            </div>
                            <div class="input-field">
                                <label for="sobrenome_contr">Sobrenome</label>
                                <input type="text" placeholder="Insira seu sobrenome" id="sobrenome" name="sobrenome_dep" required>
                            </div>
                            <div class="input-field">
                                <label for="CPF_contr">CPF</label>
                                <input type="text" placeholder="Insira seu CPF" id="cpf" name="CPF_dep" required>
                            </div>
                            <div class="input-field">
                                <label for="RG_contr">RG</label>
                                <input type="text" placeholder="Insira seu RG" id="rg" name="RG_dep" required>
                            </div>
                            <div class="input-field">
                                <label for="dt_nasc">Date de Nascimento</label>
                                <input type="date" id="date" name="dt_nasc" required>
                            </div>
                            <div class="input-field">
                                <label for="celular_contr">Celular</label>
                                <input type="text" placeholder="Insira seu telefone celular" id="tel" name="celular_contr" required>
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
                                <label for="parentesco">Parentesco</label>
                                <select name="parentesco" id="parentesco" required>
                                    <option disabled selected>Selecione o parentesco</option>
                                    <option value="Filho(a)">Filho(a)</option>
                                    <option value="Irmão">Irmão</option>
                                    <option value="Irmã">Irmã</option>
                                    <option value="Neto(a)">Neto(a)</option>
                                    <option value="Tio">Tio</option>
                                    <option value="Tia">Tia</option>
                                    <option value="Sobrinho(a)">Sobrinho(a)</option>
                                    <option value="Bisneto(a)">Bisneto(a)</option>
                                    <option value="Primo(a)">Primo(a)</option>
                                    <option value="Sogro(a)">Sogro(a)</option>
                                    <option value="Genro">Genro</option>
                                    <option value="Nora">Nora</option>
                                    <option value="Enteado(a)">Enteado(a)</option>
                                </select>
                            </div>
                            <div class="input-field">
                                <label for="CEP_dep">CEP</label>
                                <input type="text" placeholder="Insira seu CEP" id="CEP" name="CEP_dep" required>

                            </div>
                            <div class="input-field">
                                <label for="estado_dep">Estado</label>
                                <input type="text" placeholder="Insira um estado" id="estado" name="estado_dep" required>
                            </div>
                            <div class="input-field">
                                <label for="cidade_dep">Cidade</label>
                                <input type="text" placeholder="Insira uma cidade" id="cidade" name="cidade_dep" required>
                            </div>

                            <div class="input-field">
                                <label for="bairro_dep">Bairro</label>
                                <input type="text" placeholder="Insira uma cidade" id="bairro" name="bairro_dep">

                            </div>

                            <div class="input-field">
                                <label for="end_dep">Endereço</label>
                                <input type="text" placeholder="Insira uma endereço" id="endereco" name="end_dep">

                            </div>

                            <div class="input-field">
                                <label for="numero_dep">Número</label>
                                <input type="text" placeholder="Insira um número" id="numero" name="numero_dep" required>
                            </div>

                            <div class="input-field">
                                <label for="complemento_dep">Complemento</label>
                                <input type="text" placeholder="Insira um complemento" id="complemento" name="complemento_dep" required>
                            </div>
                            <div id="text-area">
                                <div id="div-comorbidade">
                                    <label for="comorbidades">Comorbidades</label>
                                    <br>
                                    <textarea name="" id="comorbidades_dep" cols="45" rows="20"></textarea>
                                </div>
                                <br><br>
                                <div id="div-alergia">
                                    <label for="alergias">Alergias</label>
                                    <br>
                                    <textarea name="alergias_dep" id="alergias" cols="45" rows="20"></textarea>
                                </div>
                            </div>

                            <!-- Cards Medicamento -->
                            <div id="cardMedicamento">
                                <div class="div1">
                                    <div class="filho1">
                                        <label for="medicamento">Medicamento</label>
                                        <br>
                                        <input type="text" id="medicamento">
                                        <br><br>
                                        <label for="dia">Dia de Uso</label>
                                        <br>
                                        <input type="text" id="dia" placeholder="Ex: seg, ter, qua...">
                                    </div>
                                    <div class="filho2">
                                        <label for="horario">Horários de Uso</label> 
                                        <input type="time" multiple class="horario">
                                        <input type="time" multiple class="horario">
                                        <input type="time" multiple class="horario">
                                    </div>
                                </div>
                                <div id="add">
                                    <button id="x" onclick="addMedicamento()">+</button>
                                    <label for="x">Adicionar Medicamento</label>
                                </div>
                            </div>
                            <br><br>
                        </div>

                        <div id="rotina">
                            <label for="rotina">Rotina</label>
                            <textarea name="rotina_dep" id="rotina" cols="45" rows="10" placeholder="Escreva aqui a lista de necessidades diárias. Exemplo: “Tomar banho 14:00”."></textarea>
                        </div>

                        <div class="details ID">
                            <input type="hidden" name="cadastrodep" value="cadastrardep">
                            <div class="btnn">
                                <button class="nextBtn" id="btn" onclick="analisar()">
                                    <span class="btnText">Prosseguir</span>
                                    <i class="uil uil-navigator"></i>
                                </button>
                            </div>
                        </div>
                    </div>
            </form>
        </div>
    </div>
    <script src="/public/assets/js/cep.js" type='module' defer></script>
</body>

</html>