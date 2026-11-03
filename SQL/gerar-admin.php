<?php
// Gera o INSERT do primeiro administrador, com a senha em hash (bcrypt).
// Uso: php SQL/gerar-admin.php "Nome" email@exemplo.com "senha-forte"
// A senha NÃO é salva em nenhum arquivo: só o hash aparece no comando impresso.

if (PHP_SAPI !== 'cli') {
    http_response_code(404);
    exit;
}

if ($argc !== 4) {
    fwrite(STDERR, 'Uso: php SQL/gerar-admin.php "Nome" email "senha"' . PHP_EOL);
    exit(1);
}

list(, $nome, $email, $senha) = $argv;

if (strlen($senha) < 10) {
    fwrite(STDERR, 'Use uma senha com pelo menos 10 caracteres.' . PHP_EOL);
    exit(1);
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    fwrite(STDERR, 'E-mail inválido.' . PHP_EOL);
    exit(1);
}

function aspas($valor)
{
    return "'" . str_replace(array('\\', "'"), array('\\\\', "\\'"), $valor) . "'";
}

$hash = password_hash($senha, PASSWORD_DEFAULT);

echo 'INSERT INTO `usuario` (`nome`, `email`, `senha`, `perfil`) VALUES ('
    . aspas($nome) . ', ' . aspas($email) . ', ' . aspas($hash) . ", 'admin');" . PHP_EOL;
