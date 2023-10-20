<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link
      href="https://fonts.googleapis.com/css2?family=Archivo+Black&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@300&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Lily+Script+One&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"
    />

    <link
      rel="stylesheet"
      href="../../../public/assets/css/ContaContrante.css"
    />

    <link rel="stylesheet" href="../../../public/assets/css/ContaContrante.css">

    <link rel="icon" type="image/x-icon" href="../../public/assets/img/LogoPreta.png">

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
                    <img id="image-preview" src="../../public/assets/img/simbolo-de-interface-de-pasta-de-upload.png" class="w-100 h-100">
                    <i class="bi bi-cloud-arrow-up"></i>
                    <input id="image-field" type="file">
                </div>
            </form>
        </div>

        <script src="../../public/assets/js/perfil.js"></script>
      </div>

      <div id="none">
        <p id="nNome">Nome Contratante</p>
        <p id="nCadastro">Cadastro: 0000000</p>
      </div>
    </header>

    <!--Principal-->
    <main>
      <a href="InfoContratante.html">
        <div class="box">
          <div class="icons">
            <span class="material-icons">edit</span>
          </div>
          <p>Editar Informações</p>
        </div>
      </a>

      <a href="CadastrarDependente.html">
        <div class="box">
          <div class="icons">
            <span class="material-icons">people</span>
          </div>
          <p>Cadastrar Dependente</p>
        </div>
      </a>

      <a href="EditarInfoDependenteFechado.html">
        <div class="box">
          <div class="icons">
            <span class="material-icons">assignment_ind</span>
          </div>
          <p>Editar Informações do Dependente</p>
        </div>
      </a>

      <a href="RelatorioContratante.html">
        <div class="box">
          <div class="icons">
            <span class="material-icons">summarize</span>
          </div>
          <p>Relatório Diário</p>
        </div>
      </a>

      <a href="ContratosContratante.html">
        <div class="box">
          <div class="icons">
            <span class="material-icons">payment</span>
          </div>
          <p>Contratos</p>
        </div>
      </a>

      <a href="ExtratoContratante.html">
        <div class="box">
          <div class="icons">
            <span class="material-icons">receipt</span>
          </div>
          <p>Extrato</p>
        </div>
      </a>

      <a href="../views/LoginContratante.html">
        <div class="box">
          <div class="icons">
            <span class="material-icons">logout</span>
          </div>
          <p>Sair</p>
        </div>
      </a>

      <div id="encontrar">
        <a id="btn_encontrar" href="../views/BuscarCuidadores.html"
          >BUSCAR CUIDADORES<span class="material-icons">east</span></a
        >
      </div>
    </main>
  </body>
</html>