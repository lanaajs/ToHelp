<?php


function routes(){
    return require 'routes.php';
}

function matchExactUri($uri, $routes){
    if(array_key_exists($uri, $routes)){
        return [];
    }
    return [];
}


function router(){
    $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    //echo $uri;

    $routes = routes();
    $matchedUri = matchExactUri($uri, $routes);
   
}







/*$acao = 'home';
// verifica se existe ação na query string
if(isset($_GET['a'])){
    if(!key_exists($rotas, $_GET['  A'])){
        $acao = 'home';

    } else{
        $acao = $_GET['a'];
    }


}*/



?>