<?php
include(__DIR__ . '/../config.inc.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM usuarios WHERE id = $id";
    $resultado = mysqli_query($conexao, $sql);
    $usuario = mysqli_fetch_assoc($resultado);
}

if (isset($_POST['atualizar'])) {
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];

    $sql = "UPDATE usuarios SET nome='$nome', email='$email' WHERE id=$id";
    mysqli_query($conexao, $sql);

    header("Location: index.php?msg=atualizado");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuário</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="card">
            <h2>Editar Usuário</h2>

            <form method="POST" action="editar.php">
                <input type="hidden" name="id" value="<?php echo $usuario['id']; ?>">

                <label>Nome:</label>
                <input type="text" name="nome" value="<?php echo $usuario['nome']; ?>" required>

                <label>Email:</label>
                <input type="email" name="email" value="<?php echo $usuario['email']; ?>" required>

                <button type="submit" name="atualizar" class="btn-salvar">Salvar</button>
                <a href="index.php" class="btn-voltar">Voltar</a>
            </form>
        </div>
    </div>
</body>
</html>
