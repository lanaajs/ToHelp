<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  
    <link rel="stylesheet" href="../../public/assets/css/Sugestoes.css">
   
    <link rel="icon" type="image/x-icon" href="../../public/assets/img/LogoPreta.png">

    <title>ToHelp - Sugestões</title>
</head>

<body onload="adicionarsugestao()"> 
    <!-- Cabeçalho -->
    <header id="cabecalho">

        <div id="info1">
            <h1>Sugestões de atividades</h1>
        </div>

        <div id="info2">
            <a href=""><span class="material-icons">arrow_forward_ios</span></a>
        </div>

    </header>

    <main>

        <div>
            <div id="areaactives">
                <section id="actives">
                    <h2>Atividades Compartilhadas: O Coração do Cuidado aos Idosos</h2>
    
                    <p>Ir além do básico do cuidado físico, as atividades compartilhadas entre cuidadores e idosos são cruciais para o bem-estar integral. Essa prática fortalece laços emocionais, estimula a mente, combate o isolamento social e promove a saúde física. Cuidar, nesse contexto, vai além do físico, alcançando o âmago do envelhecimento saudável e feliz.</p>
    
                    <div id="areaimg">
                        <img src="../../public/assets/img/cuidados-atividade.png" alt="Cuidados a saúde" id="banner">
                    </div>
                    
                </section>
            </div>
            
            
            <div id="area">
                <div id="areasugestao">
                    <h2>Quer uma sugestão?</h2>
                </div>
                
                <div id="areasuggestion">
                    
                    <section>
                        <h3>Quer dar alguma sugestão?</h3>
                        <div id="suggestion">
                            <div>
                                <div id="title-mobile">
                                    <h4>Quer dar alguma sugestão?</h4>
                                </div>
                                
                                <input type="text" placeholder="Digite aqui uma sugestão de atividade" id="input3"> 

                                <br>

                                <textarea name="" cols="30" rows="10" id="descricao3" placeholder="Adicione um descrição para a sua sugestão"></textarea>

                                <br>

                                <div id="areaselect">
                                    <select name="" id="select">
                                        <option value="selecione" disabled selected>Selecione uma opção</option>
                                        <option value="casa">Casa</option>
                                        <option value="arlivre">Ar livre</option>
                                    </select>
                                </div>  
                               
                           
                            <div id="areabtn">
                                <input type="button" value="Adicionar Sugestão" id="btn2" onclick="adicionarsugestao()">
                            </div>
                               
                            </div>
                        </div>
                   
                    </section>

                    
                <section>
                    <h3>Atividades ao ar live</h3>
                    <div id="suggestion">
                        
                        <div>
                            <div id="title-mobile">
                                <h4>Atividades ao ar Live</h4>
                            </div>

                            <input type="text" disabled placeholder="Click no botão para gerar uma sugestão" id="input2"> 
                            <br>
                            
                            <textarea name="" cols="30" rows="10" id="descricao2" disabled></textarea>
            
                            <div id="areaimg">
                                <img src="" alt="Exemplo" id="imagem2">
                            </div>
                            
            
                            <br>
            
                        <div id="areabtn">
                            <input type="button" value="Gerar Sugestão" id="btn2" onclick="ArLivresugerir()">
                        </div>
                           
                        </div>
                    </div>
               
                </section>

                <section>
                    <h3>Atividades em casa</h3>
                    <div id="suggestion">
                        <div>
                            <div id="title-mobile">
                                <h4>Atividades em casa</h4>
                            </div>

                            <input type="text" disabled placeholder="Click no botão para gerar uma sugestão" id="input"> 
                            <br>
                            
                            <textarea name="" cols="30" rows="10" id="descricao" disabled></textarea>
            
                            <div id="areaimg">
                                <img src="" alt="Exemplo" id="imagem">
                            </div>
                            
            
                            <br>
            
                        <div id="areabtn">
                            <input type="button" value="Gerar Sugestão" id="btn" onclick="Casasugerir()">
                        </div>
                           
                        </div>
                    </div>
               
                </section>

                
                </div>
            </div>
            

        </main>

    <script src="../../public/assets/js/Sugestoes.js"></script>
</body>

</html>