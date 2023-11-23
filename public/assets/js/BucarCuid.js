var inp = document.querySelector('#inp');
var caixaResultados = document.querySelector('#caixa-resultados');
var divcards = document.querySelector('.cuidadores2');


divcards.style.display = 'none';

function criarCardCuidador(cuidador) { /*ADICIONEI ISSO*/
    return `
        <div class="cuidcard">
            <img id="cuidft" src="../../public/assets/arqvs_cuid/${cuidador.foto_cuid}" alt="">
            <div class="txtcard">
                <h2>${cuidador.nome_cuid}</h2>
                <p id="pdif">${cuidador.sobre}</p>
            </div>
            <button id="saiba">Contratar</button>
        </div>
    `;
}

// O evento adicionado captura o conteúdo adicionado no input.
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
            divcards.style.display = 'none';
            return;
        }

        if (!data.length) {
            caixaResultados.style.display = 'flex'; /*ADICIONEI ISSO*/
            caixaResultados.innerHTML = '<div id="semResultados">Nenhum cuidador encontrado</div>';
            divcards.style.display = 'none';
            return;
        }

        caixaResultados.style.display = 'block';
        var resultados = '<ul>';
        resultados += data.map(busca => `<li>${busca.nome_completo_cuid}</li>`).join('');
        resultados += '</ul>';

        var cards = data.map(busca => criarCardCuidador(busca)).join(''); /*ADICIONEI ISSO*/
        caixaResultados.innerHTML = resultados; /*ADICIONEI ISSO*/
        
        //divcards é exibida quando há resultados
        divcards.style.display = 'flex'; /*ADICIONEI ISSO*/
        divcards.innerHTML = cards; /*ADICIONEI ISSO*/

    } catch (error) {
        console.log(error);
    }
}, 500));

let selectEstado = document.getElementById('estado');

selectEstado.onchange = function () {
    let selectCidade = document.getElementById('cidade');
    let cuidadores = document.getElementById('cuidadores1');
    let valor = selectEstado.value;

    fetch("../controllers/BuscarCuidController.php?estado=" + valor)
        .then(response => {
            return response.text();
        })
        .then(select => {
            selectCidade.innerHTML = select;
            cuidadores.innerHTML = select;
        });
}
