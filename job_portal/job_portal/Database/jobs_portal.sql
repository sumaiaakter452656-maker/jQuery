-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 08, 2026 at 03:50 AM
-- Server version: 8.4.3
-- PHP Version: 8.3.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobs_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(120) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`) VALUES
(1, 'IT / Software', 'it-software'),
(2, 'Sales', 'sales'),
(3, 'Accounts', 'accounts'),
(4, 'Design', 'design');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `division` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `name`, `division`) VALUES
(2, 'Chattogram', 'Chattogram'),
(1, 'Dhaka', 'Dhaka'),
(4, 'Rajshahi', 'Rajshahi'),
(3, 'Sylhet', 'Sylhet');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` int UNSIGNED NOT NULL,
  `user_id` int UNSIGNED NOT NULL,
  `city_id` int UNSIGNED DEFAULT NULL,
  `name` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `user_id`, `city_id`, `name`, `logo`, `website`, `address`, `description`) VALUES
(3, 8, 1, 'TechNova Ltd', NULL, 'https://technova.example.com', 'Banani, Dhaka', 'Software development company.'),
(4, 9, 2, 'GreenLeaf Traders', NULL, NULL, 'Agrabad, Chattogram', 'Trading and distribution company.');

-- --------------------------------------------------------

--
-- Table structure for table `cv_templates`
--

CREATE TABLE `cv_templates` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `layout_file` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_premium` tinyint(1) NOT NULL DEFAULT '0',
  `status` enum('active','inactive') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cv_templates`
--

INSERT INTO `cv_templates` (`id`, `name`, `thumbnail`, `layout_file`, `is_premium`, `status`) VALUES
(1, 'Classic', NULL, 'templates/classic.php', 0, 'active'),
(2, 'Modern', NULL, 'templates/modern.php', 0, 'active');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int UNSIGNED NOT NULL,
  `company_id` int UNSIGNED NOT NULL,
  `category_id` int UNSIGNED DEFAULT NULL,
  `city_id` int UNSIGNED DEFAULT NULL,
  `subscription_id` int UNSIGNED DEFAULT NULL,
  `title` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(180) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_type` enum('full_time','part_time','contract','internship','remote') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'full_time',
  `salary_min` decimal(10,2) DEFAULT NULL,
  `salary_max` decimal(10,2) DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `deadline` date NOT NULL,
  `status` enum('pending','approved','rejected','closed') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `is_featured` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `company_id`, `category_id`, `city_id`, `subscription_id`, `title`, `slug`, `job_type`, `salary_min`, `salary_max`, `description`, `deadline`, `status`, `is_featured`) VALUES
(8, 3, 1, 1, 3, 'Senior PHP Developer', 'demo-senior-php-developer', 'full_time', 60000.00, 90000.00, 'Build and maintain PHP/MySQL applications.', '2026-11-19', 'approved', 1),
(9, 3, 1, 1, 3, 'Laravel Intern', 'demo-laravel-intern', 'internship', 10000.00, NULL, 'Learn and work with our Laravel team.', '2026-11-29', 'approved', 0),
(10, 3, 4, 1, 3, 'UI/UX Designer', 'demo-ui-ux-designer', 'remote', 40000.00, 60000.00, 'Design web and mobile interfaces.', '2026-11-24', 'pending', 0),
(11, 3, 3, 2, NULL, 'Junior Accountant', 'demo-junior-accountant', 'contract', NULL, NULL, 'Bookkeeping and reports.', '2026-10-30', 'closed', 0),
(12, 4, 2, 2, NULL, 'Sales Executive', 'demo-sales-executive', 'full_time', 25000.00, 35000.00, 'Grow sales in the Chattogram region.', '2026-11-16', 'approved', 0),
(13, 4, 4, 3, NULL, 'Graphic Designer', 'demo-graphic-designer', 'part_time', 20000.00, 30000.00, 'Create marketing materials.', '2026-11-06', 'approved', 1),
(14, 4, 3, 4, NULL, 'Accounts Officer', 'demo-accounts-officer', 'full_time', 30000.00, 40000.00, 'Manage accounts and payroll.', '2026-12-04', 'pending', 0);

-- --------------------------------------------------------

--
-- Table structure for table `job_applications`
--

CREATE TABLE `job_applications` (
  `id` int UNSIGNED NOT NULL,
  `job_id` int UNSIGNED NOT NULL,
  `seeker_id` int UNSIGNED NOT NULL,
  `resume_file` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('applied','viewed','shortlisted','interview','hired','rejected') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'applied',
  `applied_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_applications`
--

INSERT INTO `job_applications` (`id`, `job_id`, `seeker_id`, `resume_file`, `status`, `applied_at`) VALUES
(8, 8, 4, 'uploads/cv/rahim.pdf', 'interview', '2026-11-01 14:51:36'),
(9, 9, 4, 'uploads/cv/rahim.pdf', 'applied', '2026-11-03 14:51:36'),
(10, 11, 4, 'uploads/cv/rahim.pdf', 'rejected', '2026-08-26 14:51:36'),
(11, 13, 5, 'uploads/cv/nusrat.pdf', 'shortlisted', '2026-10-27 14:51:36'),
(12, 8, 5, 'uploads/cv/nusrat.pdf', 'viewed', '2026-09-25 14:51:36'),
(13, 12, 6, 'uploads/cv/tanvir.pdf', 'hired', '2026-07-27 14:51:36'),
(14, 9, 6, 'uploads/cv/tanvir.pdf', 'applied', '2026-11-02 14:51:36');

-- --------------------------------------------------------

--
-- Table structure for table `job_skills`
--

CREATE TABLE `job_skills` (
  `id` int UNSIGNED NOT NULL,
  `job_id` int UNSIGNED NOT NULL,
  `skill_id` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_skills`
