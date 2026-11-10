  <?php
require_once __DIR__ . '/../includes/config.php';
// require_role('admin');   // uncomment when login is ready
$pageTitle = 'Users';
$active    = 'users';
$role      = 'admin';
include __DIR__ . '/../includes/dash-header.php';
?>

    <div class="page-actions">
      <div><h2>All users</h2><p>Manage job seekers and employers.</p></div>
      <div class="input-icon"><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg><input class="form-control" placeholder="Search by name or email"></div>
    </div>
    <div class="card" data-tabs>
      <div class="card-body" style="padding-bottom:0">
        <div class="tabs mb-0">
          <button class="tab-btn active" data-tab="u-all">All</button>
          <button class="tab-btn" data-tab="u-all">Job Seekers</button>
          <button class="tab-btn" data-tab="u-all">Employers</button>
          <button class="tab-btn" data-tab="u-all">Blocked</button>
        </div>
      </div>
      <div class="tab-pane active" id="u-all">
        <div class="table-wrap">
          <table class="table">
            <thead><tr><th>User</th><th>Role</th><th>Joined</th><th>Status</th><th>Actions</th></tr></thead>
            <tbody>
            <tr>
              <td><div class="cell-user"><span class="avatar sm" style="background:#0f766e">RU</span><div><strong>Rahim Uddin</strong><small>rahim@mail.com</small></div></div></td>
              <td><span class="badge badge-primary">Job Seeker</span></td><td>1 Oct 2026</td><td><span class="badge badge-dot badge-success">Active</span></td>
              <td><div class="actions"><a class="icon-btn" href="#" title="View"><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg></a><a class="icon-btn" href="#" title="Block"><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></a><button class="icon-btn danger" data-modal-open="deleteModal" title="Delete"><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><polyline points="3 6 5 6 21 6"/><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"/></svg></button></div></td>
            </tr>
            <tr>
              <td><div class="cell-user"><span class="avatar sm" style="background:#7c3aed">NJ</span><div><strong>Nusrat Jahan</strong><small>nusrat@mail.com</small></div></div></td>
              <td><span class="badge badge-info">Employer</span></td><td>2 Oct 2026</td><td><span class="badge badge-dot badge-success">Active</span></td>
              <td><div class="actions"><a class="icon-btn" href="#" title="View"><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg></a><a class="icon-btn" href="#" title="Block"><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></a><button class="icon-btn danger" data-modal-open="deleteModal" title="Delete"><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><polyline points="3 6 5 6 21 6"/><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"/></svg></button></div></td>
            </tr>
            <tr>
              <td><div class="cell-user"><span class="avatar sm" style="background:#ea580c">TA</span><div><strong>Tanvir Ahmed</strong><small>tanvir@mail.com</small></div></div></td>
              <td><span class="badge badge-primary">Job Seeker</span></td><td>3 Oct 2026</td><td><span class="badge badge-dot badge-success">Active</span></td>
              <td><div class="actions"><a class="icon-btn" href="#" title="View"><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg></a><a class="icon-btn" href="#" title="Block"><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></a><button class="icon-btn danger" data-modal-open="deleteModal" title="Delete"><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><polyline points="3 6 5 6 21 6"/><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"/></svg></button></div></td>
            </tr>
            <tr>
              <td><div class="cell-user"><span class="avatar sm" style="background:#db2777">FA</span><div><strong>Farhana Akter</strong><small>farhana@mail.com</small></div></div></td>
              <td><span class="badge badge-info">Employer</span></td><td>4 Oct 2026</td><td><span class="badge badge-dot badge-danger">Blocked</span></td>
              <td><div class="actions"><a class="icon-btn" href="#" title="View"><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg></a><a class="icon-btn" href="#" title="Block"><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></a><button class="icon-btn danger" data-modal-open="deleteModal" title="Delete"><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><polyline points="3 6 5 6 21 6"/><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"/></svg></button></div></td>
            </tr>
            <tr>
              <td><div class="cell-user"><span class="avatar sm" style="background:#2563eb">SH</span><div><strong>Sabbir Hossain</strong><small>sabbir@mail.com</small></div></div></td>
              <td><span class="badge badge-primary">Job Seeker</span></td><td>5 Oct 2026</td><td><span class="badge badge-dot badge-success">Active</span></td>
              <td><div class="actions"><a class="icon-btn" href="#" title="View"><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg></a><a class="icon-btn" href="#" title="Block"><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></a><button class="icon-btn danger" data-modal-open="deleteModal" title="Delete"><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><polyline points="3 6 5 6 21 6"/><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"/></svg></button></div></td>
            </tr>
            <tr>
              <td><div class="cell-user"><span class="avatar sm" style="background:#0891b2">MC</span><div><strong>Mim Chowdhury</strong><small>mim@mail.com</small></div></div></td>
              <td><span class="badge badge-info">Employer</span></td><td>6 Oct 2026</td><td><span class="badge badge-dot badge-success">Active</span></td>
              <td><div class="actions"><a class="icon-btn" href="#" title="View"><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg></a><a class="icon-btn" href="#" title="Block"><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></a><button class="icon-btn danger" data-modal-open="deleteModal" title="Delete"><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><polyline points="3 6 5 6 21 6"/><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"/></svg></button></div></td>
            </tr>
            </tbody>
          </table>
        </div>
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
