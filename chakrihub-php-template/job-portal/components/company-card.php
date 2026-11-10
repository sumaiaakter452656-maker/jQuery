<?php /* component('company-card', ['company' => $company]) */ ?>
<div class="card company-card">
  <div class="company-logo lg" style="background:<?= e($company['color']) ?>"><?= e(initials($company['name'])) ?></div>
  <h3><?= e($company['name']) ?></h3>
  <p class="muted small"><?= e($company['industry']) ?> · <?= e($company['location']) ?></p>
  <span class="badge badge-primary"><?= (int) $company['open_jobs'] ?> open jobs</span>
  <a href="<?= url('jobs.php?company=' . $company['id']) ?>" class="btn btn-light btn-block mt-2">View jobs</a>
</div>
