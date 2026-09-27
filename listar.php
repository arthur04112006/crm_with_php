<?php
include "conn.php";

$query_de_usuarios = "SELECT * FROM usuarios ORDER BY id DESC";
$resultado = $conexao->query($query_de_usuarios);
// $linha = $resultado->fetch_assoc();

// echo $linha["nome"];
// echo $linha["email"];
// echo $linha["telefone"];
// echo $linha["cep"];
// echo $linha["cidade"];
// echo $linha["uf"];

?>

<table border="1">
    <tr>
        <th>Nome</th>
        <th>Email</th>
        <th>Telefone</th>
        <th>CEP</th>
        <th>Cidade</th>
        <th>UF</th>
        <th>Origem</th>
    </tr>
    <?php while ($linha = $resultado->fetch_assoc()) { ?>
        <tr>
            <td><?php echo $linha["nome"]; ?></td>
            <td><?php echo $linha["email"]; ?></td>
            <td><?php echo $linha["telefone"]; ?></td>
            <td><?php echo $linha["cep"]; ?></td>
            <td><?php echo $linha["cidade"]; ?></td>
            <td><?php echo $linha["uf"]; ?></td>
            <td><?php echo $linha["origem"]; ?></td>
            <td><a href="excluir.php?id=<?php echo $linha['id']; ?>">Excluir</a></td>
            <td><a href="editar.php?id=<?php echo $linha['id']; ?>">Editar</a></td>
        </tr>
    <?php } ?>
</table>