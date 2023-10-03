function contratante(){

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
}


function cuidador(){

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
        
        if(nome.value != "" && email.value != "" && tel.value != "" && dependente.value != "" && cpf.value != "" && state.value != "" && city.value != "" && endereco.value != "" && number.value != "" && complemento.value != "")
        {
            window.location = "Login.html"
        }

        if (nome.value == "") {
            nome.style.borderColor = 'red';
        } else {
            nome.style.borderColor = 'green';
        }

        if (email.value == "") {
            email.style.borderColor = 'red';
        } else {
            email.style.borderColor = 'green';
        }
    
        if (tel.value == "") {
            tel.style.borderColor = 'red';
        } else {
            tel.style.borderColor = 'green';
        }

        if (dependente.value == "") {
            dependente.style.borderColor = 'red';
        } else {
            dependente.style.borderColor = 'green';
        }
    
        if (cpf.value == "") {
            cpf.style.borderColor = 'red';
        } else {
            cpf.style.borderColor = 'green';
        }
    
        if (state.value == "") {
            state.style.borderColor = 'red';
        } else {
            state.style.borderColor = 'green';
        }

        if (city.value == "") {
            city.style.borderColor = 'red';
        } else {
            city.style.borderColor = 'green';
        }

        if (endereco.value == "") {
            endereco.style.borderColor = 'red';
        } else {
            endereco.style.borderColor = 'green';
        }

        if (number.value == "") {
            number.style.borderColor = 'red';
        } else {
            number.style.borderColor = 'green';
        }
    
        if (complemento.value == "") {
            complemento.style.borderColor = 'red';
        } else {
            complemento.style.borderColor = 'green';
        }


    }