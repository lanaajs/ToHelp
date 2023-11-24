<?php

namespace app\controllers;

use classes\Database;
use PDO;
use PDOException;

$conexaoPesquisa = new PDO('mysql:host=localhost;dbname=tohelpdb', 'root', 'Divergente2@X', [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ]);

$prepare = $conexaoPesquisa->prepare("SELECT ic.nome_cuid, ic.sobrenome_cuid, fpc.foto_cuid, icc.sobre_txt FROM infoCuidador ic
INNER JOIN infoCurricular icc ON ic.id = icc.id_cuid_FK 
INNER JOIN fotoPerfilCuid fpc ON ic.id = fpc.id_cuid_FK 
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

try {
    $estado = $conexaoPesquisa->prepare("SELECT nome FROM estados WHERE id = :id");

    if (isset($_GET['estado']) && is_numeric($_GET['estado'])) {
        $estado->execute(['id' => $_GET['estado']]);
        $nomeEstado = $estado->fetchColumn(); // Obtém o valor do estado
    }

    $prepare = $conexaoPesquisa->prepare("SELECT 
    infoCuidador.id, 
    infoCuidador.nome_cuid, 
    infoCuidador.sobrenome_cuid,
    infoCuidador.nome_completo_cuid,
    infoCurricular.sobre_txt
    FROM infoCuidador  
    INNER JOIN enderecoCuidador ON infoCuidador.id = enderecoCuidador.infoCuidador_id 
    INNER JOIN infoCurricular ON infoCuidador.id = infoCurricular.id_cuid_FK
    WHERE estado_cuid = :estado");

    // 2. Segurança: Usar $nomeEstado em vez de $estado
    if (isset($_GET['estado']) && is_numeric($_GET['estado'])) {
        $prepare->execute(['estado' => $nomeEstado]); // Use $nomeEstado em vez de $estado
        $cuidador = $prepare->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($cuidador);
        // 5. Saída HTML: Aplicar htmlspecialchars
        foreach ($cuidador as $opcao) {
    ?>
            <?php echo htmlspecialchars($opcao['nome_completo_cuid']) ?>
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
