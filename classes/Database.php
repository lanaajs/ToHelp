<?php 

   namespace classes;

    class Database{
        private $ligacao;

        private function ligar(){
            require '../Config.php';           
            $dsn = "mysql:host=$host;dbname=$db;charset=UTF8";
            try {
                $this->ligacao = new \PDO($dsn, $user, $password); // Use o namespace completo \PDO
                
                if ($this->ligacao) {
                    echo "";
                }
            } catch (\PDOException $e) { // Use o namespace completo \PDOException
                echo $e->getMessage();
            }
        }

        private function desligar(){
            $this->ligacao = null;
        }

        public function select($sql, $parametros = null){
            $this->ligar();
            $resultados = null;

            try{
                if(!empty($parametros)){
                    $executar = $this->ligacao->prepare($sql);
                    $executar->execute($parametros);
                    $resultados = $executar->fetchAll(\PDO::FETCH_CLASS); 
                }else{
                    $executar = $this->ligacao->prepare($sql);
                    $executar->execute();
                    $resultados = $executar->fetchAll(\PDO::FETCH_CLASS);
                }
            }catch(\PDOException $e){ 
        
            }

            $this->desligar();

            return $resultados;
        }
    }
