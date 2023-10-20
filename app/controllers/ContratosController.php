<?php

namespace app\controller;

class ContratosController
{
    function indexContratoCntr()
    {
        require 'app/layouts/ContratosContratante.php';
    }

    function indexContratoCuid()
    {
        require 'app/layouts/ContratosCuidador.php';
    }
}
