<?php /* Company logo + job title cell. component('job-cell', ['job' => $job]) */ ?>
<div class="cell-user">
  <span class="company-logo sm" style="background:<?= e($job['company_color']) ?>"><?= e(initials($job['company'])) ?></span>
  <div><strong><?= e($job['title']) ?></strong><small><?= e($job['company']) ?></small></div>
</div>
