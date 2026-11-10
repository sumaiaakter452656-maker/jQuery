<?php
/* =========================================================
   data.php — SAMPLE DATA for previewing the template.
   Each array matches a table in database.sql. When your DB
   is ready, replace an array with a query, e.g.
   $jobs = $pdo->query("SELECT ... FROM jobs ...")->fetchAll();
   and the pages keep working unchanged.
   ========================================================= */

$categories = [
    ['id' => 1, 'name' => 'IT & Software',      'icon' => 'code',      'jobs' => 1240],
    ['id' => 2, 'name' => 'Marketing',          'icon' => 'megaphone', 'jobs' => 530],
    ['id' => 3, 'name' => 'Design & Creative',  'icon' => 'pen',       'jobs' => 312],
    ['id' => 4, 'name' => 'Accounts & Finance', 'icon' => 'calc',      'jobs' => 418],
    ['id' => 5, 'name' => 'Customer Support',   'icon' => 'headset',   'jobs' => 276],
    ['id' => 6, 'name' => 'Healthcare',         'icon' => 'cross',     'jobs' => 198],
    ['id' => 7, 'name' => 'Supply Chain',       'icon' => 'truck',     'jobs' => 165],
    ['id' => 8, 'name' => 'Education',          'icon' => 'book',      'jobs' => 224],
];

$companies = [
    ['id' => 1, 'name' => 'TechVerse Ltd.', 'color' => '#0f766e', 'industry' => 'Software',       'location' => 'Dhaka',       'open_jobs' => 5],
    ['id' => 2, 'name' => 'Pixel Bay',      'color' => '#7c3aed', 'industry' => 'Design Agency',  'location' => 'Remote',      'open_jobs' => 3],
    ['id' => 3, 'name' => 'Shoply BD',      'color' => '#ea580c', 'industry' => 'E-commerce',     'location' => 'Chattogram',  'open_jobs' => 8],
    ['id' => 4, 'name' => 'Nimbus Studio',  'color' => '#db2777', 'industry' => 'Product Studio', 'location' => 'Dhaka',       'open_jobs' => 2],
    ['id' => 5, 'name' => 'Meghna Group',   'color' => '#2563eb', 'industry' => 'Conglomerate',   'location' => 'Narayanganj', 'open_jobs' => 11],
    ['id' => 6, 'name' => 'Pathao Express', 'color' => '#dc2626', 'industry' => 'Logistics',      'location' => 'Sylhet',      'open_jobs' => 4],
    ['id' => 7, 'name' => 'CodeCraft',      'color' => '#0891b2', 'industry' => 'Software',       'location' => 'Dhaka',       'open_jobs' => 6],
    ['id' => 8, 'name' => 'Brandly',        'color' => '#65a30d', 'industry' => 'Branding',       'location' => 'Khulna',      'open_jobs' => 2],
];

