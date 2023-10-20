<?php

namespace app\controller;

class ExtratosController
{
    function indexExtratoCntr()
    {
        require 'app/layouts/ExtratoContratante.php';
    }

    function indexExtratoCuid()
    {
        require 'app/layouts/ExtratoCuidador.php';
    }
}
