<?php
require_once __DIR__ . '/includes/config.php';
$pageTitle = 'UI Components';
$active    = 'components';

$colors = ['primary', 'primary-dark', 'accent', 'success', 'danger', 'warning', 'info', 'text'];
/** small helper: show the PHP code that renders the example */
$code = fn($php) => '<pre class="code">' . e($php) . '</pre>';

include __DIR__ . '/layouts/header.php';
component('page-header', ['title' => 'UI Components', 'crumbs' => ['UI Kit' => null],
                          'subtitle' => 'Every reusable piece in this template, with the PHP that renders it']);
?>
<section class="section-sm">
  <div class="container">

    <div class="kit-section"><h2>Colors <small class="muted">(edit in style.css :root)</small></h2>
      <div class="grid grid-4">
        <?php foreach ($colors as $c): ?>
          <div><div class="swatch" style="background:var(--<?= $c ?>)"></div><small class="muted">--<?= $c ?></small></div>
        <?php endforeach; ?>
      </div>
    </div>

    <div class="kit-section"><h2>Buttons</h2>
      <div class="flex gap-1 wrap mb-2">
        <?php foreach (['primary', 'accent', 'outline', 'light', 'success', 'danger', 'ghost'] as $b): ?>
          <button class="btn btn-<?= $b ?>"><?= ucfirst($b) ?></button>
        <?php endforeach; ?>
        <button class="btn btn-primary" disabled>Disabled</button>
      </div>
      <div class="flex gap-1 wrap items-center">
        <button class="btn btn-primary btn-sm">Small</button><button class="btn btn-primary">Default</button><button class="btn btn-primary btn-lg">Large</button>
        <button class="btn btn-primary"><?= icon('plus') ?> With icon</button>
        <button class="icon-btn"><?= icon('eye') ?></button><button class="icon-btn"><?= icon('edit') ?></button><button class="icon-btn danger"><?= icon('trash') ?></button>
      </div>
      <?= $code('<button class="btn btn-primary"><?= icon(\'plus\') ?> With icon</button>') ?>
    </div>

    <div class="kit-section"><h2>Status &amp; type badges</h2>
      <div class="flex gap-1 wrap">
        <?php foreach (['New', 'Pending', 'Shortlisted', 'Interview', 'Rejected', 'Active', 'Draft', 'Closed'] as $s) echo status_badge($s); ?>
        <?php foreach ($jobTypes as $t) echo type_badge($t); ?>
      </div>
      <?= $code("<?= status_badge(\$application['status']) ?>\n<?= type_badge(\$job['type']) ?>") ?>
    </div>

    <div class="kit-section"><h2>Alerts &amp; flash messages</h2>
      <?php component('alert', ['type' => 'success', 'message' => '<strong>Success!</strong> Your job has been published.']); ?>
      <?php component('alert', ['type' => 'danger',  'message' => '<strong>Error!</strong> Something went wrong.']); ?>
      <?php component('alert', ['type' => 'warning', 'message' => '<strong>Warning!</strong> Your profile is only 60% complete.']); ?>
      <?php component('alert', ['type' => 'info',    'message' => '<strong>Info:</strong> 3 new jobs match your profile.']); ?>
      <?= $code("<?php component('alert', ['type' => 'success', 'message' => 'Saved!']); ?>\n\n// after a form submit:\nflash('success', 'Job published!');\nredirect('employer/manage-jobs.php');   // message shows on the next page") ?>
    </div>

    <div class="kit-section"><h2>Form fields</h2>
      <div class="card"><div class="card-body">
        <div class="form-row">
          <?php component('form-field', ['name' => 'demo_text', 'label' => 'Text input', 'required' => true, 'placeholder' => 'Placeholder', 'hint' => 'Helper text goes here.']); ?>
          <?php component('form-field', ['name' => 'demo_select', 'label' => 'Select', 'type' => 'select', 'options' => $locations]); ?>
          <?php component('form-field', ['name' => 'demo_email', 'label' => 'With error', 'type' => 'email', 'value' => 'wrong@', 'error' => 'Please enter a valid email.']); ?>
          <div class="form-group"><label class="form-label">With icon</label><div class="input-icon"><?= icon('search') ?><input class="form-control" placeholder="Search..."></div></div>
        </div>
        <?php component('form-field', ['name' => 'demo_area', 'label' => 'Textarea', 'type' => 'textarea']); ?>
        <div class="form-row">
          <div><label class="check"><input type="checkbox" checked> Checkbox</label><label class="check"><input type="radio" name="kit" checked> Radio one</label><label class="check"><input type="radio" name="kit"> Radio two</label></div>
          <label class="file-drop"><?= icon('upload') ?><span class="file-name">Click to upload a file</span><input type="file"></label>
        </div>
        <?= $code("<?php component('form-field', [\n    'name' => 'email', 'label' => 'Email', 'type' => 'email', 'required' => true,\n    'error' => \$errors['email'] ?? null,   // red border + message\n]); ?>\n// type: text | email | password | number | date | textarea | select ('options' => [...])") ?>
      </div></div>
    </div>

    <div class="kit-section"><h2>Stat cards &amp; progress</h2>
      <div class="grid grid-4 mb-3">
        <?php component('stat-card', ['icon' => 'briefcase', 'color' => 'teal',  'value' => 24,      'label' => 'Active jobs', 'trend' => '+12%']); ?>
        <?php component('stat-card', ['icon' => 'users',     'color' => 'blue',  'value' => '1,284', 'label' => 'Applicants',  'trend' => '+8%']); ?>
        <?php component('stat-card', ['icon' => 'heart',     'color' => 'rose',  'value' => 96,      'label' => 'Saved']); ?>
        <?php component('stat-card', ['icon' => 'eye',       'color' => 'amber', 'value' => '8.2k',  'label' => 'Views',       'trend' => '-3%']); ?>
      </div>
      <div class="progress"><div class="progress-bar" style="width:65%"></div></div>
      <?= $code("<?php component('stat-card', ['icon' => 'briefcase', 'color' => 'teal', 'value' => \$count, 'label' => 'Active jobs']); ?>") ?>
    </div>

    <div class="kit-section"><h2>Table with loop</h2>
      <div class="card table-wrap">
        <table class="table">
          <thead><tr><th>User</th><th>Role</th><th>Status</th><th>Actions</th></tr></thead>
          <tbody>
            <?php foreach (array_slice($users, 0, 3) as $u): ?>
              <tr>
                <td><?php component('user-cell', $u); ?></td>
                <td><?= e(ucfirst($u['role'])) ?></td>
                <td><?= status_badge($u['status']) ?></td>
                <td><div class="actions"><button class="icon-btn"><?= icon('eye') ?></button><button class="icon-btn danger" data-modal-open="deleteModal" data-id="<?= $u['id'] ?>"><?= icon('trash') ?></button></div></td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
      <?= $code("<?php foreach (\$users as \$u): ?>\n  <tr>\n    <td><?php component('user-cell', \$u); ?></td>\n    <td><?= status_badge(\$u['status']) ?></td>\n  </tr>\n<?php endforeach; ?>") ?>
    </div>

    <div class="kit-section"><h2>Tabs &amp; modal</h2>
      <div class="card"><div class="card-body" data-tabs>
        <div class="tabs"><button class="tab-btn active" data-tab="kt1">First tab</button><button class="tab-btn" data-tab="kt2">Second tab <span class="badge badge-primary">3</span></button></div>
        <div class="tab-pane active" id="kt1"><p>Content of the first tab.</p><button class="btn btn-danger" data-modal-open="deleteModal" data-id="99">Open delete modal</button></div>
        <div class="tab-pane" id="kt2"><p>Content of the second tab.</p></div>
      </div></div>
      <?= $code("<button data-modal-open=\"deleteModal\" data-id=\"<?= \$job['id'] ?>\">Delete</button>\n<?php component('delete-modal', ['action' => 'employer/manage-jobs.php']); ?>   // posts id=...") ?>
    </div>

    <div class="kit-section"><h2>Job card &amp; empty state</h2>
      <div class="grid grid-2">
        <?php component('job-card', ['job' => $jobs[0]]); ?>
        <div class="card"><?php component('empty-state', ['icon' => 'briefcase', 'title' => 'No jobs yet', 'text' => 'Post your first job to start receiving applications.', 'button' => ['label' => 'Post a Job', 'link' => 'employer/post-job.php']]); ?></div>
      </div>
      <?= $code("<?php foreach (\$jobs as \$job) component('job-card', ['job' => \$job]); ?>") ?>
    </div>

    <div class="kit-section"><h2>Pagination</h2>
      <?php component('pagination', ['current' => (int) ($_GET['page'] ?? 1), 'totalPages' => 4]); ?>
      <?= $code("<?php component('pagination', ['current' => \$page, 'totalPages' => \$totalPages]); ?>") ?>
    </div>
  </div>
</section>
<?php component('delete-modal', ['action' => 'components.php']); ?>
<?php include __DIR__ . '/layouts/footer.php'; ?>
