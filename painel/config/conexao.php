<?php
$caminhoEnv = dirname(__DIR__, 2) . '/.env';

if (file_exists($caminhoEnv)) {
  foreach (file($caminhoEnv, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES) as $linha) {
    if (strpos(trim($linha), '#') !== 0 && strpos($linha, '=') !== false) {
      list($chave, $valor) = explode('=', $linha, 2);
      $_ENV[trim($chave)] = trim(trim($valor), '"\'');
    }
  }
}

$conexao = new mysqli(
  $_ENV['DB_HOST'],
  $_ENV['DB_USER'],
  $_ENV['DB_PASS'],
  $_ENV['DB_NAME'],
  (int)($_ENV['DB_PORT'])
);

if ($conexao->connect_errno) {
  echo "Erro ao conectar: " . $conexao->connect_error;
}
