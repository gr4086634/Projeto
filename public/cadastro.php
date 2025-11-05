<?php
include_once __DIR__ . '/../config.inc.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome  = mysqli_real_escape_string($conexao, $_POST['nome']);
    $email = mysqli_real_escape_string($conexao, $_POST['email']);
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
    $nivel = 'editor';

    $sql = "INSERT INTO usuarios (nome, email, senha, nivel) VALUES ('$nome','$email','$senha','$nivel')";

    try {
        if (mysqli_query($conexao, $sql)) {
            echo "<div class='alert-center success'>✅ Usuário cadastrado com sucesso!<br>Redirecionando...</div>";
            echo "<script>setTimeout(function(){window.location='index.php';},2000);</script>";

            exit;
        }
    } catch (mysqli_sql_exception $e) {
        if (str_contains($e->getMessage(), "Duplicate entry")) {
            echo "<div class='alert-center error'>⚠️ Este e-mail já está cadastrado!<br>Tente outro endereço.</div>";
        } else {
            echo "<div class='alert-center error'>❌ Erro ao cadastrar: " . $e->getMessage() . "</div>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Cadastrar Usuário</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="cadastro-container">
    <h2>Cadastrar Novo Usuário</h2>
    <form method="post" class="cadastro-form">
      <label>Nome:</label>
      <input type="text" name="nome" required>

      <label>Email:</label>
      <input type="email" name="email" required>

      <label>Senha:</label>
      <input type="password" name="senha" required>

      <button type="submit" class="btn-cadastrar">Cadastrar</button>
      <a href="index.php" class="btn-voltar">Voltar</a>
    </form>
  </div>
</body>
</html>
