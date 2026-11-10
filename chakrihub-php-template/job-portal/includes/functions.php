<?php
/* =========================================================
   functions.php — template helpers
   ========================================================= */

/** Escape output (always use for user data) */
function e($value)
{
    return htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8');
}

/** Build a link from the project root: url('jobs.php') */
function url($path = '')
{
    return BASE_URL . ltrim($path, '/');
}

/** Link to a file inside /assets */
function asset($path)
{
    return url('assets/' . ltrim($path, '/'));
}

/** Returns "active" when $key matches the page's $active variable */
function is_active($key)
{
    global $active;
    return ($active ?? '') === $key ? 'active' : '';
}

/**
 * Render a reusable piece of HTML from /components.
 * component('job-card', ['job' => $job]);
 * Inside the component file the array keys become variables ($job).
 */
function component($__component, array $__data = [])
{
    extract($__data, EXTR_SKIP);
    unset($__data);
    include __DIR__ . '/../components/' . $__component . '.php';
}

/** Coloured status pill */
function status_badge($status)
{
    $map = [
        'New' => 'badge-info', 'Pending' => 'badge-warning', 'Reviewed' => 'badge-info',
        'Shortlisted' => 'badge-primary', 'Interview' => 'badge-success', 'Hired' => 'badge-success',
        'Rejected' => 'badge-danger', 'Active' => 'badge-success', 'Draft' => 'badge-warning',
        'Closed' => 'badge-gray', 'Blocked' => 'badge-danger',
    ];
    $class = $map[$status] ?? 'badge-gray';
    return '<span class="badge badge-dot ' . $class . '">' . e($status) . '</span>';
}

/** Job type pill (Full-time, Remote ...) */
function type_badge($type)
{
    $map = [
        'Full-time' => 'badge-primary', 'Remote' => 'badge-info', 'Contract' => 'badge-warning',
        'Internship' => 'badge-success', 'Part-time' => 'badge-gray',
    ];
    return '<span class="badge ' . ($map[$type] ?? 'badge-gray') . '">' . e($type) . '</span>';
}

/** "Rahim Uddin" -> "RU", "TechVerse Ltd." -> "TV", "CodeCraft" -> "CC" */
function initials($name)
{
    $name  = trim(preg_replace('/\b(Ltd|Limited|Inc|PLC)\.?$/i', '', trim($name)));
    $parts = preg_split('/\s+/', $name);
    if (count($parts) === 1) {
        preg_match_all('/[A-Z]/', $name, $caps);              // CamelCase word
        return count($caps[0]) >= 2 ? implode('', array_slice($caps[0], 0, 2)) : mb_strtoupper(mb_substr($name, 0, 2));
    }
    return mb_strtoupper(mb_substr($parts[0], 0, 1) . mb_substr($parts[1], 0, 1));
}

/** 80000, 120000 -> "৳80k – 120k" */
function salary_text($min, $max = null)
{
    $k = fn($n) => $n >= 1000 ? round($n / 1000) . 'k' : $n;
    if (!$min && !$max) return 'Negotiable';
    if (!$max) return '৳' . $k($min);
    return '৳' . $k($min) . ' – ' . $k($max);
}

/** Keep a submitted value in the form after an error: value="<?= old('email') ?>" */
function old($field, $default = '')
{
    return e($_POST[$field] ?? $default);
}

/** Mark a <select> option: <option <?= selected('Dhaka', $loc) ?>> */
function selected($value, $current)
{
    return (string) $value === (string) $current ? 'selected' : '';
}

/** Mark a checkbox / radio */
function checked($condition)
{
    return $condition ? 'checked' : '';
}

/**
 * One-time messages (shown once after redirect).
 * Set: flash('success', 'Job published!');
 * Show: component('flash');
 */
function flash($type = null, $message = null)
{
    if ($type && $message) {
        $_SESSION['flash'][] = ['type' => $type, 'message' => $message];
        return null;
    }
    $messages = $_SESSION['flash'] ?? [];
    unset($_SESSION['flash']);
    return $messages;
}

/** Redirect and stop */
function redirect($path)
{
    header('Location: ' . url($path));
    exit;
}

/** Only allow logged-in users with this role */
function require_role($role)
{
    if (($_SESSION['user']['role'] ?? null) !== $role) {
        flash('danger', 'Please log in to continue.');
        redirect('login.php');
    }
}

/** Logged-in user, or a demo user for previewing the template */
function current_user($role = 'seeker')
{
    global $demoUsers;
    return $_SESSION['user'] ?? $demoUsers[$role];
}
