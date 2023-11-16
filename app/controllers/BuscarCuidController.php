<?php

namespace app\controllers;

use classes\Database;
use PDO;

$conexaoPesquisa = new PDO('mysql:host=localhost;dbname=tohelpdb', 'root', '2004', [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ]);

$prepare = $conexaoPesquisa->prepare("SELECT id, nome_cuid, sobrenome_cuid FROM infoCuidador WHERE id LIKE :busca OR nome_cuid LIKE :busca OR sobrenome_cuid LIKE :busca");
if (isset($_GET['busca'])) {
    $prepare->execute(['busca' =>  $_GET['busca'] . '%']);
    $BuscarCuidController = $prepare->fetchAll();
    echo json_encode($BuscarCuidController);
}


$prepare = $conexaoPesquisa->prepare("SELECT id, nome FROM cidades WHERE id_estado=:id_estado ORDER BY nome ASC");
if (isset($_GET['estado'])) {
    $prepare->execute(['id_estado' => $_GET['estado']]);
}
$estados = $prepare->fetchAll(PDO::FETCH_ASSOC);

foreach ($estados as $opcao) {
?>
    <option value="<?php echo $opcao['id'] ?>"><?php echo $opcao['nome'] ?></option>
<?php
}


class BuscarCuidController
{
    function indexBuscarCuid(int $id)
    {
        require 'app/layouts/BuscarCuidadores.php';
    }
}
