</main>
<!-- ================= FOOTER ================= -->
<footer class="footer">
  <div class="container">
    <div class="footer-grid">
      <div>
        <a href="<?= BASE_URL ?>index.php" class="logo"><span class="logo-mark">C</span>ChakriHub<span class="dot">.</span></a>
        <p class="mt-2">Bangladesh's friendly job platform connecting talented people with great employers.</p>
      </div>
      <div>
        <h4>For Job Seekers</h4>
        <ul>
          <li><a href="<?= BASE_URL ?>jobs.php">Browse Jobs</a></li>
          <li><a href="<?= BASE_URL ?>register.php">Create Account</a></li>
          <li><a href="<?= BASE_URL ?>seeker/dashboard.php">My Dashboard</a></li>
        </ul>
      </div>
      <div>
        <h4>For Employers</h4>
        <ul>
          <li><a href="<?= BASE_URL ?>employer/post-job.php">Post a Job</a></li>
          <li><a href="<?= BASE_URL ?>employer/applicants.php">Applicants</a></li>
          <li><a href="<?= BASE_URL ?>employer/dashboard.php">Employer Dashboard</a></li>
        </ul>
      </div>
      <div>
        <h4>Newsletter</h4>
        <p>Get new jobs in your inbox every week.</p>
        <form class="newsletter" action="#" method="post">
          <input type="email" class="form-control" placeholder="Your email" required>
          <button class="btn btn-primary" type="submit">Join</button>
        </form>
      </div>
    </div>
    <div class="footer-bottom">
      <span>&copy; 2026 ChakriHub. All rights reserved.</span>
      <span><a href="#">Privacy</a> &nbsp;·&nbsp; <a href="#">Terms</a></span>
    </div>
  </div>
</footer>
<script src="<?= BASE_URL ?>assets/js/main.js"></script>
</body>
</html>
