<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

    <link rel="stylesheet" href="../../public/assets/css/Agenda.css">
    <script src="../../../public/assets/js/Agenda.js" defer></script>

    <link rel="icon" type="image/x-icon" href="../../public/assets/img/LogoPreta.png">
    <title>To Help - Agenda</title>
</head>

<body>

    <header>
        <h2>Agenda</h2>
        <div class="setinha">
            <a href="ContaCuidador.html"><span class="material-icons">arrow_forward_ios</span></a>
        </div>
    </header>

    <main>
        <section id="agenda">
            <section id="main">
                <div class="wrapper">
                    <header>
                        <p class="dataAtual"></p>
                        <div class="icons">
                            <span id="antes" class="material-symbols-rounded">chevron_left</span>
                            <span id="depois" class="material-symbols-rounded">chevron_right</span>
                        </div>
                    </header>

                    <div class="calendario">
                        <ul class="semanas">
                            <li><b>D</b></li>
                            <li><b>S</b></li>
                            <li><b>T</b></li>
                            <li><b>Q</b></li>
                            <li><b>Q</b></li>
                            <li><b>S</b></li>
                            <li><b>S</b></li>
                        </ul>
                        <ul class="dias"></ul>
                        <div id="infor">
                            <span id="indQ" class="material-symbols-outlined">check_box_outline_blank</span>
                            <p id="ind">Indisponível</p>
                            <span id="disQ" class="material-symbols-outlined">check_box_outline_blank</span>
                            <p id="dis">Contratado(a)</p>
                        </div>
                    </div>
                </div>
            </section>
        </section>

        <div class="area-bloco">
            <div class="bloco">
                <h3>Contratante: Ana Lis Silva</h3>
                <p>Bairro: Caminho das Árvores</p>
                <p>Endereço: Rua Doival Freitas, Condomínio Horto das Árvores, Ap 200</p>
                <p>Dia: 16</p>
                <p>Horário: 06-15:00</p>
                <p>Transporte: A combinar</p>
                <h4>Valor Estimado: <span class="valor">R$255,00</span></h4>
            </div>
        </div>

        <div class="salvamento">
            <p id="p1">Selecione um dia para editá-lo</p>

            <section id="salvar">
                <select name="select">
                    <option class="options" id="valor1">Indisponível</option>
                    <option class="options" id="valor2">Contratado(a)</option>
                </select>

                <input type="button" id="btnsalvar" onclick="cardSalvar()" value="SALVAR">
            </section>
        </div>

    </main>


</body>

</html>