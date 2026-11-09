<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Employer Dashboard · Jobs Portal</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <link href="./assets/css/style.css" rel="stylesheet">
</head>
<body class="theme-employer">

<!-- ================= SIDEBAR ================= -->
<?php include('./includes/employer_leftbar.php');?>

<!-- ================= MAIN ================= -->
<div class="main">

   <?php include('./includes/employer_header.php');?>

    <main class="content">

        
            <!-- <div class="alert alert-warning d-flex align-items-center gap-2 rounded-4 border-0 mb-4">
                <i class="bi bi-hourglass-split fs-5"></i>
                <div>Your employer account is <strong>pending approval</strong>. Jobs you post will go live once an admin approves your account.</div>
            </div> -->
        

        <!-- Hero -->
        <div class="hero-card mb-4 reveal" id="company">
            <div class="row align-items-center g-4">
                <div class="col-lg-8">
                    <div class="d-flex align-items-center gap-3 mb-3">
                        
                            <!-- <img src="Demo" alt="" class="avatar lg avatar-img"> -->
                        
                            <!-- <span class="avatar lg" style="background:rgba(255,255,255,.2)">AD</span> -->
                        
                        <div>
                            <small style="opacity:.85"><span data-greeting>Hello</span>, Alex 👋</small>
                            <h2 class="mb-0">Demo</h2>
                        </div>
                    </div>
                    <p>
                        <i class="bi bi-geo-alt"></i> Dhaka
                         &nbsp;·&nbsp; <i class="bi bi-globe"></i> Demo
                        <br>You have <strong>8 new applicant(s)</strong> waiting for review and <strong>Demo</strong> live job(s).
                    </p>
                    <div class="d-flex flex-wrap gap-2">
                        <a href="#post-job" class="btn btn-hero"><i class="bi bi-plus-lg me-1"></i> Post a New Job</a>
                        <a href="#applicants" class="btn btn-hero-outline"><i class="bi bi-people me-1"></i> Review Applicants</a>
                    </div>
                </div>
                <!-- <div class="col-lg-4">
                    <div class="row g-2 text-center">
                        <div class="col-6"><div class="p-3 rounded-4" style="background:rgba(255,255,255,.14)"><div class="fs-4 fw-bold">Demo</div><small style="opacity:.85">Hired</small></div></div>
                        <div class="col-6"><div class="p-3 rounded-4" style="background:rgba(255,255,255,.14)"><div class="fs-4 fw-bold">12</div><small style="opacity:.85">Pending Jobs</small></div></div>
                        <div class="col-12"><div class="p-3 rounded-4" style="background:rgba(255,255,255,.14)"><div class="fs-5 fw-bold">৳2,500</div><small style="opacity:.85">Total spent on packages</small></div></div>
                    </div>
                </div> -->
            </div>
        </div>

        <!-- Stats -->
        <div class="row g-3 g-xl-4 mb-4">
            <div class="col-6 col-xl-3 reveal">
                <div class="stat-card tone-blue">
                    <div class="stat-top">
                        <div><div class="stat-label">Posted Jobs</div><div class="stat-value" data-count="128">0</div></div>
                        <div class="stat-icon"><i class="bi bi-briefcase-fill"></i></div>
                    </div>
                    <div class="stat-foot"><span class="trend-warn">12</span> awaiting approval</div>
                </div>
            </div>
            <div class="col-6 col-xl-3 reveal">
                <div class="stat-card tone-green">
                    <div class="stat-top">
                        <div><div class="stat-label">Active Jobs</div><div class="stat-value" data-count="Demo">0</div></div>
                        <div class="stat-icon"><i class="bi bi-broadcast"></i></div>
                    </div>
                    <div class="stat-foot">Approved &amp; before deadline</div>
                </div>
            </div>
            <div class="col-6 col-xl-3 reveal">
                <div class="stat-card tone-purple">
                    <div class="stat-top">
                        <div><div class="stat-label">Total Applicants</div><div class="stat-value" data-count="3580">0</div></div>
                        <div class="stat-icon"><i class="bi bi-people-fill"></i></div>
                    </div>
                    <div class="stat-foot"><span class="trend-up"><i class="bi bi-arrow-up-right"></i> 8</span> new, not reviewed</div>
                </div>
            </div>
            <div class="col-6 col-xl-3 reveal">
                <div class="stat-card tone-orange">
                    <div class="stat-top">
                        <div><div class="stat-label">Shortlisted</div><div class="stat-value" data-count="Demo">0</div></div>
                        <div class="stat-icon"><i class="bi bi-person-check-fill"></i></div>
                    </div>
                    <div class="stat-foot">Shortlisted &amp; interview stage</div>
                </div>
            </div>
        </div>

        <?php include('./includes/employer_rightbar.php');?>
    </main>

    <?php include('./includes/employer_footer.php');?>
</div>

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
