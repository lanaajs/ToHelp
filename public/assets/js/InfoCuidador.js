const telefone = document.querySelector("#telefone");
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

function analisar() {
    var email = document.getElementById("email");
    var tel = document.getElementById("telefone");
    var cpf = document.getElementById("cpf");
    var estado = document.getElementById("estado");
    var cidade = document.getElementById("cidade");
    var bairro = document.getElementById("bairro");
    var endereco = document.getElementById("endereco");
    var numero = document.getElementById("numero");
    var complemento = document.getElementById("complemento");
    var apre = document.getElementById("apresentacao");
    var info = [email, tel, cpf, estado, cidade, bairro, endereco, numero, complemento, apre];

    for (var i = 0; i <= info.length; i++) {

        if (info[i].value == "") {
            info[i].style.borderColor = 'red'
        } else {
            info[i].style.borderColor = 'green';
        }
    }

    if (email.value != "" && tel.value != "" && cpf.value != "" && estado.value != "" && cidade.value != "" && bairro.value != "" && endereco.value != "" && numero.value != "" && complemento.value != "" && apre.value != "") {
        window.location = "AnaliseCurriculo.html"
    }

}