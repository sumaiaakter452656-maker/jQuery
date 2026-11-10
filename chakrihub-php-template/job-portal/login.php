<?php
require_once __DIR__ . '/includes/config.php';
$pageTitle = 'Log in';

/* Demo accounts so you can test the flow before the DB is ready.
   Replace with:  SELECT * FROM users WHERE email = ?  +  password_verify($password, $user['password']) */
$demoAccounts = [
    'seeker@demo.test'   => ['name' => 'Rahim Uddin',    'role' => 'seeker'],
    'employer@demo.test' => ['name' => 'TechVerse Ltd.', 'role' => 'employer'],
    'admin@demo.test'    => ['name' => 'Site Admin',     'role' => 'admin'],
];

$errors = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email    = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors['email'] = 'Enter a valid email address.';
    if ($password === '')                            $errors['password'] = 'Enter your password.';

    if (!$errors) {
        if (isset($demoAccounts[$email]) && $password === '123456') {
            session_regenerate_id(true);
            $_SESSION['user'] = $demoAccounts[$email] + ['email' => $email];
            flash('success', 'Welcome back, ' . $_SESSION['user']['name'] . '!');
            redirect($_SESSION['user']['role'] . '/dashboard.php');
        }
        $errors['form'] = 'Invalid email or password.';
    }
}
include __DIR__ . '/layouts/auth-header.php';
?>
<h1>Welcome back</h1>
<p class="sub">Log in to continue to your dashboard.</p>

<?php if (!empty($errors['form'])) component('alert', ['type' => 'danger', 'message' => e($errors['form'])]); ?>

<form action="" method="post" novalidate>
  <?php component('form-field', ['name' => 'email', 'label' => 'Email address', 'type' => 'email',
        'placeholder' => 'you@example.com', 'required' => true, 'error' => $errors['email'] ?? null]); ?>
  <div class="form-group">
    <div class="flex justify-between"><label class="form-label">Password</label><a href="<?= url('forgot-password.php') ?>" class="small">Forgot password?</a></div>
    <div class="password-wrap">
      <input class="form-control <?= isset($errors['password']) ? 'is-invalid' : '' ?>" type="password" name="password" placeholder="••••••••" required>
      <button type="button" class="toggle-pass">Show</button>
    </div>
    <?php if (isset($errors['password'])): ?><div class="form-error"><?= e($errors['password']) ?></div><?php endif; ?>
  </div>
  <label class="check mb-2"><input type="checkbox" name="remember"> Remember me</label>
  <button class="btn btn-primary btn-block btn-lg" type="submit">Log in</button>
</form>
<p class="auth-foot">Don't have an account? <a href="<?= url('register.php') ?>">Create one</a></p>

<div class="or-divider">Demo logins (password: 123456)</div>
<div class="flex gap-1 wrap" style="justify-content:center">
  <?php foreach ($demoAccounts as $email => $acc): ?>
    <span class="tag"><?= e($email) ?></span>
  <?php endforeach; ?>
</div>
<?php include __DIR__ . '/layouts/auth-footer.php'; ?>
