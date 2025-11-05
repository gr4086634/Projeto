<?php
include_once '../config.inc.php';
?>
<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Gestão de Usuários — Público</title>
  <link rel="stylesheet" href="../assets/style.css">
  <style>
    header.pub-top { padding:18px; margin-bottom:18px; border-radius:12px; }
    nav.pub-menu ul{ display:flex; gap:14px; list-style:none; padding:0; margin:0; }
    nav.pub-menu a{ padding:8px 12px; border-radius:8px; background:rgba(255,255,255,0.02); color:var(--text); text-decoration:none; }
    .content{ margin-top:20px; }
  </style>
</head>
<body>
  <div class='container-card'>
<header class="site-top container card pub-top">
    <div style="display:flex;justify-content:space-between;align-items:center">
      <h1 style="margin:0">Gestão de Usuários</h1>
      <nav class="pub-menu">
        <ul>
          <li><a href="index.php">Lista de Usuários</a></li>
          <li><a href="cadastro.php">Cadastrar Usuário</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <main class="container">
    <div class="card content">
      <?php
        // Default: include list.php
        include 'list.php';
      ?>
    </div>
  </main>

  <footer class="site-footer container">
    <p style="margin:0">Área pública — Gestão de Usuários</p>
  </footer>
</div>
</body>
</html>
