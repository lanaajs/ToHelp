<?php

use app\controllers\AgendaController;
use app\controllers\AnaliseCurriculoController;
use app\controllers\BuscarCuidController;
use app\controllers\CadastroController;
use app\controllers\CarregController;
use app\controllers\ConfirmacaoCuidController;
use app\controller\ContasController;
use app\controller\ContratosController;
use app\controller\DashboardController;
use app\controller\EditInfoDepController;
use app\controller\ExtratosController;
use app\controller\FormaPagController;
use app\controllers\HomeController;
use app\controller\InformacoesController;
use app\controllers\LoginController;
use app\controller\NovoCartaoController;
use app\controller\RelatoriosController;
use FastRoute\RouteCollector;

require __DIR__ . '/../../vendor/autoload.php';

$dispatcher = FastRoute\simpleDispatcher(function (FastRoute\RouteCollector $r) {


    $r->addGroup('/contratante', function(RouteCollector $r){
        $r->addRoute(['GET', 'POST'], '/agenda', AgendaController::class . '@indexAgendaCtr');
        $r->addRoute(['GET', 'POST'], '/cadastro/dependente', CadastroController::class . '@indexdep');
    });

    $r->addGroup('/cuidador', function(RouteCollector $r){
        $r->addRoute(['GET', 'POST'], '/agenda', AgendaController::class . '@indexAgendaCtr');
    });



    //Rota para a página de análise de currículo do cuidador.
    $r->addRoute('GET', '/analisecurriculo', AnaliseCurriculoController::class . '@indexCurriculo');

    //Rota para a página de buscar cuidadores.
    $r->addRoute('GET', '/buscarcuidadores', BuscarCuidController::class . '@indexBuscarCuid');

    //Rotas para as páginas de cadastros de informação tanto dos contrarantes quanto dos cuidadores.
    $r->addGroup('/cadastro', function (RouteCollector $r) {
    
        $r->addRoute('GET', '/contratante', CadastroController::class . '@indexctr');
        $r->addRoute('POST', '/contratante', CadastroController::class . '@validarCadastroContr');
        $r->addRoute('GET', '/cuidador', CadastroController::class . '@indexcuid');
        $r->addRoute('POST', '/cuidador', CadastroController::class . '@validarCadastroCuid');
    });

    //Rotas para as páginas de carregamento.
    $r->addGroup('/carregamento', function (RouteCollector $r) {
        $r->addRoute('GET', '/contratante', CarregController::class . '@indexCarregCntr');
        $r->addRoute('GET', '/cuidador', CarregController::class . '@indexCarregCuid');
    });

    //Rota para confirmação do cuidador.
    $r->addRoute('GET', '/confirmacaocuidador', ConfirmacaoCuidController::class . '@indexConfirmacao');

    //Rotas para as contas dos contratantes e dos cuidadores.
    $r->addGroup('/conta/{id:\d+}', function (RouteCollector $r) {
        $r->addRoute('GET', '/contratante', ContasController::class . '@indexContaCntr');
        $r->addRoute('GET', '/cuidador', ContasController::class . '@indexContaCuid');
    });

    //Rotas para as páginas de contrato do contratante e cuidador.
    $r->addGroup('/contratos', function (RouteCollector $r) {
        $r->addRoute(['GET', 'POST'], '/contratante', ContratosController::class . '@indexContratoCntr');
        $r->addRoute(['GET', 'POST'], '/cuidador', ContratosController::class . '@indexContratoCuid');
    });

    //Rota para a página do Dashboard.
    $r->addRoute('GET', '/monitoramento', DashboardController::class . '@indexDashboard');

    //Rotas para as páginas de editar informações dos dependentes.
    $r->addGroup('/editarinformacoes/dependente', function (RouteCollector $r) {
        $r->addRoute(['GET', 'POST'], '/aberto', EditInfoDepController::class . '@indexEditInfoDepAberto');
        $r->addRoute('GET', '/', EditInfoDepController::class . '@indexEditInfoDepFechado');
    });

    //Rotas para as páginas de extrato do contratante e cuidador.
    $r->addGroup('/extrato', function (RouteCollector $r) {
        $r->addRoute('GET', '/contratante', ExtratosController::class . '@indexExtratoCntr');
        $r->addRoute('GET', '/cuidador', ExtratosController::class . '@indexExtratoCuid');
    });

    //Rota para as formas de pagamento.
    $r->addRoute('GET', '/formapagamento', FormaPagController::class . '@indexPagamento');

    //Rota para a página principal da aplicação.
    $r->addRoute('GET', '/', HomeController::class . '@index');

    //Rotas para as páginas de informaçao tanto do cuidador quanto do usuário.
    $r->addGroup('/info', function (RouteCollector $r) {
        $r->addRoute(['GET', 'POST'], '/contratante', InformacoesController::class . '@indexInfoCntr');
        $r->addRoute(['GET', 'POST'], '/cuidador', InformacoesController::class . '@indexInfoCuid');
    });

    //Rotas para os logins tanto dos contratantes quanto dos cuidadores.
    $r->addGroup('/login', function (RouteCollector $r) {
        $r->addRoute('GET', '/contratante', LoginController::class . '@indexctr');
        $r->addRoute('POST', '/contratante', LoginController::class . '@validarLoginContr');
        $r->addRoute('GET', '/cuidador', LoginController::class . '@indexcuid');
        $r->addRoute('POST', '/cuidador', LoginController::class . '@validarLoginCuid'); 
    });


    //Rota para a página de novo cartao.
    $r->addRoute(['GET', 'POST'], '/novocartao', NovoCartaoController::class . '@indexNovoCart');

    //Rotas para as páginas de relatório (aberto e fechado) dos contratantes e cuidadores.
    $r->addGroup('/relatorio', function (RouteCollector $r) {
        $r->addRoute('GET', '/contratante', RelatoriosController::class . '@indexRelatCntrFechado');
        $r->addRoute(['GET', 'POST'], '/contratante/aberto', RelatoriosController::class . '@indexRelatCntrAberto');
        $r->addRoute('GET', '/cuidador', RelatoriosController::class . '@indexRelatCuidFechado');
        $r->addRoute(['GET', 'POST'], '/cuidador/aberto', RelatoriosController::class . '@indexRelatCuidAberto');
    });

});

require 'Router.php'; 