--

INSERT INTO `job_skills` (`id`, `job_id`, `skill_id`) VALUES
(10, 8, 1),
(11, 8, 2),
(12, 8, 3),
(13, 9, 1),
(14, 9, 3),
(15, 10, 5),
(16, 10, 6),
(17, 11, 7),
(18, 14, 7);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int UNSIGNED NOT NULL,
  `user_id` int UNSIGNED NOT NULL,
  `message` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_read` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `user_id`, `message`, `is_read`, `created_at`) VALUES
(8, 7, 'New employer \"GreenLeaf Traders\" is waiting for approval', 0, '2026-11-04 14:21:36'),
(9, 7, 'Payment INV-DEMO-0002 submitted via Nagad', 0, '2026-11-04 11:51:36'),
(10, 7, 'Job \"UI/UX Designer\" needs review', 1, '2026-11-03 14:51:36'),
(11, 8, 'Rahim Uddin applied for Laravel Intern', 0, '2026-11-03 14:51:36'),
(12, 8, 'Your Standard package payment was approved', 1, '2026-10-25 14:51:36'),
(13, 10, 'You have been invited to an interview for Senior PHP Developer', 0, '2026-11-04 12:51:36'),
(14, 10, 'Your application for Junior Accountant was not selected', 1, '2026-09-05 14:51:36');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(10,2) NOT NULL DEFAULT '0.00',
  `duration_days` smallint UNSIGNED NOT NULL,
  `job_post_limit` smallint UNSIGNED NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `name`, `price`, `duration_days`, `job_post_limit`, `description`) VALUES
(1, 'Free', 0.00, 30, 1, 'Post 1 job for 30 days'),
(2, 'Standard', 1500.00, 30, 5, 'Post 5 jobs for 30 days'),
(3, 'Premium', 4000.00, 60, 20, 'Post 20 jobs for 60 days, featured listing');

-- --------------------------------------------------------

--
-- Table structure for table `payment_methods`
--

CREATE TABLE `payment_methods` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `account_no` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('active','inactive') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payment_methods`
--

INSERT INTO `payment_methods` (`id`, `name`, `account_no`, `status`) VALUES
(1, 'Cash', NULL, 'active'),
(2, 'bKash', NULL, 'active'),
(3, 'Nagad', NULL, 'active'),
(4, 'Rocket', NULL, 'active'),
(5, 'Bank Transfer', NULL, 'active'),
(6, 'Card', NULL, 'active');

-- --------------------------------------------------------

--
-- Table structure for table `payment_transactions`
--

