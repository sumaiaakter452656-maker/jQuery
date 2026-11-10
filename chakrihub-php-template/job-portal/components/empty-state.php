<?php
/* component('empty-state', ['icon' => 'briefcase', 'title' => 'No jobs yet', 'text' => '...',
                             'button' => ['label' => 'Post a Job', 'link' => 'employer/post-job.php']]) */
?>
<div class="empty-state">
  <div class="empty-icon"><?= icon($icon ?? 'briefcase') ?></div>
  <h3><?= e($title) ?></h3>
  <?php if (!empty($text)): ?><p><?= e($text) ?></p><?php endif; ?>
  <?php if (!empty($button)): ?><a class="btn btn-primary" href="<?= url($button['link']) ?>"><?= e($button['label']) ?></a><?php endif; ?>
</div>
