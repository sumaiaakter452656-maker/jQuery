<?php
require_once __DIR__ . '/includes/config.php';
$pageTitle = 'Forgot Password';
$active    = '';
include __DIR__ . '/includes/auth-header.php';
?>

<div class="auth-wrap">
  <aside class="auth-side">
    <a href="<?= BASE_URL ?>index.php" class="logo"><span class="logo-mark">C</span>ChakriHub</a>
    <div>
      <h2>Your next career move starts here.</h2>
      <ul>
        <li><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg> 12,000+ verified jobs</li>
        <li><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg> One-click apply with your saved CV</li>
        <li><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg> Track every application live</li>
      </ul>
    </div>
    <p class="small mb-0">&copy; 2026 ChakriHub</p>
  </aside>
  <main class="auth-main">
    <div class="auth-card">

      <h1>Forgot password?</h1>
      <p class="sub">Enter your email and we'll send you a reset link.</p>
      <form action="" method="post">
        <div class="form-group"><label class="form-label">Email address</label>
          <div class="input-icon"><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg><input class="form-control" type="email" name="email" required></div></div>
        <button class="btn btn-primary btn-block btn-lg" type="submit">Send reset link</button>
      </form>
      <p class="auth-foot"><a href="<?= BASE_URL ?>login.php">&larr; Back to login</a></p>
    </div>
  </main>
</div>

<?php include __DIR__ . '/includes/auth-footer.php'; ?>
