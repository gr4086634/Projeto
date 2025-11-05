<?php
// Admin index moved to /admin/
include_once '../config.inc.php';
?>
<!doctype html>
<html lang="pt-br">
<head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1">
<title>Painel Admin</title>
<link rel="stylesheet" href="../assets/style.css">
<style>.container{max-width:1100px;margin:20px auto;padding:20px;} .card{padding:18px;border-radius:12px;}</style>
</head>
<body>
<header class="site-top container card"><h1>Painel Administrativo</h1></header>
<main class="container"><div class="card">
<?php
  // simple router using ?pg=filename (without .php)
  if(empty($_GET['pg'])){
     echo "<h3>Bem-vindo ao painel admin.</h3>";
     echo "<p>Acesse as áreas: <a href='?pg=clientes-admin'>Clientes</a> | <a href='?pg=usuarios-admin'>Usuários</a> | <a href='?pg=mensagens-admin'>Mensagens</a></p>";
  } else {
      $safe = basename($_GET['pg']);
      if(pathinfo($safe, PATHINFO_EXTENSION) === '') $safe .= '.php';
      $path = __DIR__ . '/' . $safe;
      if(file_exists($path)){
          include $path;
      } else {
          echo '<p>Arquivo não encontrado: '.htmlspecialchars($safe).'</p>';
      }
  }
?>
</div></main>
<footer class="site-footer container"><p style="margin:0">Painel Administrativo</p></footer>
</body></html>
