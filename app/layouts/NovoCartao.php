<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../public/assets/css/NovoCartao.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    
    <link rel="icon" type="image/x-icon" href="../../public/assets/img/LogoPreta.png">
    <title>ToHelp - Novo cartao</title>
</head>

<body>

    <div class="titulo">
        <a href="#"><img id="seta" src="../../public/assets/img/seta esquerda.png" alt="seta" /></a>
        <h2>Novo cartão</h2>
    </div>

    <main>

        <div id=centro>
            <div class="cartao">
                <div id="line1">
                    <div class="nome-cart-text">
                    </div>
                    <div class="aproximacao-div"><img class="aproximacao" src="../../public/assets/img/aproximacao.png"
                            alt="aproximacao"></div>
                </div>
                <div id="line2">
                    <p>Número do Cartão</p>
                    <div class="numero-cart-text">
                        **** **** **** ****
                    </div>
                </div>
                <div id="line3">
                    <div id="vencimento-cart">
                        <p>Vencimento</p>
                        <div class="vencimento-text">
                            mm/aa
                        </div>
                    </div>
                    <div id="cvv-cart">
                        <p>CVV</p>
                        <div class="cvv-text">
                            ***
                        </div>
                    </div>
                    <div id="chip"><img src="../../public/assets/img/flat-color-icons_sim-card-chip.png" alt="chipcartao"></div>
                </div>
            </div>
        </div>
        

        <div centro2>
            <form id="info-cartao" action="#">
            <div id="inputs">
                <div id="inpt">
                    <label for="Nome">Nome</label>
                    <div><input type="text" name="nome" id="nome" maxlength="50" placeholder="Digite seu nome"
                            onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || event.key ==  ' '">
                    </div>
                </div>
                <div id="inpt">
                    <label for="numcartao">Número do Cartão</label>
                   
                        <input type="text" name="numcartao" id="numcartao" maxlength="19" placeholder="**** **** **** ****"
                            onkeypress="return event.charCode >= 48 && event.charCode <= 57">
                        <img id="imgg" src="../../public/assets/img/bytesize_creditcard.png" alt="imagemcartao">
                   
                </div>
                <div id="inpt">
                    <label for="cpf" id="cpf-lab">CPF do Titular</label>
                    <div><input type="text" name="cpf" id="cpf" maxlength="14" placeholder="000.000.000-00"
                            onkeypress="return event.charCode >= 48 && event.charCode <= 57">
                    </div>
                </div>
                <div id="final">
                    <div id="inptfinal">
                        <label for="vencimento">Vencimento</label>
                        <input type="text" name="vencimento" id="vencimento" maxlength="5" placeholder="mm/aa"
                            onkeypress="return event.charCode >= 48 && event.charCode <= 57">
                    </div>
                    <div id="inptfinal">
                        <label for="cvv">CVV</label>
                        <input type="text" name="cvv" id="cvv" maxlength="3" placeholder="Insira CVV"
                            onkeypress="return event.charCode >= 48 && event.charCode <= 57">
                    </div>
                </div>
            </form>
            <input type="button" id="button" onclick="analisar()" value="CONCLUIR">
        </div>
        
    </main>

    <script src="../../public/assets/js/novocartao.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
</body>

</html>