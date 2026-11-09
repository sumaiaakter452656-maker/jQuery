<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Dashboard · Jobs Portal</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <link href="./assets/css/style.css" rel="stylesheet">
</head>
<body class="theme-seeker">

<!-- ================= SIDEBAR ================= -->
 <?php include('./includes/seeker_leftbar.php');?>

<!-- ================= MAIN ================= -->
<div class="main">
    <?php include('./includes/seeker_header.php');?>
    

    <main class="content">

        <!-- Hero -->
        <div class="hero-card mb-4 reveal">
            <div class="row align-items-center g-4">
                <div class="col-lg-8">
                    <span class="tag mb-2" style="background:rgba(255,255,255,.18);color:#fff;border:0"><span data-greeting>Hello</span> 👋</span>
                    <h2>Welcome back, Alex!</h2>
                    <p>There are <strong>Demo</strong> open jobs on the portal right now. You've applied to <strong>3580</strong> job(s) and <strong>Demo</strong> of them moved forward.</p>
                    <div class="d-flex flex-wrap gap-2">
                        <a href="#recommended" class="btn btn-hero"><i class="bi bi-stars me-1"></i> Recommended Jobs</a>
                        <a href="#cv" class="btn btn-hero-outline"><i class="bi bi-file-earmark-arrow-down me-1"></i> My CV</a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex align-items-center gap-3 justify-content-lg-end">
                        <div class="ring" data-progress="Demo"><span>0%</span></div>
                        <div>
                            <div class="fw-bold">Profile Strength</div>
                            <small style="opacity:.85">Demo of Demo steps done</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Stats -->
        <div class="row g-3 g-xl-4 mb-4">
            <div class="col-6 col-xl-3 reveal">
                <div class="stat-card tone-blue">
                    <div class="stat-top">
                        <div><div class="stat-label">Applied Jobs</div><div class="stat-value" data-count="3580">0</div></div>
                        <div class="stat-icon"><i class="bi bi-send-fill"></i></div>
                    </div>
                    <div class="stat-foot">Total applications sent</div>
                </div>
            </div>
            <div class="col-6 col-xl-3 reveal">
                <div class="stat-card tone-cyan">
                    <div class="stat-top">
                        <div><div class="stat-label">Viewed by Employers</div><div class="stat-value" data-count="Demo">0</div></div>
                        <div class="stat-icon"><i class="bi bi-eye-fill"></i></div>
                    </div>
                    <div class="stat-foot"><span class="trend-up">75%</span> view rate</div>
                </div>
            </div>
            <div class="col-6 col-xl-3 reveal">
                <div class="stat-card tone-green">
                    <div class="stat-top">
                        <div><div class="stat-label">Shortlisted</div><div class="stat-value" data-count="Demo">0</div></div>
                        <div class="stat-icon"><i class="bi bi-patch-check-fill"></i></div>
                    </div>
                    <div class="stat-foot">Shortlisted, interview or hired</div>
                </div>
            </div>
            <div class="col-6 col-xl-3 reveal">
                <div class="stat-card tone-orange">
                    <div class="stat-top">
                        <div><div class="stat-label">Saved Jobs</div><div class="stat-value" data-count="Demo">0</div></div>
                        <div class="stat-icon"><i class="bi bi-bookmark-heart-fill"></i></div>
                    </div>
                    <div class="stat-foot">Bookmarked for later</div>
                </div>
            </div>
        </div>
    <?php include('./includes/seeker_rightbar.php');?>

     <?php include('./includes/seeker_footer.php');?>
    
</div>

<!-- <div class="toast-container position-fixed bottom-0 end-0 p-3">
    <div id="appToast" class="toast toast-x" role="status" aria-live="polite">
        <div class="toast-body"><i class="bi bi-check-circle-fill"></i><span class="toast-msg">Saved</span>
            <button type="button" class="btn-close ms-auto" data-bs-dismiss="toast" aria-label="Close"></button></div>
    </div>
</div> -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="./assets/js/script.js"></script>
</body>
</html>
