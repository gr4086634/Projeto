<?php
include_once '../config.inc.php';

echo "<h2>Usuários (Admin)</h2>";
echo "<a href='?pg=usuarios-cadastro'>Cadastrar novo usuário</a> | ";
echo "<a href='?pg=usuarios-init'>Criar tabela (se necessário)</a>";

$sql = "SELECT id, nome, email, nivel FROM usuarios ORDER BY id DESC";
$res = mysqli_query($conexao, $sql);
echo "<table border='1' cellpadding='6' style='border-collapse:collapse; margin-top:10px;'>";
echo "<tr><th>ID</th><th>Nome</th><th>Email</th><th>Nível</th><th>Ações</th></tr>";
while($row = mysqli_fetch_assoc($res)){
    echo "<tr>";
    echo "<td>{$row['id']}</td>";
    echo "<td>{$row['nome']}</td>";
    echo "<td>{$row['email']}</td>";
    echo "<td>{$row['nivel']}</td>";
    echo "<td><a href='?pg=usuarios-alterar&id={$row['id']}'>Editar</a> | <a href='?pg=usuarios-excluir&id={$row['id']}' onclick=\"return confirm('Excluir usuário?')\">Excluir</a></td>";
    echo "</tr>";
}
echo "</table>";
?>