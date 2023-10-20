<?php

namespace app\controller;

class RelatoriosController
{
    function indexRelatCntrFechado()
    {
        require 'app/layouts/RelatorioContratante.php';
    }

    function indexRelatCntrAberto()
    {
        require 'app/layouts/RelatorioContratanteAberto.php';
    }

    function indexRelatCuidFechado()
    {
        require 'app/layouts/RelatorioCuidador.php';
    }

    function indexRelatCuidAberto()
    {
        require 'app/layouts/RelatorioCuidadorAberto.php';
    }
}
