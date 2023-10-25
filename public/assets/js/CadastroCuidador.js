const form = document.querySelector("form"),
    nextBtn = form.querySelector(".nextBtn"),
    backBtn = form.querySelector(".backBtn"),
    allInput = form.querySelectorAll(".first input");

let file1 = document.getElementById("inp1");
let file2 = document.getElementById("inp2");
let file3 = document.getElementById("inp3");
let file4 = document.getElementById("inp4");

let message1 = document.getElementById("nome1");
let message2 = document.getElementById("nome2");
let message3 = document.getElementById("nome3");
let message4 = document.getElementById("nome4");


let uploadButton = document.getElementById("upload-button");
let chosenImage = document.getElementById("chosen-image");
let fileName = document.getElementById("file-name");


document.addEventListener("DOMContentLoaded", function () {
    file1.addEventListener("input", () => {
        if (file1.files.length) {
            let fileName = file1.files[0].name;
            message1.innerHTML = `${fileName}`;
        } else {
            message1.innerHTML = "Selecione um arquivo.";
        }
    });

    file2.addEventListener("input", () => {
        if (file2.files.length) {
            let fileName = file2.files[0].name;
            message2.innerHTML = `${fileName}`; 
        }
        else {
            message2.innerHTML = "Selecione um arquivo."; 
        }
    });

    file3.addEventListener("input", () => {
        if (file3.files.length) {
            let fileName = file3.files[0].name;
            message3.innerHTML = `${fileName}`; 
        }
        else {
            message3.innerHTML = "Selecione um arquivo."; 
        }
    });

    file4.addEventListener("input", () => {
        if (file4.files.length) {
            let fileName = file4.files[0].name;
            message4.innerHTML = `${fileName}`; 
        }
        else {
            message4.innerHTML = "Selecione um arquivo."; 
        }
    });

    uploadButton.onchange = () => {
        let reader = new FileReader();
        reader.readAsDataURL(uploadButton.files[0]);
        reader.onload = () => {
            chosenImage.setAttribute("src", reader.result);
        }
        fileName.textContent = uploadButton.files[0].name;
    }
});

function senhaTAMCuid(){
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
            senha.style.borderColor = "#00BF8C"; // Define a cor da borda de volta para transparente após 1 segundo
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
            senhaconfirm.style.borderColor = "#00BF8C";
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

