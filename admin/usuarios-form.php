<?php
$is_edit = isset($user) && !empty($user);
$nome = $is_edit ? htmlspecialchars($user['nome']) : '';
$email = $is_edit ? htmlspecialchars($user['email']) : '';
$nivel = $is_edit ? htmlspecialchars($user['nivel']) : 'admin';
$action = $is_edit ? "?pg=usuarios-alterar&id={$user['id']}" : "?pg=usuarios-cadastro";
?>

<h3><?php echo $is_edit ? 'Alterar usuário' : 'Cadastrar usuário'; ?></h3>
<form method="post" action="<?php echo $action; ?>">
    <label>Nome:<br><input type="text" name="nome" required value="<?php echo $nome; ?>"></label><br><br>
    <label>Email:<br><input type="email" name="email" required value="<?php echo $email; ?>"></label><br><br>
    <label>Senha:<br><input type="password" name="senha" <?php echo $is_edit ? '' : 'required'; ?>></label><br><br>
    <label>Nível:<br>
        <select name="nivel">
            <option value="admin" <?php echo $nivel=='admin' ? 'selected' : ''; ?>>Admin</option>
            <option value="editor" <?php echo $nivel=='editor' ? 'selected' : ''; ?>>Editor</option>
        </select>
    </label><br><br>
    <button type="submit"><?php echo $is_edit ? 'Salvar' : 'Cadastrar'; ?></button>
</form>