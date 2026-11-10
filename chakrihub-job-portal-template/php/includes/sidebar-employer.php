<!-- ================= SIDEBAR (Employer) ================= -->
<aside class="sidebar">
  <a href="<?= BASE_URL ?>index.php" class="logo"><span class="logo-mark">C</span>ChakriHub<span class="dot">.</span></a>
  <div class="sidebar-label">Employer menu</div>
  <ul class="sidebar-menu">
      <li><a href="<?= BASE_URL ?>employer/dashboard.php" class="<?= ($active ?? '') === 'dashboard' ? 'active' : '' ?>"><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/><rect x="14" y="14" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/></svg>Dashboard</a></li>
      <li><a href="<?= BASE_URL ?>employer/post-job.php" class="<?= ($active ?? '') === 'post-job' ? 'active' : '' ?>"><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>Post a Job</a></li>
      <li><a href="<?= BASE_URL ?>employer/manage-jobs.php" class="<?= ($active ?? '') === 'manage-jobs' ? 'active' : '' ?>"><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg>Manage Jobs</a></li>
      <li><a href="<?= BASE_URL ?>employer/applicants.php" class="<?= ($active ?? '') === 'applicants' ? 'active' : '' ?>"><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>Applicants<span class="count">12</span></a></li>
      <li><a href="<?= BASE_URL ?>employer/company-profile.php" class="<?= ($active ?? '') === 'company' ? 'active' : '' ?>"><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><rect x="4" y="2" width="16" height="20" rx="2"/><path d="M9 22v-4h6v4M8 6h.01M16 6h.01M12 6h.01M12 10h.01M12 14h.01M16 10h.01M16 14h.01M8 10h.01M8 14h.01"/></svg>Company Profile</a></li>
  </ul>
  <div class="sidebar-foot">
    <ul class="sidebar-menu">
      <li><a href="<?= BASE_URL ?>login.php"><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"/><polyline points="16 17 21 12 16 7"/><line x1="21" y1="12" x2="9" y2="12"/></svg>Logout</a></li>
    </ul>
  </div>
</aside>
<div class="sidebar-backdrop"></div>
