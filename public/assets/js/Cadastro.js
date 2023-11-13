function contratante() {
  window.location = '/contratante/cadastro'
}

function cuidador() {
  window.location = '/cuidador/cadastro'
}

function analisar() {
  var nome = document.getElementById("nome");
  var sobrenome = document.getElementById("sobrenome");
  var cpf = document.getElementById("cpf");
  var rg = document.getElementById("rg");
  var email = document.getElementById("email");
  var tel = document.getElementById("tel");
  var cep = document.getElementById("CEP");
  var state = document.getElementById("estado");
  var city = document.getElementById("cidade");
  var bairro = document.getElementById("bairro");
  var endereco = document.getElementById("endereco");
  var number = document.getElementById("numero");
  var complemento = document.getElementById("complemento");
  var senha = document.getElementById("senha");
  var senhaconfirm = document.getElementById("senhaconfirm");
  var genero = document.getElementById("genero");
  

  var date = document.getElementById("date");

  var sobre = document.getElementById("sobre");


  var controller =  false;

  var array = [
    nome,
    sobrenome,
    cpf,
    rg,
    email,
    tel,
    cep,
    state,
    city,
    bairro,
    endereco,
    number,
    complemento,
    senha,
    date,
    sobre,
    senhaconfirm  
  ];

  for (var i = 0; i <= array.length; i++) {
    if (array[i].value == "") {
      array[i].style.borderColor = "red";
  
      (function(element) {
        setTimeout(function() {
          element.style.borderColor = "#aaa"; // Define a cor da borda de volta para transparente após 1 segundo
        }, 2500);
      })(array[i]);
      
      controller = true;
  
    } else {
      array[i].style.borderColor = "green";
    }

    if(genero.value == "none"){
      genero.style.borderColor = "red";

      (function(element) {
        setTimeout(function() {
          element.style.borderColor = "#aaa"; // Define a cor da borda de volta para transparente após 1 segundo
        }, 2500);
      })(genero);

      controller = true;
    }else{
      genero.style.borderColor = "green";
    }


      if (controller && i == 1) {
        Toastify({
            text: "Campo não preenchido",
            className: "toast",
            duration: 1500,
            newWindow: true,
            gravity: "top", // `top` or `bottom`
            position: "center", // `left`, `center` or `right`
            stopOnFocus: true, // Prevents dismissing of toast on hover
            style: {
                background: "linear-gradient(to right, #ff0000, #ec5353)",
                
            },
            onClick: function () { } // Callback after click
        }).showToast();
        controller = false;
    }
    }

}

function senhaTAM(){
  var senha = document.getElementById("senha");
  var senhaconfirm = document.getElementById("senhaconfirm")
  var btn = document.getElementById("btn");

  var controller = false;

 
  btn.addEventListener("click", function(){
    var limiter = senha.value
    if(limiter.length == 8){
      senha.style.borderColor = "green"
    }else{
      senha.style.borderColor = "red"

        setTimeout(function() {
          senha.style.borderColor = "#106FFF"; // Define a cor da borda de volta para transparente após 1 segundo
        }, 2500);
  

      controller = true;
    }

    if (controller) {
      Toastify({
          text: "A senha tem que ter 8 caracteres",
          className: "toast",
          duration: 1500,
          newWindow: true,
          gravity: "top", // `top` or `bottom`
          position: "center", // `left`, `center` or `right`
          stopOnFocus: true, // Prevents dismissing of toast on hover
          style: {
              background: "linear-gradient(to right, #ff0000, #ec5353)",
              
          },
          onClick: function () { } // Callback after click
      }).showToast();
      controller = false;
  }

  });


    btn.addEventListener("click", function(){
      if(senhaconfirm.value != senha.value){
        controller = true;
        senhaconfirm.style.borderColor = "red";

        
      }else if(senhaconfirm.value == ""){
        senhaconfirm.style.borderColor = "red";

        setTimeout(function() {
          senhaconfirm.style.borderColor = "#106FFF"; // Define a cor da borda de volta para transparente após 1 segundo
        }, 2500);
        
      }else{
        senhaconfirm.style.borderColor = "green";
      }

      if (controller) {
        Toastify({
            text: "Senhas diferentes",
            className: "toast",
            duration: 1500,
            newWindow: true,
            gravity: "top", // `top` or `bottom`
            position: "center", // `left`, `center` or `right`
            stopOnFocus: true, // Prevents dismissing of toast on hover
            style: {
                background: "linear-gradient(to right, #ff0000, #ec5353)",
                
            },
            onClick: function () { } // Callback after click
        }).showToast();
        controller = false;
    }
    })

  const cpfInput = document.getElementById("cpf");

cpfInput.addEventListener("input", function() {
 
  const cpf = cpfInput.value.replace(/\D/g, "");

  if (cpf.length <= 3) {
    cpfInput.value = cpf;
  } else if (cpf.length <= 6) {
    cpfInput.value = cpf.substring(0, 3) + "." + cpf.substring(3);
  } else if (cpf.length <= 9) {
    cpfInput.value = cpf.substring(0, 3) + "." + cpf.substring(3, 6) + "." + cpf.substring(6);
  } else {
    cpfInput.value = cpf.substring(0, 3) + "." + cpf.substring(3, 6) + "." + cpf.substring(6, 9) + "-" + cpf.substring(9, 11);
  }
});

const cepInput = document.getElementById("CEP");

cepInput.addEventListener("input", function() {
 
  const cep = cepInput.value.replace(/\D/g, "");

  if (cep.length <= 3) {
    cepInput.value = cep;
  } else if (cep.length <= 9    ) {
    cepInput.value = cep.substring(0, 5) + "-" + cep.substring(5,8);
  }
});

const telInput = document.getElementById("tel");

telInput.addEventListener("input", function() {
  let tel = telInput.value.replace(/\D/g, "");

  if (tel.length <= 2) {
    telInput.value = tel;
  } else if (tel.length <= 6) {
    telInput.value = `(${tel.substring(0, 2)}) ${tel.substring(2)}`;
  } else if (tel.length <= 10) {
    telInput.value = `(${tel.substring(0, 2)}) ${tel.substring(2, 6)}-${tel.substring(6)}`;
  } else {
    telInput.value = `(${tel.substring(0, 2)}) ${tel.substring(2, 7)}-${tel.substring(7, 11)}`;
  }
});

const rgInput = document.getElementById("rg");

rgInput.addEventListener("input", function () {
  let rg = rgInput.value.replace(/\D/g, ""); // Remove caracteres não numéricos

  // Formata o RG no formato XX.XXX.XXX-X
  if (rg.length <= 2) {
    rgInput.value = rg;
  } else if (rg.length <= 5) {
    rgInput.value = `${rg.substring(0, 2)}.${rg.substring(2)}`;
  } else if (rg.length <= 8) {
    rgInput.value = `${rg.substring(0, 2)}.${rg.substring(2, 5)}.${rg.substring(5)}`;
  } else {
    rgInput.value = `${rg.substring(0, 2)}.${rg.substring(2, 5)}.${rg.substring(5, 8)}-${rg.substring(8,10)}`;
  }
});

}



  
