// Seletores dos elementos HTML
const dias = document.querySelector(".dias");
const dataAtual = document.querySelector(".dataAtual");
const antesDepoisIcon = document.querySelectorAll(".icons span");

// Variáveis de data
let data = new Date();
let anoAtual = data.getFullYear();
let mesAtual = data.getMonth();

// Nomes dos meses
const meses = ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho",
    "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"];

// Array para rastrear dias selecionados com informações completas de data
const datasSelecionadas = [];

// Função para verificar se uma data está selecionada
function isDateSelected(year, month, day) {
    const data = new Date(year, month, day);
    return datasSelecionadas.some(selectedDate => selectedDate.getTime() === data.getTime());
}

// Função para renderizar o calendário
const renderCalendar = () => {
    // Lógica para obter informações sobre os dias do mês
    let primeiroDiaMes = new Date(anoAtual, mesAtual, 1).getDay();
    let ultimaDataMes = new Date(anoAtual, mesAtual + 1, 0).getDate();
    let ultimoDiaMes = new Date(anoAtual, mesAtual, ultimaDataMes).getDay();
    let ultimaDataUltimoMes = new Date(anoAtual, mesAtual, 0).getDate();
    let liTag = "";

    for (let i = primeiroDiaMes; i > 0; i--) {
        liTag += `<li class="inactive">${ultimaDataUltimoMes - i + 1}</li>`;
    }

    for (let i = 1; i <= ultimaDataMes; i++) {
        let hoje = i === data.getDate() && mesAtual === data.getMonth()
            && anoAtual === data.getFullYear() ? "active" : "";
        let selecionado = isDateSelected(anoAtual, mesAtual, i) ? "selected" : "";
        liTag += `<li class="${hoje} ${selecionado}" data-day="${i}">
                      ${i}
                      <span class="mark"></span>
                  </li>`;
    }

    for (let i = ultimoDiaMes; i < 6; i++) {
        liTag += `<li class="inactive">${i - ultimoDiaMes + 1}</li>`
    }
    dataAtual.innerText = `${meses[mesAtual]} ${anoAtual}`;
    dias.innerHTML = liTag;

}

// Função para lidar com cliques nos ícones de antes e depois
antesDepoisIcon.forEach(icon => {
    icon.addEventListener("click", () => {
        mesAtual = icon.id === "antes" ? mesAtual - 1 : mesAtual + 1;

        if (mesAtual < 0) {
            mesAtual = 11;
            anoAtual--;
        } else if (mesAtual > 11) {
            mesAtual = 0;
            anoAtual++;
        }
        renderCalendar();
    });
});

// Função para lidar com cliques nos dias do calendário
dias.addEventListener("click", (event) => {
    const li = event.target;
    if (li.tagName === "LI") {
        const day = parseInt(li.getAttribute("data-day"));

        // Crie uma data completa com ano, mês e dia
        const dataSelecionada = new Date(anoAtual, mesAtual, day);

        // Verifique se a data já está selecionada
        const index = datasSelecionadas.findIndex(date => date.getTime() === dataSelecionada.getTime());

        if (index === -1) {
            datasSelecionadas.push(dataSelecionada);
        } else {
            datasSelecionadas.splice(index, 1);
        }

        // Exibir os dias selecionados no console (você pode personalizar essa parte)
        console.log("Dias Selecionados:", datasSelecionadas);
        renderCalendar();
    }
});

// Inicializar o calendário
renderCalendar();

// função para agenda
function cardSalvar() {
    const card = document.querySelector('.area-bloco');
    const div = document.querySelector('.salvamento');

    card.style.display = "flex";
    div.style.display = "none";

}

// função para notificação da agenda do cuidadores
function notificacao() {
    Toastify({
        text: "Caso o horário desejado para cada dia seja diferente, é necessário reservar individualmente.",
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

// função para agenda do cuidadores
function btnBloqueado() {
    const card = document.getElementById('area');
    const feed = document.getElementById('feed');
    const btnbloq = document.getElementById('btncontratar_bloq');
    const btndes = document.getElementById('btncontratar_desbloq');

    btnbloq.style.display = "none";
    btndes.style.display = "block";
    feed.style.display = "none";
    card.style.display = "block";

}

function btnDesbloqueado() {
    window.location.href = "../views/ConfirmacaoCuidador.html";
}
