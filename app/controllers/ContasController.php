<?php

namespace app\controllers;

class ContasController
{
    function indexContaCntr($id)
    {
        require 'app/layouts/ContaContratante.php';
    }

    function indexContaCuid($id)
    {
        require 'app/layouts/ContaCuidador.php';
    }
}
