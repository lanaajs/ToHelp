<?php

namespace app\controller;

class InformacoesController
{
    function indexInfoCntr()
    {
        require 'app/layouts/InfoContratante.php';
    }
    
    function indexInfoCuid()
    {
        require 'app/layouts/InfoCuidador.php';
    }

}
