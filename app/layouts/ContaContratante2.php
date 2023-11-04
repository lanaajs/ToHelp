<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/assets/css/ContaContratante2.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

    <link rel="icon" type="image/x-icon" href="../../public/assets/img/LogoPreta.png">
    <title>ToHelp</title>
</head>

<body>
    <header id="cabecalho">

        <div id="logo">
            <img src="../../public/assets/img/LogoBranca.png" alt="">
        </div>

        <a id="linkperfil" href="#">
            <span class="material-symbols-outlined md-36">
                account_circle
            </span>
        </a>
    </header>
    
    <div class="container-xl px-4 mt-4">
        <!-- Account page navigation-->
        <nav class="nav nav-borders">
            <a class="nav-link active ms-0" href="#" id="perfil">Perfil</a>
            <a class="nav-link" href="#" id="pagamento">Pagamentos</a>
            <a class="nav-link" href="#">Dependentes</a>
            <a class="nav-link" href="#" id="notificacao">Notificações</a>
        </nav>
        <hr class="mt-0 mb-4">
        <div class="row" id="perfilSection">
            <div class="col-xl-4" > 
                <!-- Profile picture card-->
                <div class="card mb-4 mb-xl-0">
                    <div class="card-header">Foto de Perfil</div>
                    <div class="card-body text-center">
                        <!-- Profile picture image-->
                        <img class="img-account-profile rounded-circle mb-2" src="http://bootdey.com/img/Content/avatar/avatar1.png" alt="">
                        <!-- Profile picture help block-->
                        <div class="small font-italic text-muted mb-4">JPG ou PNG</div>
                        <!-- Profile picture upload button-->
                        <button class="btn btn-primary" type="button">Mudar Foto</button>
                    </div>
                </div>
            </div>
            <div class="col-xl-8">
                <!-- Account details card-->
                <div class="card mb-4">
                    <div class="card-header">Informações Pessoais</div>
                    <div class="card-body">
                        <form>
                            <!-- Form Group (username)-->
                            <!-- Form Row-->
                            <div class="row gx-3 mb-3">
                                <!-- Form Group (first name)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputFirstName">Nome</label>
                                    <input class="form-control" id="inputFirstName" type="text" placeholder="Insira seu primeiro nome">
                                </div>
                                <!-- Form Group (last name)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputLastName">Sobrenome</label>
                                    <input class="form-control" id="inputLastName" type="text" placeholder="Insira seu sobrenome">
                                </div>
                            </div>
                            <!-- Form Row        -->
                            <div class="row gx-3 mb-3">
                                <!-- Form Group (organization name)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputOrgName">CPF</label>
                                    <input class="form-control" id="inputOrgName" type="text" placeholder="Insira seu CPF" >
                                </div>
                                <!-- Form Group (location)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputLocation">RG</label>
                                    <input class="form-control" id="inputLocation" type="text" placeholder="Insira seu RG" >
                                </div>
                            </div>
                            <!-- Form Group (email address)-->
                            <div class="mb-3">
                                <label class="small mb-1" for="inputEmailAddress">Email</label>
                                <input class="form-control" id="inputEmailAddress" type="email" placeholder="Insira um email">
                            </div>
                            <!-- Form Row-->
                            <div class="row gx-3 mb-3">
                                <!-- Form Group (phone number)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputPhone">Celular</label>
                                    <input class="form-control" id="inputPhone" type="tel" placeholder="xx x xxxx-xxxx">
                                </div>
                                <!-- Form Group (birthday)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputBirthday">Data de Nascimento</label>
                                    <input class="form-control" id="inputBirthday" type="date">
                                </div>
                            </div>
                            <div class="row gx-3 mb-3">
                                <!-- Form Group (gender)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="genero">Gênero</label>
                                    <select name="select" class="form-control" id="genero">
                                        <option value="valor0" selected></option>
                                        <option value="valor1">Masculino</option>
                                        <option value="valor2">Feminino</option>
                                        <option value="valor3">Não Binário</option>
                                    </select>
                                </div>
                                <!-- Form Group (cep)-->
                            </div>
                            <div class="row gx-3 mb-3">
                                <div class="col-md-6">
                                    <label class="small mb-1" for="cep">CEP</label>
                                    <input class="form-control" id="cep" type="tel" placeholder="Insira seu CEP">
                                </div>
                                <div class="col-md-6">
                                    <label class="small mb-1" for="estado">Estado</label>
                                    <input class="form-control" id="estado" type="tel" placeholder="Insira seu estado">
                                </div>
                            </div>

                            <div class="row gx-3 mb-3">
                                <div class="col-md-6">
                                    <label class="small mb-1" for="cidade">Cidade</label>
                                    <input class="form-control" id="cidade" type="text" placeholder="Insira sua cidade">
                                </div>
                                <div class="col-md-6">
                                    <label class="small mb-1" for="bairro">Bairro</label>
                                    <input class="form-control" id="bairro" type="tel" placeholder="Insira seu bairro">
                                </div>

                            </div>
                            <div class="mb-3">
                                <label class="small mb-1" for="endereco">Endereço</label>
                                <input class="form-control" id="endereco" type="text" placeholder="Insira seu endereço">
                            </div>
                            <div class="mb-3">
                                <label class="small mb-1" for="complemento">Complemento</label>
                                <input class="form-control" id="complemento" type="text" placeholder="Insira um complemento">
                            </div>
                            <!-- Save changes button-->
                            <button class="btn btn-primary" type="button">SALVAR</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="row" id="perfilSection2">
            <div class="col-xl-4" > 
            </div>

            <div class="col-xl-8" id="card_senha"> 
                <div class="card mb-4">
                    <div class="card-header">Alterar Senha</div>
                    <div class="card-body">
                        <form>
                            <!-- Form Group (current password)-->
                            <div class="mb-3">
                                <label class="small mb-1" for="currentPassword">Senha Atual</label>
                                <input class="form-control" id="currentPassword" type="password" placeholder="Escreva a senha atual">
                            </div>
                            <!-- Form Group (new password)-->
                            <div class="mb-3">
                                <label class="small mb-1" for="newPassword">Nova Senha</label>
                                <input class="form-control" id="newPassword" type="password" placeholder="Escreva uma senha nova">
                            </div>
                            <!-- Form Group (confirm password)-->
                            <div class="mb-3">
                                <label class="small mb-1" for="confirmPassword">Confirme a Nova Senha</label>
                                <input class="form-control" id="confirmPassword" type="password" placeholder="Confirme a senha nova">
                            </div>
                            <button class="btn btn-primary" type="button">SALVAR</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- PAGAMENTO------------------------------------------------------------------------------------------------- -->

    <div class="container-xl px-4 mt-4" id="pagamentoSection">
    
    <!-- Payment methods card-->
    <div class="card card-header-actions mb-4" >
        <div class="card-header">
            Métodos de Pagamento
            <a href="/contratante/novocartao"><button class="btn btn-sm btn-primary" type="button">Adicionar</button></a>
        </div>
        <div class="card-body px-0">
            <!-- Payment method 1-->
            <div class="d-flex align-items-center justify-content-between px-4">
                <div class="d-flex align-items-center">
                <img src="../../public/assets/img/bytesize_creditcard.png" alt="imagemcartao">
                    <div class="ms-4">
                        <div class="small">Visa - 1234</div>
                        <div class="text-xs text-muted">Vencimento 04/2024</div>
                    </div>
                </div>
                <div class="ms-4 small">
                    <div class="badge bg-light text-dark me-3">Padrão</div>
                    <a href="#!">Editar</a>
                </div>
            </div>
            <hr>
            <!-- Payment method 2-->
            <div class="d-flex align-items-center justify-content-between px-4">
                <div class="d-flex align-items-center">
                <img src="../../public/assets/img/bytesize_creditcard.png" alt="imagemcartao">
                    <div class="ms-4">
                        <div class="small">Mastercard - 5678</div>
                        <div class="text-xs text-muted">Vencimento 05/2022</div>
                    </div>
                </div>
                <div class="ms-4 small">
                    <a class="text-muted me-3" href="#!">Tornar Padrão</a>
                    <a href="#!">Editar</a>
                </div>
            </div>
            <hr>
            <!-- Payment method 3-->
            <div class="d-flex align-items-center justify-content-between px-4">
                <div class="d-flex align-items-center">
                <img src="../../public/assets/img/bytesize_creditcard.png" alt="imagemcartao">
                    <div class="ms-4">
                        <div class="small">American Express - 9012</div>
                        <div class="text-xs text-muted">Vencimento 01/2026</div>
                    </div>
                </div>
                <div class="ms-4 small">
                    <a class="text-muted me-3" href="#!">Tornar Padrão</a>
                    <a href="#!">Editar</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Billing history card-->
    <div class="card mb-4">
        <div class="card-header">Extrato de Contratos</div>
        <div class="card-body p-0">
            <!-- Billing history table-->
            <div class="table-responsive table-billing-history">
                <table class="table mb-0">
                    <thead>
                        <tr>
                            <th class="border-gray-200" scope="col">Cuidador</th>
                            <th class="border-gray-200" scope="col">Data</th>
                            <th class="border-gray-200" scope="col">Valor</th>
                            <th class="border-gray-200" scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Rose Maria</td>
                            <td>02/11/2023</td>
                            <td>R$240,00</td>
                            <td><span class="badge bg-light text-dark">Pending</span></td>
                        </tr>
                        <tr>
                            <td>Mariene Ferreira</td>
                            <td>12/05/2023</td>
                            <td>R$240,00</td>
                            <td><span class="badge bg-success">Paid</span></td>
                        </tr>
                        <tr>
                            <td>Jonas Marcos Silva</td>
                            <td>01/03/2023</td>
                            <td>R$240,00</td>
                            <td><span class="badge bg-success">Paid</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- NOTIFICAÇÃO------------------------------------------------------------------------------------------------- -->

