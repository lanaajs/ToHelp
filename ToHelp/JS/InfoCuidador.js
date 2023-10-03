function analisar(){
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

    
    if(email.value != "" && tel.value != "" && cpf.value != "" && estado.value != "" && cidade.value != "" && bairro.value != "" && endereco.value != "" && numero.value != "" && complemento.value != "" && apre.value != ""){
        window.location = "AnaliseCurriculo.html"
    }

    
    if(email.value == ""){
        email.style.borderColor = 'red';
    }else{
        email.style.borderColor = 'green';
    }


    if(tel.value == ""){
        tel.style.borderColor = 'red';
    }else{
        tel.style.borderColor = 'green';
    }


    if(cpf.value == ""){
        cpf.style.borderColor = 'red';
    }else{
        cpf.style.borderColor = 'green';
    }

    if(estado.value == ""){
        estado.style.borderColor = 'red';
    }else{
        estado.style.borderColor = 'green';
    }

    if(cidade.value == ""){
        cidade.style.borderColor = 'red';
    }else{
        cidade.style.borderColor = 'green';
    }

    if(bairro.value == ""){
        bairro.style.borderColor = 'red';
    }else{
        bairro.style.borderColor = 'green';
    }

    if(endereco.value == ""){
        endereco.style.borderColor = 'red';
    }else{
        endereco.style.borderColor = 'green';
    }
    
    if(numero.value == ""){
        numero.style.borderColor = 'red';
    }else{
        numero.style.borderColor = 'green';
    }
    
    if(complemento.value == ""){
        complemento.style.borderColor = 'red';
    }else{
        complemento.style.borderColor = 'green';
    }
    
    if(apre.value == ""){
        apre.style.borderColor = 'red';
    }else{
        apre.style.borderColor = 'green';
    }


}