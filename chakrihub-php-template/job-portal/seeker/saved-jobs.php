<?php
require_once __DIR__ . '/../includes/config.php';
// require_role('seeker');
$pageTitle = 'Saved Jobs';
$active    = 'saved';
$role      = 'seeker';

// SQL: SELECT jobs.* FROM saved_jobs JOIN jobs ON ... WHERE saved_jobs.user_id = ?
$savedJobs = array_filter($jobs, fn($j) => in_array($j['id'], $savedJobIds));

include __DIR__ . '/../layouts/dash-header.php';
component('page-actions', ['title' => 'Saved jobs', 'subtitle' => 'Jobs you bookmarked to apply later.']);
?>
<?php if ($savedJobs): ?>
  <div class="grid grid-2">
    <?php foreach ($savedJobs as $job) component('job-card', ['job' => $job, 'saved' => true]); ?>
  </div>
<?php else: ?>
  <div class="card"><?php component('empty-state', ['icon' => 'heart', 'title' => 'No saved jobs',
        'text' => 'Tap the heart on any job to save it here.', 'button' => ['label' => 'Browse Jobs', 'link' => 'jobs.php']]); ?></div>
<?php endif; ?>
<?php include __DIR__ . '/../layouts/dash-footer.php'; ?>
