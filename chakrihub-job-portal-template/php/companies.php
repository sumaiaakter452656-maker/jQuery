<?php
require_once __DIR__ . '/includes/config.php';
$pageTitle = 'Companies';
$active    = 'companies';
include __DIR__ . '/includes/header.php';
?>

<section class="page-header">
  <div class="container">
    <ul class="breadcrumb"><li><a href="<?= BASE_URL ?>index.php">Home</a></li><li>Companies</li></ul>
    <h1>Top Companies</h1><p class="muted mb-0 mt-1">Explore employers that are hiring right now</p>
  </div>
</section>
<section class="section-sm">
  <div class="container">
    <div class="listing-toolbar">
      <div class="input-icon" style="flex:1;max-width:380px"><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg><input class="form-control" style="width:100%" placeholder="Search company"></div>
      <select class="form-control"><option>All industries</option><option>Software</option><option>E-commerce</option></select>
    </div>
    <div class="grid grid-4">
      <div class="card company-card">
        <div class="company-logo lg" style="background:#0f766e">TV</div>
        <h3>TechVerse Ltd.</h3>
        <p class="muted small">Software · Dhaka</p>
        <span class="badge badge-primary">2 open jobs</span>
        <a href="<?= BASE_URL ?>jobs.php" class="btn btn-light btn-block mt-2">View jobs</a>
      </div>
      <div class="card company-card">
        <div class="company-logo lg" style="background:#7c3aed">PB</div>
        <h3>Pixel Bay</h3>
        <p class="muted small">Design Agency · Remote</p>
        <span class="badge badge-primary">5 open jobs</span>
        <a href="<?= BASE_URL ?>jobs.php" class="btn btn-light btn-block mt-2">View jobs</a>
      </div>
      <div class="card company-card">
        <div class="company-logo lg" style="background:#ea580c">SB</div>
        <h3>Shoply BD</h3>
        <p class="muted small">E-commerce · Chattogram</p>
        <span class="badge badge-primary">8 open jobs</span>
        <a href="<?= BASE_URL ?>jobs.php" class="btn btn-light btn-block mt-2">View jobs</a>
      </div>
      <div class="card company-card">
        <div class="company-logo lg" style="background:#db2777">NS</div>
        <h3>Nimbus Studio</h3>
        <p class="muted small">Product Studio · Dhaka</p>
        <span class="badge badge-primary">11 open jobs</span>
        <a href="<?= BASE_URL ?>jobs.php" class="btn btn-light btn-block mt-2">View jobs</a>
      </div>
      <div class="card company-card">
        <div class="company-logo lg" style="background:#2563eb">MG</div>
        <h3>Meghna Group</h3>
        <p class="muted small">Conglomerate · Narayanganj</p>
        <span class="badge badge-primary">3 open jobs</span>
        <a href="<?= BASE_URL ?>jobs.php" class="btn btn-light btn-block mt-2">View jobs</a>
      </div>
      <div class="card company-card">
        <div class="company-logo lg" style="background:#dc2626">PE</div>
        <h3>Pathao Express</h3>
        <p class="muted small">Logistics · Sylhet</p>
        <span class="badge badge-primary">6 open jobs</span>
        <a href="<?= BASE_URL ?>jobs.php" class="btn btn-light btn-block mt-2">View jobs</a>
      </div>
      <div class="card company-card">
        <div class="company-logo lg" style="background:#0891b2">CC</div>
        <h3>CodeCraft</h3>
        <p class="muted small">Software · Dhaka</p>
        <span class="badge badge-primary">9 open jobs</span>
        <a href="<?= BASE_URL ?>jobs.php" class="btn btn-light btn-block mt-2">View jobs</a>
      </div>
      <div class="card company-card">
        <div class="company-logo lg" style="background:#65a30d">BR</div>
        <h3>Brandly</h3>
        <p class="muted small">Branding · Khulna</p>
        <span class="badge badge-primary">12 open jobs</span>
        <a href="<?= BASE_URL ?>jobs.php" class="btn btn-light btn-block mt-2">View jobs</a>
      </div>
    </div>
  </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
