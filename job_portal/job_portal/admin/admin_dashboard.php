<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Dashboard · Jobs Portal</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <link href="./assets/css/style.css" rel="stylesheet">
</head>
<body class="theme-admin">

<!-- ================= SIDEBAR ================= -->
<?php include('./includes/leftbar.php');?>


<!-- ================= MAIN ================= -->
<div class="main">

    <!-- Topbar -->
    <?php include('./includes/header.php');?>
    <!-- Content -->
    <main class="content">

        <div class="page-head">
            <div>
                <h1><span data-greeting>Welcome</span>, Sumaia 👋</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="admin_dashboard.html">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </nav>
            </div>
            <div class="d-flex align-items-center gap-2 flex-wrap">
                <span class="btn btn-white btn-sm pe-none"><i class="bi bi-calendar3 me-1"></i> <span id="liveDate">Thursday, 05 November 2026</span></span>
                <a href="#recent-jobs" class="btn btn-accent btn-sm"><i class="bi bi-check2-circle me-1"></i> Review Jobs</a>
            </div>
        </div>

        <!-- Stat cards -->
        <div class="row g-3 g-xl-4 mb-4">
            <div class="col-6 col-xl-3 reveal">
                <div class="stat-card tone-blue">
                    <div class="stat-top">
                        <div><div class="stat-label">Total Jobs</div><div class="stat-value" data-count="128">0</div></div>
                        <div class="stat-icon"><i class="bi bi-briefcase-fill"></i></div>
                    </div>
                    <div class="stat-foot"><span class="trend-up"><i class="bi bi-broadcast"></i> 96</span> live now</div>
                </div>
            </div>
            <div class="col-6 col-xl-3 reveal">
                <div class="stat-card tone-green">
                    <div class="stat-top">
                        <div><div class="stat-label">Job Seekers</div><div class="stat-value" data-count="1240">0</div></div>
                        <div class="stat-icon"><i class="bi bi-people-fill"></i></div>
                    </div>
                    <div class="stat-foot"><span class="trend-up"><i class="bi bi-arrow-up-right"></i> 85</span> new users this month</div>
                </div>
            </div>
            <div class="col-6 col-xl-3 reveal">
                <div class="stat-card tone-orange">
                    <div class="stat-top">
                        <div><div class="stat-label">Employers</div><div class="stat-value" data-count="86">0</div></div>
                        <div class="stat-icon"><i class="bi bi-buildings-fill"></i></div>
                    </div>
                    <div class="stat-foot"><span class="trend-warn"><i class="bi bi-building"></i> 64</span> company profiles</div>
                </div>
            </div>
            <div class="col-6 col-xl-3 reveal">
                <div class="stat-card tone-purple">
                    <div class="stat-top">
                        <div><div class="stat-label">Applications</div><div class="stat-value" data-count="3580">0</div></div>
                        <div class="stat-icon"><i class="bi bi-file-earmark-person-fill"></i></div>
                    </div>
                    <div class="stat-foot"><span class="trend-up"><i class="bi bi-arrow-up-right"></i> 420</span> this month</div>
                </div>
            </div>
        </div>
         <?php include('./includes/rightbar.php');?>
    </main>

     <?php include('./includes/footer.php');?>

</div>

<!-- Toast -->
<div class="toast-container position-fixed bottom-0 end-0 p-3">
    <div id="appToast" class="toast toast-x" role="status" aria-live="polite">
        <div class="toast-body"><i class="bi bi-check-circle-fill"></i><span class="toast-msg">Saved</span>
            <button type="button" class="btn-close ms-auto" data-bs-dismiss="toast" aria-label="Close"></button></div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="./assets/js/script.js"></script>
</body>
</html>
