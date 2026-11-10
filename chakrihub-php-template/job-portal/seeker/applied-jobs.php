<?php
require_once __DIR__ . '/../includes/config.php';
// require_role('seeker');
$pageTitle = 'Applied Jobs';
$active    = 'applied';
$role      = 'seeker';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // TODO: DELETE FROM applications WHERE id = ? AND user_id = ?
    flash('info', 'Application withdrawn.');
    redirect('seeker/applied-jobs.php');
}
$filter = $_GET['status'] ?? '';
$list   = $filter ? array_filter($myApplications, fn($a) => $a['status'] === $filter) : $myApplications;

include __DIR__ . '/../layouts/dash-header.php';
component('page-actions', ['title' => 'Applied jobs', 'subtitle' => 'Track the status of every application.']);
?>
<div class="card">
  <form class="card-header" method="get">
    <h3><?= count($list) ?> application<?= count($list) === 1 ? '' : 's' ?></h3>
    <select class="form-control" name="status" style="width:auto" onchange="this.form.submit()">
      <option value="">All status</option>
      <?php foreach (['Pending', 'Reviewed', 'Shortlisted', 'Interview', 'Rejected'] as $st): ?>
        <option <?= selected($st, $filter) ?>><?= $st ?></option>
      <?php endforeach; ?>
    </select>
  </form>
  <?php if ($list): ?>
    <div class="table-wrap">
      <table class="table">
        <thead><tr><th>Job</th><th>Applied on</th><th>Status</th><th>Action</th></tr></thead>
        <tbody>
          <?php foreach ($list as $app): $job = find_job($app['job_id']); ?>
            <tr>
              <td><?php component('job-cell', ['job' => $job]); ?></td>
              <td><?= e($app['date']) ?></td>
              <td><?= status_badge($app['status']) ?></td>
              <td>
                <form method="post" class="flex gap-1">
                  <input type="hidden" name="application_id" value="<?= $app['id'] ?>">
                  <a class="icon-btn" href="<?= url('job-details.php?id=' . $job['id']) ?>" title="View job"><?= icon('eye') ?></a>
                  <?php if ($app['status'] !== 'Rejected'): ?>
                    <button class="btn btn-sm btn-light" type="submit" data-confirm="Withdraw this application?">Withdraw</button>
                  <?php endif; ?>
                </form>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  <?php else: ?>
    <?php component('empty-state', ['icon' => 'file', 'title' => 'No applications', 'text' => 'Nothing matches this filter.',
          'button' => ['label' => 'Browse Jobs', 'link' => 'jobs.php']]); ?>
  <?php endif; ?>
</div>
<?php include __DIR__ . '/../layouts/dash-footer.php'; ?>
