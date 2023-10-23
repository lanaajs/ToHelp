<?php

namespace app\controllers;


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['cadastro']) && $_POST['cadastro'] === 'cadastrar') {
        CadastroController::validarCadastroContr();
    }
}



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

    public static function validarCadastroContr()
    {

        require_once __DIR__ . '/../../classes/Database.php';
        $db = new \classes\Database();

        try {
            $nome = $_POST['nome_contr'];
            $sobrenome = $_POST['sobrenome_contr'];
            $cpf = $_POST['CPF_contr'];
            $rg = $_POST['RG_contr'];
            $dtnasc = $_POST['dt_nasc'];
            $email = $_POST['email_contr'];
            $celular = $_POST['celular_contr'];
            $genero = $_POST['genero'];
            $senha = $_POST['senha_contr'];
            $tipo = $_POST['tipo_contr'];

            $sql = "INSERT INTO infoContratante (nome_contr, sobrenome_contr, CPF_contr, RG_contr, dt_nasc, email_contr, celular_contr, genero, senha_contr, dt_cadastro, tipo_contr) 
                VALUES (:nome_contr, :sobrenome_contr, :CPF_contr, :RG_contr, :dt_nasc, :email_contr, :celular_contr, :genero, :senha_contr, NOW(), :tipo_contr)";

            $parametros = array(
                ':nome_contr' => $nome,
                ':sobrenome_contr' => $sobrenome,
                ':CPF_contr' => $cpf,
                ':RG_contr' => $rg,
                ':dt_nasc' => $dtnasc,
                ':email_contr' => $email,
                ':celular_contr' => $celular,
                ':genero' => $genero,
                ':senha_contr' => $senha,
                ':tipo_contr' => $tipo
            );

            // Execute a função de inserção no banco de dados
            $db->ligar();
            $lastId = $db->insert($sql, $parametros);
            try {
                if ($lastId !== false) {
                    // Inserção bem-sucedida
                    //echo "Cadastro realizado com sucesso! Último ID inserido: $lastId <br>";
                    header('Location: /login/contratante'); // ESSA REDIREÇÃO TEM QUE SER NO JS!!!
                } else {
                    // Falha na inserção   
                    echo "Erro ao cadastrar. Por favor, tente novamente.";
                }
            } catch (\PDOException $e) {
                echo "Erro: " . $e->getMessage();
            }
        } catch (\PDOException $e) {

            echo "Erro: " . $e->getMessage();
        }
        /*---------------------------------------------------*/

        try {
            $cep = $_POST['CEP_contr'];
            $estado = $_POST['estado_contr'];
            $cidade = $_POST['cidade_contr'];
            $numero = $_POST['numero_contr'];
            $complemento = $_POST['complemento_contr'];

            $sql = "INSERT INTO enderecoContratante (CEP_contr, estado_contr, cidade_contr, numero_contr, complemento_contr, id_contr_FK) 
        VALUES (:CEP_contr, :estado_contr, :cidade_contr, :numero_contr, :complemento_contr, :id_contr_FK)";

            $parametros = array(
                ':CEP_contr' => $cep,
                ':estado_contr' => $estado,
                ':cidade_contr' => $cidade,
                ':numero_contr' => $numero,
                ':complemento_contr' => $complemento,
                ':id_contr_FK' => $lastId
            );

            // Execute a função de inserção no banco de dados
            $result = $db->insert($sql, $parametros);

            try {
                if (is_numeric($result) && $result > 0) {
                    // Inserção bem-sucedida
                    //var_dump($result);
                    echo "Cadastro realizado com sucesso!";
                } else {
                    // Falha na inserção
                    echo "Erro ao cadastrar. Por favor, tente novamente.";
                }
            } catch (\PDOException $e) {
                echo "Erro: " . $e->getMessage();
            }
        } catch (\PDOException $p) {
            // Captura de exceção do PDO
            echo "Erro: " . $p->getMessage();
        }
    }
}
