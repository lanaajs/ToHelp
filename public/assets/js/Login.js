
function contratante(){

    window.location = '/login/contratante'
 
}

function cuidador(){

    window.location = '/login/cuidador'
   
}

function verificar(){

    var cpf = document.getElementById('cpf');
    var senha = document.getElementById('senha');
    var btn = document.getElementById("btn");
    var array =[cpf,senha];
    var controller =  false;

   

      btn.addEventListener("click", function() {
        for(var i = 0; i<array.length;i++){
            if(array[i].value ==""){    
                array[i].style.borderColor = "red"
                controller =  true;
            }else{
                array[i].style.borderColor = "green"
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
        
      });

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

    }

    



