# ChakriHub — Job Portal PHP Template

HTML design-er upor PHP templating kora. Repeat hoy emon sob kichu (layout, sidebar, job card, table row,
form field) ekbar likha, ar page-gulo data array theke `foreach` loop diye render hoy.

## Chalanor niyom (XAMPP)
1. Ei folder ta `C:\xampp\htdocs\job-portal` e rakhun
2. Apache start kore browse korun: `http://localhost/job-portal/`
3. Folder-er nam alada hole `includes/config.php` e `BASE_URL` change korun

Demo login (password `123456`): `seeker@demo.test`, `employer@demo.test`, `admin@demo.test`

## Folder structure
```
job-portal/
├── includes/
│   ├── config.php      BASE_URL, session, PDO (comment kora), sob kichu load kore
│   ├── functions.php   e(), url(), asset(), component(), status_badge(), flash(), redirect(), require_role() ...
│   ├── icons.php       icon('briefcase') -> SVG
│   └── data.php        SAMPLE DATA (DB ready hole query diye replace korben)
├── layouts/            page-er frame
│   ├── header.php / footer.php           public pages (navbar menu array theke)
│   ├── auth-header.php / auth-footer.php login, register
│   ├── dash-header.php / dash-footer.php dashboard (topbar)
│   ├── sidebar.php                       role onujayi menu ($menus array)
│   └── head.php, logo.php
├── components/         reusable pieces
│   job-card, category-card, company-card, stat-card, page-header, page-actions,
│   alert, flash, form-field, pagination, empty-state, delete-modal, user-cell, job-cell
├── employer/  seeker/  admin/             dashboard pages
├── assets/css/style.css  assets/js/main.js  assets/uploads/
├── *.php                                  public pages
└── database.sql
```

## Notun page banano (copy-paste)
```php
<?php
require_once __DIR__ . '/../includes/config.php';
// require_role('employer');
$pageTitle = 'Interviews';     // <title> + topbar
$active    = 'interviews';     // sidebar-e kon link active
$role      = 'employer';       // employer | seeker | admin
include __DIR__ . '/../layouts/dash-header.php';
?>

  ... page content ...

<?php include __DIR__ . '/../layouts/dash-footer.php'; ?>
```
Sidebar-e link dite `layouts/sidebar.php` er `$menus['employer']` array-te ek line add korun.
Public page hole `layouts/header.php` / `footer.php` include korun.

## Component use kora
```php
<?php foreach ($jobs as $job) component('job-card', ['job' => $job]); ?>
<?php component('stat-card', ['icon' => 'users', 'color' => 'blue', 'value' => 348, 'label' => 'Applicants']); ?>
<?php component('form-field', ['name' => 'email', 'label' => 'Email', 'type' => 'email', 'error' => $errors['email'] ?? null]); ?>
<?php component('pagination', ['current' => $page, 'totalPages' => $totalPages]); ?>
<?= status_badge($application['status']) ?>
```
Sob component-er live example + code: `components.php` (UI Kit) page.

## Form handle korar pattern (already sob page-e ache)
```php
$errors = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (trim($_POST['title'] ?? '') === '') $errors['title'] = 'Job title is required.';
    if (!$errors) {
        // INSERT / UPDATE ...
        flash('success', 'Job published!');
        redirect('employer/manage-jobs.php');     // message porer page-e dekhabe
    }
}
```

## Database-e shift kora
1. phpMyAdmin-e `database.sql` import korun
2. `config.php` e PDO block uncomment korun
3. `data.php` er array gulo query diye replace korun, jemon:
   `$jobs = $pdo->query("SELECT jobs.*, companies.name AS company ... JOIN companies ...")->fetchAll();`
4. Page-gulor `// TODO:` comment-e SQL kothay boshbe lekha ache
5. `login.php` er demo account-er jaygay `password_verify()` diye DB check, tarpor dashboard page-e `require_role()` uncomment
