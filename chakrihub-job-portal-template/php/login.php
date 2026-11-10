<?php
require_once __DIR__ . '/includes/config.php';
$pageTitle = 'Log in';
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

      <h1>Welcome back</h1>
      <p class="sub">Log in to continue to your dashboard.</p>
      <div class="alert alert-danger"><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg><span>Invalid email or password. <em>(example error)</em></span><button class="alert-close">&times;</button></div>
      <form action="" method="post">
        <div class="form-group">
          <label class="form-label">Email address</label>
          <div class="input-icon"><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg><input class="form-control" type="email" name="email" placeholder="you@example.com" required></div>
        </div>
        <div class="form-group">
          <div class="flex justify-between"><label class="form-label">Password</label><a href="<?= BASE_URL ?>forgot-password.php" class="small">Forgot password?</a></div>
          <div class="password-wrap"><input class="form-control" type="password" name="password" placeholder="••••••••" required><button type="button" class="toggle-pass">Show</button></div>
        </div>
        <label class="check mb-2"><input type="checkbox" name="remember"> Remember me</label>
        <button class="btn btn-primary btn-block btn-lg" type="submit">Log in</button>
      </form>
      <p class="auth-foot">Don't have an account? <a href="<?= BASE_URL ?>register.php">Create one</a></p>
      <div class="or-divider">Preview dashboards</div>
      <div class="flex gap-1 wrap" style="justify-content:center">
        <a class="btn btn-sm btn-light" href="<?= BASE_URL ?>seeker/dashboard.php">Job Seeker</a>
        <a class="btn btn-sm btn-light" href="<?= BASE_URL ?>employer/dashboard.php">Employer</a>
        <a class="btn btn-sm btn-light" href="<?= BASE_URL ?>admin/dashboard.php">Admin</a>
      </div>
    </div>
  </main>
</div>

<?php include __DIR__ . '/includes/auth-footer.php'; ?>
