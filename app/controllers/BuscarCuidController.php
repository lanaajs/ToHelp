<?php

namespace app\controllers;

use classes\Database;
use PDO;
use PDOException;

$conexaoPesquisa = new PDO('mysql:host=localhost;dbname=tohelpdb', 'root', 'Divergente2@X', [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ]);

$prepare = $conexaoPesquisa->prepare("SELECT ic.id, ic.nome_cuid, ic.sobrenome_cuid, fpc.foto_cuid, icc.sobre_txt FROM infoCuidador ic
INNER JOIN infoCurricular icc ON ic.id = icc.id_cuid_FK 
INNER JOIN fotoPerfilCuid fpc ON ic.id = fpc.id_cuid_FK 
INNER JOIN enderecoCuidador ec ON ic.id = ec.infoCuidador_id 
WHERE ic.nome_cuid LIKE :busca OR ic.sobrenome_cuid LIKE :busca");
if (isset($_GET['busca'])) {
    try {
        $prepare->execute(['busca' =>  $_GET['busca'] . '%']);
        $BuscarCuidController = $prepare->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($BuscarCuidController);
    } catch (PDOException $e) {
        echo "Erro: " . $e->getMessage();
    }
}

/*------------------------------------------------------------------*/

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

/*------------------------------------------------------------------*/

$cidade = $conexaoPesquisa->prepare("SELECT nome FROM cidades WHERE id = :id");

if (isset($_GET['cidade']) && is_numeric($_GET['cidade'])) {
    $cidade->execute(['id' => $_GET['cidade']]);
    $nomeCidade = $cidade->fetchColumn(); // Obtém o valor do estado
}

$prepare = $conexaoPesquisa->prepare("SELECT ic.id, ic.nome_cuid, ic.sobrenome_cuid, fpc.foto_cuid, icc.sobre_txt FROM infoCuidador ic
    INNER JOIN infoCurricular icc ON ic.id = icc.id_cuid_FK 
    INNER JOIN fotoPerfilCuid fpc ON ic.id = fpc.id_cuid_FK 
    INNER JOIN enderecoCuidador ec ON ic.id = ec.infoCuidador_id 
    INNER JOIN infoCurricular ON ic.id = infoCurricular.id_cuid_FK
    WHERE cidade_cuid = :cidade");
try {
    if (isset($_GET['cidade']) && is_numeric($_GET['cidade'])) {
        $prepare->execute(['cidade' => $nomeCidade]); // Use $nomeEstado em vez de $estado
        $CuidadorPorCidade = $prepare->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($CuidadorPorCidade);
    }
} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}

/*------------------------------------------------------------------*/

class BuscarCuidController
{
    function indexBuscarCuid(int $id)
    {
        require 'app/layouts/BuscarCuidador.php';
    }
}
