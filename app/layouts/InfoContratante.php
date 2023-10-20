<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <link rel="stylesheet" href="../../public/assets/css/InfoContratante.css">

    <link rel="icon" type="image/x-icon" href="../../public/assets/img/LogoPreta.png">
    <title>ToHelp</title>
</head>

<body>
     <!-- Cabeçalho -->
     <header id="cabecalho">
        
        <div id="info1">
            <h1>Editar Informações</h1>
            <span class="material-icons">edit</span>
        </div>
        
        <div id="info2">
            <a href="ContaContratante.html"><span class="material-icons">arrow_forward_ios</span></a>
        </div>
    
    </header>

    <main>
    <!-- Formulario -->
    <section id="formulario" class="form_info1_1">
        <div id="inputs">

            <div class="divInputs">
                <label for="nome">Nome</label>
                <br>
                <input type="text" id="nome">
                <br><br>

                <label for="sobrenome">Sobrenome</label>
                <input type="text" id="sobrenome">
                <br><br>

                <label for="email">E-mail</label>
                <input type="email" id="email">
                <br><br>

                <label for="cpf">CPF</label>
                <br>
                <input type="text" id="cpf" maxlength="14" placeholder="000.000.000-00">

                <br><br>

                <label for="datanasc">Data de Nascimento</label>
                <br>
                <input type="date" id="datanasc">
            </div>

            <br>

            <div class="divInputs">
                <label for="tel">Telefone</label>
                <br>
                <input type="text" id="tel" maxlength="14" placeholder="(00) 00000-0000">

                <br><br>

                <div class="input-area">

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
                <br>
                <input type="text" id="endereco">

                <br><br>

                <div class="input-area">

                    <div id="inputs-special">
                        <label for="numero">Número</label>
                        <input type="text" id="numero">
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

        <div id="btnSalvar_1_1">
            <button onclick="analise()">CADASTRAR</button>
        </div>
</section>
</main>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
<script src="../../../public/assets/js/InfoContratante.js"></script>
</body>
</html>