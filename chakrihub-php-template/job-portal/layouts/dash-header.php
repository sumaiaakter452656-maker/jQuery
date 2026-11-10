<?php
/* ---------------------------------------------------------
   Dashboard layout — top part (sidebar + topbar).
   Page must set: $pageTitle, $active, $role (employer|seeker|admin)
   --------------------------------------------------------- */
$role = $role ?? 'seeker';
$user = current_user($role);
include __DIR__ . '/head.php';
?>
<body class="dash-body">
<?php include __DIR__ . '/sidebar.php'; ?>
<div class="dash-main">
  <header class="topbar">
    <button class="icon-btn sidebar-toggle" data-sidebar-toggle aria-label="Menu"><?= icon('menu') ?></button>
    <h1 class="topbar-title"><?= e($pageTitle) ?></h1>
    <form class="topbar-search input-icon" action="<?= url('jobs.php') ?>" method="get">
      <?= icon('search') ?><input type="search" name="q" class="form-control" placeholder="Search...">
    </form>
    <button class="icon-btn notif" aria-label="Notifications"><?= icon('bell') ?><span class="dot"></span></button>
    <div class="dropdown">
      <button class="dropdown-toggle">
        <span class="avatar sm"><?= e(initials($user['name'])) ?></span>
        <span class="user-meta"><strong><?= e($user['name']) ?></strong><small><?= e($roleLabels[$role]) ?></small></span>
      </button>
      <div class="dropdown-menu">
        <a href="<?= url($role === 'employer' ? 'employer/company-profile.php' : ($role === 'seeker' ? 'seeker/profile.php' : 'admin/dashboard.php')) ?>"><?= icon('user') ?>My Profile</a>
        <a href="#"><?= icon('settings') ?>Settings</a>
        <hr>
        <a href="<?= url('logout.php') ?>"><?= icon('logout') ?>Logout</a>
      </div>
    </div>
  </header>
  <main class="dash-content">
    <?php component('flash'); ?>
