<?php
include_once '../config.inc.php';

echo "<h2>Mensagens Recebidas</h2>";

$sql = "SELECT * FROM mensagens ORDER BY id DESC";
$res = mysqli_query($conexao, $sql);

if (mysqli_num_rows($res) > 0) {
    echo "<table border='1' cellpadding='8' style='border-collapse:collapse; margin-top:10px; width:100%;'>";
    echo "<tr><th>ID</th><th>Nome</th><th>Email</th><th>Assunto</th><th>Mensagem</th><th>Data</th><th>Ação</th></tr>";
    while ($row = mysqli_fetch_assoc($res)) {
        echo "<tr>";
        echo "<td>{$row['id']}</td>";
        echo "<td>{$row['nome']}</td>";
        echo "<td>{$row['email']}</td>";
        echo "<td>{$row['assunto']}</td>";
        echo "<td>{$row['mensagem']}</td>";
        echo "<td>{$row['criado_em']}</td>";
        echo "<td><a href='?pg=mensagens-excluir&id={$row['id']}' onclick=\"return confirm('Excluir mensagem?')\">Excluir</a></td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "<p>Nenhuma mensagem recebida.</p>";
}
?>