<?php
require_once __DIR__ . '/includes/config.php';
$pageTitle = 'Create Account';
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

      <h1>Create your account</h1>
      <p class="sub">Choose how you want to use ChakriHub.</p>
      <form action="" method="post">
        <div class="role-switch">
          <div class="role-option"><input type="radio" name="role" value="seeker" id="r-seeker" checked>
            <label for="r-seeker"><strong><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg> Job Seeker</strong><small>I want to find a job</small></label></div>
          <div class="role-option"><input type="radio" name="role" value="employer" id="r-employer">
            <label for="r-employer"><strong><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><rect x="4" y="2" width="16" height="20" rx="2"/><path d="M9 22v-4h6v4M8 6h.01M16 6h.01M12 6h.01M12 10h.01M12 14h.01M16 10h.01M16 14h.01M8 10h.01M8 14h.01"/></svg> Employer</strong><small>I want to hire</small></label></div>
        </div>
        <div class="form-group hidden" data-role-field="employer">
          <label class="form-label">Company name <span class="req">*</span></label>
          <input class="form-control" name="company_name" placeholder="e.g. TechVerse Ltd.">
        </div>
        <div class="form-group"><label class="form-label">Full name <span class="req">*</span></label><input class="form-control" name="name" required></div>
        <div class="form-row">
          <div class="form-group"><label class="form-label">Email <span class="req">*</span></label><input class="form-control" type="email" name="email" required></div>
          <div class="form-group"><label class="form-label">Phone</label><input class="form-control" name="phone" placeholder="01XXXXXXXXX"></div>
        </div>
        <div class="form-row">
          <div class="form-group"><label class="form-label">Password <span class="req">*</span></label><div class="password-wrap"><input class="form-control" type="password" name="password" required><button type="button" class="toggle-pass">Show</button></div></div>
          <div class="form-group"><label class="form-label">Confirm <span class="req">*</span></label><input class="form-control is-invalid" type="password" name="password_confirm" required><div class="form-error">Passwords do not match (example)</div></div>
        </div>
        <label class="check mb-2"><input type="checkbox" name="terms" required> I agree to the <a href="#">Terms</a> &amp; <a href="#">Privacy Policy</a></label>
        <button class="btn btn-primary btn-block btn-lg" type="submit">Create Account</button>
      </form>
      <p class="auth-foot">Already have an account? <a href="<?= BASE_URL ?>login.php">Log in</a></p>
    </div>
  </main>
</div>

<?php include __DIR__ . '/includes/auth-footer.php'; ?>
