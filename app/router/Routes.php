<?php

$rotas = [





];

$acao = 'home';
// verifica se existe ação na query string
if(isset($_GET['a'])){
    if(!key_exists($rotas, $_GET['  A'])){
        $acao = 'home';

    } else{
        $acao = $_GET['a'];
    }


}



?>