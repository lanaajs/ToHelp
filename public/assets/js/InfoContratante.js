
function addMedicamento() {

    // Pegar os valores dos inputs
    const inputMedicamento = document.getElementById('medicamento');
    const inputHorario = document.getElementById('horario');
    const inputHorario2 = document.getElementById('horario2');
    const inputHorario3 = document.getElementById('horario3');
    const inputDia = document.getElementById('dia');

    // Criar o elemento card
    const card = document.createElement("div");
    card.classList.add("card");

    if ((inputMedicamento.value && inputHorario.value && inputDia.value !== null) &&
        (inputMedicamento.value && inputHorario.value && inputDia.value !== undefined) &&
        (inputMedicamento.value && inputHorario.value && inputDia.value !== "")) {

        // Adicionar texto e valor dos inputs ao card
        const cardMed = document.createElement("p");
        cardMed.innerHTML = "<strong>Medicamento:</strong> " + inputMedicamento.value;
        card.appendChild(cardMed);

        const cardHor = document.createElement("p");
        cardHor.innerHTML = "<strong>Horário:</strong> " + inputHorario.value + "  " + inputHorario2.value + "  " + inputHorario3.value;
        card.appendChild(cardHor);

        const cardDia = document.createElement("p");
        cardDia.innerHTML = "<strong>Dia:</strong> " + inputDia.value;
        card.appendChild(cardDia);

        // Adicionar botão de excluir ao card
        const deleteButton = document.createElement("button");
        deleteButton.innerHTML="<span class=material-icons>delete</span>"
        deleteButton.classList.add("deleteButton");
        deleteButton.addEventListener("click", function () {
            cardContainer.removeChild(card);
        });
        card.appendChild(deleteButton);

        // Adicionar o card no container de cards
        const cardContainer = document.getElementById("newCard");
        cardContainer.appendChild(card);

        inputMedicamento.value = "";
        inputHorario.value = "";
        inputHorario2.value = "";
        inputHorario3.value = "";
        inputDia.value = "";
    }
}

function analise() {
    var email = document.getElementById("email");
    var nome = document.getElementById("nome");
    var sobrenome = document.getElementById("sobrenome")
    var cpf = document.getElementById("cpf");
    var datanasc = document.getElementById("datanasc")
    var tel = document.getElementById("tel");
    var state = document.getElementById("state");
    var city = document.getElementById("city");
    var endereco = document.getElementById("endereco");
    var numero = document.getElementById("numero");
    var complemento = document.getElementById("complemento");
    var info = [email, nome, sobrenome, cpf, datanasc, tel, state, endereco, numero, 
    complemento];

    for (var i = 0; i <= info.length; i++) {
           
        if (info[i].value == "") {
            info[i].style.borderColor = 'red'
        } else {
            info[i].style.borderColor = 'green';
        }
    }


    if (email != "" && nome.value != "" && sobrenome.value != "" && cpf.value != "" && datanasc != "" && tel.value != "" && state.value != "" && city.value != "" && endereco.value != "" && numero.value != "" && complemento.value != "") {
        window.location = "ContaContratante.html"
    }

}

function analiseDependente() {
    var nome = document.getElementById("nome");
    var sobrenome = document.getElementById("sobrenome");
    var cpf = document.getElementById("cpf");
    var datanasc = document.getElementById("datanasc");
    var tel = document.getElementById("tel");
    var state = document.getElementById("state");
    var city = document.getElementById("city");
    var endereco = document.getElementById("endereco");
    var numero = document.getElementById("numero");
    var complemento = document.getElementById("complemento");
    var comorbidades = document.getElementById("comorbidades");
    var alergias = document.getElementById("alergias");
    var medicamento = document.getElementById("medicamento");
    var dia = document.getElementById("dia");
    var inputHorario = document.getElementById('horario1');
    var inputHorario2 = document.getElementById('horario2');
    var inputHorario3 = document.getElementById('horario3');
    var rotina = document.getElementById("rotina");
    var info = [nome, sobrenome, cpf, datanasc, tel, state, city, endereco, numero,
    complemento, comorbidades, alergias, medicamento, dia, inputHorario, inputHorario2,
    inputHorario3, rotina];


    for (var i = 0; i <= info.length; i++) {
           
        if (info[i].value == "") {
            info[i].style.borderColor = 'red'
        } else {
            info[i].style.borderColor = 'green';
        }
    }

    if (nome.value != "" && sobrenome.value != "" && cpf.value != "" && datanasc != "" && tel.value != "" && state.value != "" && city.value != "" && endereco.value != "" && numero.value != "" && complemento.value != "" && comorbidades.value != "" && alergias.value != "" && medicamento.value != "" && dia.value != "" && inputHorario.value != "" && inputHorario2.value != "" && inputHorario3.value != "" &&  rotina.value != "") {
        window.location = "ContaContratante.html"
    }


}
