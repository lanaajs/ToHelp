function contratante() {
  window.location = '../views/CadastroContratante.html'
}

function cuidador() {
  window.location = '../views/CadastroCuidador.html'
}

function alterarFocus(style) {
  const input = document.querySelectorAll("input");
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
  var nome = document.getElementById("nome");
  var email = document.getElementById("email");
  var tel = document.getElementById("tel");
  var dependente = document.getElementById("dependentes");
  var cpf = document.getElementById("cpf");
  var city = document.getElementById("city");
  var state = document.getElementById("state");
  var number = document.getElementById("numero");
  var endereco = document.getElementById("endereco");
  var complemento = document.getElementById("complemento");
  var array = [
    nome,
    email,
    tel,
    dependente,
    cpf,
    city,
    state,
    number,
    endereco,
    complemento,
  ];
  var controller = false;

  for (var i = 0; i <= array.length; i++) {
    if (array[i].value == "") {
      array[i].style.borderColor = "red";
      controller = true;
    } else {
      array[i].style.borderColor = "green";
    }

    if (controller && i==1) {
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
        onClick: function () {}, // Callback after click
      }).showToast();
      controller = false;
    }
  }

  if (
    nome.value != "" &&
    email.value != "" &&
    tel.value != "" &&
    dependente.value != "" &&
    cpf.value != "" &&
    state.value != "" &&
    city.value != "" &&
    endereco.value != "" &&
    number.value != "" &&
    complemento.value != ""
  ) {
    window.location = "Login.html";
  }
}

const telefone = document.querySelector("#tel");
const cpf = document.querySelector("#cpf");

telefone.addEventListener("keyup", (e) => {
  const valuesOfInput = e.target.value.replaceAll("-", "");

  if (e.target.value.length < 12) {
    e.target.value = valuesOfInput.replace(
      /(\d{2})(\d{5})(\d{4})/,
      "($1) $2-$3"
    );
  }
});

cpf.addEventListener("keyup", (e) => {
  const valuesOfInput = e.target.value.replaceAll(".", "");

  if (e.target.value.length < 12) {
    e.target.value = valuesOfInput.replace(
      /(\d{3})(\d{3})(\d{3})(\d{0,2})/,
      "$1.$2.$3-$4"
    );
  }
});
