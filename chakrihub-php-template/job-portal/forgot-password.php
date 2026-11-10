<?php
require_once __DIR__ . '/includes/config.php';
$pageTitle = 'Forgot Password';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // TODO: create a token, save it, email the reset link
    flash('info', 'If that email exists, a reset link has been sent.');
    redirect('forgot-password.php');
}
include __DIR__ . '/layouts/auth-header.php';
?>
<h1>Forgot password?</h1>
<p class="sub">Enter your email and we'll send you a reset link.</p>
<form action="" method="post">
  <?php component('form-field', ['name' => 'email', 'label' => 'Email address', 'type' => 'email', 'required' => true]); ?>
  <button class="btn btn-primary btn-block btn-lg" type="submit">Send reset link</button>
</form>
<p class="auth-foot"><a href="<?= url('login.php') ?>">&larr; Back to login</a></p>
<?php include __DIR__ . '/layouts/auth-footer.php'; ?>
