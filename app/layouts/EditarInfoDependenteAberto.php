<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

    <link rel="stylesheet" href="../../public/assets/css/EditarInfoDependenteAberto.css">
    <script src="../../public/assets/js/InfoContratante.js"></script>

    <link rel="icon" type="image/x-icon" href="../../public/assets/img/LogoPreta.png">
    <title>ToHelp</title>
</head>

<body>
    <!-- Cabeçalho -->
    <header id="cabecalho">

        <div id="info1">
            <h1>Editar Informações do Dependente</h1>
        </div>

        <div id="info2">
            <a href="EditarInfoDependenteFechado.html"><span class="material-icons">arrow_forward_ios</span></a>
        </div>

    </header>

    <main>
        
    <!-- Formulario -->
    
    <form action="" id="formularioeditavel" method="POST">    
            <div class="div-branca">
                <div id="inputs">
                    <div class="divInputs">
                        <div class="dependente-info">
                            <p>Nome do Dependente</p>  
                            <h6>Cadastro: P02300888</h6>
                        </div>
                        <div id="info3">
                            <span class="material-symbols-outlined">delete</span>
                        </div>
                        <br><br>
                        <div class="input-areae">
                            <div id="inputs-special">
                                <label for="state">Estado</label>
                                <input type="text" id="state">
                            </div>
                            <br>
                            <div id="inputs-state-city">
                                <label for="city">Cidade</label>
                                <input type="text" id="city">
                            </div>
                        </div>
                        <br>
                        <label for="endereco">Endereço</label>
                        <input type="text" id="endereco">
                        <br><br>
                        <div class="input-area">
                            <div id="inputs-special">
                                <label for="numero">Número</label>
                                <input type="number" id="numero">
                            </div>
                            <br>
                            <div id="inputs-state-city">
                                <label for="complemento">Complemento</label>
                                <input type="text" id="complemento">
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <label for="comorbidades">Comorbidades</label>
                <br>
                <textarea name="" id="comorbidades" cols="45" rows="10"></textarea>
                <br><br>
                <label for="alergias">Alergias</label>
                <br>
                <textarea name="" id="alergias" cols="45" rows="10"></textarea>
                <br><br>
                <!-- Cards Medicamento -->
                <div id="cardMedicamento">
        
                    <div class="div1">
                        <div class="filho1">
                            <br>
                            <label for="medicamento">Medicamento</label>
                            <br>
                            <input type="text" id="medicamento">
                            <br><br>
                            <label for="dia">Dia de Uso</label>
                            <br>
                            <input type="text" id="dia" placeholder="Ex: seg, ter, qua...">
                        </div>
                        <div class="filho2">
                            <br>
                            <label for="horario">Horários de Uso</label>
                            <br>
                            <input type="time" multiple id="horario1">
                            <input type="time" multiple id="horario2">
                            <input type="time" multiple id="horario3">
                            <br><br>
                        </div>
                    </div>
                    <div id="add">
                        <button id="x" onclick="addMedicamento()">+</button>
                        <label for="x">Adicionar Medicamento</label>
                    </div>
                </div>
                <!-- New Cards -->
                <div id="newCard"></div>
                <br><br>
                <label for="rotina">Rotina</label>
                <br>
                <textarea name="" id="rotina" cols="45" rows="10"
                    placeholder="Escreva aqui a lista de necessidades diárias. Exemplo: “Tomar banho 14:00”."></textarea>
                <br><br><br>
                <div id="btnSalvar_2">
                    <button onclick="analise()">SALVAR</button>
                </div>
            </div>
    </form>
</main>
</body>

</html>