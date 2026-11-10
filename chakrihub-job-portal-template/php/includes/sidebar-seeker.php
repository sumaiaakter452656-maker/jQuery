<!-- ================= SIDEBAR (Job Seeker) ================= -->
<aside class="sidebar">
  <a href="<?= BASE_URL ?>index.php" class="logo"><span class="logo-mark">C</span>ChakriHub<span class="dot">.</span></a>
  <div class="sidebar-label">Job Seeker menu</div>
  <ul class="sidebar-menu">
      <li><a href="<?= BASE_URL ?>seeker/dashboard.php" class="<?= ($active ?? '') === 'dashboard' ? 'active' : '' ?>"><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/><rect x="14" y="14" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/></svg>Dashboard</a></li>
      <li><a href="<?= BASE_URL ?>seeker/profile.php" class="<?= ($active ?? '') === 'profile' ? 'active' : '' ?>"><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>My Profile</a></li>
      <li><a href="<?= BASE_URL ?>seeker/applied-jobs.php" class="<?= ($active ?? '') === 'applied' ? 'active' : '' ?>"><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>Applied Jobs</a></li>
      <li><a href="<?= BASE_URL ?>seeker/saved-jobs.php" class="<?= ($active ?? '') === 'saved' ? 'active' : '' ?>"><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78L12 21.23l8.84-8.84a5.5 5.5 0 0 0 0-7.78z"/></svg>Saved Jobs<span class="count">9</span></a></li>
      <li><a href="<?= BASE_URL ?>jobs.php" class="<?= ($active ?? '') === 'find' ? 'active' : '' ?>"><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>Find Jobs</a></li>
  </ul>
  <div class="sidebar-foot">
    <ul class="sidebar-menu">
      <li><a href="<?= BASE_URL ?>login.php"><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"/><polyline points="16 17 21 12 16 7"/><line x1="21" y1="12" x2="9" y2="12"/></svg>Logout</a></li>
    </ul>
  </div>
</aside>
<div class="sidebar-backdrop"></div>
