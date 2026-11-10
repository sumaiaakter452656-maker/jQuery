<?php
/* ---------------------------------------------------------
   Public layout — top part.
   Page must set: $pageTitle, $active (home|jobs|companies|contact|components)
   --------------------------------------------------------- */
$navItems = [
    'home'       => ['Home',      'index.php'],
    'jobs'       => ['Find Jobs', 'jobs.php'],
    'companies'  => ['Companies', 'companies.php'],
    'contact'    => ['Contact',   'contact.php'],
    'components' => ['UI Kit',    'components.php'],
];
$loggedIn = isset($_SESSION['user']);
include __DIR__ . '/head.php';
?>
<body>
<header class="navbar">
  <div class="container">
    <?php include __DIR__ . '/logo.php'; ?>
    <button class="icon-btn nav-toggle" data-nav-toggle aria-label="Menu"><?= icon('menu') ?></button>
    <ul class="nav-links">
      <?php foreach ($navItems as $key => [$label, $link]): ?>
        <li><a href="<?= url($link) ?>" class="<?= is_active($key) ?>"><?= e($label) ?></a></li>
      <?php endforeach; ?>
    </ul>
    <div class="nav-actions">
      <?php if ($loggedIn): ?>
        <a href="<?= url($_SESSION['user']['role'] . '/dashboard.php') ?>" class="btn btn-light">Dashboard</a>
        <a href="<?= url('logout.php') ?>" class="btn btn-ghost">Logout</a>
      <?php else: ?>
        <a href="<?= url('login.php') ?>" class="btn btn-ghost">Log in</a>
        <a href="<?= url('register.php') ?>" class="btn btn-light">Sign up</a>
      <?php endif; ?>
      <a href="<?= url('employer/post-job.php') ?>" class="btn btn-primary">Post a Job</a>
    </div>
  </div>
</header>
<main>
