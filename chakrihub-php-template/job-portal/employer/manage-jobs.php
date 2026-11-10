<?php
require_once __DIR__ . '/../includes/config.php';
// require_role('employer');
$pageTitle = 'Manage Jobs';
$active    = 'manage-jobs';
$role      = 'employer';

$search = trim($_GET['q'] ?? '');
$filter = $_GET['status'] ?? '';
$myJobs = array_filter($jobs, function ($j) use ($search, $filter) {   // SQL: WHERE company_id = ? ...
    if ($search && stripos($j['title'], $search) === false) return false;
    if ($filter && $j['status'] !== $filter) return false;
    return true;
});

include __DIR__ . '/../layouts/dash-header.php';
component('page-actions', ['title' => 'Manage jobs', 'subtitle' => 'Edit, close or delete your job posts.',
                           'button' => ['label' => 'Post a Job', 'link' => 'employer/post-job.php', 'icon' => 'plus']]);
?>
<div class="card">
  <form class="card-header" method="get">
    <div class="input-icon" style="flex:1;max-width:320px"><?= icon('search') ?><input class="form-control" name="q" value="<?= e($search) ?>" placeholder="Search jobs"></div>
    <select class="form-control" name="status" style="width:auto" onchange="this.form.submit()">
      <option value="">All status</option>
      <?php foreach (['Active', 'Draft', 'Closed'] as $st): ?>
        <option <?= selected($st, $filter) ?>><?= $st ?></option>
      <?php endforeach; ?>
    </select>
  </form>
  <?php if ($myJobs): ?>
    <div class="table-wrap">
      <table class="table">
        <thead><tr><th>Job title</th><th>Applicants</th><th>Posted</th><th>Deadline</th><th>Status</th><th>Actions</th></tr></thead>
        <tbody>
          <?php foreach ($myJobs as $j): ?>
            <tr>
              <td><strong style="color:var(--text)"><?= e($j['title']) ?></strong><br><small class="muted"><?= e($j['location']) ?> · <?= e($j['type']) ?></small></td>
              <td><a href="<?= url('employer/applicants.php?job=' . $j['id']) ?>"><?= (int) $j['applicants'] ?> applicants</a></td>
              <td><?= e($j['posted']) ?></td>
              <td><?= e($j['deadline']) ?></td>
              <td><?= status_badge($j['status']) ?></td>
              <td><div class="actions">
                <a class="icon-btn" href="<?= url('job-details.php?id=' . $j['id']) ?>" title="View"><?= icon('eye') ?></a>
                <a class="icon-btn" href="<?= url('employer/post-job.php?id=' . $j['id']) ?>" title="Edit"><?= icon('edit') ?></a>
                <button class="icon-btn danger" data-modal-open="deleteModal" data-id="<?= $j['id'] ?>" title="Delete"><?= icon('trash') ?></button>
              </div></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  <?php else: ?>
    <?php component('empty-state', ['title' => 'No jobs found', 'text' => 'Try another search or post a new job.',
          'button' => ['label' => 'Post a Job', 'link' => 'employer/post-job.php']]); ?>
  <?php endif; ?>
</div>
<?php component('delete-modal', ['action' => 'employer/manage-jobs.php', 'title' => 'Delete this job?']); ?>
<?php include __DIR__ . '/../layouts/dash-footer.php'; ?>
