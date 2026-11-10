<?php
/* Dashboard page title row.
   component('page-actions', ['title' => '...', 'subtitle' => '...',
     'button' => ['label' => 'Post a Job', 'link' => 'employer/post-job.php', 'icon' => 'plus']]) */
?>
<div class="page-actions">
  <div>
    <h2><?= e($title) ?></h2>
    <?php if (!empty($subtitle)): ?><p><?= e($subtitle) ?></p><?php endif; ?>
  </div>
  <?php if (!empty($button)): ?>
    <a href="<?= url($button['link']) ?>" class="btn btn-primary">
      <?= !empty($button['icon']) ? icon($button['icon']) : '' ?> <?= e($button['label']) ?>
    </a>
  <?php endif; ?>
</div>
