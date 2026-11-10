<?php
/* component('page-header', ['title' => 'Find Jobs', 'subtitle' => '...',
                             'crumbs' => ['Jobs' => null]])   // label => link (null = current page) */
$crumbs = $crumbs ?? [];
?>
<section class="page-header">
  <div class="container">
    <ul class="breadcrumb">
      <li><a href="<?= url('index.php') ?>">Home</a></li>
      <?php foreach ($crumbs as $label => $link): ?>
        <li><?= $link ? '<a href="' . url($link) . '">' . e($label) . '</a>' : e($label) ?></li>
      <?php endforeach; ?>
    </ul>
    <h1><?= e($title) ?></h1>
    <?php if (!empty($subtitle)): ?><p class="muted mb-0 mt-1"><?= e($subtitle) ?></p><?php endif; ?>
  </div>
</section>
