<?php
require_once __DIR__ . '/includes/config.php';
$pageTitle = 'Find Jobs';
$active    = 'jobs';

/* ---- Read filters from the URL (?q=php&location=Dhaka&type[]=Remote) ---- */
$q        = trim($_GET['q'] ?? '');
$location = $_GET['location'] ?? '';
$category = $_GET['category'] ?? '';
$company  = $_GET['company'] ?? '';
$types    = (array) ($_GET['type'] ?? []);
$sort     = $_GET['sort'] ?? 'newest';

/* ---- Filter (with a DB, build a WHERE clause with prepared statements instead) ---- */
$results = array_filter($jobs, function ($job) use ($q, $location, $category, $company, $types) {
    if ($q && stripos($job['title'] . ' ' . $job['company'] . ' ' . implode(' ', $job['skills']), $q) === false) return false;
    if ($location && $job['location'] !== $location) return false;
    if ($category && $job['category_id'] != $category) return false;
    if ($company && $job['company_id'] != $company) return false;
    if ($types && !in_array($job['type'], $types)) return false;
    return true;
});
if ($sort === 'salary_high') usort($results, fn($a, $b) => $b['salary_min'] <=> $a['salary_min']);
if ($sort === 'salary_low')  usort($results, fn($a, $b) => $a['salary_min'] <=> $b['salary_min']);

/* ---- Paginate ---- */
$perPage    = 5;
$total      = count($results);
$totalPages = max(1, (int) ceil($total / $perPage));
$page       = min(max(1, (int) ($_GET['page'] ?? 1)), $totalPages);
$pageJobs   = array_slice(array_values($results), ($page - 1) * $perPage, $perPage);

include __DIR__ . '/layouts/header.php';
component('page-header', ['title' => 'Find Jobs', 'crumbs' => ['Jobs' => null],
                          'subtitle' => 'Showing the latest openings from verified employers']);
?>
<section class="section-sm">
  <div class="container listing-layout">

    <!-- FILTERS -->
    <aside class="card filter-box">
      <form class="card-body" action="" method="get">
        <div class="filter-group">
          <h4>Keyword</h4>
          <div class="input-icon"><?= icon('search') ?><input type="text" name="q" value="<?= e($q) ?>" class="form-control" placeholder="Title or skill"></div>
        </div>
        <div class="filter-group">
          <h4>Location</h4>
          <select class="form-control" name="location">
            <option value="">All locations</option>
            <?php foreach ($locations as $loc): ?>
              <option <?= selected($loc, $location) ?>><?= e($loc) ?></option>
            <?php endforeach; ?>
          </select>
        </div>
        <div class="filter-group">
          <h4>Category</h4>
          <select class="form-control" name="category">
            <option value="">All categories</option>
            <?php foreach ($categories as $cat): ?>
              <option value="<?= $cat['id'] ?>" <?= selected($cat['id'], $category) ?>><?= e($cat['name']) ?></option>
            <?php endforeach; ?>
          </select>
        </div>
        <div class="filter-group">
          <h4>Job Type</h4>
          <?php foreach ($jobTypes as $type): ?>
            <label class="check">
              <input type="checkbox" name="type[]" value="<?= e($type) ?>" <?= checked(in_array($type, $types)) ?>> <?= e($type) ?>
              <span class="count"><?= count(array_filter($jobs, fn($j) => $j['type'] === $type)) ?></span>
            </label>
          <?php endforeach; ?>
        </div>
        <button class="btn btn-primary btn-block" type="submit">Apply Filters</button>
        <a href="<?= url('jobs.php') ?>" class="btn btn-ghost btn-block mt-1">Reset</a>
      </form>
    </aside>

    <!-- RESULTS -->
    <div>
      <form class="listing-toolbar" method="get">
        <?php // keep current filters when changing sort
        foreach (['q' => $q, 'location' => $location, 'category' => $category, 'company' => $company] as $k => $v): if ($v !== ''): ?>
          <input type="hidden" name="<?= $k ?>" value="<?= e($v) ?>">
        <?php endif; endforeach; foreach ($types as $t): ?>
          <input type="hidden" name="type[]" value="<?= e($t) ?>">
        <?php endforeach; ?>
        <p class="mb-0">Found <strong><?= $total ?></strong> job<?= $total === 1 ? '' : 's' ?><?= $q ? ' for “' . e($q) . '”' : '' ?></p>
        <select class="form-control" name="sort" onchange="this.form.submit()">
          <option value="newest" <?= selected('newest', $sort) ?>>Newest first</option>
          <option value="salary_high" <?= selected('salary_high', $sort) ?>>Salary: high to low</option>
          <option value="salary_low" <?= selected('salary_low', $sort) ?>>Salary: low to high</option>
        </select>
      </form>

      <?php if ($pageJobs): ?>
        <div class="job-list">
          <?php foreach ($pageJobs as $job) component('job-card', ['job' => $job, 'saved' => in_array($job['id'], $savedJobIds)]); ?>
        </div>
        <?php component('pagination', ['current' => $page, 'totalPages' => $totalPages]); ?>
      <?php else: ?>
        <div class="card">
          <?php component('empty-state', ['icon' => 'search', 'title' => 'No jobs found',
                'text' => 'Try a different keyword or remove some filters.',
                'button' => ['label' => 'Clear filters', 'link' => 'jobs.php']]); ?>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>
<?php include __DIR__ . '/layouts/footer.php'; ?>
