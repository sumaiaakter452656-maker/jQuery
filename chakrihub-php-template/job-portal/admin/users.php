<?php
require_once __DIR__ . '/../includes/config.php';
// require_role('admin');
$pageTitle = 'Users';
$active    = 'users';
$role      = 'admin';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // TODO: DELETE FROM users WHERE id = ?   (or UPDATE users SET status = 'blocked')
    flash('success', 'User deleted.');
    redirect('admin/users.php');
}
$tabs    = ['all' => 'All', 'seeker' => 'Job Seekers', 'employer' => 'Employers', 'blocked' => 'Blocked'];
$tab     = array_key_exists($_GET['tab'] ?? '', $tabs) ? $_GET['tab'] : 'all';
$search  = trim($_GET['q'] ?? '');
$list = array_filter($users, function ($u) use ($tab, $search) {
    if ($tab === 'blocked' && $u['status'] !== 'Blocked') return false;
    if (in_array($tab, ['seeker', 'employer']) && $u['role'] !== $tab) return false;
    if ($search && stripos($u['name'] . $u['email'], $search) === false) return false;
    return true;
});

include __DIR__ . '/../layouts/dash-header.php';
?>
<div class="page-actions">
  <div><h2>All users</h2><p>Manage job seekers and employers.</p></div>
  <form class="input-icon" method="get">
    <input type="hidden" name="tab" value="<?= e($tab) ?>">
    <?= icon('search') ?><input class="form-control" name="q" value="<?= e($search) ?>" placeholder="Search by name or email">
  </form>
</div>
<div class="card">
  <div class="card-body" style="padding-bottom:0">
    <div class="tabs mb-0">
      <?php foreach ($tabs as $key => $label): ?>
        <a class="tab-btn <?= $key === $tab ? 'active' : '' ?>" href="?tab=<?= $key ?>"><?= e($label) ?></a>
      <?php endforeach; ?>
    </div>
  </div>
  <?php if ($list): ?>
    <div class="table-wrap">
      <table class="table">
        <thead><tr><th>User</th><th>Role</th><th>Joined</th><th>Status</th><th>Actions</th></tr></thead>
        <tbody>
          <?php foreach ($list as $u): ?>
            <tr>
              <td><?php component('user-cell', $u); ?></td>
              <td><?= $u['role'] === 'employer' ? '<span class="badge badge-info">Employer</span>' : '<span class="badge badge-primary">Job Seeker</span>' ?></td>
              <td><?= e($u['joined']) ?></td>
              <td><?= status_badge($u['status']) ?></td>
              <td><div class="actions">
                <a class="icon-btn" href="#" title="View"><?= icon('eye') ?></a>
                <a class="icon-btn" href="#" title="<?= $u['status'] === 'Blocked' ? 'Unblock' : 'Block' ?>"><?= icon('shield') ?></a>
                <button class="icon-btn danger" data-modal-open="deleteModal" data-id="<?= $u['id'] ?>" title="Delete"><?= icon('trash') ?></button>
              </div></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  <?php else: ?>
    <?php component('empty-state', ['icon' => 'users', 'title' => 'No users found', 'text' => 'Try another tab or search.']); ?>
  <?php endif; ?>
</div>
<?php component('delete-modal', ['action' => 'admin/users.php', 'title' => 'Delete this user?']); ?>
<?php include __DIR__ . '/../layouts/dash-footer.php'; ?>
