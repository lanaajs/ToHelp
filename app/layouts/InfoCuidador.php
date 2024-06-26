<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="icon" type="image/x-icon" href="IMG/LogoPreta.png">

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <link rel="stylesheet" href="../../public/assets/css/InfoCuidador.css">

    <link rel="icon" type="image/x-icon" href="../../public/assets/img/LogoPreta.png">
    <title>ToHelp</title>
</head>

<body>
    <!-- Cabeçalho -->
    <header id="cabecalho">

        <div id="info1">
            <h1>Adicionar Informações</h1>
            <span class="material-icons">edit</span>
        </div>

        <div id="info2">
            <a href="ContaCuidador.html"><span class="material-icons">arrow_forward_ios</span></a>
        </div>

    </header>

    <!-- Formulario -->
    <section id="formulario">

        <form action="">

            <label for="email">E-mail</label>
            <br>
            <input type="email" id="email">
            <br><br>

            <label for="telefone">Telefone</label>
            <br>
            <input type="text" name="telefone" id="telefone"
            maxlength="14" placeholder="(00) 00000-0000"
            onkeypress="return event.charCode >= 48 && event.charCode <= 57">
            <br><br>
            <label for="cpf">CPF</label>
            <br>
            <input type="text" name="cpf" id="cpf" maxlength="14" placeholder="000.000.000-00"
                onkeypress="return event.charCode >= 48 && event.charCode <= 57">
            <br><br>

            <div class="div1">
                <div class="filho1">
                    <label for="estado">Estado</label>
                    <br>
                    <input type="text" id="estado">
                    <br><br>
                </div>
                <div class="filho2">
                    <label for="cidade">Cidade</label>
                    <br>
                    <input type="text" id="cidade">
                    <br><br>
                </div>
            </div>

            <label for="bairro">Bairro</label>
            <br>
            <input type="text" id="bairro">
            <br><br>

            <label for="endereco">Endereço</label>
            <br>
            <input type="text" id="endereco">
            <br><br>

            <div class="div1">
                <div class="filho1">
                    <label for="numero">Numero</label>
                    <br>
                    <input type="text"  id="numero">

                </div>
                <div class="filho2">
                    <label for="complemento">Complemento</label>
                    <br>
                    <input type="text" id="complemento">

                </div>
            </div>

            <br><br>
            <label for="curriculo">Curriculo</label>
            <br>

            <label for="curriculo" class="arquivo">Enviar Arquivo</label>
            <input type="file" id="curriculo" class="img" multiple>

            <br><br>

            <label for="certificados">Certificados</label>
            <br>

            <label for="certificados" class="arquivo">Enviar Arquivo</label>
            <input type="file" id="certificados" class="img" multiple>
            
            <br><br>

            <label for="rg">Foto do RG (Frente e Verso)</label>
            <br>

            <label for="rg" class="arquivo">Enviar Arquivo</label>
            <input type="file" id="rg" class="img" multiple>

            <br><br><br>

            <label for="apresentacao">Escreva um breve texto de apresentação:</label>
            <br>
            <textarea name="" id="apresentacao" cols="45" rows="10"></textarea>
            <br><br><br>

            <div id="areabtn">
                <input type="button" value="Salvar" id="btnSalvar" onclick="analisar()">
            </div>

        </form>

    </section>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <script src="../../../public/assets/js/InfoCuidador.js"></script>
</body>

</html>