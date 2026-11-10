<?php
require_once __DIR__ . '/includes/config.php';
$pageTitle = 'Page Not Found';
$active    = '';
include __DIR__ . '/includes/auth-header.php';
?>

<div class="center-page">
  <div>
    <div class="big-code">404</div>
    <h1>Page not found</h1>
    <p class="muted">The page you're looking for doesn't exist or has been moved.</p>
    <a href="<?= BASE_URL ?>index.php" class="btn btn-primary">Back to home</a>
  </div>
</div>

<?php include __DIR__ . '/includes/auth-footer.php'; ?>
