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