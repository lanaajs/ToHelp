var sugestoes = [
    "Jogar jogos de tabuleiro",
    "Assistir a filmes",
    "Fazer artesanato",
    "Ler livros",
    "Cozinhar juntos",
    "Contar histórias",
    "Fazer sessões de relaxamento",
    "Começar um jardim",
    "Aprender algo tecnológico",
    "Aula de alongamento"
];

var atividade = [
    "Jogar Jogos de Tabuleiro: Desperte a competitividade amigável e estimule a mente com jogos de tabuleiro. Desde os clássicos até os modernos, essa atividade promove interação social e exercício mental, proporcionando horas de diversão.",

    "Assistir a Filmes: Transforme a sala em uma sala de cinema caseira. Assistir a filmes juntos não é apenas uma experiência relaxante, mas também uma oportunidade para compartilhar histórias e criar momentos especiais.",

    "Fazer Artesanato: Deixe a criatividade fluir com atividades artesanais. Pintura, costura, ou qualquer forma de artesanato oferece uma saída para expressar a imaginação, enquanto cria peças únicas e significativas.",

    "Ler Livros: Mergulhe em mundos fictícios ou aprenda algo novo através da leitura. A experiência compartilhada da leitura não só proporciona conhecimento, mas também fortalece os laços através da troca de ideias.",

    "Cozinhar Juntos: Transforme a cozinha em um laboratório de sabores. Cozinhar juntos não apenas resulta em refeições deliciosas, mas também é uma forma de compartilhar histórias e técnicas culinárias.",

    "Contar Histórias: Deixe a imaginação voar alto com sessões de contação de histórias. Seja relembrando memórias pessoais ou inventando narrativas, essa atividade proporciona momentos de intimidade e diversão.",

    "Fazer Sessões de Relaxamento: Desacelere com sessões de relaxamento. Desde meditação guiada até técnicas de respiração, essas práticas promovem bem-estar emocional e físico.",

    "Começar um Jardim: Conecte-se com a natureza começando um jardim. O cultivo de flores ou plantas é terapêutico, proporcionando uma sensação de realização e beleza natural.",

    "Aprender Algo Tecnológico: Explore o mundo digital juntos. Aprender algo tecnológico, como redes sociais ou videochamadas, abre portas para a conectividade e descobertas modernas.",

    "Aula de Alongamento: Cuide da saúde física com aulas de alongamento. Essa prática suave promove flexibilidade e bem-estar geral."

];

var imagens = [
    "../../public/assets/img/casa/tabuleiro.jpg","../../public/assets/img/casa/filmes.jfif","../../public/assets/img/casa/artesanato.jpg","../../public/assets/img/casa/livros.jpg","../../public/assets/img/casa/cozinhar.jpeg","../../public/assets/img/casa/historias.jfif","../../public/assets/img/casa/relaxamento.jfif","../../public/assets/img/casa/jardim.png","../../public/assets/img/casa/tecnologia.jfif","../../public/assets/img/casa/alogamento.png"
];


function Casasugerir(){
    var input = document.getElementById("input");
    var descricao = document.getElementById("descricao");
    var imagem = document.getElementById("imagem");

    var sugestao = Math.floor(Math.random() * sugestoes.length);

    imagem.src = imagens[sugestao];
    input.value = sugestoes[sugestao];
    descricao.value = atividade[sugestao];

    if(imagem.src != ""){
        descricao.style.display  = "flex";
        imagem.style.display = "flex";
    }else{
        descricao.style.display  = "none";
        imagem.style.display = "none";
    }


}

var sugestoes2 = [
    "Caminhar no parque",
    "Fazer compras",
    "Fazer artesanato",
    "Aprender algo novo",
    "Sessões de relaxamento",
    "Visitar museus",
    "Passeio de barco",
    "Ir à praia",
    "Fazer uma trilha",
    "Fazer feira",
    "Aula de yoga",
    "Aula de dança" 
];


