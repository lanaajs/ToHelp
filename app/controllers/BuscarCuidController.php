<?php

namespace app\controllers;

use classes\Database;
use PDO;
use PDOException;

$conexaoPesquisa = new PDO('mysql:host=localhost;dbname=tohelpdb', 'root', 'Divergente2@X', [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ]);

$prepare = $conexaoPesquisa->prepare("SELECT id, nome_completo_cuid FROM infoCuidador WHERE id LIKE :busca OR nome_completo_cuid LIKE :busca");
if (isset($_GET['busca'])) {
    $prepare->execute(['busca' =>  $_GET['busca'] . '%']);
    $BuscarCuidController = $prepare->fetchAll();
    echo json_encode($BuscarCuidController);
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

try {
    $estado = $conexaoPesquisa->prepare("SELECT nome FROM estados WHERE id = :id");

    if (isset($_GET['estado']) && is_numeric($_GET['estado'])) {
        $estado->execute(['id' => $_GET['estado']]);
        $nomeEstado = $estado->fetchColumn(); // Obtém o valor do estado
    }

    $prepare = $conexaoPesquisa->prepare("SELECT infoCuidador.id, 
    infoCuidador.nome_cuid, 
    infoCuidador.sobrenome_cuid
    FROM infoCuidador  
    INNER JOIN enderecoCuidador
    ON infoCuidador.id = enderecoCuidador.infoCuidador_id WHERE estado_cuid = :estado");

    // 2. Segurança: Usar $nomeEstado em vez de $estado
    if (isset($_GET['estado']) && is_numeric($_GET['estado'])) {
        $prepare->execute(['estado' => $nomeEstado]); // Use $nomeEstado em vez de $estado
        $cuidador = $prepare->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($cuidador);

        // 5. Saída HTML: Aplicar htmlspecialchars
        foreach ($cuidador as $opcao) {
            ?>
            <option value="<?php echo htmlspecialchars($opcao['id']) ?>"><?php echo htmlspecialchars($opcao['nome_cuid'] . ' ' . $opcao['sobrenome_cuid']) ?></option>
        <?php
        }
    }
} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}


/*------------------------------------------------------------------*/

class BuscarCuidController
{
    function indexBuscarCuid(int $id)
    {
        require 'app/layouts/BuscarCuidadores.php';
    }
}
