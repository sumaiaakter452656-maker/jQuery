<?php
require_once __DIR__ . '/includes/config.php';
$pageTitle = 'Contact Us';
$active    = 'contact';

$errors = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (trim($_POST['name'] ?? '') === '')                          $errors['name']    = 'Please enter your name.';
    if (!filter_var($_POST['email'] ?? '', FILTER_VALIDATE_EMAIL))  $errors['email']   = 'Please enter a valid email.';
    if (trim($_POST['message'] ?? '') === '')                       $errors['message'] = 'Message cannot be empty.';
    if (!$errors) {
        // TODO: INSERT INTO messages ... or send mail()
        flash('success', 'Thank you! Your message has been sent.');
        redirect('contact.php');
    }
}
$info = [
    ['pin',   'Office', 'House 12, Road 5, Dhanmondi, Dhaka'],
    ['phone', 'Phone',  '+880 1700-000000'],
    ['mail',  'Email',  'support@chakrihub.test'],
    ['clock', 'Hours',  'Sun – Thu, 9am – 6pm'],
];
include __DIR__ . '/layouts/header.php';
component('page-header', ['title' => 'Contact Us', 'crumbs' => ['Contact' => null], 'subtitle' => "We'd love to hear from you"]);
?>
<section class="section-sm">
  <div class="container details-layout">
    <div class="card">
      <div class="card-body">
        <?php component('flash'); ?>
        <form action="" method="post" novalidate>
          <div class="form-row">
            <?php component('form-field', ['name' => 'name',  'label' => 'Your name', 'required' => true, 'error' => $errors['name'] ?? null]); ?>
            <?php component('form-field', ['name' => 'email', 'label' => 'Email', 'type' => 'email', 'required' => true, 'error' => $errors['email'] ?? null]); ?>
          </div>
          <?php component('form-field', ['name' => 'subject', 'label' => 'Subject']); ?>
          <?php component('form-field', ['name' => 'message', 'label' => 'Message', 'type' => 'textarea', 'required' => true, 'error' => $errors['message'] ?? null]); ?>
          <button class="btn btn-primary" type="submit">Send Message</button>
        </form>
      </div>
    </div>
    <aside class="card">
      <div class="card-body">
        <ul class="overview-list">
          <?php foreach ($info as [$ic, $label, $value]): ?>
            <li><?= icon($ic) ?><div><small><?= e($label) ?></small><strong><?= e($value) ?></strong></div></li>
          <?php endforeach; ?>
        </ul>
      </div>
    </aside>
  </div>
</section>
<?php include __DIR__ . '/layouts/footer.php'; ?>
