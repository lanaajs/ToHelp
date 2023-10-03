<?php

use classes\Database;

session_start();

require_once('../Config.php');

require_once('../vendor/autoload.php');

$bd = new Database();
try{
    $contratantes = $bd->select("SELECT * FROM infoContratante");
    echo "<pre>";
    print_r($contratantes);

}
catch (\PDOException $e){
    echo "Erro: " . $e->getMessage();
}


?>
