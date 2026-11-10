<?php
/* Job card — component('job-card', ['job' => $job, 'saved' => false]) */
$saved = $saved ?? false;
$detailUrl = url('job-details.php?id=' . $job['id']);
?>
<div class="job-card">
  <div class="job-card-head">
    <div class="company-logo" style="background:<?= e($job['company_color']) ?>"><?= e(initials($job['company'])) ?></div>
    <div class="job-card-info">
      <h3><a href="<?= $detailUrl ?>"><?= e($job['title']) ?></a></h3>
      <p class="muted"><?= e($job['company']) ?></p>
    </div>
    <button class="icon-btn <?= $saved ? 'saved' : '' ?>" data-toggle-save title="Save job"><?= icon('heart') ?></button>
  </div>
  <div class="job-meta">
    <span><?= icon('pin') ?><?= e($job['location']) ?></span>
    <span><?= icon('money') ?><?= e(salary_text($job['salary_min'], $job['salary_max'])) ?></span>
    <span><?= icon('clock') ?><?= e($job['posted']) ?></span>
  </div>
  <div class="job-card-foot">
    <div class="tags">
      <?= type_badge($job['type']) ?>
      <?php foreach (array_slice($job['skills'], 0, 2) as $skill): ?>
        <span class="tag"><?= e($skill) ?></span>
      <?php endforeach; ?>
    </div>
    <a class="btn btn-sm btn-outline" href="<?= $detailUrl ?>">Apply Now</a>
  </div>
</div>
