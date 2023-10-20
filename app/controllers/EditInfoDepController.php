<?php

namespace app\controller;

class EditInfoDepController{
    function indexEditInfoDepAberto()
    {
        require 'app/layouts/EditarInfoDependenteAberto.php';
    }

    function indexEditInfoDepFechado()
    {
        require 'app/layouts/EditarInfoDependenteFechado.php';
    }
}