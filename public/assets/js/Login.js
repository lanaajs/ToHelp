
function contratante(){

    window.location = '../views/LoginContratante.html'
 
}

function cuidador(){

    window.location = '../views/LoginCuidador.html'
   
}

function logarContratante(){

    var cpf = document.getElementById('cpf');
    var senha = document.getElementById('senha');

    
    if(cpf.value == '123123-12' && senha.value == '12345678'){
        window.location = "../views/ContaContratante.html";
    }
  
}

function logarCuidador(){

    var cpf = document.getElementById('cpf');
    var senha = document.getElementById('senha');

    if(cpf.value == '123123-13' && senha.value == '12345679'){
        window.location = "../views/ContaCuidador.html";

    }
}


