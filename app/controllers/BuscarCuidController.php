<?php

namespace app\controllers;

use classes\Database;
use PDO;
use PDOException;

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if (isset($_POST['buscando']) && $_POST['buscando'] === 'buscarr') {
        BuscarCuidController::buscarFiltro();
    }
}




class BuscarCuidController
{
    function indexBuscarCuid(int $id)
    {
        require 'app/layouts/BuscarCuidadores.php';
    }
    
    public static function buscarFiltro()
{
    global $estado, $cidade, $genero, $sqlfiltro;
    
    if (isset($_POST['estado'], $_POST['cidade'], $_POST['genero'], $_POST['buscando']) && $_POST['buscando'] === 'buscarr') {
        
        // Obtém os valores dos campos do formulário
        $estado = $_POST['estado'];
        $cidade = $_POST['cidade'];
        $genero = $_POST['genero'];

        // Construa a consulta SQL para buscar os cuidadores
        $sqlfiltro = "
            SELECT ic.nome_completo_cuid, ic.id, ic.foto_perfil, ic.genero, ic.email_cuid, ic.celular_cuid, ic.dt_nasc, ic.senha_cuid,
                   ec.CEP_cuid, ec.estado_cuid, ec.cidade_cuid, ec.bairro_cuid, ec.end_cuid, ec.numero_cuid, ec.complemento_cuid,
                   if.id_cuid_FK, if.rg_frente, if.rg_verso, if.curriculo, if.certificado, if.sobre_txt
            FROM infoCuidador ic
            JOIN enderecoCuidador ec ON ic.id = ec.infoCuidador_id
            JOIN infoCurricular if ON ic.id = if.id_cuid_FK
            WHERE ec.estado_cuid = :estado
            AND ec.cidade_cuid = :cidade
            AND ic.genero = :genero
        ";

    } else {
        echo "Alguma informação do formulário está ausente.";
    }
}
}


/*------------------------------------------------------------------*/
$conexaoPesquisa = new PDO('mysql:host=localhost;dbname=tohelpdb', 'root', '2004', [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ]);

$prepare = $conexaoPesquisa->prepare("SELECT id, nome_completo_cuid FROM infoCuidador WHERE id LIKE :busca OR nome_completo_cuid LIKE :busca");
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

/*------------------------------------------------------------------*/

/*try {
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
        if (!empty($cuidador)) {
            foreach ($cuidador as $opcao) {
    ?>
                <option value="<?php echo htmlspecialchars($opcao['id']) ?>"><?php echo htmlspecialchars($opcao['nome_cuid'] . ' ' . $opcao['sobrenome_cuid']) ?></option>
<?php
            }
        }
    }
} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}*/

/*------------------------------------------------------------------*/
