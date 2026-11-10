<?php
require_once __DIR__ . '/includes/config.php';
$pageTitle = 'Home';
$active    = 'home';

$featuredJobs = array_slice($jobs, 0, 6);   // SQL: ... WHERE status='active' ORDER BY created_at DESC LIMIT 6
$popular      = ['PHP Developer', 'Graphic Designer', 'Accountant', 'Sales Executive'];
$heroStats    = ['12k+' => 'Live jobs', '3,400' => 'Companies', '85k' => 'Job seekers'];
$steps        = [
    ['Create an account', 'Sign up as a job seeker or employer in less than a minute.'],
    ['Build your profile', 'Add your education, experience and upload your CV.'],
    ['Apply & get hired', 'Apply with one click and follow your status live.'],
];
include __DIR__ . '/layouts/header.php';
?>

<!-- HERO -->
<section class="hero">
  <div class="container hero-inner">
    <span class="eyebrow">12,000+ live jobs across Bangladesh</span>
    <h1>Find a job that fits your <span class="hl">life</span></h1>
    <p class="lead">Search verified openings from top employers, apply in one click and track every application from your dashboard.</p>
    <form class="search-bar" action="<?= url('jobs.php') ?>" method="get">
      <div class="search-field"><?= icon('search') ?><input type="text" name="q" placeholder="Job title, skill or company"></div>
      <div class="search-field"><?= icon('pin') ?>
        <select name="location">
          <option value="">All locations</option>
          <?php foreach ($locations as $loc): ?><option><?= e($loc) ?></option><?php endforeach; ?>
        </select>
      </div>
      <button class="btn btn-primary btn-lg" type="submit">Search Jobs</button>
    </form>
    <div class="popular">Popular:
      <?php foreach ($popular as $term): ?>
        <a href="<?= url('jobs.php?q=' . urlencode($term)) ?>"><?= e($term) ?></a>
      <?php endforeach; ?>
    </div>
    <div class="hero-stats">
      <?php foreach ($heroStats as $num => $label): ?>
        <div><strong><?= e($num) ?></strong><span><?= e($label) ?></span></div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- CATEGORIES -->
<section class="section">
  <div class="container">
    <div class="section-head">
      <div><h2>Browse by category</h2><p>Find jobs in the field you love.</p></div>
      <a href="<?= url('jobs.php') ?>" class="btn btn-light">All categories</a>
    </div>
    <div class="grid grid-4">
      <?php foreach ($categories as $category) component('category-card', ['category' => $category]); ?>
    </div>
  </div>
</section>

<!-- FEATURED JOBS -->
<section class="section bg-white">
  <div class="container">
    <div class="section-head">
      <div><h2>Featured jobs</h2><p>Hand-picked openings updated every day.</p></div>
      <a href="<?= url('jobs.php') ?>" class="btn btn-outline">View all jobs</a>
    </div>
    <div class="grid grid-3">
      <?php foreach ($featuredJobs as $job) component('job-card', ['job' => $job]); ?>
    </div>
  </div>
</section>

<!-- HOW IT WORKS -->
<section class="section">
  <div class="container">
    <div class="text-center mb-3"><h2>How it works</h2><p class="muted">Three simple steps to your next job.</p></div>
    <div class="grid grid-3">
      <?php foreach ($steps as $i => [$title, $text]): ?>
        <div class="step"><div class="step-num"><?= $i + 1 ?></div><h3><?= e($title) ?></h3><p class="muted"><?= e($text) ?></p></div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- COMPANIES -->
<section class="section-sm bg-white">
  <div class="container">
    <p class="text-center muted fw-600 mb-2">Trusted by leading companies</p>
    <div class="company-strip">
      <?php foreach (array_slice($companies, 0, 6) as $c): ?>
        <div class="company-chip"><span class="company-logo sm" style="background:<?= e($c['color']) ?>"><?= e(initials($c['name'])) ?></span><?= e($c['name']) ?></div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="section">
  <div class="container">
    <div class="cta-band">
      <div><h2>Hiring? Post a job in minutes.</h2><p>Reach thousands of qualified candidates today.</p></div>
      <a href="<?= url('employer/post-job.php') ?>" class="btn btn-accent btn-lg">Post a Job — It's Free</a>
    </div>
  </div>
</section>

<?php include __DIR__ . '/layouts/footer.php'; ?>
