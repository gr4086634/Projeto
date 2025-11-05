<?php

$res = mysqli_query($conexao, "SELECT * FROM usuarios ORDER BY id DESC");
if (mysqli_num_rows($res) > 0) {
    echo "<table border='1' cellpadding='8' style='border-collapse:collapse; width:100%;'>";
    echo "<tr><th>ID</th><th>Nome</th><th>Email</th><th>Ações</th></tr>";
    while ($row = mysqli_fetch_assoc($res)) {
        echo "<tr>";
        echo "<td>{$row['id']}</td>";
        echo "<td>{$row['nome']}</td>";
        echo "<td>{$row['email']}</td>";
        echo "<td><a href='editar.php?id={$row['id']}'>Editar</a> | <a href='excluir.php?id={$row['id']}' onclick=\"return confirm('Excluir este usuário?')\">Excluir</a></td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "<p>Nenhum usuário cadastrado.</p>";
}
?>