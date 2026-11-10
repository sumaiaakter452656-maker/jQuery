<?php
require_once __DIR__ . '/../includes/config.php';
// require_role('employer');
$pageTitle = 'Applicants';
$active    = 'applicants';
$role      = 'employer';

// Status change from the dropdown
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // TODO: UPDATE applications SET status = ? WHERE id = ?
    flash('success', 'Status updated to ' . ($_POST['status'] ?? '') . '.');
    redirect('employer/applicants.php?tab=' . urlencode($_GET['tab'] ?? 'All'));
}

$tabs    = ['All', 'New', 'Shortlisted', 'Interview', 'Rejected'];
$current = in_array($_GET['tab'] ?? '', $tabs) ? $_GET['tab'] : 'All';
$list    = $current === 'All' ? $applicants : array_filter($applicants, fn($a) => $a['status'] === $current);
$countOf = fn($t) => $t === 'All' ? count($applicants) : count(array_filter($applicants, fn($a) => $a['status'] === $t));

include __DIR__ . '/../layouts/dash-header.php';
component('page-actions', ['title' => 'Applicants', 'subtitle' => 'Review candidates and update their status.']);
?>
<div class="card">
  <div class="card-body" style="padding-bottom:0">
    <div class="tabs mb-0">
      <?php foreach ($tabs as $t): ?>
        <a class="tab-btn <?= $t === $current ? 'active' : '' ?>" href="?tab=<?= urlencode($t) ?>"><?= e($t) ?> <span class="badge badge-gray"><?= $countOf($t) ?></span></a>
      <?php endforeach; ?>
    </div>
  </div>
  <?php if ($list): ?>
    <div class="table-wrap">
      <table class="table">
        <thead><tr><th>Candidate</th><th>Applied for</th><th>Date</th><th>Experience</th><th>Status</th><th>CV</th></tr></thead>
        <tbody>
          <?php foreach ($list as $a): ?>
            <tr>
              <td><?php component('user-cell', $a); ?></td>
              <td><?= e($a['job']) ?></td>
              <td><?= e($a['date']) ?></td>
              <td><?= e($a['experience']) ?></td>
              <td>
                <form method="post" action="?tab=<?= urlencode($current) ?>">
                  <input type="hidden" name="application_id" value="<?= $a['id'] ?>">
                  <select class="form-control" name="status" onchange="this.form.submit()" style="padding:6px 32px 6px 10px;font-size:.85rem;min-width:130px">
                    <?php foreach ($applicantStatuses as $st): ?>
                      <option <?= selected($st, $a['status']) ?>><?= $st ?></option>
                    <?php endforeach; ?>
                  </select>
                </form>
              </td>
              <td><a class="icon-btn" href="#" title="Download CV"><?= icon('download') ?></a></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  <?php else: ?>
    <?php component('empty-state', ['icon' => 'users', 'title' => 'No ' . strtolower($current) . ' applicants', 'text' => 'Nothing to show in this tab yet.']); ?>
  <?php endif; ?>
</div>
<?php include __DIR__ . '/../layouts/dash-footer.php'; ?>
