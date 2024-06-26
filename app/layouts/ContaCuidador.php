<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@300&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"
    />

    <link rel="icon" type="image/x-icon" href="../../public/assets/img/LogoPreta.png">
    <link
      rel="stylesheet"
      href="../../../public/assets/css/ContaCuidador.css"
    />

    <title>To Help</title>
  </head>
  <body>
    <!--Cabeçalho-->
    <header id="cabecalho">
      <div class="w-100 boxfoto">
        <div class="w-100 boxfoto">
          <form class="boxfoto" id="form-form">
            <!-- image -->
            <div class="image-upload boxfoto">
              <img id="image-preview" src="../../public/assets/img/simbolo-de-interface-de-pasta-de-upload.png" class="w-100 h-100" />
              <i class="bi bi-cloud-arrow-up"></i>
              <input id="image-field" type="file" />
            </div>
          </form>
        </div>

        <script src="../../public/assets/js/perfil.js"></script>
      </div>

      <div id="none">
        <p id="nNome">Nome Cuidador</p>
        <p id="nCadastro">Cadastro: 0000000</p>
      </div>
    </header>

    <!--Principal-->
    <main>
      <a href="InfoCuidador.html">
        <div class="box">
          <div class="icons">
            <span class="material-icons">edit</span>
          </div>
          <p>Adicionar Informações</p>
        </div>
      </a>

      <a href="RelatorioCuidador.html">
        <div class="box">
          <div class="icons">
            <span class="material-icons">summarize</span>
          </div>
          <p>Relatório Diário</p>
        </div></a
      >

      <a href="ContratosCuidador.html"
        ><div class="box">
          <div class="icons">
            <span class="material-icons">payment</span>
          </div>
          <p>Contratos</p>
        </div></a
      >

      <a href="ExtratoCuidador.html">
        <div class="box">
          <div class="icons">
            <span class="material-icons">receipt</span>
          </div>
          <p>Extratos</p>
        </div></a
      >

      <a href="Agenda.html"
        ><div class="box">
          <div class="icons">
            <span class="material-icons">calendar_month</span>
          </div>
          <p>Agenda</p>
        </div></a
      >

      <a href="../views/LoginCuidador.html">
        <div class="box">
          <div class="icons">
            <span class="material-icons">logout</span>
          </div>
          <p>Sair</p>
        </div>
      </a>
    </main>
  </body>
</html>
