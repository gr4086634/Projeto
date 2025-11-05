<?php

?>
<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Sistema de Gestão de Usuários</title>
  <link rel="stylesheet" href="assets/style.css">
  <style>
    body{display:flex;align-items:center;justify-content:center;height:100vh;margin:0;}
    .box{width:980px;padding:28px;border-radius:14px;background:linear-gradient(180deg, rgba(255,255,255,0.02), rgba(255,255,255,0.01));box-shadow:0 10px 40px rgba(2,6,23,0.7);}
    .hero{display:flex;justify-content:space-between;align-items:center;gap:20px;}
    .title{max-width:65%;}
    h1{margin:0 0 8px 0;font-size:32px;}
    p.lead{margin:0 0 16px 0;color:var(--muted);}
    .actions{display:flex;gap:12px;}
    .btn{padding:12px 18px;border-radius:10px;background:linear-gradient(90deg,var(--accent),var(--accent-2));color:#051126;text-decoration:none;font-weight:600;}
  </style>
</head>
<body>
  <div class="box card container">
    <div class="hero">
      <div class="title">
        <h1>Sistema de Gestão de Usuários</h1>
        <p class="lead">Painel administrativo e área pública para cadastrar, listar, editar e excluir usuários. Use os botões abaixo para navegar.</p>
        <div class="actions">
          <a class="btn" href="admin/">Painel Administrativo</a>
          <a class="btn" href="public/">Área Pública</a>
        </div>
      </div>
      <div class="logo" style="text-align:center">
        <svg width="140" height="140" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <rect width="24" height="24" rx="6" fill="#061028"></rect>
          <path d="M12 7a3 3 0 100 6 3 3 0 000-6z" fill="#6be7ff"></path>
          <path d="M4 19a8 8 0 0116 0" stroke="#ff6b6b" stroke-width="1.2" stroke-linecap="round"></path>
        </svg>
      </div>
    </div>
  </div>
</body>
</html>
