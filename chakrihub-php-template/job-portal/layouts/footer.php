<?php /* Public layout — bottom part */
$footerLinks = [
    'For Job Seekers' => ['Browse Jobs' => 'jobs.php', 'Create Account' => 'register.php', 'My Dashboard' => 'seeker/dashboard.php'],
    'For Employers'   => ['Post a Job' => 'employer/post-job.php', 'Applicants' => 'employer/applicants.php', 'Employer Dashboard' => 'employer/dashboard.php'],
];
?>
</main>
<footer class="footer">
  <div class="container">
    <div class="footer-grid">
      <div>
        <?php include __DIR__ . '/logo.php'; ?>
        <p class="mt-2">Bangladesh's friendly job platform connecting talented people with great employers.</p>
      </div>
      <?php foreach ($footerLinks as $heading => $links): ?>
        <div>
          <h4><?= e($heading) ?></h4>
          <ul>
            <?php foreach ($links as $label => $link): ?>
              <li><a href="<?= url($link) ?>"><?= e($label) ?></a></li>
            <?php endforeach; ?>
          </ul>
        </div>
      <?php endforeach; ?>
      <div>
        <h4>Newsletter</h4>
        <p>Get new jobs in your inbox every week.</p>
        <form class="newsletter" action="#" method="post">
          <input type="email" name="email" class="form-control" placeholder="Your email" required>
          <button class="btn btn-primary" type="submit">Join</button>
        </form>
      </div>
    </div>
    <div class="footer-bottom">
      <span>&copy; <?= date('Y') ?> <?= SITE_NAME ?>. All rights reserved.</span>
      <span><a href="#">Privacy</a> &nbsp;·&nbsp; <a href="#">Terms</a></span>
    </div>
  </div>
</footer>
<script src="<?= asset('js/main.js') ?>"></script>
</body>
</html>
