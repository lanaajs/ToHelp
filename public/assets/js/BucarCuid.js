var videosEmReproducao = false; // Variável para rastrear se algum vídeo está em reprodução

// Função para configurar o comportamento da imagem e vídeo
function configurarComportamento(imagem, video, txtcard, contratarBtn) {
    imagem.addEventListener("click", function () {
        // Verificar se outros vídeos estão em reprodução
        if (!videosEmReproducao) {
            videosEmReproducao = true; // Bloquear outros vídeos
            imagem.style.display = "none";
            video.style.display = "block";
            txtcard.style.display = "none";
            contratarBtn.style.display = "none";
            video.play();
        }
    });

    video.addEventListener("ended", function () {
        videosEmReproducao = false; // Desbloquear outros vídeos após o término
        imagem.style.display = "block";
        video.style.display = "none";
        txtcard.style.display = "block";
        contratarBtn.style.display = "block";
    });
}

// Obter todas as cuidcards
var cuidcards = document.querySelectorAll(".cuidcard");

// Iterar sobre cada cuidcard e configurar o comportamento
cuidcards.forEach(function (cuidcard) {
    var imagem = cuidcard.querySelector("img");
    var video = cuidcard.querySelector("video");
    var txtcard = cuidcard.querySelector(".txtcard");
    var contratarBtn = cuidcard.querySelector("#saiba");

    configurarComportamento(imagem, video, txtcard, contratarBtn);
});