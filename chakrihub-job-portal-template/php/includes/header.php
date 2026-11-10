<?php /* Public header — needs $pageTitle, $active */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= htmlspecialchars($pageTitle ?? 'ChakriHub') ?> | ChakriHub</title>
  <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/style.css">
</head>
<body>
<!-- ================= NAVBAR ================= -->
<header class="navbar">
  <div class="container">
    <a href="<?= BASE_URL ?>index.php" class="logo"><span class="logo-mark">C</span>ChakriHub<span class="dot">.</span></a>
    <button class="icon-btn nav-toggle" data-nav-toggle aria-label="Menu"><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><line x1="3" y1="12" x2="21" y2="12"/><line x1="3" y1="6" x2="21" y2="6"/><line x1="3" y1="18" x2="21" y2="18"/></svg></button>
    <ul class="nav-links">
      <li><a href="<?= BASE_URL ?>index.php" class="<?= ($active ?? '') === 'home' ? 'active' : '' ?>">Home</a></li>
      <li><a href="<?= BASE_URL ?>jobs.php" class="<?= ($active ?? '') === 'jobs' ? 'active' : '' ?>">Find Jobs</a></li>
      <li><a href="<?= BASE_URL ?>companies.php" class="<?= ($active ?? '') === 'companies' ? 'active' : '' ?>">Companies</a></li>
      <li><a href="<?= BASE_URL ?>contact.php" class="<?= ($active ?? '') === 'contact' ? 'active' : '' ?>">Contact</a></li>
      <li><a href="<?= BASE_URL ?>components.php" class="<?= ($active ?? '') === 'components' ? 'active' : '' ?>">UI Kit</a></li>
    </ul>
    <div class="nav-actions">
      <a href="<?= BASE_URL ?>login.php" class="btn btn-ghost">Log in</a>
      <a href="<?= BASE_URL ?>register.php" class="btn btn-light">Sign up</a>
      <a href="<?= BASE_URL ?>employer/post-job.php" class="btn btn-primary">Post a Job</a>
    </div>
  </div>
</header>
<main>
