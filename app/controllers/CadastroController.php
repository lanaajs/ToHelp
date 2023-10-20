<?php

namespace app\controllers;

class CadastroController
{

    function indexctr()
    {
        require 'app/layouts/CadastroContratante.php';
    }

    function indexcuid()
    {
        require 'app/layouts/CadastroCuidador.php';
    }

    function indexdep()
    {
        require 'app/layouts/CadastroCuidador.php';
    }
}
