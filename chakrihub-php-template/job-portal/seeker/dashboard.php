<?php
require_once __DIR__ . '/../includes/config.php';
// require_role('seeker');
$pageTitle = 'My Dashboard';
$active    = 'dashboard';
$role      = 'seeker';

$user        = current_user('seeker');
$firstName   = explode(' ', $user['name'])[0];
$profilePct  = 70;   // calculate from filled profile fields
$recommended = array_slice($jobs, 0, 3);
$stats = [
    ['icon' => 'file',  'color' => 'teal',  'value' => count($myApplications), 'label' => 'Applied jobs'],
    ['icon' => 'award', 'color' => 'amber', 'value' => count(array_filter($myApplications, fn($a) => in_array($a['status'], ['Shortlisted', 'Interview']))), 'label' => 'Shortlisted'],
    ['icon' => 'heart', 'color' => 'rose',  'value' => count($savedJobIds), 'label' => 'Saved jobs'],
    ['icon' => 'eye',   'color' => 'blue',  'value' => 132, 'label' => 'Profile views', 'trend' => '+24%'],
];

include __DIR__ . '/../layouts/dash-header.php';
component('page-actions', ['title' => 'Hello, ' . $firstName . ' 👋', 'subtitle' => "Let's find your next opportunity.",
                           'button' => ['label' => 'Browse Jobs', 'link' => 'jobs.php', 'icon' => 'search']]);
if ($profilePct < 100) {
    component('alert', ['type' => 'warning', 'message' => 'Your profile is <strong>' . $profilePct . '% complete</strong>. <a href="' . url('seeker/profile.php') . '">Complete it</a> to get noticed by employers.']);
}
?>
<div class="grid grid-4 mb-3">
  <?php foreach ($stats as $s) component('stat-card', $s); ?>
</div>

<div class="dash-grid mb-3">
  <div class="card">
    <div class="card-header"><h3>Recent applications</h3><a href="<?= url('seeker/applied-jobs.php') ?>" class="btn btn-sm btn-light">View all</a></div>
    <div class="table-wrap">
      <table class="table">
        <thead><tr><th>Job</th><th>Applied</th><th>Status</th><th></th></tr></thead>
        <tbody>
          <?php foreach (array_slice($myApplications, 0, 4) as $app): $job = find_job($app['job_id']); ?>
            <tr>
              <td><?php component('job-cell', ['job' => $job]); ?></td>
              <td><?= e($app['date']) ?></td>
              <td><?= status_badge($app['status']) ?></td>
              <td><a class="icon-btn" href="<?= url('job-details.php?id=' . $job['id']) ?>"><?= icon('eye') ?></a></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
  <div class="card">
    <div class="card-body text-center">
      <span class="avatar lg" style="margin:0 auto 12px"><?= e(initials($user['name'])) ?></span>
      <h3 class="mb-0"><?= e($user['name']) ?></h3>
      <p class="muted small">Junior PHP Developer · Dhaka</p>
      <div class="flex justify-between small mb-1"><span>Profile completeness</span><strong><?= $profilePct ?>%</strong></div>
      <div class="progress mb-3"><div class="progress-bar" style="width:<?= $profilePct ?>%"></div></div>
      <a href="<?= url('seeker/profile.php') ?>" class="btn btn-outline btn-block">Edit profile</a>
    </div>
  </div>
</div>

<div class="section-head" style="margin-bottom:16px"><h3 class="mb-0">Recommended for you</h3><a href="<?= url('jobs.php') ?>">See more &rarr;</a></div>
<div class="grid grid-3">
  <?php foreach ($recommended as $job) component('job-card', ['job' => $job, 'saved' => in_array($job['id'], $savedJobIds)]); ?>
</div>
<?php include __DIR__ . '/../layouts/dash-footer.php'; ?>
