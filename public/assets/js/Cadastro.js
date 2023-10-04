function contratante() {
    document.body.style.backgroundColor = '#106FFF';
    document.getElementById('form').style.backgroundColor = '#E0EDFE';
    document.getElementById('h1').style.color = '#0049FF';

    document.getElementById('areaP1').style.color = '#0049FF';
    document.getElementById('areaP1').style.backgroundColor = '#ECECEC';
    document.getElementById('areaP2').style.color = 'black';
    document.getElementById('areaP2').style.backgroundColor = 'white';
    document.getElementById('check').style.display = 'flex';
    document.getElementById('check2').style.display = 'flex';
    document.getElementById('checkbox').style.display = 'flex';
    document.getElementById('checkbox2').style.display = 'flex';
    document.getElementById('form').style.height = '100%'

    document.getElementById('dependente').style.display = 'inline';

    document.getElementById('btn').style.backgroundColor = '#0049FF';
    
    alterarFocus("2px solid #055CE0");

}

function cuidador() {

    document.body.style.backgroundColor = '#00AD7F';
    document.getElementById('form').style.backgroundColor = '#E5F7E7';
    document.getElementById('h1').style.color = '#00AD7F';

    document.getElementById('areaP1').style.color = 'black';
    document.getElementById('areaP1').style.backgroundColor = 'white';
    document.getElementById('areaP2').style.color = '#00AD7F';
    document.getElementById('areaP2').style.backgroundColor = '#ECECEC';
    document.getElementById('check').style.display = 'none';
    document.getElementById('check2').style.display = 'none';
    document.getElementById('checkbox').style.display = 'none';
    document.getElementById('checkbox2').style.display = 'none';
    document.getElementById('form').style.height = '50rem'

    document.getElementById('dependente').style.display = 'none';

    document.getElementById('btn').style.backgroundColor = '#00AD7F';

    alterarFocus("2px solid #00AD7F");

}

function alterarFocus(style){
    const input = document.querySelectorAll('input');
    input.forEach(function (input) {
        input.addEventListener("focus", function () {
            input.style.border = style;
        });

        input.addEventListener("blur", function () {
            input.style.border = "none";
        });
    });
}

var selecionado = null;

function textBox(textbox) {
    if (selecionado !== null && selecionado !== textbox) {
        selecionado.checked = false;
    }
    selecionado = textbox;
}

function analisar() {
    var nome = document.getElementById('nome');
    var email = document.getElementById("email");
    var tel = document.getElementById("tel");
    var dependente = document.getElementById('dependentes');
    var cpf = document.getElementById('cpf');
    var city = document.getElementById('city');
    var state = document.getElementById('state');
    var number = document.getElementById('numero');
    var endereco = document.getElementById("endereco");
    var complemento = document.getElementById("complemento");
    var array = [nome, email, tel, dependente, cpf, city, state, number, endereco, complemento];
    var log = 0;

    for (var i = 0; i <= array.length; i++) {

        if (array[i].value == "") {
            array[i].style.borderColor = 'red'
        } else {
            array[i].style.borderColor = 'green';
        }
    }

    if (nome.value != "" && email.value != "" && tel.value != "" && dependente.value != "" && cpf.value != "" && state.value != "" && city.value != "" && endereco.value != "" && number.value != "" && complemento.value != "") {
        window.location = "Login.html";
    }

}

const telefone = document.querySelector("#tel");
const cpf = document.querySelector("#cpf");

telefone.addEventListener("keyup", (e) => {

    const valuesOfInput = e.target.value.replaceAll("-", "");

    if (e.target.value.length < 12) {
        e.target.value = valuesOfInput.replace(/(\d{2})(\d{5})(\d{4})/, "($1) $2-$3");
    }
})

cpf.addEventListener("keyup", (e) => {

    const valuesOfInput = e.target.value.replaceAll(".", "");

    if (e.target.value.length < 12) {
        e.target.value = valuesOfInput.replace(/(\d{3})(\d{3})(\d{3})(\d{0,2})/, "$1.$2.$3-$4");
    }
})