<div class="container-xl px-4 mt-4" id="notificacaoSection">
        <div class="card card-header-actions mb-4">
            <!-- Email notifications preferences card-->
            <div class="card card-header-actions mb-4">
                <div class="card-header">
                    Notificações via E-Mail
                    <div class="form-check form-switch">
                        <input class="form-check-input" id="flexSwitchCheckChecked" type="checkbox" checked="">
                        <label class="form-check-label" for="flexSwitchCheckChecked"></label>
                    </div>
                </div>
                <div class="card-body">
                    <form>
                        <!-- Form Group (default email)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="inputNotificationEmail">E-Mail</label>
                            <input class="form-control" id="inputNotificationEmail" type="email" value="nome@exemplo.com" disabled="">
                        </div>
                        <!-- Form Group (email updates checkboxes)-->
                        <div class="mb-0">
                            <label class="small mb-2">Escolha quais tipos de atualizações por e-mail você deseja receber</label>
                            <div class="form-check mb-2">
                                <input class="form-check-input" id="checkAccountChanges" type="checkbox" checked="">
                                <label class="form-check-label" for="checkAccountChanges">Alterações feitas na sua conta</label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" id="checkAccountGroups" type="checkbox" checked="">
                                <label class="form-check-label" for="checkAccountGroups">Alertas de segurança</label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" id="checkProductUpdates" type="checkbox" checked="">
                                <label class="form-check-label" for="checkProductUpdates">Contratos Aceitos</label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" id="checkProductNew" type="checkbox" checked="">
                                <label class="form-check-label" for="checkProductNew">Recibos de Pagamentos Efetuados</label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" id="checkPromotional" type="checkbox">
                                <label class="form-check-label" for="checkPromotional">Atualização no Relatório Diário</label>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- SMS push notifications card-->
            <div class="card card-header-actions mb-4">
                <div class="card-header">
                    Notificações via Telefone
                    <div class="form-check form-switch">
                        <input class="form-check-input" id="smsToggleSwitch" type="checkbox" checked="">
                        <label class="form-check-label" for="smsToggleSwitch"></label>
                    </div>
                </div>
                <div class="card-body">
                    <form>
                        <!-- Form Group (default SMS number)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="inputNotificationSms">Número</label>
                            <input class="form-control" id="inputNotificationSms" type="tel" value="99 9-1234-5678" disabled="">
                        </div>
                        <!-- Form Group (SMS updates checkboxes)-->
                        <div class="mb-0">
                            <label class="small mb-2">Escolha quais tipos de atualizações por telefone você deseja receber</label>
                            <div class="form-check mb-2">
                                <input class="form-check-input" id="checkSmsComment" type="checkbox" checked="">
                                <label class="form-check-label" for="checkSmsComment">Mensagens de Emergência</label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" id="checkSmsShare" type="checkbox">
                                <label class="form-check-label" for="checkSmsShare">Disponibilidade de Cuidadores</label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" id="checkSmsFollow" type="checkbox" checked="">
                                <label class="form-check-label" for="checkSmsFollow">Mensagens da Plataforma</label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" id="checkSmsGroup" type="checkbox">
                                <label class="form-check-label" for="checkSmsGroup">Avaliação</label>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</div>

</body>

<script>
        // Perfil
        document.getElementById("perfil").addEventListener("click", function() {
            
            window.document.getElementById("pagamentoSection").style.display='none';
            window.document.getElementById("notificacaoSection").style.display='none';
            
            window.document.getElementById("perfilSection").style.display='flex';
            window.document.getElementById("perfilSection2").style.display='flex';

        });

        // Pagamentos
        document.getElementById("pagamento").addEventListener("click", function() {

            window.document.getElementById("perfilSection").style.display='none';
            window.document.getElementById("perfilSection2").style.display='none';
            window.document.getElementById("notificacaoSection").style.display='none';
            
            window.document.getElementById("pagamentoSection").style.display='block';

        });

        // Notificação
        document.getElementById("notificacao").addEventListener("click", function() {

            window.document.getElementById("perfilSection").style.display='none';
            window.document.getElementById("perfilSection2").style.display='none';
            window.document.getElementById("pagamentoSection").style.display='none';
            
            window.document.getElementById("notificacaoSection").style.display='block';

        });
    </script>

</html>