CREATE TABLE `payment_transactions` (
  `id` int UNSIGNED NOT NULL,
  `transaction_no` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int UNSIGNED NOT NULL,
  `subscription_id` int UNSIGNED NOT NULL,
  `payment_method_id` int UNSIGNED NOT NULL,
  `total_amount` decimal(10,2) NOT NULL,
  `tx_id` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('pending','completed','failed') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `verified_by` int UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payment_transactions`
--

INSERT INTO `payment_transactions` (`id`, `transaction_no`, `user_id`, `subscription_id`, `payment_method_id`, `total_amount`, `tx_id`, `status`, `verified_by`) VALUES
(3, 'INV-DEMO-0001', 8, 3, 2, 1500.00, 'BKDEMO7X92', 'completed', 7),
(4, 'INV-DEMO-0002', 9, 4, 3, 4000.00, 'NGDEMO88AA', 'pending', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `saved_jobs`
--

CREATE TABLE `saved_jobs` (
  `id` int UNSIGNED NOT NULL,
  `seeker_id` int UNSIGNED NOT NULL,
  `job_id` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `saved_jobs`
--

INSERT INTO `saved_jobs` (`id`, `seeker_id`, `job_id`) VALUES
(5, 4, 12),
(4, 4, 13),
(6, 5, 10);

-- --------------------------------------------------------

--
-- Table structure for table `seekers`
--

CREATE TABLE `seekers` (
  `id` int UNSIGNED NOT NULL,
  `user_id` int UNSIGNED NOT NULL,
  `city_id` int UNSIGNED DEFAULT NULL,
  `category_id` int UNSIGNED DEFAULT NULL,
  `cv_template_id` int UNSIGNED DEFAULT NULL,
  `headline` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `summary` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `experience_years` tinyint UNSIGNED NOT NULL DEFAULT '0',
  `expected_salary` decimal(10,2) DEFAULT NULL,
  `resume_file` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seekers`
--

INSERT INTO `seekers` (`id`, `user_id`, `city_id`, `category_id`, `cv_template_id`, `headline`, `summary`, `experience_years`, `expected_salary`, `resume_file`) VALUES
(4, 10, 1, 1, 2, 'Junior PHP Developer', 'PHP/MySQL developer who loves building web apps.', 2, 35000.00, NULL),
(5, 11, 1, 4, NULL, 'UI/UX Designer', NULL, 3, 45000.00, NULL),
(6, 12, 2, 2, NULL, 'Sales Executive', 'Field sales professional.', 1, 22000.00, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `seeker_cv_items`
--

CREATE TABLE `seeker_cv_items` (
  `id` int UNSIGNED NOT NULL,
  `seeker_id` int UNSIGNED NOT NULL,
  `type` enum('project','certificate','language') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `organization` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `level` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seeker_cv_items`
--

INSERT INTO `seeker_cv_items` (`id`, `seeker_id`, `type`, `title`, `organization`, `level`, `link`, `start_date`, `end_date`) VALUES
(4, 4, 'project', 'Online Job Portal', 'Personal Project', NULL, NULL, '2024-03-01', '2024-06-30'),
(5, 4, 'certificate', 'PHP & MySQL Web Development', 'IsDB-BISEW', NULL, NULL, '2023-01-01', '2023-06-30'),
(6, 4, 'language', 'English', NULL, 'Good', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `seeker_educations`
--

CREATE TABLE `seeker_educations` (
  `id` int UNSIGNED NOT NULL,
  `seeker_id` int UNSIGNED NOT NULL,
  `level` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `degree_title` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `institution` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `result` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `year` year DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seeker_educations`
--

INSERT INTO `seeker_educations` (`id`, `seeker_id`, `level`, `degree_title`, `institution`, `result`, `year`) VALUES
(4, 4, 'Bachelor', 'BSc in CSE', 'Daffodil International University', 'CGPA 3.60', '2023'),
(5, 4, 'HSC', 'Science', 'Dhaka College', 'GPA 5.00', '2018'),
(6, 5, 'Bachelor', 'BFA in Graphic Design', 'University of Dhaka', 'CGPA 3.45', '2021');

-- --------------------------------------------------------

--
-- Table structure for table `seeker_experiences`
--

CREATE TABLE `seeker_experiences` (
  `id` int UNSIGNED NOT NULL,
  `seeker_id` int UNSIGNED NOT NULL,
  `company_name` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date DEFAULT NULL,
  `is_current` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seeker_experiences`
--

INSERT INTO `seeker_experiences` (`id`, `seeker_id`, `company_name`, `designation`, `start_date`, `end_date`, `is_current`) VALUES
(4, 4, 'WebPoint IT', 'Junior Web Developer', '2024-01-01', NULL, 1),
(5, 4, 'CodeCamp BD', 'Intern', '2023-06-01', '2023-12-31', 0),
(6, 5, 'PixelHouse', 'Graphic Designer', '2021-08-01', '2024-07-31', 0);

-- --------------------------------------------------------

--
-- Table structure for table `seeker_skills`
--

CREATE TABLE `seeker_skills` (
  `id` int UNSIGNED NOT NULL,
  `seeker_id` int UNSIGNED NOT NULL,
  `skill_id` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seeker_skills`
--

INSERT INTO `seeker_skills` (`id`, `seeker_id`, `skill_id`) VALUES
(10, 4, 1),
(11, 4, 2),
(12, 4, 3),
(13, 4, 4),
(14, 4, 5),
(15, 4, 6),
(16, 5, 5),
(17, 5, 6),
(18, 6, 7);

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(80) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `name`) VALUES
(6, 'CSS'),
(7, 'Excel'),
(5, 'HTML'),
(4, 'JavaScript'),
(3, 'Laravel'),
(2, 'MySQL'),
(1, 'PHP');

-- --------------------------------------------------------

--
-- Table structure for table `subscriptions`
--

CREATE TABLE `subscriptions` (
  `id` int UNSIGNED NOT NULL,
  `user_id` int UNSIGNED NOT NULL,
  `package_id` int UNSIGNED NOT NULL,
  `posts_left` smallint UNSIGNED NOT NULL DEFAULT '0',
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `status` enum('pending','active','expired') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscriptions`
--

INSERT INTO `subscriptions` (`id`, `user_id`, `package_id`, `posts_left`, `start_date`, `end_date`, `status`) VALUES
(3, 8, 2, 2, '2026-10-25', '2026-11-24', 'active'),
(4, 9, 3, 20, NULL, NULL, 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('admin','employer','seeker') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('active','pending','blocked') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `password`, `role`, `status`, `created_at`) VALUES
(7, 'sumaia', 'admin@gmail.com', '01700000001', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'admin', 'active', '2026-05-28 14:51:36'),
(8, 'Karim Hossain', 'employer@jobportal.com', '01700000002', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'employer', 'active', '2026-06-17 14:51:36'),
(9, 'Sumon Das', 'employer2@jobportal.com', '01700000003', '$2y$10$TywG3oVIX0cgOuljkbbQCu9GXrI/vHNBrYRvFoUeSg5FQYRchXQ5G', 'employer', 'pending', '2026-10-15 14:51:36'),
(10, 'Rahim Uddin', 'seeker@jobportal.com', '01700000004', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'seeker', 'active', '2026-07-07 14:51:36'),
(11, 'Nusrat Jahan', 'seeker2@jobportal.com', NULL, '$2y$10$TywG3oVIX0cgOuljkbbQCu9GXrI/vHNBrYRvFoUeSg5FQYRchXQ5G', 'seeker', 'active', '2026-08-21 14:51:36'),
(12, 'Tanvir Ahmed', 'seeker3@jobportal.com', '01700000006', '$2y$10$TywG3oVIX0cgOuljkbbQCu9GXrI/vHNBrYRvFoUeSg5FQYRchXQ5G', 'seeker', 'active', '2026-10-30 14:51:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uq_city` (`name`,`division`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`user_id`),
  ADD KEY `fk_companies_city` (`city_id`);

--
-- Indexes for table `cv_templates`
--
ALTER TABLE `cv_templates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`),
  ADD KEY `fk_jobs_company` (`company_id`),
  ADD KEY `fk_jobs_category` (`category_id`),
  ADD KEY `fk_jobs_city` (`city_id`),
  ADD KEY `fk_jobs_sub` (`subscription_id`),
  ADD KEY `idx_jobs_search` (`status`,`deadline`,`is_featured`);

--
-- Indexes for table `job_applications`
--
ALTER TABLE `job_applications`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uq_apply_once` (`job_id`,`seeker_id`),
  ADD KEY `fk_app_seeker` (`seeker_id`);

--
-- Indexes for table `job_skills`
--
ALTER TABLE `job_skills`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uq_job_skill` (`job_id`,`skill_id`),
  ADD KEY `fk_js_skill` (`skill_id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_notif_unread` (`user_id`,`is_read`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_methods`
--
ALTER TABLE `payment_methods`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `payment_transactions`
--
ALTER TABLE `payment_transactions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `transaction_no` (`transaction_no`),
  ADD UNIQUE KEY `tx_id` (`tx_id`),
  ADD KEY `fk_pay_user` (`user_id`),
  ADD KEY `fk_pay_sub` (`subscription_id`),
  ADD KEY `fk_pay_method` (`payment_method_id`),
  ADD KEY `fk_pay_verifier` (`verified_by`);

--
-- Indexes for table `saved_jobs`
--
ALTER TABLE `saved_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uq_saved` (`seeker_id`,`job_id`),
  ADD KEY `fk_saved_job` (`job_id`);

--
-- Indexes for table `seekers`
--
ALTER TABLE `seekers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`user_id`),
  ADD KEY `fk_seekers_city` (`city_id`),
  ADD KEY `fk_seekers_category` (`category_id`),
  ADD KEY `fk_seekers_template` (`cv_template_id`);

--
-- Indexes for table `seeker_cv_items`
--
ALTER TABLE `seeker_cv_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_items_type` (`seeker_id`,`type`);

--
-- Indexes for table `seeker_educations`
--
ALTER TABLE `seeker_educations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_edu_seeker` (`seeker_id`);

--
-- Indexes for table `seeker_experiences`
--
ALTER TABLE `seeker_experiences`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_exp_seeker` (`seeker_id`);

--
-- Indexes for table `seeker_skills`
--
ALTER TABLE `seeker_skills`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uq_seeker_skill` (`seeker_id`,`skill_id`),
  ADD KEY `fk_ss_skill` (`skill_id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_sub_user` (`user_id`),
  ADD KEY `fk_sub_package` (`package_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cv_templates`
--
ALTER TABLE `cv_templates`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `job_applications`
--
ALTER TABLE `job_applications`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `job_skills`
--
ALTER TABLE `job_skills`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `payment_methods`
--
ALTER TABLE `payment_methods`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `payment_transactions`
--
ALTER TABLE `payment_transactions`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `saved_jobs`
--
ALTER TABLE `saved_jobs`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `seekers`
--
ALTER TABLE `seekers`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `seeker_cv_items`
--
ALTER TABLE `seeker_cv_items`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `seeker_educations`
--
ALTER TABLE `seeker_educations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `seeker_experiences`
--
ALTER TABLE `seeker_experiences`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `seeker_skills`
--
ALTER TABLE `seeker_skills`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `subscriptions`
--
ALTER TABLE `subscriptions`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `companies`
--
ALTER TABLE `companies`
  ADD CONSTRAINT `fk_companies_city` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `fk_companies_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `jobs`
--
ALTER TABLE `jobs`
  ADD CONSTRAINT `fk_jobs_category` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `fk_jobs_city` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `fk_jobs_company` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_jobs_sub` FOREIGN KEY (`subscription_id`) REFERENCES `subscriptions` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `job_applications`
--
ALTER TABLE `job_applications`
  ADD CONSTRAINT `fk_app_job` FOREIGN KEY (`job_id`) REFERENCES `jobs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_app_seeker` FOREIGN KEY (`seeker_id`) REFERENCES `seekers` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `job_skills`
--
ALTER TABLE `job_skills`
  ADD CONSTRAINT `fk_js_job` FOREIGN KEY (`job_id`) REFERENCES `jobs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_js_skill` FOREIGN KEY (`skill_id`) REFERENCES `skills` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `notifications`
--
ALTER TABLE `notifications`
  ADD CONSTRAINT `fk_notif_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `payment_transactions`
--
ALTER TABLE `payment_transactions`
  ADD CONSTRAINT `fk_pay_method` FOREIGN KEY (`payment_method_id`) REFERENCES `payment_methods` (`id`) ON DELETE RESTRICT,
  ADD CONSTRAINT `fk_pay_sub` FOREIGN KEY (`subscription_id`) REFERENCES `subscriptions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_pay_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_pay_verifier` FOREIGN KEY (`verified_by`) REFERENCES `users` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `saved_jobs`
--
ALTER TABLE `saved_jobs`
  ADD CONSTRAINT `fk_saved_job` FOREIGN KEY (`job_id`) REFERENCES `jobs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_saved_seeker` FOREIGN KEY (`seeker_id`) REFERENCES `seekers` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `seekers`
--
ALTER TABLE `seekers`
  ADD CONSTRAINT `fk_seekers_category` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `fk_seekers_city` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `fk_seekers_template` FOREIGN KEY (`cv_template_id`) REFERENCES `cv_templates` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `fk_seekers_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `seeker_cv_items`
--
ALTER TABLE `seeker_cv_items`
  ADD CONSTRAINT `fk_items_seeker` FOREIGN KEY (`seeker_id`) REFERENCES `seekers` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `seeker_educations`
--
ALTER TABLE `seeker_educations`
  ADD CONSTRAINT `fk_edu_seeker` FOREIGN KEY (`seeker_id`) REFERENCES `seekers` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `seeker_experiences`
--
ALTER TABLE `seeker_experiences`
  ADD CONSTRAINT `fk_exp_seeker` FOREIGN KEY (`seeker_id`) REFERENCES `seekers` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `seeker_skills`
--
ALTER TABLE `seeker_skills`
  ADD CONSTRAINT `fk_ss_seeker` FOREIGN KEY (`seeker_id`) REFERENCES `seekers` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_ss_skill` FOREIGN KEY (`skill_id`) REFERENCES `skills` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD CONSTRAINT `fk_sub_package` FOREIGN KEY (`package_id`) REFERENCES `packages` (`id`) ON DELETE RESTRICT,
  ADD CONSTRAINT `fk_sub_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
