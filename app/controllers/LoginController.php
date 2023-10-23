<?php

namespace app\controllers;



if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['logincontr']) && $_POST['logincontr'] === 'logarcontr') {
        LoginController::validarLoginContr();
    } else if (isset($_POST['logincuid']) && $_POST['logincuid'] === 'logarcuid') {
        LoginController::validarLoginCuid();
    }
}


class LoginController
{


    function indexctr()
    {
        require 'app/layouts/LoginContratante.php';
    }

    function indexcuid()
    {
        require 'app/layouts/LoginCuidador.php';
    }


    public static function validarLoginCuid()
    {
        require_once __DIR__ . '/../../classes/Database.php';
        $db = new \classes\Database();

        // Obtenha o CPF e a senha enviados pelo formulário
        $cpf = $_POST['CPF_cuid'];
        $senha = $_POST['senha_cuid'];

        // Conecte-se ao banco de dados (você já tem essa funcionalidade em sua classe Database)
        $db->ligar();

        // Consulte o banco de dados para verificar se as credenciais são válidas
        $sql = "SELECT * FROM infoCuidador WHERE CPF_cuid = :cpf";
        $parametros = [':cpf' => $cpf];
        $resultado = $db->select($sql, $parametros);

        if (!empty($resultado)) {
            // Um registro correspondente foi encontrado
            $usuario = $resultado[0];

            // Verifique se a senha fornecida coincide com a senha armazenada no banco de dados
            if ($senha === $usuario->senha_cuid) {
                // Senha válida

                session_start();

                // Armazene o ID do usuário na variável de sessão
                $_SESSION['cuid_id'] = $usuario->id;

                // Redirecione o usuário para a página apropriada com base no tipo de conta (cntr ou cuid)
                header("Location: /conta/00000{$_SESSION['cuid_id']}/cuidador");

                // Encerre o script para evitar saída adicional
                exit();
            } else {
                // Senha incorreta
                echo "Senha incorreta. Tente novamente.";
            }
        } else {
            // Nenhum registro correspondente foi encontrado
            echo "CPF não encontrado.";
        }

        $db->desligar();
    }
    

    public static function validarLoginContr()
    {
        require_once __DIR__ . '/../../classes/Database.php';
        $db = new \classes\Database();

        // Obtenha o CPF e a senha enviados pelo formulário
        $cpf = $_POST['CPF_contr'];
        $senha = $_POST['senha_contr'];

        // Conecte-se ao banco de dados (você já tem essa funcionalidade em sua classe Database)
        $db->ligar();

        // Consulte o banco de dados para verificar se as credenciais são válidas
        $sql = "SELECT * FROM infoContratante WHERE CPF_contr = :cpf";
        $parametros = [':cpf' => $cpf];
        $resultado = $db->select($sql, $parametros);

        if (!empty($resultado)) {
            // Um registro correspondente foi encontrado
            $usuario = $resultado[0];

            // Verifique se a senha fornecida coincide com a senha armazenada no banco de dados
            if ($senha === $usuario->senha_contr) {
                // Senha válida

                session_start();

                // Armazene o ID do usuário na variável de sessão
                $_SESSION['contr_id'] = $usuario->id;

                // Redirecione o usuário para a página apropriada com base no tipo de conta (cntr ou cuid)
                header("Location: /conta/00000{$_SESSION['contr_id']}/contratante");

                // Encerre o script para evitar saída adicional
                exit();
            } else {
                // Senha incorreta
                echo "Senha incorreta. Tente novamente.";
            }
        } else {
            // Nenhum registro correspondente foi encontrado
            echo "CPF não encontrado.";
        }

        $db->desligar();
    }
}
