<?php
/* component('alert', ['type' => 'success|danger|warning|info', 'message' => 'Saved!'])
   message is printed as-is so you can pass small HTML — escape user input before passing. */
$icons = ['success' => 'check', 'danger' => 'x', 'warning' => 'bell', 'info' => 'bell'];
?>
<div class="alert alert-<?= e($type) ?>">
  <?= icon($icons[$type] ?? 'bell') ?><span><?= $message ?></span>
  <button type="button" class="alert-close">&times;</button>
</div>
