<?php
include_once '../config.inc.php';
if(empty($_GET['id'])){
    echo "<p>ID não informado.</p>"; exit;
}
$id = intval($_GET['id']);

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $nome = mysqli_real_escape_string($conexao, $_POST['nome']);
    $email = mysqli_real_escape_string($conexao, $_POST['email']);
    $nivel = mysqli_real_escape_string($conexao, $_POST['nivel']);

    $sql = "UPDATE usuarios SET nome='$nome', email='$email', nivel='$nivel' WHERE id=$id";
    if(!empty($_POST['senha'])){
        $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
        $sql = "UPDATE usuarios SET nome='$nome', email='$email', senha='$senha', nivel='$nivel' WHERE id=$id";
    }
    if(mysqli_query($conexao, $sql)){
        echo "<p>Usuário atualizado. <a href='?pg=usuarios-admin'>Voltar</a></p>";
    } else {
        echo "<p>Erro: " . mysqli_error($conexao) . "</p>";
    }
    exit;
}

$res = mysqli_query($conexao, "SELECT * FROM usuarios WHERE id=$id");
$user = mysqli_fetch_assoc($res);
if(!$user){ echo "<p>Usuário não encontrado.</p>"; exit; }
include_once 'usuarios-form.php';
?>