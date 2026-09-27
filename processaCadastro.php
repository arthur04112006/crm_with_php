<?php
include "conn.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];
    $cep = $_POST["cep"];
    $cidade = $_POST["cidade"];
    $uf = $_POST["uf"];
    $origem = $_POST["origem"];

    // Correção 1: Usar apenas '?' no VALUES
    $sql = "INSERT INTO usuarios (nome, email, telefone, cep, cidade, uf, origem) VALUES (?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conexao->prepare($sql);

    // Correção 2: Usar "sssssss" para corresponder às 7 variáveis de texto
    $stmt->bind_param("sssssss", $nome, $email, $telefone, $cep, $cidade, $uf, $origem);

    $stmt->execute();

    header("Location: listar.php");
}
echo "erro";
?>