var atividade2 = [
    "Caminhar no Parque: Desfrute da natureza e promova a saúde física com caminhadas no parque. Esta atividade é uma maneira agradável de respirar ar fresco, exercitar-se e desfrutar da beleza ao seu redor.",

    "Fazer Compras: Transforme as compras em uma experiência social. Passear pelos corredores do mercado não é apenas prático, mas também uma oportunidade de interação e escolhas compartilhadas.",

    "Fazer Artesanato: Liberte a criatividade com atividades artesanais. Seja trabalhando em projetos manuais simples ou explorando técnicas mais avançadas, o artesanato proporciona momentos de expressão pessoal.",

    "Aprender Algo Novo: Mantenha a mente ativa e curiosa ao aprender algo novo. Isso pode variar desde uma habilidade prática até a descoberta de conhecimentos inexplorados, mantendo a jornada da aprendizagem sempre excitante.",

    "Sessões de Relaxamento: Tire um tempo para relaxar e rejuvenescer. Sessões de relaxamento, como meditação ou simples momentos de tranquilidade, são vitais para o bem-estar emocional e físico.",

    "Visitar Museus: Alimente a mente com visitas a museus. A exploração cultural enriquece a compreensão e oferece oportunidades para apreciar a arte, história e ciência.",

    "Passeio de Barco: Navegue pelas águas com um passeio de barco. Seja em um lago tranquilo ou em um rio movimentado, a experiência aquática oferece momentos de serenidade e contemplação.",

    "Ir à Praia: Desfrute do sol e da areia com uma visita à praia. A brisa do oceano, a oportunidade de caminhar na areia e mergulhar nas águas são ingredientes perfeitos para um dia relaxante.",

    "Fazer uma Trilha: Explore a natureza através de trilhas. Caminhar por paisagens diversas não apenas promove a saúde física, mas também proporciona um contato mais próximo com o ambiente natural.",

    "Fazer Feira: Participe de feiras locais. Além de uma experiência de compra única, as feiras muitas vezes oferecem uma variedade de produtos frescos e artesanais para explorar.",

    "Aula de Yoga: Cultive equilíbrio e bem-estar com aulas de yoga. Esta prática milenar não só fortalece o corpo, mas também acalma a mente, proporcionando um momento de paz interior.",

    "Aula de Dança: Mova-se ao ritmo da música com aulas de dança. Esta atividade não só melhora a saúde física, mas também traz alegria e expressão artística ao dia a dia."
];

var imagens2 = [
    "../../public/assets/img/arlivre/caminharnoparque.jpg","../../public/assets/img/arlivre/fazercompras.jpg","../../public/assets/img/arlivre/artesanato.jpg","../../public/assets/img/arlivre/aprenderalgonovo.jpg","../../public/assets/img/arlivre/sessoesderelaxamento.jfif","../../public/assets/img/arlivre/museu.jfif","../../public/assets/img/arlivre/passeiobarco.jpeg","../../public/assets/img/arlivre/praia.jpg","../../public/assets/img/arlivre/trilha.jpeg","../../public/assets/img/arlivre/feira.jfif","../../public/assets/img/arlivre/yoga.jpg","../../public/assets/img/arlivre/danca.jpg"
 ];

function ArLivresugerir(){
    var input2 = document.getElementById("input2");
    var descricao2 = document.getElementById("descricao2");
    var imagem2 = document.getElementById("imagem2");

    var sugestao2 = Math.floor(Math.random() * sugestoes2.length);

    if(imagens2[sugestoes2] == ""){{
        descricao2.style.display  = "none";
        imagem2.style.display = "none";
    }}else{
        descricao2.style.display  = "flex";
        imagem2.style.display = "flex";
    }


    imagem2.src = imagens2[sugestao2];
    input2.value = sugestoes2[sugestao2];
    descricao2.value = atividade2[sugestao2];


   
}

function adicionarsugestao(){
    var input3 = document.getElementById("input3"); 
    var select = document.getElementById("select");
    var descricao3 = document.getElementById("descricao3");


    if(select.value == "casa"){
        sugestoes.push(input3.value);
        atividade.push(descricao3.value);
        imagens.push("../../public/assets/img/placeholder.png")
    }else if(select.value == "arlivre"){
        sugestoes2.push(input3.value);
        atividade2.push(descricao3.value);
        imagens2.push("../../public/assets/img/placeholder.png")
    }
}


