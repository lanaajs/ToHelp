function ocultarTodasAsSecoes() {
    var secoes = document.getElementsByClassName('infos');
    for (var i = 0; i < secoes.length; i++) {
        secoes[i].style.display = 'none';
    }
}

// -------- DASHBOARD --------
function dashboard() {
    ocultarTodasAsSecoes();
    document.getElementById('infodash').style.display = 'block';
}

// -------- CONTRATANTES --------
function contratantes() {
    // Fecha a opção 2 e 3 se estiverem abertas
    if (document.getElementById('opcao2').style.display === 'block') {
        document.getElementById('opcao2').style.display = 'none';
    }
    if (document.getElementById('opcao3').style.display === 'block') {
        document.getElementById('opcao3').style.display = 'none';
    }

    // Abre a opção 1
    document.getElementById('opcao1').style.display = 'block';
}

function infopescontr() {
    ocultarTodasAsSecoes();
    document.getElementById('infocontr').style.display = 'block';
}

function endcontr() {
    ocultarTodasAsSecoes();
    document.getElementById('endcontr').style.display = 'block';
}

function contratos() {
    ocultarTodasAsSecoes();
    document.getElementById('contratos').style.display = 'block';
}

function depcontr() {
    ocultarTodasAsSecoes();
    document.getElementById('depcontr').style.display = 'block';
}

function extratos() {
    ocultarTodasAsSecoes();
    document.getElementById('extrcontr').style.display = 'block';
}

function metpagcontr() {
    ocultarTodasAsSecoes();
    document.getElementById('metpagcontr').style.display = 'block';
}

// -------- DEPENDENTES --------
function dependentes() {
    // Fecha a opção 1 e 3 se estiverem abertas
    if (document.getElementById('opcao1').style.display === 'block') {
        document.getElementById('opcao1').style.display = 'none';
    }
    if (document.getElementById('opcao3').style.display === 'block') {
        document.getElementById('opcao3').style.display = 'none';
    }

    // Abre a opção 2
    document.getElementById('opcao2').style.display = 'block';
}

function infopesdep() {
    ocultarTodasAsSecoes();
    document.getElementById('infodep').style.display = 'block';
}

function infomeddep() {
    ocultarTodasAsSecoes();
    document.getElementById('infomeddep').style.display = 'block';
}

function enddep() {
    ocultarTodasAsSecoes();
    document.getElementById('enddep').style.display = 'block';
}

function relatorios() {
    ocultarTodasAsSecoes();
    document.getElementById('relatorios').style.display = 'block';
}

function medicamentos() {
    ocultarTodasAsSecoes();
    document.getElementById('medicamentos').style.display = 'block';
}

// -------- CUIDADORES --------
function cuidadores() {
    // Fecha a opção 1 e 2 se estiverem abertas
    if (document.getElementById('opcao1').style.display === 'block') {
        document.getElementById('opcao1').style.display = 'none';
    }
    if (document.getElementById('opcao2').style.display === 'block') {
        document.getElementById('opcao2').style.display = 'none';
    }

    // Abre a opção 3
    document.getElementById('opcao3').style.display = 'block';
}

function infopescuid() {
    ocultarTodasAsSecoes();
    document.getElementById('infocuid').style.display = 'block';
}

function endcuid() {
    ocultarTodasAsSecoes();
    document.getElementById('endcuid').style.display = 'block';
}

function infocur() {
    ocultarTodasAsSecoes();
    document.getElementById('infocur').style.display = 'block';
}

function certificados() {
    ocultarTodasAsSecoes();
    document.getElementById('certificados').style.display = 'block';
}

// -- BOTÃO DE SAIR --
function sair() {
    window.location.href = 'index.php';;
}
