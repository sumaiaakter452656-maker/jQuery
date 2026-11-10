<?php
require_once __DIR__ . '/../includes/config.php';
// require_role('employer');   // uncomment when login is ready
$pageTitle = 'Applicants';
$active    = 'applicants';
$role      = 'employer';
include __DIR__ . '/../includes/dash-header.php';
?>

    <div class="page-actions">
      <div><h2>Applicants</h2><p>Review candidates and update their status.</p></div>
      <select class="form-control" style="width:auto"><option>All jobs</option><option>Senior PHP Developer</option><option>Frontend Developer</option></select>
    </div>
    <div class="card" data-tabs>
      <div class="card-body" style="padding-bottom:0">
        <div class="tabs mb-0">
          <button class="tab-btn active" data-tab="t-all">All <span class="badge badge-gray">348</span></button>
          <button class="tab-btn" data-tab="t-new">New <span class="badge badge-info">12</span></button>
          <button class="tab-btn" data-tab="t-short">Shortlisted <span class="badge badge-primary">46</span></button>
          <button class="tab-btn" data-tab="t-rej">Rejected</button>
        </div>
      </div>
      <div class="tab-pane active" id="t-all">
        <div class="table-wrap">
          <table class="table">
            <thead><tr><th>Candidate</th><th>Applied for</th><th>Date</th><th>Experience</th><th>Status</th><th>Actions</th></tr></thead>
            <tbody>
              <tr>
                <td><div class="cell-user"><span class="avatar sm" style="background:#0f766e">RU</span><div><strong>Rahim Uddin</strong><small>rahim@mail.com</small></div></div></td>
                <td>Senior PHP Developer</td><td>1 Nov 2026</td><td>1–3 yrs</td><td><select class="form-control" style="padding:6px 32px 6px 10px;font-size:.85rem;min-width:130px"><option selected>New</option><option>Reviewed</option><option>Shortlisted</option><option>Interview</option><option>Rejected</option><option>Hired</option></select></td>
                <td><div class="actions"><a class="icon-btn" href="#" title="View CV"><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg></a><a class="icon-btn" href="#" title="Shortlist"><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg></a></div></td>
              </tr>
              <tr>
                <td><div class="cell-user"><span class="avatar sm" style="background:#7c3aed">NJ</span><div><strong>Nusrat Jahan</strong><small>nusrat@mail.com</small></div></div></td>
                <td>Frontend Developer</td><td>2 Nov 2026</td><td>2–4 yrs</td><td><select class="form-control" style="padding:6px 32px 6px 10px;font-size:.85rem;min-width:130px"><option>New</option><option>Reviewed</option><option selected>Shortlisted</option><option>Interview</option><option>Rejected</option><option>Hired</option></select></td>
                <td><div class="actions"><a class="icon-btn" href="#" title="View CV"><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg></a><a class="icon-btn" href="#" title="Shortlist"><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg></a></div></td>
              </tr>
              <tr>
                <td><div class="cell-user"><span class="avatar sm" style="background:#ea580c">TA</span><div><strong>Tanvir Ahmed</strong><small>tanvir@mail.com</small></div></div></td>
                <td>UI/UX Designer</td><td>3 Nov 2026</td><td>3–5 yrs</td><td><select class="form-control" style="padding:6px 32px 6px 10px;font-size:.85rem;min-width:130px"><option>New</option><option selected>Reviewed</option><option>Shortlisted</option><option>Interview</option><option>Rejected</option><option>Hired</option></select></td>
                <td><div class="actions"><a class="icon-btn" href="#" title="View CV"><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg></a><a class="icon-btn" href="#" title="Shortlist"><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg></a></div></td>
              </tr>
              <tr>
                <td><div class="cell-user"><span class="avatar sm" style="background:#db2777">FA</span><div><strong>Farhana Akter</strong><small>farhana@mail.com</small></div></div></td>
                <td>Senior PHP Developer</td><td>4 Nov 2026</td><td>4–6 yrs</td><td><select class="form-control" style="padding:6px 32px 6px 10px;font-size:.85rem;min-width:130px"><option>New</option><option>Reviewed</option><option>Shortlisted</option><option selected>Interview</option><option>Rejected</option><option>Hired</option></select></td>
                <td><div class="actions"><a class="icon-btn" href="#" title="View CV"><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg></a><a class="icon-btn" href="#" title="Shortlist"><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg></a></div></td>
              </tr>
              <tr>
                <td><div class="cell-user"><span class="avatar sm" style="background:#2563eb">SH</span><div><strong>Sabbir Hossain</strong><small>sabbir@mail.com</small></div></div></td>
                <td>Laravel Backend Engineer</td><td>5 Nov 2026</td><td>5–7 yrs</td><td><select class="form-control" style="padding:6px 32px 6px 10px;font-size:.85rem;min-width:130px"><option>New</option><option>Reviewed</option><option>Shortlisted</option><option>Interview</option><option selected>Rejected</option><option>Hired</option></select></td>
                <td><div class="actions"><a class="icon-btn" href="#" title="View CV"><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg></a><a class="icon-btn" href="#" title="Shortlist"><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg></a></div></td>
              </tr>
              <tr>
                <td><div class="cell-user"><span class="avatar sm" style="background:#0891b2">MC</span><div><strong>Mim Chowdhury</strong><small>mim@mail.com</small></div></div></td>
                <td>Frontend Developer</td><td>6 Nov 2026</td><td>6–8 yrs</td><td><select class="form-control" style="padding:6px 32px 6px 10px;font-size:.85rem;min-width:130px"><option selected>New</option><option>Reviewed</option><option>Shortlisted</option><option>Interview</option><option>Rejected</option><option>Hired</option></select></td>
                <td><div class="actions"><a class="icon-btn" href="#" title="View CV"><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg></a><a class="icon-btn" href="#" title="Shortlist"><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg></a></div></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="tab-pane" id="t-new"><div class="empty-state"><div class="empty-icon"><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg></div><h3>Filtered list goes here</h3><p>Load applicants with status = New from the database.</p></div></div>
      <div class="tab-pane" id="t-short"><div class="empty-state"><div class="empty-icon"><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="8" r="7"/><polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.89"/></svg></div><h3>Shortlisted candidates</h3><p>Load applicants with status = Shortlisted.</p></div></div>
      <div class="tab-pane" id="t-rej"><div class="empty-state"><div class="empty-icon"><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg></div><h3>No rejected candidates</h3><p>Nothing to show here.</p></div></div>
    </div>

<?php include __DIR__ . '/../includes/dash-footer.php'; ?>
