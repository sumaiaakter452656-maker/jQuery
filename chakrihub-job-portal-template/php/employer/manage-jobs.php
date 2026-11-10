<?php
require_once __DIR__ . '/../includes/config.php';
// require_role('employer');   // uncomment when login is ready
$pageTitle = 'Manage Jobs';
$active    = 'manage-jobs';
$role      = 'employer';
include __DIR__ . '/../includes/dash-header.php';
?>

    <div class="page-actions">
      <div><h2>Manage jobs</h2><p>Edit, close or delete your job posts.</p></div>
      <a href="<?= BASE_URL ?>employer/post-job.php" class="btn btn-primary"><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg> Post a Job</a>
    </div>
    <div class="card">
      <div class="card-header">
        <div class="input-icon" style="flex:1;max-width:320px"><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg><input class="form-control" placeholder="Search jobs"></div>
        <select class="form-control" style="width:auto"><option>All status</option><option>Active</option><option>Draft</option><option>Closed</option></select>
      </div>
      <div class="table-wrap">
        <table class="table">
          <thead><tr><th>Job title</th><th>Applicants</th><th>Posted</th><th>Deadline</th><th>Status</th><th>Actions</th></tr></thead>
          <tbody>
            <tr>
              <td><strong style="color:var(--text)">Senior PHP Developer</strong><br><small class="muted">Dhaka · Full-time</small></td>
              <td><a href="<?= BASE_URL ?>employer/applicants.php">124 applicants</a></td>
              <td>2 Nov 2026</td><td>20 Nov 2026</td><td><span class="badge badge-dot badge-success">Active</span></td>
              <td><div class="actions">
                <a class="icon-btn" href="<?= BASE_URL ?>job-details.php" title="View"><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg></a>
                <a class="icon-btn" href="<?= BASE_URL ?>employer/post-job.php" title="Edit"><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><path d="M12 20h9"/><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"/></svg></a>
                <button class="icon-btn danger" data-modal-open="deleteModal" title="Delete"><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><polyline points="3 6 5 6 21 6"/><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"/></svg></button>
              </div></td>
            </tr>
            <tr>
              <td><strong style="color:var(--text)">Frontend Developer (React)</strong><br><small class="muted">Dhaka · Full-time</small></td>
              <td><a href="<?= BASE_URL ?>employer/applicants.php">98 applicants</a></td>
              <td>3 Nov 2026</td><td>21 Nov 2026</td><td><span class="badge badge-dot badge-success">Active</span></td>
              <td><div class="actions">
                <a class="icon-btn" href="<?= BASE_URL ?>job-details.php" title="View"><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg></a>
                <a class="icon-btn" href="<?= BASE_URL ?>employer/post-job.php" title="Edit"><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><path d="M12 20h9"/><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"/></svg></a>
                <button class="icon-btn danger" data-modal-open="deleteModal" title="Delete"><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><polyline points="3 6 5 6 21 6"/><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"/></svg></button>
              </div></td>
            </tr>
            <tr>
              <td><strong style="color:var(--text)">UI/UX Designer</strong><br><small class="muted">Dhaka · Full-time</small></td>
              <td><a href="<?= BASE_URL ?>employer/applicants.php">37 applicants</a></td>
              <td>4 Nov 2026</td><td>22 Nov 2026</td><td><span class="badge badge-dot badge-warning">Draft</span></td>
              <td><div class="actions">
                <a class="icon-btn" href="<?= BASE_URL ?>job-details.php" title="View"><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg></a>
                <a class="icon-btn" href="<?= BASE_URL ?>employer/post-job.php" title="Edit"><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><path d="M12 20h9"/><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"/></svg></a>
                <button class="icon-btn danger" data-modal-open="deleteModal" title="Delete"><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><polyline points="3 6 5 6 21 6"/><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"/></svg></button>
              </div></td>
            </tr>
            <tr>
              <td><strong style="color:var(--text)">Laravel Backend Engineer</strong><br><small class="muted">Dhaka · Full-time</small></td>
              <td><a href="<?= BASE_URL ?>employer/applicants.php">52 applicants</a></td>
              <td>5 Nov 2026</td><td>23 Nov 2026</td><td><span class="badge badge-dot badge-success">Active</span></td>
              <td><div class="actions">
                <a class="icon-btn" href="<?= BASE_URL ?>job-details.php" title="View"><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg></a>
                <a class="icon-btn" href="<?= BASE_URL ?>employer/post-job.php" title="Edit"><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><path d="M12 20h9"/><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"/></svg></a>
                <button class="icon-btn danger" data-modal-open="deleteModal" title="Delete"><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><polyline points="3 6 5 6 21 6"/><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"/></svg></button>
              </div></td>
            </tr>
            <tr>
              <td><strong style="color:var(--text)">QA Engineer</strong><br><small class="muted">Dhaka · Full-time</small></td>
              <td><a href="<?= BASE_URL ?>employer/applicants.php">41 applicants</a></td>
              <td>6 Nov 2026</td><td>24 Nov 2026</td><td><span class="badge badge-dot badge-gray">Closed</span></td>
              <td><div class="actions">
                <a class="icon-btn" href="<?= BASE_URL ?>job-details.php" title="View"><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg></a>
                <a class="icon-btn" href="<?= BASE_URL ?>employer/post-job.php" title="Edit"><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><path d="M12 20h9"/><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"/></svg></a>
                <button class="icon-btn danger" data-modal-open="deleteModal" title="Delete"><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><polyline points="3 6 5 6 21 6"/><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"/></svg></button>
              </div></td>
            </tr>
            <tr>
              <td><strong style="color:var(--text)">DevOps Intern</strong><br><small class="muted">Dhaka · Full-time</small></td>
              <td><a href="<?= BASE_URL ?>employer/applicants.php">18 applicants</a></td>
              <td>7 Nov 2026</td><td>25 Nov 2026</td><td><span class="badge badge-dot badge-gray">Closed</span></td>
              <td><div class="actions">
                <a class="icon-btn" href="<?= BASE_URL ?>job-details.php" title="View"><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg></a>
                <a class="icon-btn" href="<?= BASE_URL ?>employer/post-job.php" title="Edit"><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><path d="M12 20h9"/><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"/></svg></a>
                <button class="icon-btn danger" data-modal-open="deleteModal" title="Delete"><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><polyline points="3 6 5 6 21 6"/><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"/></svg></button>
              </div></td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="card-footer flex justify-between items-center wrap gap-1">
        <small class="muted">Showing 1–6 of 12</small>
        <ul class="pagination" style="margin:0"><li><span class="disabled">&laquo;</span></li><li><span class="active">1</span></li><li><a href="#">2</a></li><li><a href="#">&raquo;</a></li></ul>
      </div>
    </div>

    <div class="modal" id="deleteModal">
      <div class="modal-dialog sm">
        <form action="" method="post">
          <input type="hidden" name="id" value="">
          <div class="modal-header"><h3>Delete this item?</h3><button type="button" class="modal-close" data-modal-close>&times;</button></div>
          <div class="modal-body"><p class="mb-0">This action cannot be undone.</p></div>
          <div class="modal-footer"><button type="button" class="btn btn-light" data-modal-close>Cancel</button><button class="btn btn-danger" type="submit" name="delete">Delete</button></div>
        </form>
      </div>
    </div>

<?php include __DIR__ . '/../includes/dash-footer.php'; ?>
