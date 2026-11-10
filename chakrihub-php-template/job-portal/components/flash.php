<?php /* Shows messages set with flash('success', '...') — already included in every layout */
foreach (flash() as $f) {
    component('alert', ['type' => $f['type'], 'message' => e($f['message'])]);
}
