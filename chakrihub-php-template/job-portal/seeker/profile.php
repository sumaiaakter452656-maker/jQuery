<?php
require_once __DIR__ . '/../includes/config.php';
// require_role('seeker');
$pageTitle = 'My Profile';
$active    = 'profile';
$role      = 'seeker';

$user    = current_user('seeker');
$profile = ['name' => $user['name'], 'headline' => 'Junior PHP Developer', 'email' => 'rahim@mail.com', 'phone' => '',
            'gender' => 'Male', 'address' => 'Mirpur, Dhaka', 'bio' => '', 'skills' => 'PHP, MySQL, JavaScript, Bootstrap, Git'];
$v = fn($k) => $_POST[$k] ?? ($profile[$k] ?? '');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Each tab posts a "section" so one file can handle all forms
    $messages = ['personal' => 'Personal info saved.', 'education' => 'Education added.',
                 'experience' => 'Experience added.', 'resume' => 'Skills & resume saved.'];
    // TODO: UPDATE seeker_profiles / INSERT INTO educations / experiences ...
    flash('success', $messages[$_POST['section'] ?? 'personal'] ?? 'Saved.');
    redirect('seeker/profile.php');
}
$skills = array_filter(array_map('trim', explode(',', $profile['skills'])));

include __DIR__ . '/../layouts/dash-header.php';
component('page-actions', ['title' => 'My profile', 'subtitle' => 'Employers see this information when you apply.']);
?>
<div class="card" data-tabs>
  <div class="card-body">
    <div class="tabs">
      <button class="tab-btn active" data-tab="p-personal">Personal info</button>
      <button class="tab-btn" data-tab="p-edu">Education <span class="badge badge-gray"><?= count($educations) ?></span></button>
      <button class="tab-btn" data-tab="p-exp">Experience <span class="badge badge-gray"><?= count($experiences) ?></span></button>
      <button class="tab-btn" data-tab="p-resume">Skills &amp; Resume</button>
    </div>

    <!-- PERSONAL -->
    <div class="tab-pane active" id="p-personal">
      <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="section" value="personal">
        <div class="flex items-center gap-2 mb-3 wrap">
          <span class="avatar lg"><?= e(initials($profile['name'])) ?></span>
          <label class="btn btn-light btn-sm" style="cursor:pointer"><?= icon('upload') ?> Change photo<input type="file" name="photo" accept="image/*" hidden></label>
        </div>
        <div class="form-row">
          <?php component('form-field', ['name' => 'name',     'label' => 'Full name',          'value' => $v('name')]); ?>
          <?php component('form-field', ['name' => 'headline', 'label' => 'Professional title', 'value' => $v('headline')]); ?>
          <?php component('form-field', ['name' => 'email',    'label' => 'Email', 'type' => 'email', 'value' => $v('email')]); ?>
          <?php component('form-field', ['name' => 'phone',    'label' => 'Phone',              'value' => $v('phone')]); ?>
          <?php component('form-field', ['name' => 'dob',      'label' => 'Date of birth', 'type' => 'date']); ?>
          <?php component('form-field', ['name' => 'gender',   'label' => 'Gender', 'type' => 'select', 'options' => ['Male', 'Female', 'Other'], 'value' => $v('gender')]); ?>
        </div>
        <?php component('form-field', ['name' => 'address', 'label' => 'Address', 'value' => $v('address')]); ?>
        <?php component('form-field', ['name' => 'bio', 'label' => 'About me', 'type' => 'textarea', 'value' => $v('bio')]); ?>
        <div class="form-actions"><button class="btn btn-primary" type="submit">Save changes</button></div>
      </form>
    </div>

    <!-- EDUCATION -->
    <div class="tab-pane" id="p-edu">
      <ul class="timeline mb-3">
        <?php foreach ($educations as $ed): ?>
          <li><h4><?= e($ed['degree']) ?></h4><p class="muted mb-0"><?= e($ed['institute']) ?> · <?= e($ed['year']) ?> · <?= e($ed['result']) ?></p></li>
        <?php endforeach; ?>
      </ul>
      <form action="" method="post" class="card"><div class="card-body">
        <input type="hidden" name="section" value="education">
        <h4>Add education</h4>
        <div class="form-row">
          <?php component('form-field', ['name' => 'degree',    'label' => 'Degree', 'required' => true]); ?>
          <?php component('form-field', ['name' => 'institute', 'label' => 'Institution', 'required' => true]); ?>
          <?php component('form-field', ['name' => 'year',      'label' => 'Passing year', 'type' => 'number']); ?>
          <?php component('form-field', ['name' => 'result',    'label' => 'Result']); ?>
        </div>
        <div class="form-actions"><button class="btn btn-primary" type="submit"><?= icon('plus') ?> Add</button></div>
      </div></form>
    </div>

    <!-- EXPERIENCE -->
    <div class="tab-pane" id="p-exp">
      <ul class="timeline mb-3">
        <?php foreach ($experiences as $ex): ?>
          <li>
            <h4><?= e($ex['position']) ?></h4>
            <p class="muted mb-0"><?= e($ex['company']) ?> · <?= e($ex['period']) ?></p>
            <?php if ($ex['description']): ?><p class="small mb-0"><?= e($ex['description']) ?></p><?php endif; ?>
          </li>
        <?php endforeach; ?>
      </ul>
      <form action="" method="post" class="card"><div class="card-body">
        <input type="hidden" name="section" value="experience">
        <h4>Add experience</h4>
        <div class="form-row">
          <?php component('form-field', ['name' => 'position', 'label' => 'Job title', 'required' => true]); ?>
          <?php component('form-field', ['name' => 'company',  'label' => 'Company', 'required' => true]); ?>
          <?php component('form-field', ['name' => 'from',     'label' => 'From', 'type' => 'month']); ?>
          <?php component('form-field', ['name' => 'to',       'label' => 'To', 'type' => 'month']); ?>
        </div>
        <label class="check mb-2"><input type="checkbox" name="current"> I currently work here</label>
        <?php component('form-field', ['name' => 'description', 'label' => 'Description', 'type' => 'textarea']); ?>
        <div class="form-actions"><button class="btn btn-primary" type="submit"><?= icon('plus') ?> Add</button></div>
      </div></form>
    </div>

    <!-- SKILLS & RESUME -->
    <div class="tab-pane" id="p-resume">
      <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="section" value="resume">
        <?php component('form-field', ['name' => 'skills', 'label' => 'Skills', 'value' => $v('skills'), 'hint' => 'Separate with commas.']); ?>
        <div class="tags mb-3"><?php foreach ($skills as $s): ?><span class="tag"><?= e($s) ?></span><?php endforeach; ?></div>
        <div class="form-group">
          <label class="form-label">Resume / CV</label>
          <div class="list-item" style="padding:12px;border:1px solid var(--border);border-radius:10px;margin-bottom:12px">
            <span class="stat-icon teal" style="width:40px;height:40px"><?= icon('file') ?></span>
            <div class="list-item-body"><strong>Rahim_Uddin_CV.pdf</strong><small>Uploaded 02 Nov 2026 · 240 KB</small></div>
            <a href="#" class="icon-btn" title="Download"><?= icon('download') ?></a>
          </div>
          <label class="file-drop"><?= icon('upload') ?><span class="file-name">Upload a new CV (PDF, max 2MB)</span><input type="file" name="resume" accept=".pdf"></label>
        </div>
        <div class="form-actions"><button class="btn btn-primary" type="submit">Save</button></div>
      </form>
    </div>
  </div>
</div>
<?php include __DIR__ . '/../layouts/dash-footer.php'; ?>
