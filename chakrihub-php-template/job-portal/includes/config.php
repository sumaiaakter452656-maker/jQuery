<?php
/* =========================================================
   config.php — load this at the top of EVERY page:
   require_once __DIR__ . '/includes/config.php';
   ========================================================= */

// Project folder inside htdocs. Must start and end with "/".
// C:\xampp\htdocs\job-portal  ->  '/job-portal/'
define('BASE_URL', '/job-portal/');
define('SITE_NAME', 'ChakriHub');

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

/* ---------------------------------------------------------
   Database (PDO). Uncomment after importing database.sql,
   then replace the sample arrays in data.php with queries.
   ---------------------------------------------------------
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

require_once __DIR__ . '/functions.php';
require_once __DIR__ . '/icons.php';
require_once __DIR__ . '/data.php';   // sample data (delete when DB is ready)
