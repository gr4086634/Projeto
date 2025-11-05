<?php
include_once '../config.inc.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $nome = mysqli_real_escape_string($conexao, $_POST['nome']);
    $email = mysqli_real_escape_string($conexao, $_POST['email']);
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
    $nivel = mysqli_real_escape_string($conexao, $_POST['nivel']);

    $sql = "INSERT INTO usuarios (nome, email, senha, nivel) VALUES ('$nome','$email','$senha','$nivel')";
    if(mysqli_query($conexao, $sql)){
        echo "<p>Usuário cadastrado com sucesso. <a href='?pg=usuarios-admin'>Voltar</a></p>";
    } else {
        echo "<p>Erro ao cadastrar: " . mysqli_error($conexao) . "</p>";
    }
    exit;
}

include_once 'usuarios-form.php';
?>