<?php
require_once __DIR__ . '/../includes/config.php';
// require_role('employer');   // uncomment when login uses the database
$pageTitle = 'Employer Dashboard';
$active    = 'dashboard';
$role      = 'employer';

$user  = current_user('employer');
$stats = [
    ['icon' => 'briefcase', 'color' => 'teal',  'value' => count(array_filter($jobs, fn($j) => $j['status'] === 'Active')), 'label' => 'Active jobs', 'trend' => '+2'],
    ['icon' => 'users',     'color' => 'blue',  'value' => array_sum(array_column($jobs, 'applicants')), 'label' => 'Total applicants', 'trend' => '+18%'],
    ['icon' => 'award',     'color' => 'amber', 'value' => 46, 'label' => 'Shortlisted'],
    ['icon' => 'eye',       'color' => 'rose',  'value' => '5.2k', 'label' => 'Job views', 'trend' => '+9%'],
];
$weekly  = ['Sat' => 40, 'Sun' => 65, 'Mon' => 55, 'Tue' => 90, 'Wed' => 70, 'Thu' => 45, 'Fri' => 20];  // % of max
$topJobs = $jobs;
usort($topJobs, fn($a, $b) => $b['applicants'] <=> $a['applicants']);

include __DIR__ . '/../layouts/dash-header.php';
component('page-actions', ['title' => 'Welcome back, ' . $user['name'] . ' 👋',
    'subtitle' => "Here's what's happening with your jobs today.",
    'button'   => ['label' => 'Post a Job', 'link' => 'employer/post-job.php', 'icon' => 'plus']]);
?>
<div class="grid grid-4 mb-3">
  <?php foreach ($stats as $s) component('stat-card', $s); ?>
</div>

<div class="dash-grid">
  <div class="card">
    <div class="card-header"><h3>Recent applicants</h3><a href="<?= url('employer/applicants.php') ?>" class="btn btn-sm btn-light">View all</a></div>
    <div class="table-wrap">
      <table class="table">
        <thead><tr><th>Candidate</th><th>Applied for</th><th>Date</th><th>Status</th><th></th></tr></thead>
        <tbody>
          <?php foreach (array_slice($applicants, 0, 5) as $a): ?>
            <tr>
              <td><?php component('user-cell', $a); ?></td>
              <td><?= e($a['job']) ?></td>
              <td><?= e($a['date']) ?></td>
              <td><?= status_badge($a['status']) ?></td>
              <td><div class="actions"><a class="icon-btn" href="#" title="View CV"><?= icon('file') ?></a></div></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>

  <div class="card">
    <div class="card-header"><h3>Applications this week</h3></div>
    <div class="card-body">
      <div class="bar-chart">
        <?php foreach ($weekly as $day => $pct): ?>
          <div class="bar"><span style="height:<?= (int) $pct ?>%" title="<?= $pct ?>"></span><small><?= e($day) ?></small></div>
        <?php endforeach; ?>
      </div>
      <hr class="divider">
      <h4>Your top jobs</h4>
      <?php foreach (array_slice($topJobs, 0, 3) as $j): ?>
        <div class="list-item">
          <div class="list-item-body"><strong><?= e($j['title']) ?></strong><small><?= (int) $j['applicants'] ?> applicants</small></div>
          <?= status_badge($j['status']) ?>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>
<?php include __DIR__ . '/../layouts/dash-footer.php'; ?>
