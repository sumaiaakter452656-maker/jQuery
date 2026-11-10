<?php
/* ---------------------------------------------------------
   Dashboard sidebar. Menu changes by $role.
   Add a page: add one line to the right array below.
   [key (matches $active), icon, label, link, badge]
   --------------------------------------------------------- */
$menus = [
    'employer' => [
        ['dashboard',   'grid',      'Dashboard',       'employer/dashboard.php',       null],
        ['post-job',    'plus',      'Post a Job',      'employer/post-job.php',        null],
        ['manage-jobs', 'briefcase', 'Manage Jobs',     'employer/manage-jobs.php',     null],
        ['applicants',  'users',     'Applicants',      'employer/applicants.php',      12],
        ['company',     'building',  'Company Profile', 'employer/company-profile.php', null],
    ],
    'seeker' => [
        ['dashboard', 'grid',   'Dashboard',    'seeker/dashboard.php',    null],
        ['profile',   'user',   'My Profile',   'seeker/profile.php',      null],
        ['applied',   'file',   'Applied Jobs', 'seeker/applied-jobs.php', null],
        ['saved',     'heart',  'Saved Jobs',   'seeker/saved-jobs.php',   count($savedJobIds)],
        ['find',      'search', 'Find Jobs',    'jobs.php',                null],
    ],
    'admin' => [
        ['dashboard', 'grid',  'Dashboard',    'admin/dashboard.php', null],
        ['users',     'users', 'Users',        'admin/users.php',     null],
        ['site',      'globe', 'View Website', 'index.php',           null],
    ],
];
$roleLabels = ['employer' => 'Employer', 'seeker' => 'Job Seeker', 'admin' => 'Admin'];
?>
<aside class="sidebar">
  <?php include __DIR__ . '/logo.php'; ?>
  <div class="sidebar-label"><?= e($roleLabels[$role]) ?> menu</div>
  <ul class="sidebar-menu">
    <?php foreach ($menus[$role] as [$key, $ic, $label, $link, $badge]): ?>
      <li>
        <a href="<?= url($link) ?>" class="<?= is_active($key) ?>">
          <?= icon($ic) ?><?= e($label) ?>
          <?php if ($badge): ?><span class="count"><?= e($badge) ?></span><?php endif; ?>
        </a>
      </li>
    <?php endforeach; ?>
  </ul>
  <div class="sidebar-foot">
    <ul class="sidebar-menu">
      <li><a href="<?= url('logout.php') ?>"><?= icon('logout') ?>Logout</a></li>
    </ul>
  </div>
</aside>
<div class="sidebar-backdrop"></div>
