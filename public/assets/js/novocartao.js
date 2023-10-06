const form = document.querySelector("#info-cartao");

const nome = document.querySelector("#nome");
const numcartao = document.querySelector("#numcartao");
const cpf = document.querySelector("#cpf");
const vencimento = document.querySelector("#vencimento");
const cvv = document.querySelector("#cvv");

const nome_cart_text = document.querySelector(".nome-cart-text");
const numero_cart_text = document.querySelector(".numero-cart-text");
const vencimento_text = document.querySelector(".vencimento-text");
const cvv_text = document.querySelector(".cvv-text");

nome.addEventListener("keyup", (e) => {
    if (!e.target.value) {
        nome_cart_text.innerHTML = " ";
    } else {
        nome_cart_text.innerHTML = e.target.value.toUpperCase();
    }
})

numcartao.addEventListener("keyup", (e) => {
    if (!e.target.value) {
        numero_cart_text.innerText = "**** **** **** ****";
    } else {
        const valuesOfInput = e.target.value.replaceAll(" ", "");

        if (e.target.value.length > 14) {
            e.target.value = valuesOfInput.replace(/(\d{4})(\d{4})(\d{4})(\d{0,4})/, "$1 $2 $3 $4");
            numero_cart_text.innerHTML = valuesOfInput.replace(/(\d{4})(\d{4})(\d{4})(\d{0,4})/, "$1 $2 $3 $4");
        } else if (e.target.value.length > 9) {
            e.target.value = valuesOfInput.replace(/(\d{4})(\d{4})(\d{0,4})/, "$1 $2 $3");
            numero_cart_text.innerHTML = valuesOfInput.replace(/(\d{4})(\d{4})(\d{0,4})/, "$1 $2 $3");
        } else if (e.target.value.length > 4) {
            e.target.value = valuesOfInput.replace(/(\d{4})(\d{0,4})/, "$1 $2");
            numero_cart_text.innerHTML = valuesOfInput.replace(/(\d{4})(\d{0,4})/, "$1 $2");
        } else {
            numero_cart_text.innerHTML = valuesOfInput;
        }
    }
})

cpf.addEventListener("keyup", (e) => {
    if (e.target.value.length < 14) {
        const valuesOfInput = e.target.value.replaceAll(".", "");

        if (e.target.value.length < 12) {
            e.target.value = valuesOfInput.replace(/(\d{3})(\d{3})(\d{3})(\d{0,2})/, "$1.$2.$3-$4");
        }
    }
})

vencimento.addEventListener("keyup", (e) => {
    if (!e.target.value) {
        vencimento_text.innerHTML = "mm/aa";
    } else {
        const valuesOfInput = e.target.value.replace("/", "");

        if (e.target.value.length > 2) {
            e.target.value = valuesOfInput.replace(/(\d{2})(\d{0,2})/, "$1/$2");
            vencimento_text.innerHTML = valuesOfInput.replace(/(\d{2})(\d{0,2})/, "$1/$2");
        } else {
            vencimento_text.innerHTML = valuesOfInput;
        }
    }
})

cvv.addEventListener("keyup", (e) => {
    if (!e.target.value) {
        cvv_text.innerHTML = "***";
    } else {
        cvv_text.innerHTML = e.target.value;
    }
})

function analisar() {
    var nome = document.getElementById("nome");
    var numcartao = document.getElementById("numcartao");
    var cpf = document.getElementById("cpf");
    var vencimento = document.getElementById("vencimento");
    var cvv = document.getElementById("cvv");
    var info = [nome, numcartao, cpf, vencimento, cvv];
    var controller =  false;

    for (var i = 0; i <= info.length; i++) {

        if (info[i].value == "") {
            info[i].style.borderColor = 'red';
            controller = true;
        } else {
            info[i].style.borderColor = 'green';
        }
        
        if (controller && i == 1) {
            Toastify({
                text: "Campo não preenchido",
                className: "toast",
                duration: 3000,
                newWindow: true,
                gravity: "top", // `top` or `bottom`
                position: "center", // `left`, `center` or `right`
                stopOnFocus: true, // Prevents dismissing of toast on hover
                style: {
                    background: "linear-gradient(to right, #ff0000, #ec5353)",
                    
                },
                onClick: function () { } // Callback after click
            }).showToast();
        }
    }

    if (
        nome.value != "" &&
        nuncartao.value != "" &&
        cpf.value != "" &&
        vencimento.value != "" &&
        cvv.value != "" 
      ) {
        window.location = "FormadePagamento.html";
      }

}



