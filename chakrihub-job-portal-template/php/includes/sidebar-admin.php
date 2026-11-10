<!-- ================= SIDEBAR (Admin) ================= -->
<aside class="sidebar">
  <a href="<?= BASE_URL ?>index.php" class="logo"><span class="logo-mark">C</span>ChakriHub<span class="dot">.</span></a>
  <div class="sidebar-label">Admin menu</div>
  <ul class="sidebar-menu">
      <li><a href="<?= BASE_URL ?>admin/dashboard.php" class="<?= ($active ?? '') === 'dashboard' ? 'active' : '' ?>"><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/><rect x="14" y="14" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/></svg>Dashboard</a></li>
      <li><a href="<?= BASE_URL ?>admin/users.php" class="<?= ($active ?? '') === 'users' ? 'active' : '' ?>"><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>Users</a></li>
      <li><a href="<?= BASE_URL ?>index.php" class="<?= ($active ?? '') === 'site' ? 'active' : '' ?>"><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>View Website</a></li>
  </ul>
  <div class="sidebar-foot">
    <ul class="sidebar-menu">
      <li><a href="<?= BASE_URL ?>login.php"><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"/><polyline points="16 17 21 12 16 7"/><line x1="21" y1="12" x2="9" y2="12"/></svg>Logout</a></li>
    </ul>
  </div>
</aside>
<div class="sidebar-backdrop"></div>
