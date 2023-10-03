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
                <p>Informações Pessoais</p>
                <p>Endereços</p>
                <p>Contratos</p>
                <p>Dependentes</p>
                <p>Extratos</p>
                <p>Métodos de Pagamento</p>
            </div>
            <div onclick="dependentes()" class="menu-item">
                <p>Dependentes</p>
                <span class="material-icons menuu">assist_walker</span>
            </div>
            <div id="opcao2" class="opcao">
                <p>Informações Pessoais</p>
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
                            include "../../Config.php";
                            $sql = "select * from infoContratante";
                            $result = $conn->query($sql);
                            if (!$result) {
                                die("Invalid query!");
                            }
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>
                                    <td>$row[id]</th>
                                    <td>$row[nome_contr]</td>
                                    <td>$row[sobrenome_contr]</td>
                                    <td>$row[CPF_contr]</td>
                                    <td>$row[email_contr]</td>
                                    <td>$row[telefone]</td>
                                    <td>$row[senha_contr]</td>
                                    <td>$row[dt_cadastro]</td>
                                    <td>$row[tipo_contr]</td>
                                    <td>
                                    <a class='btn btn-success' href='#'>Editar</a>       
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