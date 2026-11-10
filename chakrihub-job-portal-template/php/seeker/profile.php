<?php
require_once __DIR__ . '/../includes/config.php';
// require_role('seeker');   // uncomment when login is ready
$pageTitle = 'My Profile';
$active    = 'profile';
$role      = 'seeker';
include __DIR__ . '/../includes/dash-header.php';
?>

    <div class="page-actions"><div><h2>My profile</h2><p>Employers see this information when you apply.</p></div></div>
    <div class="card" data-tabs>
      <div class="card-body">
        <div class="tabs">
          <button class="tab-btn active" data-tab="p-personal">Personal info</button>
          <button class="tab-btn" data-tab="p-edu">Education</button>
          <button class="tab-btn" data-tab="p-exp">Experience</button>
          <button class="tab-btn" data-tab="p-resume">Skills &amp; Resume</button>
        </div>

        <div class="tab-pane active" id="p-personal">
          <form action="" method="post" enctype="multipart/form-data">
            <div class="flex items-center gap-2 mb-3 wrap">
              <span class="avatar lg">RU</span>
              <label class="btn btn-light btn-sm" style="cursor:pointer"><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="17 8 12 3 7 8"/><line x1="12" y1="3" x2="12" y2="15"/></svg> Change photo<input type="file" name="photo" accept="image/*" hidden></label>
            </div>
            <div class="form-row">
              <div class="form-group"><label class="form-label">Full name</label><input class="form-control" name="name" value="Rahim Uddin"></div>
              <div class="form-group"><label class="form-label">Professional title</label><input class="form-control" name="headline" value="Junior PHP Developer"></div>
              <div class="form-group"><label class="form-label">Email</label><input class="form-control" type="email" name="email" value="rahim@mail.com"></div>
              <div class="form-group"><label class="form-label">Phone</label><input class="form-control" name="phone"></div>
              <div class="form-group"><label class="form-label">Date of birth</label><input class="form-control" type="date" name="dob"></div>
              <div class="form-group"><label class="form-label">Gender</label><select class="form-control" name="gender"><option>Male</option><option>Female</option><option>Other</option></select></div>
            </div>
            <div class="form-group"><label class="form-label">Address</label><input class="form-control" name="address"></div>
            <div class="form-group"><label class="form-label">About me</label><textarea class="form-control" name="bio"></textarea></div>
            <div class="form-actions"><button class="btn btn-primary" type="submit">Save changes</button></div>
          </form>
        </div>

        <div class="tab-pane" id="p-edu">
          <ul class="timeline mb-3">
            <li><h4>B.Sc. in Computer Science &amp; Engineering</h4><p class="muted mb-0">Dhaka University · 2019 – 2023 · CGPA 3.45</p></li>
            <li><h4>Higher Secondary Certificate (Science)</h4><p class="muted mb-0">Notre Dame College · 2018 · GPA 5.00</p></li>
          </ul>
          <form action="" method="post" class="card"><div class="card-body">
            <h4>Add education</h4>
            <div class="form-row">
              <div class="form-group"><label class="form-label">Degree</label><input class="form-control" name="degree"></div>
              <div class="form-group"><label class="form-label">Institution</label><input class="form-control" name="institute"></div>
              <div class="form-group"><label class="form-label">Passing year</label><input class="form-control" type="number" name="year"></div>
              <div class="form-group"><label class="form-label">Result</label><input class="form-control" name="result"></div>
            </div>
            <div class="form-actions"><button class="btn btn-primary" type="submit"><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg> Add</button></div>
          </div></form>
        </div>

        <div class="tab-pane" id="p-exp">
          <ul class="timeline mb-3">
            <li><h4>Junior PHP Developer</h4><p class="muted mb-0">WebNest IT · Jan 2024 – Present</p><p class="small mb-0">Building CRUD modules with PHP &amp; MySQL, maintaining client websites.</p></li>
            <li><h4>Web Development Intern</h4><p class="muted mb-0">SoftZone · Jun 2023 – Dec 2023</p></li>
          </ul>
          <form action="" method="post" class="card"><div class="card-body">
            <h4>Add experience</h4>
            <div class="form-row">
              <div class="form-group"><label class="form-label">Job title</label><input class="form-control" name="position"></div>
              <div class="form-group"><label class="form-label">Company</label><input class="form-control" name="company"></div>
              <div class="form-group"><label class="form-label">From</label><input class="form-control" type="month" name="from"></div>
              <div class="form-group"><label class="form-label">To</label><input class="form-control" type="month" name="to"></div>
            </div>
            <label class="check mb-2"><input type="checkbox" name="current"> I currently work here</label>
            <div class="form-group"><label class="form-label">Description</label><textarea class="form-control" name="description"></textarea></div>
            <div class="form-actions"><button class="btn btn-primary" type="submit"><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg> Add</button></div>
          </div></form>
        </div>

        <div class="tab-pane" id="p-resume">
          <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group"><label class="form-label">Skills</label><input class="form-control" name="skills" value="PHP, MySQL, JavaScript, Bootstrap, Git"><div class="form-hint">Separate with commas.</div></div>
            <div class="tags mb-3"><span class="tag">PHP</span><span class="tag">MySQL</span><span class="tag">JavaScript</span><span class="tag">Bootstrap</span><span class="tag">Git</span></div>
            <div class="form-group">
              <label class="form-label">Resume / CV</label>
              <div class="list-item" style="padding:12px;border:1px solid var(--border);border-radius:10px;margin-bottom:12px">
                <span class="stat-icon teal" style="width:40px;height:40px"><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg></span>
                <div class="list-item-body"><strong>Rahim_Uddin_CV.pdf</strong><small>Uploaded 02 Nov 2026 · 240 KB</small></div>
                <a href="#" class="icon-btn" title="Download"><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg></a>
              </div>
              <label class="file-drop"><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="17 8 12 3 7 8"/><line x1="12" y1="3" x2="12" y2="15"/></svg><span class="file-name">Upload a new CV (PDF, max 2MB)</span><input type="file" name="resume" accept=".pdf"></label>
            </div>
            <div class="form-actions"><button class="btn btn-primary" type="submit">Save</button></div>
          </form>
        </div>
      </div>
    </div>

<?php include __DIR__ . '/../includes/dash-footer.php'; ?>
