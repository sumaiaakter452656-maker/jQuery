<?php
require_once __DIR__ . '/includes/config.php';
$pageTitle = 'Create Account';

$errors = [];
$role   = $_POST['role'] ?? 'seeker';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name  = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $pass  = $_POST['password'] ?? '';

    if ($name === '')                                          $errors['name'] = 'Name is required.';
    if (!filter_var($email, FILTER_VALIDATE_EMAIL))            $errors['email'] = 'Enter a valid email.';
    if (strlen($pass) < 6)                                     $errors['password'] = 'At least 6 characters.';
    if ($pass !== ($_POST['password_confirm'] ?? ''))          $errors['password_confirm'] = 'Passwords do not match.';
    if ($role === 'employer' && trim($_POST['company_name'] ?? '') === '') $errors['company_name'] = 'Company name is required.';
    if (empty($_POST['terms']))                                $errors['terms'] = 'You must accept the terms.';

    if (!$errors) {
        /* TODO (database):
           $stmt = $pdo->prepare('INSERT INTO users (name, email, phone, password, role) VALUES (?, ?, ?, ?, ?)');
           $stmt->execute([$name, $email, $_POST['phone'] ?? null, password_hash($pass, PASSWORD_DEFAULT), $role]);
           if employer -> INSERT INTO companies (user_id, name) VALUES ($pdo->lastInsertId(), ...) */
        flash('success', 'Account created! You can log in now.');
        redirect('login.php');
    }
}
include __DIR__ . '/layouts/auth-header.php';
?>
<h1>Create your account</h1>
<p class="sub">Choose how you want to use <?= SITE_NAME ?>.</p>

<form action="" method="post" novalidate>
  <div class="role-switch">
    <div class="role-option">
      <input type="radio" name="role" value="seeker" id="r-seeker" <?= checked($role === 'seeker') ?>>
      <label for="r-seeker"><strong><?= icon('user') ?> Job Seeker</strong><small>I want to find a job</small></label>
    </div>
    <div class="role-option">
      <input type="radio" name="role" value="employer" id="r-employer" <?= checked($role === 'employer') ?>>
      <label for="r-employer"><strong><?= icon('building') ?> Employer</strong><small>I want to hire</small></label>
    </div>
  </div>

  <div data-role-field="employer">
    <?php component('form-field', ['name' => 'company_name', 'label' => 'Company name', 'required' => true,
          'placeholder' => 'e.g. TechVerse Ltd.', 'error' => $errors['company_name'] ?? null]); ?>
  </div>
  <?php component('form-field', ['name' => 'name', 'label' => 'Full name', 'required' => true, 'error' => $errors['name'] ?? null]); ?>
  <div class="form-row">
    <?php component('form-field', ['name' => 'email', 'label' => 'Email', 'type' => 'email', 'required' => true, 'error' => $errors['email'] ?? null]); ?>
    <?php component('form-field', ['name' => 'phone', 'label' => 'Phone', 'placeholder' => '01XXXXXXXXX']); ?>
  </div>
  <div class="form-row">
    <?php component('form-field', ['name' => 'password', 'label' => 'Password', 'type' => 'password', 'value' => '', 'required' => true, 'error' => $errors['password'] ?? null]); ?>
    <?php component('form-field', ['name' => 'password_confirm', 'label' => 'Confirm', 'type' => 'password', 'value' => '', 'required' => true, 'error' => $errors['password_confirm'] ?? null]); ?>
  </div>
  <label class="check mb-1"><input type="checkbox" name="terms" <?= checked(!empty($_POST['terms'])) ?>> I agree to the <a href="#">Terms</a> &amp; <a href="#">Privacy Policy</a></label>
  <?php if (isset($errors['terms'])): ?><div class="form-error mb-2"><?= e($errors['terms']) ?></div><?php endif; ?>
  <button class="btn btn-primary btn-block btn-lg mt-2" type="submit">Create Account</button>
</form>
<p class="auth-foot">Already have an account? <a href="<?= url('login.php') ?>">Log in</a></p>
<?php include __DIR__ . '/layouts/auth-footer.php'; ?>
