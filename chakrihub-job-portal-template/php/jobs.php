<?php
require_once __DIR__ . '/includes/config.php';
$pageTitle = 'Find Jobs';
$active    = 'jobs';
include __DIR__ . '/includes/header.php';
?>

<section class="page-header">
  <div class="container">
    <ul class="breadcrumb"><li><a href="<?= BASE_URL ?>index.php">Home</a></li><li>Jobs</li></ul>
    <h1>Find Jobs</h1><p class="muted mb-0 mt-1">Showing the latest openings from verified employers</p>
  </div>
</section>
<section class="section-sm">
  <div class="container listing-layout">
    <!-- FILTERS -->
    <aside class="card filter-box">
      <form class="card-body" action="" method="get">
        <div class="filter-group">
          <h4>Keyword</h4>
          <div class="input-icon"><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg><input type="text" name="q" class="form-control" placeholder="Title or skill"></div>
        </div>
        <div class="filter-group">
          <h4>Location</h4>
          <select class="form-control" name="location"><option>All locations</option><option>Dhaka</option><option>Chattogram</option><option>Sylhet</option><option>Remote</option></select>
        </div>
        <div class="filter-group">
          <h4>Category</h4>
          <select class="form-control" name="category"><option>All categories</option><option>IT &amp; Software</option><option>Marketing</option><option>Design</option><option>Finance</option></select>
        </div>
        <div class="filter-group">
          <h4>Job Type</h4>
          <label class="check"><input type="checkbox" name="type" checked> Full-time<span class="count">142</span></label><label class="check"><input type="checkbox" name="type"> Part-time<span class="count">38</span></label><label class="check"><input type="checkbox" name="type"> Remote<span class="count">64</span></label><label class="check"><input type="checkbox" name="type"> Contract<span class="count">21</span></label><label class="check"><input type="checkbox" name="type"> Internship<span class="count">17</span></label>
        </div>
        <div class="filter-group">
          <h4>Experience</h4>
          <label class="check"><input type="radio" name="exp"> Fresher<span class="count">52</span></label><label class="check"><input type="radio" name="exp" checked> 1 – 3 years<span class="count">96</span></label><label class="check"><input type="radio" name="exp"> 3 – 5 years<span class="count">61</span></label><label class="check"><input type="radio" name="exp"> 5+ years<span class="count">39</span></label>
        </div>
        <div class="filter-group">
          <h4>Salary (BDT / month)</h4>
          <div class="form-row"><input class="form-control" type="number" name="min" placeholder="Min"><input class="form-control" type="number" name="max" placeholder="Max"></div>
        </div>
        <button class="btn btn-primary btn-block" type="submit">Apply Filters</button>
        <a href="<?= BASE_URL ?>jobs.php" class="btn btn-ghost btn-block mt-1">Reset</a>
      </form>
    </aside>

    <!-- RESULTS -->
    <div>
      <div class="listing-toolbar">
        <p class="mb-0">Showing <strong>1–8</strong> of <strong>248</strong> jobs</p>
        <select class="form-control" name="sort"><option>Newest first</option><option>Salary: high to low</option><option>Salary: low to high</option></select>
      </div>
      <div class="job-list">
      <div class="job-card">
        <div class="job-card-head">
          <div class="company-logo" style="background:#0f766e">TV</div>
          <div class="job-card-info">
            <h3><a href="<?= BASE_URL ?>job-details.php">Senior PHP Developer</a></h3>
            <p class="muted">TechVerse Ltd.</p>
          </div>
          <button class="icon-btn" data-toggle-save title="Save job"><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78L12 21.23l8.84-8.84a5.5 5.5 0 0 0 0-7.78z"/></svg></button>
        </div>
        <div class="job-meta">
          <span><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>Dhaka</span><span><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>৳80k – 120k</span><span><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>2 days ago</span>
        </div>
        <div class="job-card-foot">
          <div class="tags"><span class="badge badge-primary">Full-time</span><span class="tag">PHP</span><span class="tag">Laravel</span></div>
          <a class="btn btn-sm btn-outline" href="<?= BASE_URL ?>job-details.php">Apply Now</a>
        </div>
      </div>
      <div class="job-card">
        <div class="job-card-head">
          <div class="company-logo" style="background:#7c3aed">PB</div>
          <div class="job-card-info">
            <h3><a href="<?= BASE_URL ?>job-details.php">Frontend Developer (React)</a></h3>
            <p class="muted">Pixel Bay</p>
          </div>
          <button class="icon-btn" data-toggle-save title="Save job"><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78L12 21.23l8.84-8.84a5.5 5.5 0 0 0 0-7.78z"/></svg></button>
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
          <button class="icon-btn" data-toggle-save title="Save job"><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78L12 21.23l8.84-8.84a5.5 5.5 0 0 0 0-7.78z"/></svg></button>
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
          <button class="icon-btn" data-toggle-save title="Save job"><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78L12 21.23l8.84-8.84a5.5 5.5 0 0 0 0-7.78z"/></svg></button>
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
          <button class="icon-btn" data-toggle-save title="Save job"><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78L12 21.23l8.84-8.84a5.5 5.5 0 0 0 0-7.78z"/></svg></button>
        </div>
        <div class="job-meta">
          <span><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>Narayanganj</span><span><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>৳30k – 45k</span><span><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>4 days ago</span>
        </div>
        <div class="job-card-foot">
          <div class="tags"><span class="badge badge-primary">Full-time</span><span class="tag">Tally</span><span class="tag">Excel</span></div>
          <a class="btn btn-sm btn-outline" href="<?= BASE_URL ?>job-details.php">Apply Now</a>
        </div>
      </div>
      <div class="job-card">
        <div class="job-card-head">
          <div class="company-logo" style="background:#dc2626">PE</div>
          <div class="job-card-info">
            <h3><a href="<?= BASE_URL ?>job-details.php">Customer Support Intern</a></h3>
            <p class="muted">Pathao Express</p>
          </div>
          <button class="icon-btn" data-toggle-save title="Save job"><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78L12 21.23l8.84-8.84a5.5 5.5 0 0 0 0-7.78z"/></svg></button>
        </div>
        <div class="job-meta">
          <span><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>Sylhet</span><span><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>৳12k / month</span><span><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>Just now</span>
        </div>
        <div class="job-card-foot">
          <div class="tags"><span class="badge badge-success">Internship</span><span class="tag">Communication</span><span class="tag">CRM</span></div>
          <a class="btn btn-sm btn-outline" href="<?= BASE_URL ?>job-details.php">Apply Now</a>
        </div>
      </div>
      <div class="job-card">
        <div class="job-card-head">
          <div class="company-logo" style="background:#0891b2">CC</div>
          <div class="job-card-info">
            <h3><a href="<?= BASE_URL ?>job-details.php">Laravel Backend Engineer</a></h3>
            <p class="muted">CodeCraft</p>
          </div>
          <button class="icon-btn" data-toggle-save title="Save job"><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78L12 21.23l8.84-8.84a5.5 5.5 0 0 0 0-7.78z"/></svg></button>
        </div>
        <div class="job-meta">
          <span><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>Dhaka</span><span><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>৳90k – 140k</span><span><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>6 days ago</span>
        </div>
        <div class="job-card-foot">
          <div class="tags"><span class="badge badge-primary">Full-time</span><span class="tag">Laravel</span><span class="tag">REST API</span></div>
          <a class="btn btn-sm btn-outline" href="<?= BASE_URL ?>job-details.php">Apply Now</a>
        </div>
      </div>
      <div class="job-card">
        <div class="job-card-head">
          <div class="company-logo" style="background:#65a30d">BR</div>
          <div class="job-card-info">
            <h3><a href="<?= BASE_URL ?>job-details.php">Graphic Designer</a></h3>
            <p class="muted">Brandly</p>
          </div>
          <button class="icon-btn" data-toggle-save title="Save job"><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78L12 21.23l8.84-8.84a5.5 5.5 0 0 0 0-7.78z"/></svg></button>
        </div>
        <div class="job-meta">
          <span><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>Khulna</span><span><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>৳20k – 30k</span><span><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>1 week ago</span>
        </div>
        <div class="job-card-foot">
          <div class="tags"><span class="badge badge-gray">Part-time</span><span class="tag">Photoshop</span><span class="tag">Illustrator</span></div>
          <a class="btn btn-sm btn-outline" href="<?= BASE_URL ?>job-details.php">Apply Now</a>
        </div>
      </div>
      </div>
      <ul class="pagination">
        <li><span class="disabled">&laquo;</span></li>
        <li><span class="active">1</span></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><span>…</span></li>
        <li><a href="#">31</a></li>
        <li><a href="#">&raquo;</a></li>
      </ul>
    </div>
  </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
