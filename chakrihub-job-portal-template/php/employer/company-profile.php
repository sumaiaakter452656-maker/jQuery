<?php
require_once __DIR__ . '/../includes/config.php';
// require_role('employer');   // uncomment when login is ready
$pageTitle = 'Company Profile';
$active    = 'company';
$role      = 'employer';
include __DIR__ . '/../includes/dash-header.php';
?>

    <div class="page-actions"><div><h2>Company profile</h2><p>This information is shown on your job posts.</p></div></div>
    <div class="alert alert-success"><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg><span>Profile updated successfully. <em>(example)</em></span><button class="alert-close">&times;</button></div>
    <form class="card" action="" method="post" enctype="multipart/form-data">
      <div class="card-body">
        <div class="flex items-center gap-2 mb-3 wrap">
          <div class="company-logo lg" style="background:#0f766e">TV</div>
          <div><label class="btn btn-light btn-sm" style="cursor:pointer"><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="17 8 12 3 7 8"/><line x1="12" y1="3" x2="12" y2="15"/></svg> Upload logo<input type="file" name="logo" accept="image/*" hidden></label><div class="form-hint">PNG or JPG, at least 200×200px.</div></div>
        </div>
        <div class="form-row">
          <div class="form-group"><label class="form-label">Company name <span class="req">*</span></label><input class="form-control" name="name" value="TechVerse Ltd."></div>
          <div class="form-group"><label class="form-label">Industry</label><select class="form-control" name="industry"><option>Software</option><option>E-commerce</option><option>Finance</option></select></div>
          <div class="form-group"><label class="form-label">Company size</label><select class="form-control" name="size"><option>1–10</option><option>11–50</option><option selected>50–200</option><option>200+</option></select></div>
          <div class="form-group"><label class="form-label">Website</label><input class="form-control" type="url" name="website" placeholder="https://"></div>
          <div class="form-group"><label class="form-label">Email</label><input class="form-control" type="email" name="email"></div>
          <div class="form-group"><label class="form-label">Phone</label><input class="form-control" name="phone"></div>
        </div>
        <div class="form-group"><label class="form-label">Address</label><input class="form-control" name="address"></div>
        <div class="form-group"><label class="form-label">About the company</label><textarea class="form-control" name="about" rows="5"></textarea></div>
        <div class="form-actions"><button class="btn btn-primary" type="submit">Save changes</button></div>
      </div>
    </form>

<?php include __DIR__ . '/../includes/dash-footer.php'; ?>
