<?php
/* component('stat-card', ['icon' => 'briefcase', 'color' => 'teal|blue|amber|rose',
                           'value' => '12', 'label' => 'Active jobs', 'trend' => '+12%']) */
$trend = $trend ?? '';
?>
<div class="stat-card">
  <div class="stat-icon <?= e($color) ?>"><?= icon($icon) ?></div>
  <div>
    <h3><?= e($value) ?></h3>
    <p><?= e($label) ?></p>
    <?php if ($trend): ?>
      <span class="stat-trend <?= $trend[0] === '-' ? 'down' : 'up' ?>"><?= e($trend) ?> this month</span>
    <?php endif; ?>
  </div>
</div>
