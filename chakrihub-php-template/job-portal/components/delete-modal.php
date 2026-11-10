<?php
/* Confirm-delete modal. Open with: <button data-modal-open="deleteModal">
   component('delete-modal', ['action' => 'employer/delete-job.php', 'title' => 'Delete this job?']) */
?>
<div class="modal" id="deleteModal">
  <div class="modal-dialog sm">
    <form action="<?= url($action ?? '#') ?>" method="post">
      <input type="hidden" name="id" value="" data-delete-id>
      <div class="modal-header"><h3><?= e($title ?? 'Delete this item?') ?></h3><button type="button" class="modal-close" data-modal-close>&times;</button></div>
      <div class="modal-body"><p class="mb-0">This action cannot be undone.</p></div>
      <div class="modal-footer">
        <button type="button" class="btn btn-light" data-modal-close>Cancel</button>
        <button class="btn btn-danger" type="submit">Delete</button>
      </div>
    </form>
  </div>
</div>
