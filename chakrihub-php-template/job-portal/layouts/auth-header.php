<?php
/* ---------------------------------------------------------
   Auth layout (login / register / forgot) — top part.
   Page sets $pageTitle. Set $authSide = false to hide the green side panel.
   --------------------------------------------------------- */
$authSide = $authSide ?? true;
include __DIR__ . '/head.php';
?>
<body class="auth-body">
<?php if ($authSide): ?>
<div class="auth-wrap">
  <aside class="auth-side">
    <a href="<?= url('index.php') ?>" class="logo"><span class="logo-mark">C</span><?= SITE_NAME ?></a>
    <div>
      <h2>Your next career move starts here.</h2>
      <ul>
        <?php foreach (['12,000+ verified jobs', 'One-click apply with your saved CV', 'Track every application live'] as $point): ?>
          <li><?= icon('check') ?> <?= e($point) ?></li>
        <?php endforeach; ?>
      </ul>
    </div>
    <p class="small mb-0">&copy; <?= date('Y') ?> <?= SITE_NAME ?></p>
  </aside>
  <main class="auth-main">
    <div class="auth-card">
      <?php component('flash'); ?>
<?php endif; ?>
