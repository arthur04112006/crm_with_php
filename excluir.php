<?php
include "conn.php";

$id =$_GET["id"];

$query_para_deletar = "DELETE FROM usuarios WHERE id = ?";
$stmt = $conexao->prepare($query_para_deletar);
$stmt->bind_param("i", $id);
$stmt->execute();


header("Location: listar.php")

?>