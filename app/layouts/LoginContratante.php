<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <!----======== CSS ======== -->
      <link rel="stylesheet" href="../../public/assets/css/LoginContratante.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">

    <!----======== JS ======== -->
    <script src="../../public/assets/js/Login.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>

    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Tohelp Login</title>
</head>

<body  onload="verificar()">

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
                <header>Login</header>
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

            <form action="/login/contratante" method="POST">
                <div class="form first">
                    <div class="details personal">
                        <div class="fields">
                            <div class="input-field">
                                <label for="CPF_contr">CPF</label>
                                <input type="text" placeholder="Insira seu CPF" name="CPF_contr" id="cpf" required>
                            </div>

                            <div class="input-field">
                                <label for="senha_contr">Senha</label>
                                <input id="senha" type="password" placeholder="Insira sua senha" name="senha_contr" required>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="logincontr" value="logarcontr"> 
                    <div class="btnn">
                        <button type="submit" class="nextBtn" id="btn">
                            <span class="btnText">Entrar</span>
                            <i class="uil uil-navigator"></i>
                        </button>
                        <p style="color: black;">Não possui login? <a href="/contratante/cadastro">Faça o cadastro</a></p>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>