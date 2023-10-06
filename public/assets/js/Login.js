var usuario = true

function contratante(){

    usuario = true;
    document.body.style.backgroundColor = '#106FFF';
    document.getElementById('form').style.backgroundColor = '#E0EDFE';
    document.getElementById('h1').style.color = '#0049FF';

    document.getElementById('areaP1').style.color = '#0049FF';
    document.getElementById('areaP1').style.backgroundColor = '#ECECEC';
    document.getElementById('areaP2').style.color = 'black';
    document.getElementById('areaP2').style.backgroundColor = 'white';

    document.getElementById('btn').style.backgroundColor = '#0049FF';
    document.getElementById('textCL').style.color = '#0049FF';

}

function cuidador(){

    usuario = false
    document.body.style.backgroundColor = '#00AD7F';
    document.getElementById('form').style.backgroundColor = '#E5F7E7';
    document.getElementById('h1').style.color = '#00AD7F';

    document.getElementById('areaP1').style.color = 'black';
    document.getElementById('areaP1').style.backgroundColor = 'white';
    document.getElementById('areaP2').style.color = '#00AD7F';
    document.getElementById('areaP2').style.backgroundColor = '#ECECEC';

    document.getElementById('btn').style.backgroundColor = '#00AD7F';
    document.getElementById('textCL').style.color = '#00AD7F';
   


}

function logar(){

    var cpf = document.getElementById('cpf');
    var senha = document.getElementById('senha');

    if(usuario){
    if(cpf.value == '123123-12' && senha.value == '12345678'){
        window.location = "ContaContratante.html";
    }

    }else{
        if(cpf.value == '123123-13' && senha.value == '12345679'){
            window.location = "ContaCuidador.html";

        }
    }
    
}

