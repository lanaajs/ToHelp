<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
    <link rel="stylesheet" href="../../../public/assets/css/LoginContratante.css">
    <script src="../../public/assets/js/Login.js"></script>

    <link rel="icon" type="image/x-icon" href="../../public/assets/img/LogoPreta.png">
    <title>ToHelp - Login</title>
</head>

<body>
    <!-- Cabeçalho -->
    <header id="cabecalho">

        <div id="logo">
            <img src="../../public/assets/img/LogoBranca.png" alt="">
        </div> 
        
        <div id="setinha">
            <a href="index.html"><img src="../../public/assets/img/iconamoon_arrow-up-2-duotone.png" alt=""></a>
        </div>
        

    </header>

    <!-- Textos -->
    <section id="txt">

        <p class="p1">Sua Saúde é</p>
        <p class="p2">Nossa Prioridade.</p>
        <br>
        <p class="p3">ToHelp, para <br> ajudar.</p>

    </section>

    <!-- Login -->
    <section id="respon">
        <section id="form">

            <h1 id="h1">Login</h1>

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

            <!-- Formulario -->
            <div id="inputs">
                <form action="">

                    <label for="cpf">CPF</label>
                    <br>
                    <input type="text" id="cpf">
                    <br><br>
                    <label for="senha">Senha</label>
                    <br>
                    <input type="password" id="senha">

                    <div id="botao">
                        <input type="button" onclick="logarContratante()" value="Entrar" id="btn">
                    </div>
                    
                </form>
            </div>

            <div id="textC">
                <p>Ainda não possui Login? <a href="/cadastro/contratante" id="textCL">Cadastre-se</a></p> 
            </div>
            
        </section>

        <section id="txt2">

            <p class="p1">Sua Saúde é</p>
            <p class="p2">Nossa Prioridade.</p>
            <br>
            <p class="p3">ToHelp, para <br> ajudar.</p>
    
        </section>

    </section>
    
</body>
</html>