<?php
include_once '../config.inc.php';
$sql = "CREATE TABLE IF NOT EXISTS usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(150) NOT NULL,
    email VARCHAR(200) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL,
    nivel VARCHAR(50) NOT NULL DEFAULT 'admin',
    criado_em TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4";

if(mysqli_query($conexao, $sql)){
    echo "<p>Tabela 'usuarios' criada (ou já existente).</p>";
} else {
    echo "<p>Erro ao criar tabela: " . mysqli_error($conexao) . "</p>";
}
echo "<p><a href='?pg=usuarios-admin'>Voltar</a></p>";
?>