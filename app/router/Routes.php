<?php

    require __DIR__ . '/../../vendor/autoload.php';

    $dispatcher = FastRoute\simpleDispatcher(function (FastRoute\RouteCollector $r) {
        $r->addRoute('GET', '', HomeController::class.'@index');
        $r->addRoute('GET', '/login', LoginController::class.'@indexctr');
        $r->addRoute(['GET', 'POST'], '/login/cuidador', LoginController::class.'@indexcuid');
        $r->addRoute(['GET', 'POST'], '/cadastro/contratante', CadastroController::class.'@indexctr');
        $r->addRoute(['GET', 'POST'], '/cadastro/cuidador', CadastroController::class.'@indexcuid');



        // {id} must be a number (\d+)
       // $r->addRoute('GET', '/user/{id:\d+}', 'get_user_handler');
        // The /{title} suffix is optional
        //$r->addRoute('GET', '/articles/{id:\d+}[/{title}]', 'get_article_handler');
    });

    require 'Router.php';
