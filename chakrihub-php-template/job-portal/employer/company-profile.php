<?php
require_once __DIR__ . '/../includes/config.php';
// require_role('employer');
$pageTitle = 'Company Profile';
$active    = 'company';
$role      = 'employer';

$company = $companies[0] + ['size' => '50–200', 'website' => 'https://techverse.test', 'email' => 'hr@techverse.test',
                            'phone' => '+880 1711-000000', 'address' => 'Banani, Dhaka', 'about' => 'We build SaaS tools for small businesses.'];
$v = fn($k) => $_POST[$k] ?? ($company[$k] ?? '');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // TODO: handle logo upload + UPDATE companies SET ... WHERE user_id = ?
    flash('success', 'Company profile updated.');
    redirect('employer/company-profile.php');
}
include __DIR__ . '/../layouts/dash-header.php';
component('page-actions', ['title' => 'Company profile', 'subtitle' => 'This information is shown on your job posts.']);
?>
<form class="card" action="" method="post" enctype="multipart/form-data">
  <div class="card-body">
    <div class="flex items-center gap-2 mb-3 wrap">
      <div class="company-logo lg" style="background:<?= e($company['color']) ?>"><?= e(initials($company['name'])) ?></div>
      <div>
        <label class="btn btn-light btn-sm" style="cursor:pointer"><?= icon('upload') ?> Upload logo<input type="file" name="logo" accept="image/*" hidden></label>
        <div class="form-hint">PNG or JPG, at least 200×200px.</div>
      </div>
    </div>
    <div class="form-row">
      <?php component('form-field', ['name' => 'name', 'label' => 'Company name', 'required' => true, 'value' => $v('name')]); ?>
      <?php component('form-field', ['name' => 'industry', 'label' => 'Industry', 'type' => 'select',
            'options' => ['Software', 'E-commerce', 'Finance', 'Logistics', 'Other'], 'value' => $v('industry')]); ?>
      <?php component('form-field', ['name' => 'size', 'label' => 'Company size', 'type' => 'select',
            'options' => ['1–10', '11–50', '50–200', '200+'], 'value' => $v('size')]); ?>
      <?php component('form-field', ['name' => 'website', 'label' => 'Website', 'type' => 'url', 'value' => $v('website')]); ?>
      <?php component('form-field', ['name' => 'email', 'label' => 'Email', 'type' => 'email', 'value' => $v('email')]); ?>
      <?php component('form-field', ['name' => 'phone', 'label' => 'Phone', 'value' => $v('phone')]); ?>
    </div>
    <?php component('form-field', ['name' => 'address', 'label' => 'Address', 'value' => $v('address')]); ?>
    <?php component('form-field', ['name' => 'about', 'label' => 'About the company', 'type' => 'textarea', 'value' => $v('about')]); ?>
    <div class="form-actions"><button class="btn btn-primary" type="submit">Save changes</button></div>
  </div>
</form>
<?php include __DIR__ . '/../layouts/dash-footer.php'; ?>
