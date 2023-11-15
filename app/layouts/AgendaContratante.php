<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

    <link rel="stylesheet" href="../../../public/assets/css/AgendaCuidadores.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    
    <link rel="icon" type="image/x-icon" href="../../public/assets/img/LogoPreta.png">
    <title>ToHelp</title>
</head>

<body>

    

    <div id=pai>

        <div class="filho1">

            <header id="cabecalho">
                <h2>Buscar Cuidadores</h2>
                <div id="perfil">
                    <span class="material-icons">person</span>
                </div>
            </header>

            <div class="imagemP">
                <img class="foto_principal" src="../../public/assets/img/velhacoroca.jpeg" />
            </div>
            
            <div class="infosCuidador">
                <br>
                <h2>Maria Elizangela</h2>
                <p>Camaçari/BA</p>
                <br>
            </div>

            <div class="infosCuidador">
                <h2>R$ 64/hr <p class="transporte">+ Transporte</p></h2>
                <br>
                <p class="txtcuida">Como Cuidadora de Idosos, minhas qualidades profissionais são reforçadas por uma sólida
                    formação acadêmica e uma ampla gama de cursos relacionados à área. Sou graduada em Gerontologia, o que me
                    proporcionou um conhecimento aprofundado sobre o processo de envelhecimento e os cuidados específicos
                    necessários
                    para garantir a qualidade de vida dos idosos. Além disso, fiz cursos especializados em primeiros socorros,
                    administração de medicamentos, cuidados com a demência e habilidades de comunicação eficaz.</p>
            </div>

                
            <div class="infosCuidador">
                <br><br>
                <h2 class="contato">Contato do cuidador</h2>
                <br>
                <div class="caixa_num">
                    <p>(71) 98327-8890</p>
                    <img src="../../public/assets/img/whats.png">
                </div>
            </div>
        </div>

        <div class="filho2">
            <!-- Agenda -->
            <section class="area_agenda">
                <section id="agenda">
                    <section id="main">
                        <div class="wrapper">
                            <header>
                                <p class="dataAtual"></p>
                                <div class="icons">
                                    <span id="antes" class="material-symbols-rounded">chevron_left</span>
                                    <span id="depois" class="material-symbols-rounded">chevron_right</span>
                                </div>
                            </header>

                            <div class="calendario">
                                <ul class="semanas">
                                    <li><b>D</b></li>
                                    <li><b>S</b></li>
                                    <li><b>T</b></li>
                                    <li><b>Q</b></li>
                                    <li><b>Q</b></li>
                                    <li><b>S</b></li>
                                    <li><b>S</b></li>
                                </ul>
                                <ul class="dias"></ul>
                                <div id="infor">
                                    <span id="indQ" class="material-symbols-outlined">check_box_outline_blank</span>
                                    <p id="ind">Indisponível</p>
                                </div>
                            </div>
                        </div>
                    </section>
                </section>

                <div class="infosHorario">
                    <br><br>
                    <p id="p1">*Selecione os dias</p>
                    <br>
                    <section id="salvar">
                        <label for="horario">Horário</label>
                        <input type="time" name="horario" id="horario" onclick="notificacao()">
                    </section>

                    <div id="area">
                        <div id="blocoInfor">
                            <div id="bloco">
                                <p id="title">Resumo do Contrato</p>

                                <div class="hor">
                                    <p>Dia: 03-10-2023</p>
                                    <p id="hor1">Transporte:
                                    <div class="valor">A combinar</div>
                                    </p>
                                </div>
                                <div class="hor">
                                    <p>Horário: 22-24:00 </p>
                                    <p id="hor2">Valor:
                                    <div class="valor">R$ 128,00 + transporte</div>
                                    </p>
                                </div>
                            </div>


                        </div>

                        <div class="area-bloco">
                            <h4>Para quem é o serviço</h4>
                            <div class="box">
                                <h3>Nome do dependente 1</h3>
                                <p>Cadastro: P02300888</p>
                            </div>

                            <div class="box">
                                <h3>Nome do dependente 2</h3>
                                <p>Cadastro: P02300999</p>
                            </div>

                        </div>
                    </div>

                    <br><br>
                    <div id="btnContratar">
                        <input type="button" id="btncontratar_bloq" onclick="btnBloqueado()" value="CONTRATAR">
                        <input type="button" id="btncontratar_desbloq" onclick="btnDesbloqueado()" value="CONTRATAR">
                    </div>
                    
                </div>

                <script src="../../public/assets/js/Agenda.js"></script>
            </section>
        </div>
    </div>

    <div id="feed">
        <div class="avaliacoes">Avaliações do cuidador</div>
        <div class="av">
            <div class="nota">4.7</div>
            <ul class="avaliacao" id="nota">
                <li class="star-icon ativo" data-avaliacao="1"></li>
                <li class="star-icon" data-avaliacao="2"></li>
                <li class="star-icon" data-avaliacao="3"></li>
                <li class="star-icon" data-avaliacao="4"></li>
                <li class="star-icon" data-avaliacao="5"></li>
            </ul>
        </div>
        <section class="area_av">
            <div class="av">
                <ul class="avaliacao1" id="nota">
                    <li class="star-icon1 ativo" data-avaliacao="1"></li>
                    <li class="star-icon1" data-avaliacao="2"></li>
                    <li class="star-icon1" data-avaliacao="3"></li>
                    <li class="star-icon1" data-avaliacao="4"></li>
                    <li class="star-icon1" data-avaliacao="5"></li>
                </ul>
            </div>
            <img class="perfil_avaliacao1" src="https://via.placeholder.com/56x56" />
            <div class="grupo1">
                <div class="retangulo1">
                </div>
                <div class="av_txt1"> Caso o horário desejado
                    para cada dia seja diferente, é necessário reservar individualmente.</div>
            </div>
            <div class="av">
                <ul class="avaliacao1" id="nota">
                    <li class="star-icon1 ativo" data-avaliacao="1"></li>
                    <li class="star-icon1" data-avaliacao="2"></li>
                    <li class="star-icon1" data-avaliacao="3"></li>
                    <li class="star-icon1" data-avaliacao="4"></li>
                    <li class="star-icon1" data-avaliacao="5"></li>
                </ul>
            </div>
            <img class="perfil_avaliacao1" src="https://via.placeholder.com/56x56" />
            <div class="grupo1">
                <div class="retangulo1">
                </div>
                <div class="av_txt1"> Caso o horário desejado
                    para cada dia seja diferente, é necessário reservar individualmente.</div>
            </div>
            <div class="av">
                <ul class="avaliacao1" id="nota">
                    <li class="star-icon1 ativo" data-avaliacao="1"></li>
                    <li class="star-icon1" data-avaliacao="2"></li>
                    <li class="star-icon1" data-avaliacao="3"></li>
                    <li class="star-icon1" data-avaliacao="4"></li>
                    <li class="star-icon1" data-avaliacao="5"></li>
                </ul>
            </div>
            <img class="perfil_avaliacao1" src="https://via.placeholder.com/56x56" />
            <div class="grupo1">
                <div class="retangulo1">
                </div>
                <div class="av_txt1"> Caso o horário desejado
                    para cada dia seja diferente, é necessário reservar individualmente.</div>
            </div>
        </section>
    </div>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
</body>

</html>