$jobs = [
    ['id' => 1, 'title' => 'Senior PHP Developer',        'company_id' => 1, 'category_id' => 1, 'location' => 'Dhaka',       'type' => 'Full-time',  'salary_min' => 80000, 'salary_max' => 120000, 'posted' => '2 days ago',  'skills' => ['PHP', 'Laravel', 'MySQL'],         'status' => 'Active', 'applicants' => 124, 'deadline' => '30 Nov 2026'],
    ['id' => 2, 'title' => 'Frontend Developer (React)',  'company_id' => 2, 'category_id' => 1, 'location' => 'Remote',      'type' => 'Remote',     'salary_min' => 60000, 'salary_max' => 90000,  'posted' => '5 hours ago', 'skills' => ['React', 'JavaScript', 'CSS'],      'status' => 'Active', 'applicants' => 98,  'deadline' => '25 Nov 2026'],
    ['id' => 3, 'title' => 'Digital Marketing Executive', 'company_id' => 3, 'category_id' => 2, 'location' => 'Chattogram',  'type' => 'Full-time',  'salary_min' => 35000, 'salary_max' => 50000,  'posted' => '1 day ago',   'skills' => ['SEO', 'Facebook Ads'],             'status' => 'Active', 'applicants' => 61,  'deadline' => '28 Nov 2026'],
    ['id' => 4, 'title' => 'UI/UX Designer',              'company_id' => 4, 'category_id' => 3, 'location' => 'Dhaka',       'type' => 'Contract',   'salary_min' => 50000, 'salary_max' => 70000,  'posted' => '3 days ago',  'skills' => ['Figma', 'Prototyping'],            'status' => 'Draft',  'applicants' => 37,  'deadline' => '05 Dec 2026'],
    ['id' => 5, 'title' => 'Accounts Officer',            'company_id' => 5, 'category_id' => 4, 'location' => 'Narayanganj', 'type' => 'Full-time',  'salary_min' => 30000, 'salary_max' => 45000,  'posted' => '4 days ago',  'skills' => ['Tally', 'Excel'],                  'status' => 'Active', 'applicants' => 52,  'deadline' => '20 Nov 2026'],
    ['id' => 6, 'title' => 'Customer Support Intern',     'company_id' => 6, 'category_id' => 5, 'location' => 'Sylhet',      'type' => 'Internship', 'salary_min' => 12000, 'salary_max' => null,   'posted' => 'Just now',    'skills' => ['Communication', 'CRM'],            'status' => 'Active', 'applicants' => 18,  'deadline' => '15 Dec 2026'],
    ['id' => 7, 'title' => 'Laravel Backend Engineer',    'company_id' => 7, 'category_id' => 1, 'location' => 'Dhaka',       'type' => 'Full-time',  'salary_min' => 90000, 'salary_max' => 140000, 'posted' => '6 days ago',  'skills' => ['Laravel', 'REST API', 'Redis'],    'status' => 'Closed', 'applicants' => 41,  'deadline' => '10 Nov 2026'],
    ['id' => 8, 'title' => 'Graphic Designer',            'company_id' => 8, 'category_id' => 3, 'location' => 'Khulna',      'type' => 'Part-time',  'salary_min' => 20000, 'salary_max' => 30000,  'posted' => '1 week ago',  'skills' => ['Photoshop', 'Illustrator'],        'status' => 'Active', 'applicants' => 22,  'deadline' => '01 Dec 2026'],
];

// attach company info to every job (in SQL this is a JOIN)
$companyById = array_column($companies, null, 'id');
foreach ($jobs as &$j) {
    $j['company']       = $companyById[$j['company_id']]['name'];
    $j['company_color'] = $companyById[$j['company_id']]['color'];
}
unset($j);

/** Find one job by id (SQL: SELECT ... WHERE id = ?) */
function find_job($id)
{
    global $jobs;
    foreach ($jobs as $job) {
        if ($job['id'] == $id) return $job;
    }
    return null;
}

// Applicants for employer pages (table: applications JOIN users JOIN jobs)
$applicants = [
    ['id' => 1, 'name' => 'Rahim Uddin',    'email' => 'rahim@mail.com',   'color' => '#0f766e', 'job' => 'Senior PHP Developer',     'date' => '01 Nov 2026', 'experience' => '1–3 yrs', 'status' => 'New'],
    ['id' => 2, 'name' => 'Nusrat Jahan',   'email' => 'nusrat@mail.com',  'color' => '#7c3aed', 'job' => 'Frontend Developer',       'date' => '02 Nov 2026', 'experience' => '2–4 yrs', 'status' => 'Shortlisted'],
    ['id' => 3, 'name' => 'Tanvir Ahmed',   'email' => 'tanvir@mail.com',  'color' => '#ea580c', 'job' => 'UI/UX Designer',           'date' => '03 Nov 2026', 'experience' => '3–5 yrs', 'status' => 'Reviewed'],
    ['id' => 4, 'name' => 'Farhana Akter',  'email' => 'farhana@mail.com', 'color' => '#db2777', 'job' => 'Senior PHP Developer',     'date' => '04 Nov 2026', 'experience' => '4–6 yrs', 'status' => 'Interview'],
    ['id' => 5, 'name' => 'Sabbir Hossain', 'email' => 'sabbir@mail.com',  'color' => '#2563eb', 'job' => 'Laravel Backend Engineer', 'date' => '05 Nov 2026', 'experience' => '5+ yrs',  'status' => 'Rejected'],
    ['id' => 6, 'name' => 'Mim Chowdhury',  'email' => 'mim@mail.com',     'color' => '#0891b2', 'job' => 'Frontend Developer',       'date' => '06 Nov 2026', 'experience' => 'Fresher', 'status' => 'New'],
];
$applicantStatuses = ['New', 'Reviewed', 'Shortlisted', 'Interview', 'Rejected', 'Hired'];

