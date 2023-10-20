<?php

namespace app\controllers;

class AgendaContratanteController
{
    function indexAgendaCtr()
    {
        require '/app/layouts/AgendaContratante.php';
    }

    function indexAgendaCuid()
    {
        require '/app/layouts/AgendaCuidador.php';
    }
}
