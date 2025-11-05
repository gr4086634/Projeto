<?php
include(__DIR__ . '/../config.inc.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM usuarios WHERE id = $id";
    $resultado = mysqli_query($conexao, $sql);
    $usuario = mysqli_fetch_assoc($resultado);
}

if (isset($_POST['confirmar'])) {
    $id = $_POST['id'];
    $sql = "DELETE FROM usuarios WHERE id = $id";
    mysqli_query($conexao, $sql);

    header("Location: index.php?msg=excluido");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir Usuário</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="card">
            <h2>Excluir Usuário</h2>
            <p>Tem certeza que deseja excluir o usuário <strong><?php echo $usuario['nome']; ?></strong>?</p>

            <form method="POST" action="excluir.php">
                <input type="hidden" name="id" value="<?php echo $usuario['id']; ?>">

                <button type="submit" name="confirmar" class="btn-excluir">Excluir</button>
                <a href="index.php" class="btn-voltar">Cancelar</a>
            </form>
        </div>
    </div>
</body>
</html>
