<?php
require_once __DIR__ . '/../includes/config.php';
// require_role('employer');
$pageTitle = 'Post a Job';
$active    = 'post-job';
$role      = 'employer';

// Edit mode: post-job.php?id=3 loads the job into the form
$editing = isset($_GET['id']) ? find_job($_GET['id']) : null;
$v = fn($key, $default = '') => $_POST[$key] ?? ($editing[$key] ?? $default);

$errors = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (trim($_POST['title'] ?? '') === '')       $errors['title'] = 'Job title is required.';
    if (empty($_POST['category_id']))             $errors['category_id'] = 'Choose a category.';
    if (trim($_POST['location'] ?? '') === '')    $errors['location'] = 'Location is required.';
    if (trim($_POST['description'] ?? '') === '') $errors['description'] = 'Write a short description.';

    if (!$errors) {
        // TODO: INSERT INTO jobs (...) VALUES (...)   or   UPDATE jobs SET ... WHERE id = ? AND company_id = ?
        $status = ($_POST['status'] ?? 'active') === 'draft' ? 'saved as draft' : 'published';
        flash('success', 'Job “' . $_POST['title'] . '” ' . $status . '.');
        redirect('employer/manage-jobs.php');
    }
}
$categoryOptions = ['' => 'Select'] + array_column($categories, 'name', 'id');
$experienceOpts  = ['Fresher', '1 – 3 years', '3 – 5 years', '5+ years'];

include __DIR__ . '/../layouts/dash-header.php';
component('page-actions', ['title' => $editing ? 'Edit job' : 'Post a new job',
                           'subtitle' => 'Fill in the details below. Fields marked * are required.']);
if ($errors) component('alert', ['type' => 'danger', 'message' => 'Please fix the highlighted fields.']);
?>
<form class="card" action="" method="post" novalidate>
  <div class="card-body">
    <h3 class="form-section-title">Basic information</h3>
    <?php component('form-field', ['name' => 'title', 'label' => 'Job title', 'required' => true, 'value' => $v('title'),
          'placeholder' => 'e.g. Senior PHP Developer', 'error' => $errors['title'] ?? null]); ?>
    <div class="form-row cols-3">
      <?php component('form-field', ['name' => 'category_id', 'label' => 'Category', 'type' => 'select', 'required' => true,
            'options' => $categoryOptions, 'value' => $v('category_id'), 'error' => $errors['category_id'] ?? null]); ?>
      <?php component('form-field', ['name' => 'type', 'label' => 'Job type', 'type' => 'select', 'options' => $jobTypes, 'value' => $v('type')]); ?>
      <?php component('form-field', ['name' => 'vacancy', 'label' => 'Vacancy', 'type' => 'number', 'value' => $v('vacancy', 1)]); ?>
    </div>
    <div class="form-row cols-3">
      <?php component('form-field', ['name' => 'location', 'label' => 'Location', 'required' => true, 'value' => $v('location'),
            'placeholder' => 'e.g. Dhaka', 'error' => $errors['location'] ?? null]); ?>
      <?php component('form-field', ['name' => 'experience', 'label' => 'Experience', 'type' => 'select', 'options' => $experienceOpts, 'value' => $v('experience')]); ?>
      <?php component('form-field', ['name' => 'deadline', 'label' => 'Deadline', 'type' => 'date', 'value' => $v('deadline_date')]); ?>
    </div>

    <h3 class="form-section-title mt-2">Salary</h3>
    <div class="form-row cols-3">
      <?php component('form-field', ['name' => 'salary_min', 'label' => 'Minimum (৳)', 'type' => 'number', 'value' => $v('salary_min')]); ?>
      <?php component('form-field', ['name' => 'salary_max', 'label' => 'Maximum (৳)', 'type' => 'number', 'value' => $v('salary_max')]); ?>
      <div class="form-group"><label class="form-label">&nbsp;</label><label class="check mt-1"><input type="checkbox" name="negotiable" <?= checked(!empty($_POST['negotiable'])) ?>> Negotiable</label></div>
    </div>

    <h3 class="form-section-title mt-2">Job details</h3>
    <?php component('form-field', ['name' => 'description', 'label' => 'Description', 'type' => 'textarea', 'required' => true,
          'value' => $v('description'), 'error' => $errors['description'] ?? null]); ?>
    <div class="form-row">
      <?php component('form-field', ['name' => 'responsibilities', 'label' => 'Responsibilities', 'type' => 'textarea', 'placeholder' => 'One per line']); ?>
      <?php component('form-field', ['name' => 'requirements', 'label' => 'Requirements', 'type' => 'textarea', 'placeholder' => 'One per line']); ?>
    </div>
    <?php component('form-field', ['name' => 'skills', 'label' => 'Skills', 'placeholder' => 'PHP, MySQL, Laravel',
          'value' => isset($editing['skills']) && !isset($_POST['skills']) ? implode(', ', $editing['skills']) : ($_POST['skills'] ?? ''),
          'hint' => 'Separate skills with commas.']); ?>
    <div class="form-actions">
      <button class="btn btn-light" type="submit" name="status" value="draft">Save as draft</button>
      <button class="btn btn-primary" type="submit" name="status" value="active"><?= $editing ? 'Update job' : 'Publish job' ?></button>
    </div>
  </div>
</form>
<?php include __DIR__ . '/../layouts/dash-footer.php'; ?>
