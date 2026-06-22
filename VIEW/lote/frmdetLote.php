<?php
$caminhoRaiz = '../../';
require_once __DIR__ . '/../../seguranca.php';
include_once __DIR__ . '/../../DAL/loteDAL.php';
include_once __DIR__ . '/../../MODEL/lote.php';

$id = $_GET['id'];

$dalLote = new DAL\LoteDAL();
$lote = $dalLote->SelectById($id);
$tituloPagina = 'Detalhes do Lote';
include __DIR__ . '/../../header.php';
?>
    <h3>Detalhes do Lote</h3>
    <div class="card">
        <div class="card-content">
    <table class="striped">
        <tr>
            <th>ID</th>
            <td><?= $lote->getId(); ?></td>
        </tr>
        <tr>
            <th>Nome</th>
            <td><?= $lote->getNome(); ?></td>
        </tr>
        <tr>
            <th>Cultura</th>
            <td><?= $lote->getCultura(); ?></td>
        </tr>
        <tr>
            <th>Área em hectares</th>
            <td><?= $lote->getAreaHectares(); ?></td>
        </tr>
        <tr>
            <th>Localização</th>
            <td><?= $lote->getLocalizacao(); ?></td>
        </tr>
    </table>

    <br>
    <a class="btn grey" href="lstLote.php">Voltar</a>
        </div>
    </div>

<?php include __DIR__ . '/../../footer.php'; ?>
