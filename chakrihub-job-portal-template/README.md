# ChakriHub — Job Portal Template

Duita version ache:

| Folder | Ki | Kivabe chalaben |
|---|---|---|
| `html/` | Static HTML pages | `html/index.html` browser-e open korun |
| `php/`  | Same pages, header/footer/sidebar `includes/`-e alada | `php` folder-ta `C:\xampp\htdocs\job-portal` e copy korun → `http://localhost/job-portal/` |

## Pages (21)
- **Public:** index, jobs, job-details, companies, contact, components (UI kit), 404
- **Auth:** login, register (Seeker/Employer role switch), forgot-password
- **Employer:** dashboard, post-job, manage-jobs, applicants, company-profile
- **Job Seeker:** dashboard, profile (tabs), applied-jobs, saved-jobs
- **Admin:** dashboard, users

## PHP structure
```
php/
├── includes/
│   ├── config.php          BASE_URL, session, PDO (commented), e(), require_role()
│   ├── header.php / footer.php            public pages
│   ├── auth-header.php / auth-footer.php  login/register
│   ├── dash-header.php / dash-footer.php  dashboard (topbar + sidebar)
│   └── sidebar-employer.php / sidebar-seeker.php / sidebar-admin.php
├── assets/css/style.css  assets/js/main.js  assets/uploads/
├── employer/  seeker/  admin/
└── database.sql
```
Protiti page-er upore sudhu 3-ta variable set korlei hoy:
```php
$pageTitle = 'Manage Jobs';
$active    = 'manage-jobs';   // sidebar/nav-e kon link active hobe
$role      = 'employer';      // dashboard pages: employer | seeker | admin
```

## Notes
- Folder name `job-portal` na hole `includes/config.php` e `BASE_URL` change korun.
- `database.sql` import korle 10-ta table + categories + ekta admin user toiri hobe
  (admin@chakrihub.test / admin123). Password `password_hash()` diye rakha.
- Kono framework/CDN lage na — sob CSS/JS nijer file-e. Colors change korte `style.css` er `:root` variables edit korun.
- JS helpers (`main.js`): mobile menu, sidebar toggle, dropdown, tabs (`data-tabs`), modal (`data-modal-open="id"`),
  alert close, password show/hide, file name preview, save-job toggle, register role switch, `data-confirm`.
