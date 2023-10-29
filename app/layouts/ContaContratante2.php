<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/assets/css/ContaContratante2.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

    <title>Document</title>
</head>

<body>
    <header id="cabecalho">

        <div id="logo">
            <img src="../../public/assets/img/LogoBranca.png" alt="">
        </div>

        <a id="linkperfil" href="/contratante/conta/1">
            <span class="material-symbols-outlined">
                account_circle
            </span>
        </a>
    </header>
    <div class="container-xl px-4 mt-4">
        <!-- Account page navigation-->
        <nav class="nav nav-borders">
            <a class="nav-link active ms-0" href="https://www.bootdey.com/snippets/view/bs5-edit-profile-account-details" target="__blank">Perfil</a>
            <a class="nav-link" href="https://www.bootdey.com/snippets/view/bs5-profile-billing-page" target="__blank">Pagamentos</a>
            <a class="nav-link" href="https://www.bootdey.com/snippets/view/bs5-profile-security-page" target="__blank">Segurança</a>
            <a class="nav-link" href="https://www.bootdey.com/snippets/view/bs5-edit-notifications-page" target="__blank">Notificações</a>
        </nav>
        <hr class="mt-0 mb-4">
        <div class="row">
            <div class="col-xl-4">
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
                                    <input class="form-control" id="inputOrgName" type="text" placeholder="Insira seu CPF" disabled>
                                </div>
                                <!-- Form Group (location)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputLocation">RG</label>
                                    <input class="form-control" id="inputLocation" type="text" placeholder="Insira seu RG" disabled>
                                </div>
                            </div>
                            <!-- Form Group (email address)-->
                            <div class="mb-3">
                                <label class="small mb-1" for="inputEmailAddress">Email address</label>
                                <input class="form-control" id="inputEmailAddress" type="email" placeholder="Insira um email">
                            </div>
                            <!-- Form Row-->
                            <div class="row gx-3 mb-3">
                                <!-- Form Group (phone number)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputPhone">Celular</label>
                                    <input class="form-control" id="inputPhone" type="tel" placeholder="Insira um telefone celular">
                                </div>
                                <!-- Form Group (birthday)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputBirthday">Data de Nascimento</label>
                                    <input class="form-control" id="inputBirthday" type="date" disabled>
                                </div>
                            </div>
                            <div class="row gx-3 mb-3">
                                <!-- Form Group (phone number)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputPhone">Gênero</label>
                                    <input class="form-control" id="inputPhone" type="tel" placeholder="Feminino" disabled>
                                </div>
                                <!-- Form Group (birthday)-->
                            </div>
                            <div class="row gx-3 mb-3">
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputPhone">CEP</label>
                                    <input class="form-control" id="inputPhone" type="tel" placeholder="Insira seu estado">
                                </div>
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputPhone">Estado</label>
                                    <input class="form-control" id="inputPhone" type="tel" placeholder="Insira seu estado">
                                </div>
                            </div>

                            <div class="row gx-3 mb-3">
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputBirthday">Cidade</label>
                                    <input class="form-control" id="inputBirthday" type="text" placeholder="Insira sua cidade">
                                </div>
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputPhone">Bairro</label>
                                    <input class="form-control" id="inputPhone" type="tel" placeholder="Insira seu bairro">
                                </div>

                            </div>
                            <div class="mb-3">
                                <label class="small mb-1" for="inputEmailAddress">Endereço</label>
                                <input class="form-control" id="inputEmailAddress" type="text" placeholder="Insira seu endereço">
                            </div>
                            <div class="mb-3">
                                <label class="small mb-1" for="inputEmailAddress">Complemento</label>
                                <input class="form-control" id="inputEmailAddress" type="text" placeholder="Insira um complemento">
                            </div>
                            <!-- Save changes button-->
                            <button class="btn btn-primary" type="button">SALVAR</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>