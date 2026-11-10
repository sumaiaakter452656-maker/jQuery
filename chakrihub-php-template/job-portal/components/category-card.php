<?php /* component('category-card', ['category' => $cat]) */ ?>
<a href="<?= url('jobs.php?category=' . $category['id']) ?>" class="category-card">
  <div class="category-icon"><?= icon($category['icon']) ?></div>
  <div><h4><?= e($category['name']) ?></h4><span><?= number_format($category['jobs']) ?> open jobs</span></div>
</a>
