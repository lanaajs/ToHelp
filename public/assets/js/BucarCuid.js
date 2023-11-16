// var videosEmReproducao = false; // Variável para rastrear se algum vídeo está em reprodução

// // Função para configurar o comportamento da imagem e vídeo
// function configurarComportamento(imagem, video, txtcard, contratarBtn) {
//     imagem.addEventListener("click", function () {
//         // Verificar se outros vídeos estão em reprodução
//         if (!videosEmReproducao) {
//             videosEmReproducao = true; // Bloquear outros vídeos
//             imagem.style.display = "none";
//             video.style.display = "block";
//             txtcard.style.display = "none";
//             contratarBtn.style.display = "none";
//             video.play();
//         }
//     });

//     video.addEventListener("ended", function () {
//         videosEmReproducao = false; // Desbloquear outros vídeos após o término
//         imagem.style.display = "block";
//         video.style.display = "none";
//         txtcard.style.display = "block";
//         contratarBtn.style.display = "block";
//     });
// }

// // Obter todas as cuidcards
// var cuidcards = document.querySelectorAll(".cuidcard");

// // Iterar sobre cada cuidcard e configurar o comportamento
// cuidcards.forEach(function (cuidcard) {
//     var imagem = cuidcard.querySelector("img");
//     var video = cuidcard.querySelector("video");
//     var txtcard = cuidcard.querySelector(".txtcard");
//     var contratarBtn = cuidcard.querySelector("#saiba");

//     configurarComportamento(imagem, video, txtcard, contratarBtn);
// });

var inp = document.querySelector('#inp');
var caixaResultados = document.querySelector('#caixa-resultados');


//O evento adicionado captura o conteúdo adicionado no input.
inp.addEventListener('input', _.throttle(async event => {

    try {

        const { data } = await axios.get('/app/controllers/BuscarCuidController.php', {
            params: {
                busca: event.target.value
            }
        });

        console.log(data);

        if (event.target.value.length === 0) {
            caixaResultados.style.display = 'none';
            return;
        }

        if (!data.length) {
            caixaResultados.style.display = 'block';
            caixaResultados.innerHTML = '<div id="semResultados">Nenhum cuidador encontrado</div>';
            return;
        }

        caixaResultados.style.display = 'block';
        var resultados = '<ul>';
        resultados += data.map(busca => {
            return `
            <li>${busca.nome_cuid} ${busca.sobrenome_cuid}</li>
        `
        }).join('');
        resultados += '</ul>';

        caixaResultados.innerHTML = resultados;



    } catch (error) {
        console.log(error);
    }

}, 500))


let selectEstado = document.getElementById('estado');


selectEstado.onchange = function () {

    let selectCidade = document.getElementById('cidade');
    let valor = selectEstado.value;

    fetch("../controllers/BuscarCuidController.php?estado=" + valor)
        .then(response => {
            return response.text();
        })
        .then(select => {
            selectCidade.innerHTML = select;
        });

}