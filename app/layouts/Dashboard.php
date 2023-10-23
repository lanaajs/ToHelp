<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="../../public/assets/js/Dashboard.js"></script>
    <link rel="stylesheet" href="../../public/assets/css/Dashboard.css">

    <title>Dashboard</title>
</head>

<body>
    <div class="logo">
        <img src="../../public/assets/img/LogoBranca.png" alt="">
    </div>
    <div class="tudo">

        <!--**************** MENU ********************-->

        <div class="menu">
            <div onclick="dashboard()" class="menu-item">
                <p>Dashboard</p>
                <span class="material-icons menuu">space_dashboard</span>
            </div>
            <div onclick="contratantes()" class="menu-item">
                <p>Contratantes</p>
                <span class="material-icons menuu">groups</span>
            </div>
            <div id="opcao1" class="opcao">
                <p onclick="infopescontr()">Informações Pessoais</p>
                <p onclick="endcontr()">Endereços</p>
                <p onclick="contratos()">Contratos</p>
                <p onclick="depcontr()">Dependentes</p>
                <p onclick="extratos()">Extratos</p>
                <p onclick="metpagcontr()">Métodos de Pagamento</p>
            </div>
            <div onclick="dependentes()" class="menu-item">
                <p>Dependentes</p>
                <span class="material-icons menuu">assist_walker</span>
            </div>
            <div id="opcao2" class="opcao">
                <p onclick="infopesdep()">Informações Pessoais</p>
                <p onclick="infomeddep()">Informações Médicas</p>
                <p onclick="enddep()">Endereços</p>
                <p onclick="relatorios()">Relatórios</p>
                <p onclick="medicamentos()">Medicamentos</p>
            </div>
            <div onclick="cuidadores()" class="menu-item">
                <p>Cuidadores</p>
                <span class="material-icons menuu">
                    sports_kabaddi
                </span>
            </div>
            <div id="opcao3" class="opcao">
                <p onclick="infopescuid()">Informações Pessoais</p>
                <p onclick="endcuid()">Endereços</p>
                <p onclick="infocur()">Informações Curriculares</p>
                <p onclick="certificados()">Certificados</p>
                <p onclick="extratos()">Extratos</p>
            </div>
            <div class="menu-item" onclick="sair()">
                <p onclick="sair()">SAIR</p>
                <span class="material-icons menuu">exit_to_app</span>
            </div>
        </div>

        <!--**************** INFORMAÇÕES DO DASHBOARD ********************-->

        <div id="infodash" class="infos">
            <div class="info1">
                <div class="bloco">
                    <div class="titulobloco">
                        <p>Ganhos do dia</p>
                        <span class="material-icons">paid</span>
                    </div>
                    <div id="ganhodia" class="texto">R$2.000</div>
                </div>
                <div class="bloco">
                    <div class="titulobloco">
                        <p>Ganhos do mês</p>
                        <span class="material-icons">savings</span>
                    </div>
                    <div id="ganhomes" class="texto">R$2.000</div>
                </div>
            </div>
            <div class="info2">
                <div class="bloco">
                    <div class="titulobloco">
                        <p>Ganhos totais</p>
                        <span class="material-icons">currency_exchange</span>
                    </div>
                    <div id="ganhototal" class="texto">R$2.000</div>
                </div>
                <div class="bloco">
                    <div class="titulobloco">
                        <p>Quantidade de contratos</p>
                        <span class="material-icons">receipt_long</span>
                    </div>
                    <div id="qtdcontratos" class="texto dif">789</div>
                </div>
            </div>
            <div class="info3">
                <div class="bloco">
                    <div class="titulobloco">
                        <p>Quantidade de contratantes</p>
                        <span class="material-icons">groups</span>
                    </div>
                    <div id="qtdcontratantes" class="texto dif">235</div>
                </div>
                <div class="bloco">
                    <div class="titulobloco">
                        <p>Quantidade de cuidadores</p>
                        <span class="material-icons">sports_kabaddi</span>
                    </div>
                    <div id="qtdcuidadores" class="texto dif">127</div>
                </div>
            </div>

            <div class="info4">
                <div class="bloco">
                    <div class="titulobloco">
                        <p>Quantidade de dependentes</p>
                        <span class="material-icons">assist_walker</span>
                    </div>
                    <div id="qtddependentes" class="texto dif">525</div>
                </div>
            </div>
        </div>

        <!-- **************** INFORMAÇÕES PESSOAIS DOS CONTRATANTES **************** -->

        <div id="infocontr" class="infos">
            <div class="container mt-3">
                <div class="datagrid">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nome</th>
                                <th>Sobrenome</th>
                                <th>CPF</th>
                                <th>RG</th>
                                <th>Data de Nascimento</th>
                                <th>Email</th>
                                <th>Celular</th>
                                <th>Gênero</th>
                                <th>Senha</th>
                                <th>Data de Cadastro</th>
                                <th>Tipo de Contratante</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                        <tbody>
                            <?php

                            use classes\Database;

                            require_once "../../classes/Database.php";

                            // Criar uma conexão com o banco de dados
                            $database = new Database();

                            // Executar a consulta SQL
                            $contratantes = $database->select("SELECT * FROM infoContratante");

                            // Convertir o resultado da consulta SQL em um array
                            $contratantes = array_values($contratantes);

                            // Iterar pelos resultados e exibir os dados na tabela
                            foreach ($contratantes as $contratante) {
                                echo "<tr>
                                        <td>{$contratante->id}</td>
                                        <td>{$contratante->nome_contr}</td>
                                        <td>{$contratante->sobrenome_contr}</td>
                                        <td>{$contratante->CPF_contr}</td>
                                        <td>{$contratante->RG_contr}</td>
                                        <td>{$contratante->dt_nasc}</td>
                                        <td>{$contratante->email_contr}</td>
                                        <td>{$contratante->celular_contr}</td>
                                        <td>{$contratante->genero}</td>
                                        <td>{$contratante->senha_contr}</td>
                                        <td>{$contratante->dt_cadastro}</td>
                                        <td>{$contratante->tipo_contr}</td>
                                    </tr>";
                            }
                            $database->desligar();

                            ?>
                        </tbody>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- **************** ENDEREÇOS DOS CONTRATANTES **************** -->

        <div id="endcontr" class="infos endcont">
            <div class="container mt-3">
                <div class="datagrid">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Id Contratante</th>
                                <th>CEP</th>
                                <th>Estado</th>
                                <th>Cidade</th>
                                <th>Número</th>
                                <th>Complemento</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                        <tbody>
                            <?php

                            require_once "../../classes/Database.php";

                            // Criar uma conexão com o banco de dados
                            $database = new Database();

                            foreach ($contratantes as $contratante) { //Limpa o array antes da nova consulta
                                unset($contratante);
                            }

                            // Executar a consulta SQL
                            $contratantes = $database->select("SELECT * FROM enderecoContratante");

                            // Convertir o resultado da consulta SQL em um array
                            $contratantes = array_values($contratantes);

                            // Iterar pelos resultados e exibir os dados na tabela
                            foreach ($contratantes as $contratante) {
                                echo "<tr>
                                        <td>{$contratante->id}</td>
                                        <td>{$contratante->id_contr_FK}</td>
                                        <td>{$contratante->CEP_contr}</td>
                                        <td>{$contratante->estado_contr}</td>
                                        <td>{$contratante->cidade_contr}</td>
                                        <td>{$contratante->numero_contr}</td>
                                        <td>{$contratante->complemento_contr}</td>   
                                    </tr>";
                            }

                            $database->desligar();

                            ?>
                        </tbody>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- **************** CONTRATOS **************** -->

        <div id="contratos" class="infos">
            <div class="container mt-3">
                <div class="datagrid">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Id Contratante</th>
                                <th>Id Cuidador</th>
                                <th>Id Dependente</th>
                                <th>Data de Emissão</th>
                                <th>Data Início do Contr.</th>
                                <th>Data Fim do Contr.</th>
                                <th>Hora Início do Contr.</th>
                                <th>Hora Fim do Contr.</th>
                                <th>Subtotal</th>
                                <th>Total</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                        <tbody>
                            <?php

                            require_once "../../classes/Database.php";

                            // Cria uma conexão com o banco de dados
                            $database = new Database();

                            foreach ($contratantes as $contratante) { //Limpa o array antes da nova consulta
                                unset($contratante);
                            }
                            // Executa a consulta SQL
                            $contratantes = $database->select("SELECT * FROM contratos");

                            // Converte o resultado da consulta SQL em um array
                            $contratantes = array_values($contratantes);

                            // Itera pelos resultados e exibir os dados na tabela
                            foreach ($contratantes as $contratante) {
                                echo "<tr>
                                        <td>{$contratante->id}</td>
                                        <td>{$contratante->id_contr_FK}</td>
                                        <td>{$contratante->id_cuid_FK}</td>
                                        <td>{$contratante->id_dep_FK}</td>
                                        <td>{$contratante->dt_emissao}</td>
                                        <td>{$contratante->dt_inicio}</td>
                                        <td>{$contratante->dt_fim}</td>
                                        <td>{$contratante->horario_inicio}</td>
                                        <td>{$contratante->horario_fim}</td>
                                        <td>{$contratante->subtotal}</td>
                                        <td>{$contratante->total}</td>
                                        <td>{$contratante->status_contrato}</td>
                                        </td>
                                    </tr>";
                            }

                            $database->desligar();

                            ?>
                        </tbody>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- **************** DEPENDENTES DOS CONTRATANTES **************** -->

        <div id="depcontr" class="infos">
            <div class="container mt-3">
                <div class="datagrid">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Id Contratante</th>
                                <th>CPF Contratante</th>
                                <th>Nome Contratante</th>
                                <th>Sobrenome Contratante</th>
                                <th>Id Dependente</th>
                                <th>CPF Dependente</th>
                                <th>Nome Dependente</th>
                                <th>Sobrenome Dependente</th>
                        </thead>
                        <tbody>
                            <tr>
                        <tbody>
                            <?php

                            require_once "../../classes/Database.php";

                            // Cria uma conexão com o banco de dados
                            $database = new Database();

                            // Executa a consulta SQL
                            $contratantes = $database->select("SELECT * FROM dependente_contratante");

                            // Converte o resultado da consulta SQL em um array
                            $contratantes = array_values($contratantes);

                            // Itera pelos resultados e exibir os dados na tabela
                            foreach ($contratantes as $contratante) {
                                echo "<tr>
                                        <td>{$contratante->ID_Contratante}</td>
                                        <td>{$contratante->CPF_Contratante}</td>
                                        <td>{$contratante->Nome_Contratante}</td>
                                        <td>{$contratante->Sobrenome_Contratante}</td>
                                        <td>{$contratante->ID_Dependente}</td>
                                        <td>{$contratante->CPF_Dependente}</td>
                                        <td>{$contratante->Nome_Dependente}</td>
                                        <td>{$contratante->Sobrenome_Dependente}</td>
                                    </tr>";
                            }
                            ?>
                        </tbody>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- **************** EXTRATOS DOS CONTRATANTES **************** -->

        <div id="extrcontr" class="infos">
            <div class="container mt-3">
                <div class="datagrid">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Subtotal</th>
                                <th>Total</th>
                                <th>Id Cuidador</th>
                                <th>Id Contratante</th>
                                <th>Data de Emissão</th>
                        </thead>
                        <tbody>
                            <tr>
                        <tbody>
                            <?php

                            require_once "../../classes/Database.php";

                            // Cria uma conexão com o banco de dados
                            $database = new Database();

                            foreach ($contratantes as $contratante) { //Limpa o array antes da nova consulta
                                unset($contratante);
                            }
                            // Executa a consulta SQL
                            $contratantes = $database->select("SELECT * FROM extratos");

                            // Converte o resultado da consulta SQL em um array
                            $contratantes = array_values($contratantes);

                            // Itera pelos resultados e exibir os dados na tabela
                            foreach ($contratantes as $contratante) {
                                echo "<tr>
                                        <td>{$contratante->id}</td>
                                        <td>{$contratante->subtotal}</td>
                                        <td>{$contratante->total}</td>
                                        <td>{$contratante->id_cuid_FK}</td>
                                        <td>{$contratante->id_contr_FK}</td>
                                        <td>{$contratante->dt_emissao}</td>
                                        </td>
                                    </tr>";
                            }
                            ?>
                        </tbody>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- **************** MÉTODOS DE PAGAMENTO DOS CONTRATANTES **************** -->

        <div id="metpagcontr" class="infos">
            <div class="container mt-3">
                <div class="datagrid">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Id Contratante</th>
                                <th>Número do Cartão</th>
                                <th>Nome no Cartão</th>
                                <th>Validade</th>
                                <th>CVV</th>
                        </thead>
                        <tbody>
                            <tr>
                        <tbody>
                            <?php

                            require_once "../../classes/Database.php";

                            // Cria uma conexão com o banco de dados
                            $database = new Database();

                            foreach ($contratantes as $contratante) { //Limpa o array antes da nova consulta
                                unset($contratante);
                            }
                            // Executa a consulta SQL
                            $contratantes = $database->select("SELECT * FROM metodoPagamento");

                            // Converte o resultado da consulta SQL em um array
                            $contratantes = array_values($contratantes);

                            // Itera pelos resultados e exibir os dados na tabela
                            foreach ($contratantes as $contratante) {
                                echo "<tr>
                                        <td>{$contratante->id}</td>
                                        <td>{$contratante->id_contr_FK}</td>
                                        <td>{$contratante->numero_cartao}</td>
                                        <td>{$contratante->nome_cartao}</td>
                                        <td>{$contratante->validade}</td>
                                        <td>{$contratante->cvv}</td>
                                        </td>
                                    </tr>";
                            }
                            ?>
                        </tbody>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- **************** INFORMAÇÕES PESSOAIS DOS DEPENDENTES **************** -->

        <div id="infodep" class="infos">
            <div class="container mt-3">
                <div class="datagrid">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>CPF</th>
                                <th>Nome</th>
                                <th>Sobrenome</th>
                                <th>Data de Nasc.</th>
                                <th>Telefone</th>
                                <th>Parentesco do Resp.</th>
                                <th>Id Contratante</th>
                                <th>Data de Cadastro</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                        <tbody>
                            <?php
                            //use classes\Database;

                            require_once "../../classes/Database.php";

                            // Criar uma conexão com o banco de dados
                            $database = new Database();

                            // Executar a consulta SQL
                            $dependentes = $database->select("SELECT * FROM infoDependente");

                            // Convertir o resultado da consulta SQL em um array
                            $dependentes = array_values($dependentes);

                            // Iterar pelos resultados e exibir os dados na tabela
                            foreach ($dependentes as $dependente) {
                                echo "<tr>
                                        <td>{$dependente->id}</td>
                                        <td>{$dependente->CPF_dep}</td>
                                        <td>{$dependente->nome_dep}</td>
                                        <td>{$dependente->sobrenome_dep}</td>
                                        <td>{$dependente->dtnasc_dep}</td>
                                        <td>{$dependente->telefone_dep}</td>
                                        <td>{$dependente->parentesco}</td>
                                        <td>{$dependente->id_contr_FK}</td>
                                        <td>{$dependente->dt_cadastro_dep}</td>
                                        <td>
                                            <a class='btn btn-success' href='#'>Editar</a>      
                                            <a class='btn btn-danger' href='#'>Excluir</a>      
                                        </td>
                                    </tr>";
                            }
                            ?>
                        </tbody>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- **************** INFORMAÇÕES MÉDICAS DOS DEPENDENTES **************** -->
        <div id="infomeddep" class="infos">
            <div class="container mt-3">
                <div class="datagrid">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Comorbidades</th>
                                <th>Alergias</th>
                                <th>Rotina</th>
                                <th>id Dependente</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                        <tbody>
                            <?php
                            //use classes\Database;

                            require_once "../../classes/Database.php";

                            // Criar uma conexão com o banco de dados
                            $database = new Database();

                            // Executar a consulta SQL
                            $dependentes = $database->select("SELECT * FROM infomeddependente");

                            // Convertir o resultado da consulta SQL em um array
                            $dependentes = array_values($dependentes);

                            // Iterar pelos resultados e exibir os dados na tabela
                            foreach ($dependentes as $dependente) {
                                echo "<tr>
                                        <td>{$dependente->id}</td>
                                        <td>{$dependente->comorbidades_dep}</td>
                                        <td>{$dependente->alergias_dep}</td>
                                        <td>{$dependente->rotina_dep}</td>
                                        <td>{$dependente->id_dep_FK}</td>
                                        <td>
                                            <a class='btn btn-success' href='#'>Editar</a>      
                                            <a class='btn btn-danger' href='#'>Excluir</a>      
                                        </td>
                                    </tr>";
                            }
                            ?>
                        </tbody>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- **************** ENDEREÇOS DOS DEPENDENTES **************** -->
        <div id="enddep" class="infos enddep">
            <div class="container mt-3">
                <div class="datagrid">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Id Dependente</th>
                                <th>CEP</th>
                                <th>Estado</th>
                                <th>Cidade</th>
                                <th>Número</th>
                                <th>Complemento</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                        <tbody>
                            <?php

                            require_once "../../classes/Database.php";

                            // Criar uma conexão com o banco de dados
                            $database = new Database();

                            foreach ($dependentes as $dependente) { //Limpa o array antes da nova consulta
                                unset($dependente);
                            }

                            // Executar a consulta SQL
                            $dependentes = $database->select("SELECT * FROM enderecodependente");

                            // Convertir o resultado da consulta SQL em um array
                            $dependentes = array_values($dependentes);

                            // Iterar pelos resultados e exibir os dados na tabela
                            foreach ($dependentes as $dependente) {
                                echo "<tr>
                                        <td>{$dependente->id}</td>
                                        <td>{$dependente->id_dep_FK}</td>
                                        <td>{$dependente->CEP_dep}</td>
                                        <td>{$dependente->estado_dep}</td>
                                        <td>{$dependente->cidade_dep}</td>
                                        <td>{$dependente->numero_dep}</td>
                                        <td>{$dependente->complemento_dep}</td>   
                                    </tr>";
                            }

                            $database->desligar();

                            ?>
                        </tbody>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- **************** RELATÓRIOS DOS DEPENDENTES **************** -->
        <div id="relatorios" class="infos">
            <div class="container mt-3">
                <div class="datagrid">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Id Contrato</th>
                                <th>Id Contratante</th>
                                <th>Id Dependente</th>
                                <th>Id Cuidador</th>
                                <th>Anotações</th>
                                <th>Data de Emissão</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                        <tbody>
                            <?php

                            require_once "../../classes/Database.php";

                            // Criar uma conexão com o banco de dados
                            $database = new Database();

                            foreach ($dependentes as $dependente) { //Limpa o array antes da nova consulta
                                unset($dependente);
                            }

                            // Executar a consulta SQL
                            $dependentes = $database->select("SELECT * FROM relatorios");

                            // Convertir o resultado da consulta SQL em um array
                            $dependentes = array_values($dependentes);

                            // Iterar pelos resultados e exibir os dados na tabela
                            foreach ($dependentes as $dependente) {
                                echo "<tr>
                                        <td>{$dependente->id}</td>
                                        <td>{$dependente-> contrato_id_FK}</td>
                                        <td>{$dependente-> id_contr_FK}</td>
                                        <td>{$dependente->id_dep_FK}</td>
                                        <td>{$dependente-> id_cuid_FK}</td>
                                        <td>{$dependente->anotacoes}</td>
                                        <td>{$dependente-> dt_emissao}</td>   
                                    </tr>";
                            }

                            $database->desligar();

                            ?>
                        </tbody>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- **************** MEDICAMENTOS DOS DEPENDENTES **************** -->
        <div id="medicamentos" class="infos">
            <div class="container mt-3">
                <div class="datagrid">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nome</th>
                                <th>Hora</th>
                                <th>Dia</th>
                                <th>Id Dependente</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                        <tbody>
                            <?php

                            require_once "../../classes/Database.php";

                            // Criar uma conexão com o banco de dados
                            $database = new Database();

                            foreach ($dependentes as $dependente) { //Limpa o array antes da nova consulta
                                unset($dependente);
                            }

                            // Executar a consulta SQL
                            $dependentes = $database->select("SELECT * FROM medicamentosdependente");

                            // Convertir o resultado da consulta SQL em um array
                            $dependentes = array_values($dependentes);

                            // Iterar pelos resultados e exibir os dados na tabela
                            foreach ($dependentes as $dependente) {
                                echo "<tr>
                                        <td>{$dependente->id}</td>
                                        <td>{$dependente->  nomeMed}</td>
                                        <td>{$dependente->  horaMed}</td>
                                        <td>{$dependente-> diaMed}</td>
                                        <td>{$dependente->  id_dep_FK}</td>
                                    </tr>";
                            }

                            $database->desligar();

                            ?>
                        </tbody>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        
        <!-- **************** INFORMAÇÕES PESSOAIS DOS CUIDADORES **************** -->

        <div id="infocuid" class="infos">
            <div class="container mt-3">
                <div class="datagrid">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nome</th>
                                <th>Sobrenome</th>
                                <th>CPF</th>
                                <th>RG</th>
                                <th>Data de Nascimento</th>
                                <th>Email</th>
                                <th>Celular</th>
                                <th>Gênero</th>
                                <th>Senha</th>
                                <th>Data de Cadastro
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                        <tbody>
                            <?php

                            require_once "../../classes/Database.php";

                            // Criar uma conexão com o banco de dados
                            $database = new Database();

                            // Executar a consulta SQL
                            $cuidadores = $database->select("SELECT * FROM infocuidador");

                            // Convertir o resultado da consulta SQL em um array
                            $cuidadores = array_values($cuidadores);

                            // Iterar pelos resultados e exibir os dados na tabela
                            foreach ($cuidadores as $cuidador) {
                                echo "<tr>
                                        <td>{$cuidador->id}</td>
                                        <td>{$cuidador->nome_cuid}</td>
                                        <td>{$cuidador->sobrenome_cuid}</td>
                                        <td>{$cuidador->CPF_cuid}</td>
                                        <td>{$cuidador->RG_cuid}</td>
                                        <td>{$cuidador->dt_nasc}</td>
                                        <td>{$cuidador->email_cuid}</td>
                                        <td>{$cuidador->celular_cuid}</td>
                                        <td>{$cuidador->genero}</td>
                                        <td>{$cuidador->senha_cuid}</td>
                                        <td>{$cuidador->dt_cadastro}</td>
                                    </tr>";
                            }
                            $database->desligar();

                            ?>
                        </tbody>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- **************** ENDEREÇOS DOS CUIDADORES **************** -->

        <div id="endcuid" class="infos endcuid">
            <div class="container mt-3">
                <div class="datagrid">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Id Cuidador</th>
                                <th>CEP</th>
                                <th>Estado</th>
                                <th>Cidade</th>
                                <th>Número</th>
                                <th>Complemento</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                        <tbody>
                            <?php

                            require_once "../../classes/Database.php";

                            // Criar uma conexão com o banco de dados
                            $database = new Database();

                            foreach ($cuidadores as $cuidador) { //Limpa o array antes da nova consulta
                                unset($contratante);
                            }

                            // Executar a consulta SQL
                            $cuidadores = $database->select("SELECT * FROM enderecocuidador");

                            // Convertir o resultado da consulta SQL em um array
                            $cuidadores = array_values($cuidadores);

                            // Iterar pelos resultados e exibir os dados na tabela
                            foreach ($cuidadores as $cuidador) {
                                echo "<tr>
                                        <td>{$cuidador->id}</td>
                                        <td>{$cuidador->infoCuidador_id}</td>
                                        <td>{$cuidador->CEP_cuid}</td>
                                        <td>{$cuidador->estado_cuid}</td>
                                        <td>{$cuidador->cidade_cuid}</td>
                                        <td>{$cuidador->numero_cuid}</td>
                                        <td>{$cuidador->complemento_cuid}</td>   
                                    </tr>";
                            }

                            $database->desligar();

                            ?>
                        </tbody>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- **************** INFORMAÇÕES CURRICULARES DOS CUIDADORES **************** -->

        <div id="infocur" class="infos">
            <div class="container mt-3">
                <div class="datagrid">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Id Cuidador</th>
                                <th>Frente do RG</th>
                                <th>Verso do RG</th>
                                <th>Currículo</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                        <tbody>
                            <?php

                            require_once "../../classes/Database.php";

                            // Criar uma conexão com o banco de dados
                            $database = new Database();

                            foreach ($cuidadores as $cuidador) { //Limpa o array antes da nova consulta
                                unset($contratante);
                            }

                            // Executar a consulta SQL
                            $cuidadores = $database->select("SELECT * FROM infocurricular");

                            // Convertir o resultado da consulta SQL em um array
                            $cuidadores = array_values($cuidadores);

                            // Iterar pelos resultados e exibir os dados na tabela
                            foreach ($cuidadores as $cuidador) {
                                echo "<tr>
                                        <td>{$cuidador->id}</td>
                                        <td>{$cuidador->id_cuid_FK}</td>
                                        <td>{$cuidador->rg_frente}</td>
                                        <td>{$cuidador->rg_verso}</td>
                                        <td>{$cuidador->curriculo}</td>
                                    </tr>";
                            }

                            $database->desligar();

                            ?>
                        </tbody>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- **************** CERTIFICADOS DOS CUIDADORES **************** -->

        <div id="certificados" class="infos">
            <div class="container mt-3">
                <div class="datagrid">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Id Cuidador</th>
                                <th>Certificados</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                        <tbody>
                            <?php

                            require_once "../../classes/Database.php";

                            // Criar uma conexão com o banco de dados
                            $database = new Database();

                            foreach ($cuidadores as $cuidador) { //Limpa o array antes da nova consulta
                                unset($contratante);
                            }

                            // Executar a consulta SQL
                            $cuidadores = $database->select("SELECT * FROM certificadoscuidador");

                            // Convertir o resultado da consulta SQL em um array
                            $cuidadores = array_values($cuidadores);

                            // Iterar pelos resultados e exibir os dados na tabela
                            foreach ($cuidadores as $cuidador) {
                                echo "<tr>
                                        <td>{$cuidador->id}</td>
                                        <td>{$cuidador->id_cuid}</td>
                                        <td>{$cuidador->certificado}</td>
                                    </tr>";
                            }

                            $database->desligar();

                            ?>
                        </tbody>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- **************** EXTRATOS DOS CONTRATANTES **************** -->

        <div id="extrcuid" class="infos">
            <div class="container mt-3">
                <div class="datagrid">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Subtotal</th>
                                <th>Total</th>
                                <th>Id Cuidador</th>
                                <th>Id Contratante</th>
                                <th>Data de Emissão</th>
                        </thead>
                        <tbody>
                            <tr>
                        <tbody>
                            <?php

                            require_once "../../classes/Database.php";

                            // Cria uma conexão com o banco de dados
                            $database = new Database();

                            foreach ($cuidadores as $cuidador) { //Limpa o array antes da nova consulta
                                unset($cuidador);
                            }
                            // Executa a consulta SQL
                            $cuidadores = $database->select("SELECT * FROM extratos");

                            // Converte o resultado da consulta SQL em um array
                            $cuidadores = array_values($cuidador);

                            // Itera pelos resultados e exibir os dados na tabela
                            foreach ($cuidadores as $cuidador) {
                                echo "<tr>
                                        <td>{$cuidador->id}</td>
                                        <td>{$cuidador->subtotal}</td>
                                        <td>{$cuidador->total}</td>
                                        <td>{$cuidador->id_cuid_FK}</td>
                                        <td>{$cuidador->id_contr_FK}</td>
                                        <td>{$cuidador->dt_emissao}</td>
                                        </td>
                                    </tr>";
                            }
                            ?>
                        </tbody>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</body>
</html>