<?php
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/functions.php';
?>
<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<title>Login Seguro</title>
<link rel="stylesheet" href="/css/styles.css">
</head>
<body>
<nav>
<a href="index.php">Inicio</a>
<?php if(is_logged_in()): ?>
  <a href="dashboard.php">Panel</a>
  <a href="logout.php">Cerrar sesión</a>
<?php else: ?>
  <a href="register.php">Registro</a>
  <a href="login.php">Login</a>
<?php endif; ?>
</nav>
<main>
