<?php
include_once '../config.inc.php';
if(empty($_GET['id'])){ echo "<p>ID não informado.</p>"; exit; }
$id = intval($_GET['id']);
$sql = "DELETE FROM usuarios WHERE id=$id";
if(mysqli_query($conexao, $sql)){
    echo "<p>Usuário excluído. <a href='?pg=usuarios-admin'>Voltar</a></p>";
} else {
    echo "<p>Erro: " . mysqli_error($conexao) . "</p>";
}
?>