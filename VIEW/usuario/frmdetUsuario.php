<?php
$caminhoRaiz = '../../';
require_once __DIR__ . '/../../seguranca.php';
include_once __DIR__ . '/../../DAL/usuarioDAL.php';
include_once __DIR__ . '/../../MODEL/usuario.php';

$id = $_GET['id'];

$dalUsuario = new DAL\UsuarioDAL();
$usuario = $dalUsuario->SelectById($id);
$tituloPagina = 'Detalhes do Usuário';
include __DIR__ . '/../../header.php';
?>
    <h3>Detalhes do Usuário</h3>
    <div class="card">
        <div class="card-content">
    <table class="striped">
        <tr>
            <th>ID</th>
            <td><?= $usuario->getId(); ?></td>
        </tr>
        <tr>
            <th>Nome</th>
            <td><?= $usuario->getNome(); ?></td>
        </tr>
        <tr>
            <th>E-mail</th>
            <td><?= $usuario->getEmail(); ?></td>
        </tr>
        <tr>
            <th>Perfil</th>
            <td><?= $usuario->getPerfil(); ?></td>
        </tr>
    </table>

    <br>
    <a class="btn grey" href="lstUsuario.php">Voltar</a>
        </div>
    </div>

<?php include __DIR__ . '/../../footer.php'; ?>
