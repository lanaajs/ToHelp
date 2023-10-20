<?php

namespace app\controllers;

class CarregController
{
    function indexCarregCntr()
    {
        require 'app/layouts/CarregamentoContratante.php';
    }

    function indexCarregCuid()
    {
        require 'app/layouts/CarregamentoCuidador.php';
    }
}
