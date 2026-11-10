<?php
require_once __DIR__ . '/../includes/config.php';
// require_role('employer');   // uncomment when login is ready
$pageTitle = 'Post a Job';
$active    = 'post-job';
$role      = 'employer';
include __DIR__ . '/../includes/dash-header.php';
?>

    <div class="page-actions">
      <div><h2>Post a new job</h2><p>Fill in the details below. Fields marked * are required.</p></div>
    </div>
    <form class="card" action="" method="post">
      <div class="card-body">
        <h3 class="form-section-title">Basic information</h3>
        <div class="form-group"><label class="form-label">Job title <span class="req">*</span></label><input class="form-control" name="title" placeholder="e.g. Senior PHP Developer" required></div>
        <div class="form-row cols-3">
          <div class="form-group"><label class="form-label">Category <span class="req">*</span></label><select class="form-control" name="category_id"><option value="">Select</option><option>IT &amp; Software</option><option>Marketing</option><option>Design</option></select></div>
          <div class="form-group"><label class="form-label">Job type <span class="req">*</span></label><select class="form-control" name="job_type"><option>Full-time</option><option>Part-time</option><option>Remote</option><option>Contract</option><option>Internship</option></select></div>
          <div class="form-group"><label class="form-label">Vacancy</label><input class="form-control" type="number" name="vacancy" value="1" min="1"></div>
        </div>
        <div class="form-row cols-3">
          <div class="form-group"><label class="form-label">Location <span class="req">*</span></label><input class="form-control" name="location" placeholder="e.g. Dhaka"></div>
          <div class="form-group"><label class="form-label">Experience</label><select class="form-control" name="experience"><option>Fresher</option><option>1 – 3 years</option><option>3 – 5 years</option><option>5+ years</option></select></div>
          <div class="form-group"><label class="form-label">Deadline <span class="req">*</span></label><input class="form-control" type="date" name="deadline"></div>
        </div>

        <h3 class="form-section-title mt-2">Salary</h3>
        <div class="form-row cols-3">
          <div class="form-group"><label class="form-label">Minimum (৳)</label><input class="form-control" type="number" name="salary_min"></div>
          <div class="form-group"><label class="form-label">Maximum (৳)</label><input class="form-control" type="number" name="salary_max"></div>
          <div class="form-group"><label class="form-label">&nbsp;</label><label class="check mt-1"><input type="checkbox" name="negotiable"> Negotiable</label></div>
        </div>

        <h3 class="form-section-title mt-2">Job details</h3>
        <div class="form-group"><label class="form-label">Description <span class="req">*</span></label><textarea class="form-control" name="description" rows="6"></textarea></div>
        <div class="form-row">
          <div class="form-group"><label class="form-label">Responsibilities</label><textarea class="form-control" name="responsibilities" placeholder="One per line"></textarea></div>
          <div class="form-group"><label class="form-label">Requirements</label><textarea class="form-control" name="requirements" placeholder="One per line"></textarea></div>
        </div>
        <div class="form-group"><label class="form-label">Skills</label><input class="form-control" name="skills" placeholder="PHP, MySQL, Laravel"><div class="form-hint">Separate skills with commas.</div></div>
        <div class="form-actions">
          <button class="btn btn-light" type="submit" name="status" value="draft">Save as draft</button>
          <button class="btn btn-primary" type="submit" name="status" value="active">Publish job</button>
        </div>
      </div>
    </form>

<?php include __DIR__ . '/../includes/dash-footer.php'; ?>
