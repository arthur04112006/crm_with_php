<?php
$host = "localhost";
$banco = "crm";
$usuario = "root";
$senha = "";

$conexao = new mysqli($host, $usuario, $senha, $banco);

if ($conexao->connect_error) {
    die("Erro na conexão: " . $conexao->connect_error);
}
// echo "conectado bebe ;)";
$conexao->set_charset("utf8mb4");
?>