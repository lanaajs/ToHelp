<?php

namespace app\controllers;


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['cadastrocontr']) && $_POST['cadastrocontr'] === 'cadastrarcontr') {
        CadastroController::validarCadastroContr();
    } else if (isset($_POST['cadastrocuid']) && $_POST['cadastrocuid'] === 'cadastrarcuid') {
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

    function indexdep(int $id)
    {
        require 'app/layouts/CadastrarDependente.php';
    }

    public static function validarCadastroCuid()
    {
        require_once __DIR__ . '/../../classes/Database.php';
        $db = new \classes\Database();
        $db->ligar();
        $db->iniciarTransacao();

        try {
            $nome = $_POST['nome_cuid'];
            $sobrenome = $_POST['sobrenome_cuid'];
            $cpf = $_POST['CPF_cuid'];
            $rg = $_POST['RG_cuid'];
            $dtnasc = $_POST['dt_nasc'];
            $email = $_POST['email_cuid'];
            $celular = $_POST['celular_cuid'];
            $genero = $_POST['genero'];
            $senha = password_hash($_POST['senha_cuid'], PASSWORD_DEFAULT);

            $sqlCuidador = "INSERT INTO infoCuidador (nome_cuid, sobrenome_cuid, CPF_cuid, RG_cuid, dt_nasc, email_cuid, celular_cuid, genero, senha_cuid, dt_cadastro, tipo_contr) 
            VALUES (:nome_cuid, :sobrenome_cuid, :CPF_cuid, :RG_cuid, :dt_nasc, :email_cuid, :celular_cuid, :genero, :senha_cuid, NOW(), :tipo_contr)";

            $parametrosCuidador = array(
                ':nome_cuid' => $nome,
                ':sobrenome_cuid' => $sobrenome,
                ':CPF_cuid' => $cpf,
                ':RG_cuid' => $rg,
                ':dt_nasc' => $dtnasc,
                ':email_cuid' => $email,
                ':celular_cuid' => $celular,
                ':genero' => $genero,
                ':senha_cuid' => $senha,
                ':tipo_contr' => $tipo
            );

            $lastIdCuidador = $db->insert($sqlCuidador, $parametrosCuidador);

            /*------------------------------------------------------------------*/
            $cep = $_POST['CEP_cuid'];
            $estado = $_POST['estado_cuid'];
            $cidade = $_POST['cidade_cuid'];
            $bairro = $_POST['bairro_cuid'];
            $endereco = $_POST['end_cuid'];
            $numero = $_POST['numero_cuid'];
            $complemento = $_POST['complemento_cuid'];

            $sqlEndereco = "INSERT INTO enderecoCuidador (CEP_cuid, estado_cuid, cidade_cuid, bairro_cuid, end_cuid, numero_cuid, complemento_cuid, id_contr_FK) 
            VALUES (:CEP_cuid, :estado_cuid, :cidade_cuid, :bairro_cuid, :end_cuid, :numero_cuid, :complemento_cuid, :id_contr_FK)";

            $parametrosEndereco = array(
                ':CEP_cuid' => $cep,
                ':estado_cuid' => $estado,
                ':cidade_cuid' => $cidade,
                ':bairro_cuid' => $bairro,
                ':end_cuid' => $endereco,
                ':numero_cuid' => $numero,
                ':complemento_cuid' => $complemento,
                ':id_contr_FK' => $lastIdCuidador
            );

            $resultEndereco = $db->insert($sqlEndereco, $parametrosEndereco);

            /*------------------------------------------------------------------*/
            $rgf = $_POST['rg_frente'];
            $rgv = $_POST['rg_verso'];
            $curriculo = $_POST['curriculo'];
            $certif = $_POST['certificado'];
            $sobre = $_POST['sobre_txt'];

            $sqlInfoCurricular = "INSERT INTO infoCurricular (rg_frente, rg_verso, curriculo, certificado, sobre_txt, id_cuid_FK) 
            VALUES (:rg_frente, :rg_verso, :curriculo, :certificado, :sobre_txt, :id_cuid_FK)";

            $parametrosInfoCurricular = array(
                ':rg_frente' => $rgf,
                ':rg_verso' => $rgv,
                ':curriculo' => $curriculo,
                ':certificado' => $certif,
                ':sobre_txt' => $sobre,
                ':id_cuid_FK' => $lastIdCuidador
            );

            $resultInfoCurricular = $db->insert($sqlInfoCurricular, $parametrosInfoCurricular);

            if ($lastIdCuidador !== false && $resultEndereco !== false && $resultInfoCurricular !== false) {
                $db->confirmarTransacao();
                echo "Cadastro realizado com sucesso! Último ID inserido: $lastIdCuidador <br>";
                header('Location: /cuidador/login');
            } else {
                $db->cancelarTransacao();
                echo "Erro ao cadastrar. Por favor, tente novamente.";
            }
        } catch (\PDOException $e) {
            $db->cancelarTransacao();
            $db->desligar();
            echo "Cadastro cancelado <br>";
            echo "Erro: " . $e->getMessage();
        }
    }


    public static function validarCadastroContr()
    {

        require_once __DIR__ . '/../../classes/Database.php';
        $db = new \classes\Database();
        $db->ligar();
        $db->iniciarTransacao();

        try {
            $nome = $_POST['nome_contr'];
            $sobrenome = $_POST['sobrenome_contr'];
            $cpf = $_POST['CPF_contr'];
            $rg = $_POST['RG_contr'];
            $dtnasc = $_POST['dt_nasc'];
            $email = $_POST['email_contr'];
            $celular = $_POST['celular_contr'];
            $genero = $_POST['genero'];
            $senha = password_hash($_POST['senha_contr'], PASSWORD_DEFAULT);
            $tipo = $_POST['tipo_contr'];

            $sqlContratante = "INSERT INTO infoContratante (nome_contr, sobrenome_contr, CPF_contr, RG_contr, dt_nasc, email_contr, celular_contr, genero, senha_contr, dt_cadastro, tipo_contr) 
                VALUES (:nome_contr, :sobrenome_contr, :CPF_contr, :RG_contr, :dt_nasc, :email_contr, :celular_contr, :genero, :senha_contr, NOW(), :tipo_contr)";

            $parametrosContratante = array(
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

            $lastIdContratante = $db->insert($sqlContratante, $parametrosContratante);

            /*------------------------------------------------------------------*/
            $cep = $_POST['CEP_contr'];
            $estado = $_POST['estado_contr'];
            $cidade = $_POST['cidade_contr'];
            $bairro = $_POST['bairro_contr'];
            $endereco = $_POST['end_contr'];
            $numero = $_POST['numero_contr'];
            $complemento = $_POST['complemento_contr'];

            $sqlEndereco = "INSERT INTO enderecoContratante (CEP_contr, estado_contr, cidade_contr, bairro_contr, end_contr, numero_contr, complemento_contr, id_contr_FK) 
            VALUES (:CEP_contr, :estado_contr, :cidade_contr, :bairro_contr, :end_contr, :numero_contr, :complemento_contr, :id_contr_FK)";

            $parametrosEndereco = array(
                ':CEP_contr' => $cep,
                ':estado_contr' => $estado,
                ':cidade_contr' => $cidade,
                ':bairro_contr' => $bairro,
                ':end_contr' => $endereco,
                ':numero_contr' => $numero,
                ':complemento_contr' => $complemento,
                ':id_contr_FK' => $lastIdContratante
            );

            $resultEndereco = $db->insert($sqlEndereco, $parametrosEndereco);

            if ($lastIdContratante !== false && $resultEndereco !== false) {
                $db->confirmarTransacao();
                echo "Cadastro realizado com sucesso! Último ID inserido: $lastIdContratante <br>";
                header('Location: /contratante/login');
            } else {
                $db->cancelarTransacao();
                echo "Erro ao cadastrar. Por favor, tente novamente.";
            }
        } catch (\PDOException $e) {
            $db->cancelarTransacao();
            $db->desligar();
            echo "Cadastro cancelado <br>";
            echo "Erro: " . $e->getMessage();
        }
    }

    public static function validarCadastroDepn()
    {
        require_once __DIR__ . '/../../classes/Database.php';
        $db = new \classes\Database();
        $db->ligar();
        $db->iniciarTransacao();

        try{    

            require_once __DIR__ . '/LoginController.php';

            $nome = $_POST['nome_dep'];
            $sobrenome = $_POST['sobrenome_dep'];
            $cpf = $_POST['CPF_dep'];
            $rg = $_POST['RG_dep'];
            $genero = $_POST['genero'];
            $dtnsc = $_POST['dt_nasc'];
            $celular = $_POST['celular_dep'];
            $parentesco = $_POST['parentesco'];


            $sqlDependente = "INSERT INTO infoDependente (nome_dep, sobrenome_dep, CPF_dep, RG_dep, dt_nasc, celular_dep, genero, parentesco, id_contr_FK, dt_cadastro_dep)
                VALUES(:nome_dep, :sobrenome_dep, :CPF_dep, :RG_dep,:dt_nasc, :celular_dep, :genero, :parentesco, :id_contr_FK, NOW())";

            $parametrosDependente = array(
                ':nome_dep' => $nome,
                ':sobrenome_dep' => $sobrenome,
                ':CPF_dep' => $cpf,
                ':RG_dep' => $rg,
                ':dt_nasc' => $dtnsc,
                ':celular_dep' => $celular,
                ':genero' => $genero,
                ':parentesco' => $parentesco,
                ':id_contr_FK' => $_SESSION['contr_id']
            );

            $lastIdDependente = $db->insert($sqlDependente, $parametrosDependente);

            /*------------------------------------------------------------------*/
            
            $cep = $_POST['CEP_dep'];
            $estado = $_POST['estado_dep'];
            $cidade = $_POST['cidade_dep'];
            $bairro = $_POST['bairro_dep'];
            $endereco = $_POST['end_dep'];
            $numero = $_POST['numero_dep'];
            $complemento = $_POST['complemento_dep'];

            $sqlEndereco = "INSERT INTO enderecoContratante (CEP_dep, estado_dep, cidade_dep, bairro_dep, end_dep, numero_dep, complemento_dep, id_dep_FK) 
            VALUES (:CEP_dep, :estado_dep, :cidade_dep, :bairro_dep, :end_dep, :numero_dep, :complemento_dep, :id_dep_FK)";

            $parametrosEndereco = array(
            ':CEP_dep' => $cep,
            ':estado_dep' => $estado,
            ':cidade_dep' => $cidade,
            ':bairro_dep' => $bairro,
            ':end_dep' => $endereco,
            ':numero_dep' => $numero,
            ':complemento_dep' => $complemento,
            ':id_dep_FK' => $lastIdDependente
            );

            $resultEndereco = $db->insert($sqlEndereco, $parametrosEndereco);

            /*------------------------------------------------------------------*/

            $comorbidades = ['comorbidades_dep'];
            $alergias = ['alergias_dep'];
            $rotina = ['rotina_dep'];

            $sqlInfoMedDependentes = "INSERT INTO infoMedDependente (comorbidades_dep, alergias_dep, rotina_dep, id_dep_FK)
                VALUES (:comorbidades_dep, :alergias_dep, :rotina_dep, :id_dep_FK)";

            $parametrosInfoMedDependentes = array(
                ':comorbidades_dep' => $comorbidades,
                ':alergias_dep' => $alergias,
                ':rotina_dep' => $rotina,
                'id_dep_FK' => $lastIdDependente
            );

            $resultInfoMedDependentes = $db->insert($sqlInfoMedDependentes, $parametrosInfoMedDependentes);

            /*------------------------------------------------------------------*/

            $nomeMed = ['nomeMed'];
            $horaMed = ['horaMed'];
            $diaMed = ['diaMed'];

            $sqlMedicamentosDependente = "INSERT INTO medicamentoDependente (nomeMed, horaMed, diaMed, id_dep_FK)
                VALUES (:nomeMed, :horaMed, :diaMed, :id_dep_FK)";
            
            $parametrosMedicamentosDependente = array(
                ':nomeMed' => $nomeMed,
                ':horaMed' => $horaMed,
                ':diaMed' => $diaMed,
                ':id_dep_FK' => $lastIdDependente
            );

            $resultMedicamentosDependente = $dp->insert($sqlMedicamentosDependente, $parametrosMedicamentosDependente);

            
            if ($lastIdDependente !== false && $resultEndereco !== false && $resultInfoMedDependentes !== false && $resultMedicamentosDependente !== false) {
                $db->confirmarTransacao();
                echo "Cadastro realizado com sucesso! Último ID inserido: $lastIdCuidador <br>";
                header('Location: /editarinfodep/{id:[0-9]+}/');
            } else {
                $db->cancelarTransacao();
                echo "Erro ao cadastrar. Por favor, tente novamente.";
            }
        }catch (\PDOException $e) {
            $db->cancelarTransacao();
            $db->desligar();
            echo "Cadastro cancelado <br>";
            echo "Erro: " . $e->getMessage();
        }
    }
}