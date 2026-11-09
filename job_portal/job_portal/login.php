<?php include('dashboard_config.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login · Jobs Portal</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
</head>
<body class="theme-admin auth-page">
  <div class="auth-wrap">
    <aside class="auth-side d-none d-lg-flex">
      <div>
        <div class="d-flex align-items-center gap-2 mb-5">
          <div class="brand-icon"><i class="bi bi-briefcase-fill"></i></div>
          <div class="brand-text">Jobs<span style="color:#c7d2fe">Portal</span></div>
        </div>
        <h1>Find the right job.<br>Hire the right people.</h1>
        <p>One place for job seekers, employers and admins to manage everything.</p>
        <ul class="auth-points">
          <li><i class="bi bi-check-circle-fill"></i> Apply and track your applications</li>
          <li><i class="bi bi-check-circle-fill"></i> Post jobs and review applicants</li>
          <li><i class="bi bi-check-circle-fill"></i> Manage the whole portal from one panel</li>
        </ul>
      </div>
    </aside>

    <main class="auth-main">
      <section class="auth-card">
        <h2>Welcome back 👋</h2>
        <p class="text-muted mb-4">Login to continue to your dashboard</p>

        <div id="loginNotice" class="alert alert-info rounded-3 py-2 small d-none" role="alert"></div>

        <?php
              if (isset($_POST['login'])) {
                extract($_POST);
                $password = sha1($password);

               
                echo "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
                $result = $conn->query("SELECT * FROM users WHERE email = '$email' AND password = '$password'");

                $row = $result->fetch_assoc();


                if ($result->num_rows > 0) {
                  session_start();
                  $_SESSION['email'] = $email;
                  $_SESSION['name'] = $row['name'];
                  $_SESSION['role'] = $row['role'];


                  if ($row['role'] == 'admin') {
                    $_SESSION['url'] = 'admin_dashboard.php';
                    header("Location: admin/admin_dashboard.php");
                  } else if ($row['role'] == 'employer') {
                    $_SESSION['url'] = 'employer_dashboard.php';
                    header("Location: admin/employer_dashboard.php");
                  } else if ($row['role'] == 'seeker') {
                    $_SESSION['url'] = 'seeker_dashboard.php';
                    header("Location: admin/seeker_dashboard.php");
                  }
                } else {
                  echo '
                  <div class="alert border-0 bg-danger-subtle alert-dismissible fade show">
                  <div class="d-flex align-items-center">
                    <div class="text-danger">Problem Login</div>
                  </div>
                  </div>
                  ';
                }
              }
              ?>


        <form id="loginForm" method="post">
          <div class="mb-3">
            <label class="form-label" for="email">Email</label>
            <div class="input-icon"><i class="bi bi-envelope"></i>
              <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com" required autofocus>
            </div>
          </div>
          <div class="mb-3">
            <label class="form-label" for="password">Password</label>
            <div class="input-icon"><i class="bi bi-lock"></i>
              <input type="password" class="form-control" id="password" name="password" placeholder="••••••" required>
            </div>
          </div>
          <button type="submit" name="login" class="btn btn-accent w-100 py-2">
            <i class="bi bi-box-arrow-in-right me-1"></i> Login
          </button>
        </form>


       
        <p class="small text-muted mt-4 mb-0">Static HTML demo — connect a backend to enable real login.</p>
      </section>
    </main>
  </div>

  <script src="assets/js/script.js"></script>
 
</body>
</html>
