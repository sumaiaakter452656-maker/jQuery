<?php
require_once __DIR__ . '/includes/config.php';
$pageTitle = 'Contact Us';
$active    = 'contact';
include __DIR__ . '/includes/header.php';
?>

<section class="page-header">
  <div class="container">
    <ul class="breadcrumb"><li><a href="<?= BASE_URL ?>index.php">Home</a></li><li>Contact</li></ul>
    <h1>Contact Us</h1><p class="muted mb-0 mt-1">We'd love to hear from you</p>
  </div>
</section>
<section class="section-sm">
  <div class="container details-layout">
    <div class="card">
      <div class="card-body">
        <div class="alert alert-success"><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg><span>Thank you! Your message has been sent. <em>(example success message)</em></span><button class="alert-close">&times;</button></div>
        <form action="" method="post">
          <div class="form-row">
            <div class="form-group"><label class="form-label">Your name</label><input class="form-control" name="name" required></div>
            <div class="form-group"><label class="form-label">Email</label><input class="form-control" type="email" name="email" required></div>
          </div>
          <div class="form-group"><label class="form-label">Subject</label><input class="form-control" name="subject"></div>
          <div class="form-group"><label class="form-label">Message</label><textarea class="form-control" name="message" required></textarea></div>
          <button class="btn btn-primary" type="submit">Send Message</button>
        </form>
      </div>
    </div>
    <aside class="card">
      <div class="card-body">
        <ul class="overview-list">
          <li><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg><div><small>Office</small><strong>House 12, Road 5, Dhanmondi, Dhaka</strong></div></li>
          <li><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6A19.79 19.79 0 0 1 2.12 4.18 2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.13.96.36 1.9.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.91.34 1.85.57 2.81.7A2 2 0 0 1 22 16.92z"/></svg><div><small>Phone</small><strong>+880 1700-000000</strong></div></li>
          <li><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg><div><small>Email</small><strong>support@chakrihub.test</strong></div></li>
          <li><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg><div><small>Hours</small><strong>Sun – Thu, 9am – 6pm</strong></div></li>
        </ul>
      </div>
    </aside>
  </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
