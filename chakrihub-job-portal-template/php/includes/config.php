<?php
/* -------------------------------------------------------
   config.php — loaded at the top of every page
   ------------------------------------------------------- */

// Your project folder inside htdocs. Must start and end with "/".
// e.g. C:\xampp\htdocs\job-portal  ->  '/job-portal/'
define('BASE_URL', '/job-portal/');

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

/* Database connection (PDO). Uncomment after importing database.sql
try {
    $pdo = new PDO(
        'mysql:host=localhost;dbname=job_portal;charset=utf8mb4',
        'root',
        '',
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
         PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]
    );
} catch (PDOException $e) {
    die('Database connection failed: ' . $e->getMessage());
}
*/

// Helper: escape output
function e($value) {
    return htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8');
}

// Helper: allow only logged-in users with a given role
function require_role($role) {
    if (($_SESSION['role'] ?? null) !== $role) {
        header('Location: ' . BASE_URL . 'login.php');
        exit;
    }
}
