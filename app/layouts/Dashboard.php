<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/Dashboard.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="../../../public/assets/js/Dashboard.js"></script>
    <link rel="stylesheet" href="../../../public/assets/css/Dashboard.css">

    <title>Dashboard</title>
</head>

<body>
    <div class="logo">
        <img src="./IMG/LogoBranca.png" alt="">
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
                <p onclick="depencontr()">Dependentes</p>
                <p onclick="extratos()">Extratos</p>
                <p onclick="metpagcontr()">Métodos de Pagamento</p>
            </div>
            <div onclick="dependentes()" class="menu-item">
                <p>Dependentes</p>
                <span class="material-icons menuu">assist_walker</span>
            </div>
            <div id="opcao2" class="opcao">
                <p onclick="infopesdep()">Informações Pessoais</p>
                <p>Informações Médicas</p>
                <p>Endereços</p>
                <p>Contratos</p>
                <p>Relatórios</p>
                <p>Medicamentos</p>
            </div>
            <div onclick="cuidadores()" class="menu-item">
                <p>Cuidadores</p>
                <span class="material-icons menuu">
                    sports_kabaddi
                </span>
            </div>
            <div id="opcao3" class="opcao">
                <p>Informações Pessoais</p>
                <p>Endereços</p>
                <p>Informações Curriculares</p>
                <p>Certificados</p>
                <p>Extratos</p>
            </div>
            <div class="menu-item">
                <p>SAIR</p>
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
                                <th>Email</th>
                                <th>Telefone</th>
                                <th>Senha</th>
                                <th>Data de Cadastro</th>
                                <th>Tipo de Contratante</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                        <tbody>
                            <?php

                            use classes\Database;

                            require_once "classes/Database.php";

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
                                        <td>{$contratante->CPF_contr}</td>
                                        <td>{$contratante->nome_contr}</td>
                                        <td>{$contratante->sobrenome_contr}</td>
                                        <td>{$contratante->email_contr}</td>
                                        <td>{$contratante->telefone}</td>
                                        <td>{$contratante->senha_contr}</td>
                                        <td>{$contratante->dt_cadastro}</td>
                                        <td>{$contratante->tipo_contr}</td>
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

        <!-- **************** ENDEREÇOS DOS CONTRATANTES **************** -->

        <div id="endcontr" class="infos">
            <div class="container mt-3">
                <div class="datagrid">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Id Contratante</th>
                                <th>Estado</th>
                                <th>Cidade</th>
                                <th>Endereço</th>
                                <th>Número</th>
                                <th>Complemento</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                        <tbody>
                            <?php

                            require_once "classes/Database.php";

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
                                        <td>{$contratante->estado_contr}</td>
                                        <td>{$contratante->cidade_contr}</td>
                                        <td>{$contratante->endereco_contr}</td>
                                        <td>{$contratante->numero_contr}</td>
                                        <td>{$contratante->complemento_contr}</td>
                                        <td>    
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

                            require_once "classes/Database.php";

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

                            ?>
                        </tbody>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- **************** FALTA FAZER NO BANCO A TABELA: DEPENDENTES DOS CONTRATANTES ****************

        <div id="depencontr" class="infos">
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

                            require_once "classes/Database.php";

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

                            ?>
                        </tbody>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div> -->

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

                            require_once "classes/Database.php";

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

                            require_once "classes/Database.php";

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

                            require_once "classes/Database.php";

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







    </div>
    </div>





</body>

</html>