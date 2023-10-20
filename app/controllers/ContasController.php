<?php

namespace app\controller;

class ContasController
{
    function indexContaCntr()
    {
        require 'app/layouts/ContaContratante.php';
    }

    function indexContaCuid()
    {
        require 'app/layouts/ContaCuidador.php';
    }
}
