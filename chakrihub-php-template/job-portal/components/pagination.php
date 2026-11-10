<?php
/* component('pagination', ['current' => $page, 'totalPages' => $totalPages])
   Keeps the other query-string values (filters) in the links. */
if (($totalPages ?? 1) <= 1) return;
$link = function ($p) {
    $q = $_GET;
    $q['page'] = $p;
    return '?' . http_build_query($q);
};
?>
<ul class="pagination">
  <li><?= $current > 1 ? '<a href="' . e($link($current - 1)) . '">&laquo;</a>' : '<span class="disabled">&laquo;</span>' ?></li>
  <?php for ($p = 1; $p <= $totalPages; $p++): ?>
    <li><?= $p == $current ? '<span class="active">' . $p . '</span>' : '<a href="' . e($link($p)) . '">' . $p . '</a>' ?></li>
  <?php endfor; ?>
  <li><?= $current < $totalPages ? '<a href="' . e($link($current + 1)) . '">&raquo;</a>' : '<span class="disabled">&raquo;</span>' ?></li>
</ul>
