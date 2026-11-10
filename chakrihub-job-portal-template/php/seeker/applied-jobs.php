<?php
require_once __DIR__ . '/../includes/config.php';
// require_role('seeker');   // uncomment when login is ready
$pageTitle = 'Applied Jobs';
$active    = 'applied';
$role      = 'seeker';
include __DIR__ . '/../includes/dash-header.php';
?>

    <div class="page-actions">
      <div><h2>Applied jobs</h2><p>Track the status of every application.</p></div>
      <select class="form-control" style="width:auto"><option>All status</option><option>Pending</option><option>Shortlisted</option><option>Interview</option><option>Rejected</option></select>
    </div>
    <div class="card">
      <div class="table-wrap">
        <table class="table">
          <thead><tr><th>Job</th><th>Applied on</th><th>Status</th><th>Action</th></tr></thead>
          <tbody>
              <tr>
                <td><div class="cell-user"><span class="company-logo sm" style="background:#0f766e">TV</span><div><strong>Senior PHP Developer</strong><small>TechVerse Ltd.</small></div></div></td>
                <td>3 Nov 2026</td><td><span class="badge badge-dot badge-success">Interview</span></td><td><button class="btn btn-sm btn-light" data-confirm="Withdraw this application?">Withdraw</button></td>
              </tr>
              <tr>
                <td><div class="cell-user"><span class="company-logo sm" style="background:#7c3aed">PB</span><div><strong>Frontend Developer (React)</strong><small>Pixel Bay</small></div></div></td>
                <td>4 Nov 2026</td><td><span class="badge badge-dot badge-primary">Shortlisted</span></td><td><button class="btn btn-sm btn-light" data-confirm="Withdraw this application?">Withdraw</button></td>
              </tr>
              <tr>
                <td><div class="cell-user"><span class="company-logo sm" style="background:#0891b2">CC</span><div><strong>Laravel Backend Engineer</strong><small>CodeCraft</small></div></div></td>
                <td>5 Nov 2026</td><td><span class="badge badge-dot badge-info">Reviewed</span></td><td><button class="btn btn-sm btn-light" data-confirm="Withdraw this application?">Withdraw</button></td>
              </tr>
              <tr>
                <td><div class="cell-user"><span class="company-logo sm" style="background:#db2777">NS</span><div><strong>UI/UX Designer</strong><small>Nimbus Studio</small></div></div></td>
                <td>6 Nov 2026</td><td><span class="badge badge-dot badge-warning">Pending</span></td><td><button class="btn btn-sm btn-light" data-confirm="Withdraw this application?">Withdraw</button></td>
              </tr>
              <tr>
                <td><div class="cell-user"><span class="company-logo sm" style="background:#2563eb">MG</span><div><strong>Accounts Officer</strong><small>Meghna Group</small></div></div></td>
                <td>7 Nov 2026</td><td><span class="badge badge-dot badge-danger">Rejected</span></td><td><button class="btn btn-sm btn-light" data-confirm="Withdraw this application?">Withdraw</button></td>
              </tr>
          </tbody>
        </table>
      </div>
    </div>

<?php include __DIR__ . '/../includes/dash-footer.php'; ?>
