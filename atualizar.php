<?php
include "conn.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];
    $cep = $_POST["cep"];
    $cidade = $_POST["cidade"];
    $uf = $_POST["uf"];
    $origem = $_POST["origem"];

    $sql = "UPDATE usuarios SET nome = ?, email = ?, telefone = ?, cep = ?, cidade = ?, uf = ?, origem = ? WHERE id = ?";
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("sssssssi", $nome, $email, $telefone, $cep, $cidade, $uf, $origem, $id);
    $stmt->execute();

    header("Location: listar.php");
}

?>