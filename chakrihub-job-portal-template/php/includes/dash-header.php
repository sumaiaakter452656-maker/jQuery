<?php /* Dashboard header — needs $pageTitle, $active, $role (employer|seeker|admin) */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= htmlspecialchars($pageTitle ?? 'ChakriHub') ?> | ChakriHub</title>
  <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/style.css">
</head>
<body class="dash-body">
<?php include __DIR__ . '/sidebar-' . ($role ?? 'seeker') . '.php'; ?>

<div class="dash-main">
  <!-- ================= TOPBAR ================= -->
  <header class="topbar">
    <button class="icon-btn sidebar-toggle" data-sidebar-toggle aria-label="Menu"><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><line x1="3" y1="12" x2="21" y2="12"/><line x1="3" y1="6" x2="21" y2="6"/><line x1="3" y1="18" x2="21" y2="18"/></svg></button>
    <h1 class="topbar-title"><?= htmlspecialchars($pageTitle ?? 'ChakriHub') ?></h1>
    <div class="topbar-search input-icon"><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg><input type="search" class="form-control" placeholder="Search..."></div>
    <button class="icon-btn notif" aria-label="Notifications"><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"/><path d="M13.73 21a2 2 0 0 1-3.46 0"/></svg><span class="dot"></span></button>
    <div class="dropdown">
      <button class="dropdown-toggle">
        <span class="avatar sm"><?= strtoupper(substr($_SESSION['user_name'] ?? 'G', 0, 1)) ?></span>
        <span class="user-meta"><strong><?= htmlspecialchars($_SESSION['user_name'] ?? 'Guest User') ?></strong><small><?= ucfirst($role ?? 'user') ?></small></span>
      </button>
      <div class="dropdown-menu">
        <a href="#"><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>My Profile</a>
        <a href="#"><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><line x1="4" y1="21" x2="4" y2="14"/><line x1="4" y1="10" x2="4" y2="3"/><line x1="12" y1="21" x2="12" y2="12"/><line x1="12" y1="8" x2="12" y2="3"/><line x1="20" y1="21" x2="20" y2="16"/><line x1="20" y1="12" x2="20" y2="3"/><line x1="1" y1="14" x2="7" y2="14"/><line x1="9" y1="8" x2="15" y2="8"/><line x1="17" y1="16" x2="23" y2="16"/></svg>Settings</a>
        <hr>
        <a href="<?= BASE_URL ?>login.php"><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"/><polyline points="16 17 21 12 16 7"/><line x1="21" y1="12" x2="9" y2="12"/></svg>Logout</a>
      </div>
    </div>
  </header>
  <main class="dash-content">
