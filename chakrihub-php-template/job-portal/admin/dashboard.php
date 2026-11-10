<?php
require_once __DIR__ . '/../includes/config.php';
// require_role('admin');
$pageTitle = 'Admin Dashboard';
$active    = 'dashboard';
$role      = 'admin';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // TODO: UPDATE jobs SET status = 'active' | 'rejected' WHERE id = ?
    flash('success', 'Job ' . ($_POST['action'] === 'approve' ? 'approved' : 'rejected') . '.');
    redirect('admin/dashboard.php');
}
$stats = [
    ['icon' => 'users',     'color' => 'teal',  'value' => '85,240', 'label' => 'Job seekers',  'trend' => '+4%'],
    ['icon' => 'building',  'color' => 'blue',  'value' => '3,412',  'label' => 'Employers',    'trend' => '+2%'],
    ['icon' => 'briefcase', 'color' => 'amber', 'value' => '12,086', 'label' => 'Live jobs',    'trend' => '+7%'],
    ['icon' => 'file',      'color' => 'rose',  'value' => '214k',   'label' => 'Applications', 'trend' => '+11%'],
];
$pendingJobs = array_slice($jobs, 0, 5);   // SQL: WHERE status = 'pending'
$newUsers    = array_slice(array_reverse($users), 0, 5);
$roleBadge   = fn($r) => $r === 'employer' ? '<span class="badge badge-info">Employer</span>' : '<span class="badge badge-primary">Job Seeker</span>';

include __DIR__ . '/../layouts/dash-header.php';
component('page-actions', ['title' => 'Admin overview', 'subtitle' => 'Platform activity at a glance.']);
?>
<div class="grid grid-4 mb-3">
  <?php foreach ($stats as $s) component('stat-card', $s); ?>
</div>
<div class="dash-grid">
  <div class="card">
    <div class="card-header"><h3>Jobs waiting for approval</h3><span class="badge badge-warning"><?= count($pendingJobs) ?> pending</span></div>
    <div class="table-wrap">
      <table class="table">
        <thead><tr><th>Job</th><th>Location</th><th>Submitted</th><th>Actions</th></tr></thead>
        <tbody>
          <?php foreach ($pendingJobs as $job): ?>
            <tr>
              <td><?php component('job-cell', ['job' => $job]); ?></td>
              <td><?= e($job['location']) ?></td>
              <td><?= e($job['posted']) ?></td>
              <td>
                <form method="post" class="actions">
                  <input type="hidden" name="job_id" value="<?= $job['id'] ?>">
                  <button class="btn btn-sm btn-success" name="action" value="approve"><?= icon('check') ?> Approve</button>
                  <button class="btn btn-sm btn-light" name="action" value="reject">Reject</button>
                </form>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
  <div class="card">
    <div class="card-header"><h3>New users</h3><a href="<?= url('admin/users.php') ?>" class="btn btn-sm btn-light">All users</a></div>
    <div class="card-body">
      <?php foreach ($newUsers as $u): ?>
        <div class="list-item">
          <span class="avatar sm" style="background:<?= e($u['color']) ?>"><?= e(initials($u['name'])) ?></span>
          <div class="list-item-body"><strong><?= e($u['name']) ?></strong><small>Joined <?= e($u['joined']) ?></small></div>
          <?= $roleBadge($u['role']) ?>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>
<?php include __DIR__ . '/../layouts/dash-footer.php'; ?>
