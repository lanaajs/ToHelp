<?php

use app\controllers\AgendaController;
use app\controllers\AnaliseCurriculoController;
use app\controllers\BuscarCuidController;
use app\controllers\CadastroController;
use app\controllers\CarregController;
use app\controllers\ConfirmacaoCuidController;
use app\controllers\ContasController;
use app\controllers\ContratosController;
use app\controllers\DashboardController;
use app\controllers\EditInfoDepController;
use app\controllers\ExtratosController;
use app\controllers\FormaPagController;
use app\controllers\HomeController;
use app\controllers\InformacoesController;
use app\controllers\LoginController;
use app\controllers\NovoCartaoController;
use app\controllers\RelatoriosController;
use app\controllers\PerfilController;
use FastRoute\RouteCollector;

require __DIR__ . '/../../vendor/autoload.php';

$dispatcher = FastRoute\simpleDispatcher(function (FastRoute\RouteCollector $r) {


    $r->addGroup('/contratante', function (RouteCollector $r) {

        //Rota para a agenda.
        $r->addRoute(['GET', 'POST'], '/^agenda/{id:[0-9]+}$', AgendaController::class . '@indexAgendaCtr');

        //Rota para as página de cadastro de dependente e cadastro de contratante.
        $r->addRoute('GET', '/cadastrodep/{id:[0-9]+}', CadastroController::class . '@indexdep');
        $r->addRoute('POST', '/cadastrodep/{id:[0-9]+}', CadastroController::class . '@validarCadastroDepn');

        $r->addRoute('GET', '/cadastro', CadastroController::class . '@indexctr');
        $r->addRoute('POST', '/cadastro', CadastroController::class . '@validarCadastroContr');

        //Rota para a página de buscar cuidadores.
        $r->addRoute('GET', '/buscar/{id:[0-9]+}', BuscarCuidController::class . '@indexBuscarCuid');

        //Rota para a página de carregamento.
        $r->addRoute('GET', '/carregamento', CarregController::class . '@indexCarregCntr');

        //Rota para confirmação do cuidador.
        $r->addRoute('GET', '/confirmacaocuidador', ConfirmacaoCuidController::class . '@indexConfirmacao');

        //Rota para a conta do contratante.
        $r->addRoute(['GET', 'POST'], '/conta/{id:[0-9]+}', ContasController::class . '@indexContaCntr');

        //Rota para a página de contratos.
        $r->addRoute(['GET', 'POST'], '/^contratos/{id:[0-9]+}$', ContratosController::class . '@indexContratoCntr');

        //Rota para a página de extratos.
        $r->addRoute('GET', '/^extrato/{id:[0-9]+}$', ExtratosController::class . '@indexExtratoCntr');

        //Rota para as formas de pagamento.
        $r->addRoute('GET', '/^formapagamento/{id:[0-9]+}$', FormaPagController::class . '@indexPagamento');

        //Rota para a página de editar informações
        $r->addRoute(['GET', 'POST'], '/^editarinfo/{id:[0-9]+}$', InformacoesController::class . '@indexInfoCntr');

        //Rota para a página de login.
        $r->addRoute('GET', '/login', LoginController::class . '@indexctr');
        $r->addRoute('POST', '/login', LoginController::class . '@validarLoginContr');

        //Rota para a página de novo cartao.
        $r->addRoute(['GET', 'POST'], '/^novocartao/{id:[0-9]+}$', NovoCartaoController::class . '@indexNovoCart');

        //Rota para as páginas de relatório.
        $r->addRoute('GET', '/^relatorio/{id:[0-9]+}$', RelatoriosController::class . '@indexRelatCntrFechado');
        $r->addRoute(['GET', 'POST'], '/^relatorioaberto/{id:[0-9]+}$', RelatoriosController::class . '@indexRelatCntrAberto');
    });


    $r->addGroup('/cuidador', function (RouteCollector $r) {

        //Rota para página de carregamento.
        $r->addRoute(['GET', 'POST'], '/^agenda/{id:[0-9]+}$', AgendaController::class . '@indexAgendaCuid');

        //Rota para a página de análise de currículo do cuidador.
        $r->addRoute('GET', '/analisecurriculo', AnaliseCurriculoController::class . '@indexCurriculo');

        //Rota para página de cadastro.
        $r->addRoute('GET', '/cadastro', CadastroController::class . '@indexcuid');
        $r->addRoute('POST', '/cadastro', CadastroController::class . '@validarCadastroCuid');

        //Rota para a página de carregamento.
        $r->addRoute('GET', '/carregamento', CarregController::class . '@indexCarregCntr');

        //Rota para a página de conta do cuidador.
        $r->addRoute(['GET', 'POST'], '/conta/{id:[0-9]+}', ContasController::class . '@indexContaCuid');
        
        $r->addRoute(['GET', 'POST'], '/perfil/{id:[0-9]+}', PerfilController::class . '@indexPerfilCuid');

        //Rota para a página de contratos.
        $r->addRoute(['GET', 'POST'], '/^contratos/{id:[0-9]+}$', ContratosController::class . '@indexContratoCuid');

        //Rota para a página de extratos.
        $r->addRoute('GET', '/^extrato/{id:[0-9]+}$', ExtratosController::class . '@indexExtratoCuid');

        //Rota para a página de editar informações.
        $r->addRoute(['GET', 'POST'], '/^editarinfo/{id:[0-9]+}$', InformacoesController::class . '@indexInfoCuid');

        //Rota para a página de login.
        $r->addRoute('GET', '/login', LoginController::class . '@indexcuid');
        $r->addRoute('POST', '/login', LoginController::class . '@validarLoginCuid');

        //Rota para as páginas de relatório.
        $r->addRoute('GET', '/^relatorio/{id:[0-9]+}$', RelatoriosController::class . '@indexRelatCntrFechado');
        $r->addRoute(['GET', 'POST'], '/^relatorioaberto/{id:[0-9]+}$', RelatoriosController::class . '@indexRelatCntrAberto');
    });


    //Rota para a página do Dashboard.
    $r->addRoute('GET', '/monitoramento', DashboardController::class . '@indexDashboard');

    //Rotas para as páginas de editar informações dos dependentes.
    $r->addGroup('/editarinfodep/{id:[0-9]+}', function (RouteCollector $r) {
        $r->addRoute(['GET', 'POST'], '/aberto', EditInfoDepController::class . '@indexEditInfoDepAberto');
        $r->addRoute('GET', '/', EditInfoDepController::class . '@indexEditInfoDepFechado');
    });

    //Rota para a página principal da aplicação.
    $r->addRoute('GET', '/', HomeController::class . '@index');
});

require 'Router.php';
