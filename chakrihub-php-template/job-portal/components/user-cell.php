<?php /* Avatar + name + email cell. component('user-cell', ['name' => ..., 'email' => ..., 'color' => ...]) */ ?>
<div class="cell-user">
  <span class="avatar sm" style="background:<?= e($color ?? '#0f766e') ?>"><?= e(initials($name)) ?></span>
  <div><strong><?= e($name) ?></strong><small><?= e($email ?? '') ?></small></div>
</div>
