<?php
require_once __DIR__ . '/../includes/config.php';
// require_role('employer');   // uncomment when login is ready
$pageTitle = 'Employer Dashboard';
$active    = 'dashboard';
$role      = 'employer';
include __DIR__ . '/../includes/dash-header.php';
?>

    <div class="page-actions">
      <div><h2>Welcome back, TechVerse 👋</h2><p>Here's what's happening with your jobs today.</p></div>
      <a href="<?= BASE_URL ?>employer/post-job.php" class="btn btn-primary"><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg> Post a Job</a>
    </div>
    <div class="grid grid-4 mb-3"><div class="stat-card"><div class="stat-icon teal"><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg></div>
          <div><h3>12</h3><p>Active jobs</p><span class="stat-trend up">+2 this month</span></div></div><div class="stat-card"><div class="stat-icon blue"><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg></div>
          <div><h3>348</h3><p>Total applicants</p><span class="stat-trend up">+18% this month</span></div></div><div class="stat-card"><div class="stat-icon amber"><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="8" r="7"/><polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.89"/></svg></div>
          <div><h3>46</h3><p>Shortlisted</p></div></div><div class="stat-card"><div class="stat-icon rose"><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg></div>
          <div><h3>5.2k</h3><p>Job views</p><span class="stat-trend up">+9% this month</span></div></div></div>

    <div class="dash-grid">
      <div class="card">
        <div class="card-header"><h3>Recent applicants</h3><a href="<?= BASE_URL ?>employer/applicants.php" class="btn btn-sm btn-light">View all</a></div>
        <div class="table-wrap">
          <table class="table">
            <thead><tr><th>Candidate</th><th>Applied for</th><th>Date</th><th>Status</th><th></th></tr></thead>
            <tbody>
              <tr>
                <td><div class="cell-user"><span class="avatar sm" style="background:#0f766e">RU</span><div><strong>Rahim Uddin</strong><small>rahim@mail.com</small></div></div></td>
                <td>Senior PHP Developer</td><td>1 Nov 2026</td><td><span class="badge badge-dot badge-info">New</span></td>
                <td><div class="actions"><a class="icon-btn" href="#" title="View CV"><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg></a><a class="icon-btn" href="#" title="Shortlist"><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg></a></div></td>
              </tr>
              <tr>
                <td><div class="cell-user"><span class="avatar sm" style="background:#7c3aed">NJ</span><div><strong>Nusrat Jahan</strong><small>nusrat@mail.com</small></div></div></td>
                <td>Frontend Developer</td><td>2 Nov 2026</td><td><span class="badge badge-dot badge-primary">Shortlisted</span></td>
                <td><div class="actions"><a class="icon-btn" href="#" title="View CV"><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg></a><a class="icon-btn" href="#" title="Shortlist"><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg></a></div></td>
              </tr>
              <tr>
                <td><div class="cell-user"><span class="avatar sm" style="background:#ea580c">TA</span><div><strong>Tanvir Ahmed</strong><small>tanvir@mail.com</small></div></div></td>
                <td>UI/UX Designer</td><td>3 Nov 2026</td><td><span class="badge badge-dot badge-info">Reviewed</span></td>
                <td><div class="actions"><a class="icon-btn" href="#" title="View CV"><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg></a><a class="icon-btn" href="#" title="Shortlist"><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg></a></div></td>
              </tr>
              <tr>
                <td><div class="cell-user"><span class="avatar sm" style="background:#db2777">FA</span><div><strong>Farhana Akter</strong><small>farhana@mail.com</small></div></div></td>
                <td>Senior PHP Developer</td><td>4 Nov 2026</td><td><span class="badge badge-dot badge-success">Interview</span></td>
                <td><div class="actions"><a class="icon-btn" href="#" title="View CV"><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg></a><a class="icon-btn" href="#" title="Shortlist"><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg></a></div></td>
              </tr>
              <tr>
                <td><div class="cell-user"><span class="avatar sm" style="background:#2563eb">SH</span><div><strong>Sabbir Hossain</strong><small>sabbir@mail.com</small></div></div></td>
                <td>Laravel Backend Engineer</td><td>5 Nov 2026</td><td><span class="badge badge-dot badge-danger">Rejected</span></td>
                <td><div class="actions"><a class="icon-btn" href="#" title="View CV"><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg></a><a class="icon-btn" href="#" title="Shortlist"><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg></a></div></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="card">
        <div class="card-header"><h3>Applications this week</h3></div>
        <div class="card-body">
          <div class="bar-chart">
            <div class="bar"><span style="height:40%"></span><small>Sat</small></div>
            <div class="bar"><span style="height:65%"></span><small>Sun</small></div>
            <div class="bar"><span style="height:55%"></span><small>Mon</small></div>
            <div class="bar"><span style="height:90%"></span><small>Tue</small></div>
            <div class="bar"><span style="height:70%"></span><small>Wed</small></div>
            <div class="bar"><span style="height:45%"></span><small>Thu</small></div>
            <div class="bar"><span style="height:20%"></span><small>Fri</small></div>
          </div>
          <hr class="divider">
          <h4>Your top jobs</h4>
          <div class="list-item"><div class="list-item-body"><strong>Senior PHP Developer</strong><small>124 applicants</small></div><span class="badge badge-dot badge-success">Active</span></div>
          <div class="list-item"><div class="list-item-body"><strong>Frontend Developer</strong><small>98 applicants</small></div><span class="badge badge-dot badge-success">Active</span></div>
          <div class="list-item"><div class="list-item-body"><strong>QA Engineer</strong><small>41 applicants</small></div><span class="badge badge-dot badge-gray">Closed</span></div>
        </div>
      </div>
    </div>

<?php include __DIR__ . '/../includes/dash-footer.php'; ?>
