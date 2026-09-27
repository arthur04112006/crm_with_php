<?php
include "conn.php";


$id = $_GET["id"];
$query = "SELECT * FROM usuarios WHERE id = ?";
$stmt = $conexao->prepare($query);
$stmt->bind_param("i", $id);
$stmt->execute();
$resultado = $stmt->get_result();
$lead = $resultado->fetch_assoc();
?>

<form method="POST" action="atualizar.php">
    <input type="hidden" name="id" value="<?php echo $lead['id']; ?>">
    <input type="text" name="nome" value="<?php echo $lead['nome']; ?>">
    <input type="email" name="email" value="<?php echo $lead['email']; ?>">
    <input type="text" name="telefone" value="<?php echo $lead['telefone']; ?>">
    <input type="text" name="cep" value="<?php echo $lead['cep']; ?>">
    <input type="text" name="cidade" value="<?php echo $lead['cidade']; ?>">
    <input type="text" name="uf" value="<?php echo $lead['uf']; ?>">
    <input type="text" name="origem" value="<?php echo $lead['origem']; ?>">
    <button type="submit">Salvar</button>
</form>