// Job seeker's own applications (table: applications JOIN jobs)
$myApplications = [
    ['id' => 1, 'job_id' => 1, 'date' => '03 Nov 2026', 'status' => 'Interview'],
    ['id' => 2, 'job_id' => 2, 'date' => '04 Nov 2026', 'status' => 'Shortlisted'],
    ['id' => 3, 'job_id' => 7, 'date' => '05 Nov 2026', 'status' => 'Reviewed'],
    ['id' => 4, 'job_id' => 4, 'date' => '06 Nov 2026', 'status' => 'Pending'],
    ['id' => 5, 'job_id' => 5, 'date' => '07 Nov 2026', 'status' => 'Rejected'],
];
$savedJobIds = [2, 3, 4, 5];

$educations = [
    ['degree' => 'B.Sc. in Computer Science & Engineering', 'institute' => 'Dhaka University', 'year' => '2019 – 2023', 'result' => 'CGPA 3.45'],
    ['degree' => 'Higher Secondary Certificate (Science)',   'institute' => 'Notre Dame College', 'year' => '2018', 'result' => 'GPA 5.00'],
];
$experiences = [
    ['position' => 'Junior PHP Developer',   'company' => 'WebNest IT', 'period' => 'Jan 2024 – Present', 'description' => 'Building CRUD modules with PHP & MySQL, maintaining client websites.'],
    ['position' => 'Web Development Intern', 'company' => 'SoftZone',   'period' => 'Jun 2023 – Dec 2023', 'description' => ''],
];

// Admin: all users
$users = [
    ['id' => 1, 'name' => 'Rahim Uddin',    'email' => 'rahim@mail.com',   'color' => '#0f766e', 'role' => 'seeker',   'joined' => '01 Oct 2026', 'status' => 'Active'],
    ['id' => 2, 'name' => 'Nusrat Jahan',   'email' => 'nusrat@mail.com',  'color' => '#7c3aed', 'role' => 'employer', 'joined' => '02 Oct 2026', 'status' => 'Active'],
    ['id' => 3, 'name' => 'Tanvir Ahmed',   'email' => 'tanvir@mail.com',  'color' => '#ea580c', 'role' => 'seeker',   'joined' => '03 Oct 2026', 'status' => 'Active'],
    ['id' => 4, 'name' => 'Farhana Akter',  'email' => 'farhana@mail.com', 'color' => '#db2777', 'role' => 'employer', 'joined' => '04 Oct 2026', 'status' => 'Blocked'],
    ['id' => 5, 'name' => 'Sabbir Hossain', 'email' => 'sabbir@mail.com',  'color' => '#2563eb', 'role' => 'seeker',   'joined' => '05 Oct 2026', 'status' => 'Active'],
    ['id' => 6, 'name' => 'Mim Chowdhury',  'email' => 'mim@mail.com',     'color' => '#0891b2', 'role' => 'employer', 'joined' => '06 Oct 2026', 'status' => 'Active'],
];

// Shown in the topbar when nobody is logged in (template preview)
$demoUsers = [
    'seeker'   => ['name' => 'Rahim Uddin',    'role' => 'seeker'],
    'employer' => ['name' => 'TechVerse Ltd.', 'role' => 'employer'],
    'admin'    => ['name' => 'Site Admin',     'role' => 'admin'],
];

$locations = ['Dhaka', 'Chattogram', 'Sylhet', 'Khulna', 'Rajshahi', 'Narayanganj', 'Remote'];
$jobTypes  = ['Full-time', 'Part-time', 'Remote', 'Contract', 'Internship'];
