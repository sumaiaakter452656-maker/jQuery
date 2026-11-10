<?php
require_once __DIR__ . '/includes/config.php';

$job = find_job($_GET['id'] ?? 1);          // SQL: SELECT ... FROM jobs JOIN companies ... WHERE jobs.id = ?
if (!$job) {
    http_response_code(404);
    include __DIR__ . '/404.php';
    exit;
}
$company = $companyById[$job['company_id']];

// Sample long text (store these in the jobs table)
$responsibilities = ['Develop new features and maintain existing modules', 'Write clean, secure and well-tested code',
                     'Work closely with the product and design teams', 'Review code and help junior team members'];
$requirements     = ['2+ years of relevant professional experience', 'Good communication skills in Bangla and English',
                     'Ability to work in a team and meet deadlines', 'Bachelor degree in a related field (preferred)'];
$benefits         = ['Two festival bonuses & yearly increment', 'Lunch facility & health insurance', 'Learning budget'];
$overview = [
    ['calendar',  'Posted',     $job['posted']],
    ['clock',     'Deadline',   $job['deadline']],
    ['briefcase', 'Job type',   $job['type']],
    ['award',     'Experience', '2 – 4 years'],
    ['money',     'Salary',     salary_text($job['salary_min'], $job['salary_max'])],
    ['pin',       'Location',   $job['location']],
];

/* ---- Handle the apply form ---- */
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // TODO: validate, move_uploaded_file() the resume, INSERT INTO applications ...
    flash('success', 'Your application for “' . $job['title'] . '” has been submitted.');
    redirect('job-details.php?id=' . $job['id']);
}

$pageTitle = $job['title'];
$active    = 'jobs';
include __DIR__ . '/layouts/header.php';
?>
<section class="page-header">
  <div class="container">
    <ul class="breadcrumb"><li><a href="<?= url('index.php') ?>">Home</a></li><li><a href="<?= url('jobs.php') ?>">Jobs</a></li><li><?= e($job['title']) ?></li></ul>
    <?php component('flash'); ?>
    <div class="job-hero mt-2">
      <div class="company-logo lg" style="background:<?= e($job['company_color']) ?>"><?= e(initials($job['company'])) ?></div>
      <div class="job-hero-info">
        <h1><?= e($job['title']) ?></h1>
        <div class="job-meta">
          <span><?= icon('building') ?><?= e($job['company']) ?></span>
          <span><?= icon('pin') ?><?= e($job['location']) ?></span>
          <span><?= icon('money') ?><?= e(salary_text($job['salary_min'], $job['salary_max'])) ?></span>
          <span><?= icon('clock') ?>Posted <?= e($job['posted']) ?></span>
        </div>
      </div>
      <div class="job-hero-actions">
        <button class="icon-btn" data-toggle-save title="Save job"><?= icon('heart') ?></button>
        <button class="btn btn-primary btn-lg" data-modal-open="applyModal">Apply Now</button>
      </div>
    </div>
  </div>
</section>

<section class="section-sm">
  <div class="container details-layout">
    <article class="card">
      <div class="card-body content-block">
        <h3>Job Description</h3>
        <p><?= e($company['name']) ?> is looking for a <?= e($job['title']) ?> to join a friendly, growing team. You will work on real projects used by thousands of customers.</p>

        <?php foreach (['Responsibilities' => $responsibilities, 'Requirements' => $requirements, 'Benefits' => $benefits] as $heading => $items): ?>
          <h3><?= e($heading) ?></h3>
          <ul>
            <?php foreach ($items as $item): ?><li><?= e($item) ?></li><?php endforeach; ?>
          </ul>
        <?php endforeach; ?>

        <h3>Skills</h3>
        <div class="tags"><?php foreach ($job['skills'] as $s): ?><span class="tag"><?= e($s) ?></span><?php endforeach; ?></div>
        <hr class="divider">
        <div class="flex items-center justify-between wrap gap-2">
          <p class="mb-0 muted">Application deadline: <strong><?= e($job['deadline']) ?></strong></p>
          <button class="btn btn-primary" data-modal-open="applyModal">Apply for this job</button>
        </div>
      </div>
    </article>

    <aside>
      <div class="card mb-3">
        <div class="card-header"><h3>Job Overview</h3></div>
        <div class="card-body">
          <ul class="overview-list">
            <?php foreach ($overview as [$ic, $label, $value]): ?>
              <li><?= icon($ic) ?><div><small><?= e($label) ?></small><strong><?= e($value) ?></strong></div></li>
            <?php endforeach; ?>
          </ul>
        </div>
      </div>
      <div class="card">
        <div class="card-body text-center">
          <div class="company-logo lg" style="background:<?= e($company['color']) ?>;margin:0 auto 12px"><?= e(initials($company['name'])) ?></div>
          <h3 class="mb-0"><?= e($company['name']) ?></h3>
          <p class="muted small"><?= e($company['industry']) ?> · <?= e($company['location']) ?></p>
          <a href="<?= url('jobs.php?company=' . $company['id']) ?>" class="btn btn-light btn-block">More jobs from this company</a>
        </div>
      </div>
    </aside>
  </div>
</section>

<!-- APPLY MODAL -->
<div class="modal" id="applyModal">
  <div class="modal-dialog">
    <form action="" method="post" enctype="multipart/form-data">
      <input type="hidden" name="job_id" value="<?= (int) $job['id'] ?>">
      <div class="modal-header"><h3>Apply for <?= e($job['title']) ?></h3><button type="button" class="modal-close" data-modal-close>&times;</button></div>
      <div class="modal-body">
        <div class="form-row">
          <?php component('form-field', ['name' => 'name',  'label' => 'Full name', 'required' => true]); ?>
          <?php component('form-field', ['name' => 'phone', 'label' => 'Phone',     'required' => true]); ?>
        </div>
        <?php component('form-field', ['name' => 'expected_salary', 'label' => 'Expected salary', 'type' => 'number', 'placeholder' => 'e.g. 50000']); ?>
        <?php component('form-field', ['name' => 'cover_letter', 'label' => 'Cover letter', 'type' => 'textarea', 'placeholder' => 'Why are you a good fit?']); ?>
        <div class="form-group">
          <label class="form-label">Resume / CV <span class="req">*</span></label>
          <label class="file-drop"><?= icon('upload') ?><span class="file-name">Click to upload PDF (max 2MB)</span><input type="file" name="resume" accept=".pdf,.doc,.docx"></label>
        </div>
      </div>
      <div class="modal-footer"><button type="button" class="btn btn-light" data-modal-close>Cancel</button><button class="btn btn-primary" type="submit">Submit Application</button></div>
    </form>
  </div>
</div>
<?php include __DIR__ . '/layouts/footer.php'; ?>
