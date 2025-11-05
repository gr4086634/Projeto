<?php
include_once '../config.inc.php';

if (empty($_GET['id'])) {
    echo "<p>ID não informado.</p>";
    exit;
}

$id = intval($_GET['id']);
$sql = "DELETE FROM mensagens WHERE id=$id";

if (mysqli_query($conexao, $sql)) {
    echo "<p>Mensagem excluída. <a href='?pg=mensagens-admin'>Voltar</a></p>";
} else {
    echo "<p>Erro ao excluir: " . mysqli_error($conexao) . "</p>";
}
?>