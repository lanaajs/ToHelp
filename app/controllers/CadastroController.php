<?php

namespace app\controllers;


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['cadastrocontr']) && $_POST['cadastrocontr'] === 'cadastrarcontr') {
        CadastroController::validarCadastroContr();
    }
    if (isset($_POST['cadastrocuid']) && $_POST['cadastrocuid'] === 'cadastrarcuid') {
        CadastroController::validarCadastroCuid();
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

    public static function validarCadastroCuid()
    {
        require_once __DIR__ . '/../../classes/Database.php';
        $db = new \classes\Database();

        try {
            $nome = $_POST['nome_cuid'];
            $sobrenome = $_POST['sobrenome_cuid'];
            $cpf = $_POST['CPF_cuid'];
            $rg = $_POST['RG_cuid'];
            $dtnasc = $_POST['dt_nasc'];
            $email = $_POST['email_cuid'];
            $celular = $_POST['celular_cuid'];
            $genero = $_POST['genero'];
            $senha = $_POST['senha_cuid'];

            $sql = "INSERT INTO infoCuidador (nome_cuid, sobrenome_cuid, CPF_contr, RG_cuid, dt_nasc, email_cuid, celular_cuid, genero, senha_cuid, dt_cadastro, tipo_contr) 
                VALUES (:nome_cuid, :sobrenome_cuid, :CPF_contr, :RG_cuid, :dt_nasc, :email_cuid, :celular_cuid, :genero, :senha_cuid, NOW(), :tipo_contr)";

            $parametros = array(
                ':nome_cuid' => $nome,
                ':sobrenome_cuid' => $sobrenome,
                ':CPF_contr' => $cpf,
                ':RG_cuid' => $rg,
                ':dt_nasc' => $dtnasc,
                ':email_cuid' => $email,
                ':celular_cuid' => $celular,
                ':genero' => $genero,
                ':senha_cuid' => $senha
            );

            // Execute a função de inserção no banco de dados
            $db->ligar();
            $lastId = $db->insert($sql, $parametros);
            try {
                if ($lastId !== false) {
                    // Inserção bem-sucedida
                    //echo "Cadastro realizado com sucesso! Último ID inserido: $lastId <br>";
                    header('Location: /login/cuidador'); // ESSA REDIREÇÃO TEM QUE SER NO JS!!!
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
            $cep = $_POST['CEP_cuid'];
            $estado = $_POST['estado_cuid'];
            $cidade = $_POST['cidade_cuid'];
            $numero = $_POST['numero_cuid'];
            $complemento = $_POST['complemento_cuid'];

            $sql = "INSERT INTO enderecoCuidador (CEP_cuid, estado_cuid, cidade_cuid, numero_cuid, complemento_cuid, id_contr_FK) 
        VALUES (:CEP_cuid, :estado_cuid, :cidade_cuid, :numero_cuid, :complemento_cuid, :id_contr_FK)";

            $parametros = array(
                ':CEP_cuid' => $cep,
                ':estado_cuid' => $estado,
                ':cidade_cuid' => $cidade,
                ':numero_cuid' => $numero,
                ':complemento_cuid' => $complemento,
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


    public static function validarCadastroContr()
    {

        require_once __DIR__ . '/../../classes/Database.php';
        $db = new \classes\Database();

        try {
            $nome = $_POST['nome_cuid'];
            $sobrenome = $_POST['sobrenome_cuid'];
            $cpf = $_POST['CPF_cuid'];
            $rg = $_POST['RG_cuid'];
            $dtnasc = $_POST['dt_nasc'];
            $email = $_POST['email_contr'];
            $celular = $_POST['celular_contr'];
            $genero = $_POST['genero'];
            $senha = $_POST['senha_contr'];
            $tipo = $_POST['tipo_contr'];

            $sql = "INSERT INTO infoContratante (nome_cuid, sobrenome_cuid, CPF_cuid, RG_cuid, dt_nasc, email_contr, celular_contr, genero, senha_contr, dt_cadastro, tipo_contr) 
                VALUES (:nome_cuid, :sobrenome_cuid, :CPF_cuid, :RG_cuid, :dt_nasc, :email_contr, :celular_contr, :genero, :senha_contr, NOW(), :tipo_contr)";

            $parametros = array(
                ':nome_cuid' => $nome,
                ':sobrenome_cuid' => $sobrenome,
                ':CPF_cuid' => $cpf,
                ':RG_cuid' => $rg,
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
