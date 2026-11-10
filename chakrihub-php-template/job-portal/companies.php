<?php
require_once __DIR__ . '/includes/config.php';
$pageTitle = 'Companies';
$active    = 'companies';

$search = trim($_GET['q'] ?? '');
$list   = $search ? array_filter($companies, fn($c) => stripos($c['name'], $search) !== false) : $companies;

include __DIR__ . '/layouts/header.php';
component('page-header', ['title' => 'Top Companies', 'crumbs' => ['Companies' => null],
                          'subtitle' => 'Explore employers that are hiring right now']);
?>
<section class="section-sm">
  <div class="container">
    <form class="listing-toolbar" method="get">
      <div class="input-icon" style="flex:1;max-width:380px"><?= icon('search') ?><input class="form-control" style="width:100%" name="q" value="<?= e($search) ?>" placeholder="Search company"></div>
      <button class="btn btn-primary" type="submit">Search</button>
    </form>
    <?php if ($list): ?>
      <div class="grid grid-4">
        <?php foreach ($list as $company) component('company-card', ['company' => $company]); ?>
      </div>
    <?php else: ?>
      <div class="card"><?php component('empty-state', ['icon' => 'building', 'title' => 'No company found', 'text' => 'Try another name.']); ?></div>
    <?php endif; ?>
  </div>
</section>
<?php include __DIR__ . '/layouts/footer.php'; ?>
