<?php
require_once __DIR__ . '/../includes/config.php';
// require_role('seeker');   // uncomment when login is ready
$pageTitle = 'Saved Jobs';
$active    = 'saved';
$role      = 'seeker';
include __DIR__ . '/../includes/dash-header.php';
?>

    <div class="page-actions"><div><h2>Saved jobs</h2><p>Jobs you bookmarked to apply later.</p></div></div>
    <div class="grid grid-2">
      <div class="job-card">
        <div class="job-card-head">
          <div class="company-logo" style="background:#7c3aed">PB</div>
          <div class="job-card-info">
            <h3><a href="<?= BASE_URL ?>job-details.php">Frontend Developer (React)</a></h3>
            <p class="muted">Pixel Bay</p>
          </div>
          <button class="icon-btn saved" data-toggle-save title="Save job"><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78L12 21.23l8.84-8.84a5.5 5.5 0 0 0 0-7.78z"/></svg></button>
        </div>
        <div class="job-meta">
          <span><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>Remote</span><span><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>৳60k – 90k</span><span><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>5 hours ago</span>
        </div>
        <div class="job-card-foot">
          <div class="tags"><span class="badge badge-info">Remote</span><span class="tag">React</span><span class="tag">JavaScript</span></div>
          <a class="btn btn-sm btn-outline" href="<?= BASE_URL ?>job-details.php">Apply Now</a>
        </div>
      </div>
      <div class="job-card">
        <div class="job-card-head">
          <div class="company-logo" style="background:#ea580c">SB</div>
          <div class="job-card-info">
            <h3><a href="<?= BASE_URL ?>job-details.php">Digital Marketing Executive</a></h3>
            <p class="muted">Shoply BD</p>
          </div>
          <button class="icon-btn saved" data-toggle-save title="Save job"><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78L12 21.23l8.84-8.84a5.5 5.5 0 0 0 0-7.78z"/></svg></button>
        </div>
        <div class="job-meta">
          <span><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>Chattogram</span><span><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>৳35k – 50k</span><span><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>1 day ago</span>
        </div>
        <div class="job-card-foot">
          <div class="tags"><span class="badge badge-primary">Full-time</span><span class="tag">SEO</span><span class="tag">Facebook Ads</span></div>
          <a class="btn btn-sm btn-outline" href="<?= BASE_URL ?>job-details.php">Apply Now</a>
        </div>
      </div>
      <div class="job-card">
        <div class="job-card-head">
          <div class="company-logo" style="background:#db2777">NS</div>
          <div class="job-card-info">
            <h3><a href="<?= BASE_URL ?>job-details.php">UI/UX Designer</a></h3>
            <p class="muted">Nimbus Studio</p>
          </div>
          <button class="icon-btn saved" data-toggle-save title="Save job"><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78L12 21.23l8.84-8.84a5.5 5.5 0 0 0 0-7.78z"/></svg></button>
        </div>
        <div class="job-meta">
          <span><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>Dhaka</span><span><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>৳50k – 70k</span><span><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>3 days ago</span>
        </div>
        <div class="job-card-foot">
          <div class="tags"><span class="badge badge-warning">Contract</span><span class="tag">Figma</span><span class="tag">Prototyping</span></div>
          <a class="btn btn-sm btn-outline" href="<?= BASE_URL ?>job-details.php">Apply Now</a>
        </div>
      </div>
      <div class="job-card">
        <div class="job-card-head">
          <div class="company-logo" style="background:#2563eb">MG</div>
          <div class="job-card-info">
            <h3><a href="<?= BASE_URL ?>job-details.php">Accounts Officer</a></h3>
            <p class="muted">Meghna Group</p>
          </div>
          <button class="icon-btn saved" data-toggle-save title="Save job"><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78L12 21.23l8.84-8.84a5.5 5.5 0 0 0 0-7.78z"/></svg></button>
        </div>
        <div class="job-meta">
          <span><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>Narayanganj</span><span><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>৳30k – 45k</span><span><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>4 days ago</span>
        </div>
        <div class="job-card-foot">
          <div class="tags"><span class="badge badge-primary">Full-time</span><span class="tag">Tally</span><span class="tag">Excel</span></div>
          <a class="btn btn-sm btn-outline" href="<?= BASE_URL ?>job-details.php">Apply Now</a>
        </div>
      </div></div>

<?php include __DIR__ . '/../includes/dash-footer.php'; ?>
