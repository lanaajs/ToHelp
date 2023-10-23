<?php

namespace classes;

use Exception;

class Database
{
    public $ligacao;


    // se liga ao banco de dados
    public function ligar()
    {
        try {
            $host = "localhost";
            $user = "root";
            $password = "Divergente2@X";
            $db = "tohelpdb";

            $dsn = "mysql:host=$host;dbname=$db;charset=UTF8";
            $this->ligacao = new \PDO($dsn, $user, $password);
        } catch (\PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }
    }
    //desliga-se do banco de dados
    public function desligar()
    {
        $this->ligacao = null;
    }

    public function select($sql, $parametros = null)
    {

        if (!preg_match("/^SELECT/i", $sql)) { //checa se a instrução passada é um SELECT
            throw new Exception('A instrução não é um SELECT');
        }

        $this->ligar();
        $resultados = null;

        try {
            if (!empty($parametros)) {
                $executar = $this->ligacao->prepare($sql);
                $executar->execute($parametros);
                $resultados = $executar->fetchAll(\PDO::FETCH_CLASS);
            } else {
                $executar = $this->ligacao->prepare($sql);
                $executar->execute();
                $resultados = $executar->fetchAll(\PDO::FETCH_CLASS);
            }
        } catch (\PDOException $e) {
            return false;
        }

        $this->desligar();

        return $resultados;
    }

    public function insert($sql, $parametros = null)
    {
        if (!preg_match("/^INSERT/i", $sql)) {
            throw new Exception('A instrução não é um INSERT');
        }

        $this->ligar();
        $resultados = null;

        try {
            if (!empty($parametros)) {
                $executar = $this->ligacao->prepare($sql);
                $executar->execute($parametros);
                $resultados = $executar->fetchAll(\PDO::FETCH_CLASS);
            } else {
                $executar = $this->ligacao->prepare($sql);
                $executar->execute();
                $resultados = $executar->fetchAll(\PDO::FETCH_CLASS);
            }

            $lastInsertId = (int)$this->ligacao->lastInsertId();
             // Obtém o último ID inserido
            $this->desligar();

            return $lastInsertId;
        } catch (\PDOException $e) {
            return false;
        }
    }

    public function update($sql, $parametros = null)
    {

        if (!preg_match("/^UPDATE/i", $sql)) { //checa se a instrução passada é um UPDATE
            throw new Exception('A instrução não é um UPDATE');
        }

        $this->ligar();
        $resultados = null;

        try {
            if (!empty($parametros)) {
                $executar = $this->ligacao->prepare($sql);
                $executar->execute($parametros);
                $resultados = $executar->fetchAll(\PDO::FETCH_CLASS);
            } else {
                $executar = $this->ligacao->prepare($sql);
                $executar->execute();
                $resultados = $executar->fetchAll(\PDO::FETCH_CLASS);
            }
        } catch (\PDOException $e) {
            return false;
        }

        $this->desligar();

        return $resultados;
    }

    public function statement($sql, $parametros = null)
    {

        if (preg_match("/^(SELECT|INSERT|UPDATE|DELETE)/i", $sql)) { //checa se é uma instrução SQL diferente das outras 
            throw new Exception('Instrução SQL inválida');
        }

        $this->ligar();
        $resultados = null;

        try {
            if (!empty($parametros)) {
                $executar = $this->ligacao->prepare($sql);
                $executar->execute($parametros);
                $resultados = $executar->fetchAll(\PDO::FETCH_CLASS);
            } else {
                $executar = $this->ligacao->prepare($sql);
                $executar->execute();
                $resultados = $executar->fetchAll(\PDO::FETCH_CLASS);
            }
        } catch (\PDOException $e) {
            return false;
        }

        $this->desligar();

        return $resultados;
    }

    public function delete($sql, $parametros = null)
    {

        if (!preg_match("/^DELETE/i", $sql)) { //checa se a instrução passada é um DELETE
            throw new Exception('A instrução não é um DELETE');
        }

        $this->ligar();
        $resultados = null;

        try {
            if (!empty($parametros)) {
                $executar = $this->ligacao->prepare($sql);
                $executar->execute($parametros);
                $resultados = $executar->fetchAll(\PDO::FETCH_CLASS);
            } else {
                $executar = $this->ligacao->prepare($sql);
                $executar->execute();
                $resultados = $executar->fetchAll(\PDO::FETCH_CLASS);
            }
        } catch (\PDOException $e) {
            return false;
        }

        $this->desligar();

        return $resultados;
    }
}
