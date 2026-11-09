# Jobs Portal

A web-based job portal designed to connect job seekers with employers.
Employers can create company profiles and publish job vacancies, while
job seekers can build their CVs, search and save jobs, and apply online.
An admin manages users, job categories, packages, payments, and
notifications.

> **Project type:** Database Design Project\
> **Programme:** IsDB-BISEW IT Scholarship Programme --- Round 73\
> **Technology:** PHP, MySQL, HTML, CSS, JavaScript

## Project Overview

The Jobs Portal aims to make job searching and recruitment simple, fast,
and organized. It brings job listings and applications into one place
and allows job seekers to track the status of their applications.

### Main Objectives

-   Provide a central place to publish and search for jobs.
-   Allow job seekers to create profiles and build CVs.
-   Let job seekers save jobs and apply online.
-   Help employers manage company profiles and job posts.
-   Allow administrators to manage users, categories, packages,
    payments, and notifications.

## User Roles

The system has three main user roles:

  -----------------------------------------------------------------------
  User role                           Main responsibilities
  ----------------------------------- -----------------------------------
  **Job Seeker**                      Create a profile, build a CV,
                                      search and save jobs, apply for
                                      jobs, and track application status.

  **Employer**                        Create a company profile and post
                                      job vacancies.

  **Admin**                           Manage users, categories, CV
                                      templates, packages, payments, and
                                      other portal information.
  -----------------------------------------------------------------------

## Main Features

### Job Seeker

-   Create an account and maintain a profile.
-   Add education, work experience, skills, projects, certificates, and
    languages.
-   Build a CV using available CV templates.
-   Search and filter jobs by city, job type, experience, and salary.
-   Save jobs and apply later.
-   Apply for jobs and track application status.

### Employer

-   Create and manage a company profile.
-   Publish job vacancies with details such as title, salary, deadline,
    and status.
-   Specify the skills required for a job.
-   Receive applications from job seekers.

### Admin

-   Manage users and user roles.
-   Manage cities, job categories, and skills.
-   Manage CV templates.
-   Manage packages and payment methods.
-   Review payment transactions and approve subscriptions.
-   Manage portal notifications.

## Job Application Workflow

1.  A job seeker creates an account and completes their profile.
2.  The job seeker searches for a suitable job.
3.  The job seeker submits an application with a CV.
4.  The employer reviews the application and updates its status.

Application statuses:

`applied` → `viewed` → `shortlisted` → `interview` → `hired` /
`rejected`

## CV Builder

The CV builder collects information from the job seeker's profile and
related tables.

-   **Personal details:** headline, summary, and profile information.
-   **Education:** degrees, institutions, results, and years.
-   **Experience:** company, designation, and employment dates.
-   **Skills:** skills selected by the job seeker.
-   **Additional CV items:** projects, certificates, and languages.
-   **CV design:** templates managed through the `cv_templates` table.

The `seeker_cv_items` table stores different additional CV item types.
When a job seeker applies, the CV file is stored with the application in
`job_applications.resume_file`, preserving the submitted version.

## Database Design

The database contains **20 tables**, organized into seven groups.

### 1. Users and Profiles

  -----------------------------------------------------------------------
  Table                               Purpose
  ----------------------------------- -----------------------------------
  `users`                             Login details and role information
                                      for admins, employers, and job
                                      seekers.

  `companies`                         Employer company profile, including
                                      name, logo, address, and website.

  `seekers`                           Job seeker profile, headline,
                                      summary, CV design, and CV file.
  -----------------------------------------------------------------------

All users authenticate through the `users` table. The `role` column
identifies the user type, while employer and job seeker details are
stored in their respective profile tables.

### 2. Lookup Lists

  Table            Purpose
  ---------------- -----------------------------------------
  `cities`         City names and their divisions.
  `categories`     Job categories, such as Sales and IT.
  `skills`         Skill names, such as PHP and Excel.
  `cv_templates`   CV designs that job seekers can select.

### 3. Job Seeker CV Details

  -----------------------------------------------------------------------
  Table                               Purpose
  ----------------------------------- -----------------------------------
  `seeker_educations`                 Education history, degrees,
                                      institutions, and results.

  `seeker_experiences`                Previous and current work
                                      experience.

  `seeker_skills`                     Skills associated with each job
                                      seeker.

  `seeker_cv_items`                   Additional CV information, such as
                                      projects, certificates, and
                                      languages.
  -----------------------------------------------------------------------

### 4. Jobs

  Table          Purpose
  -------------- -----------------------------------------------------------
  `jobs`         Job posts, including title, salary, deadline, and status.
  `job_skills`   Skills required for each job.

### 5. Applications

  -----------------------------------------------------------------------
  Table                               Purpose
  ----------------------------------- -----------------------------------
  `job_applications`                  Job applications, submitted CV
                                      file, and application status.

  `saved_jobs`                        Jobs bookmarked by job seekers.
  -----------------------------------------------------------------------

### 6. Packages and Subscriptions

  -----------------------------------------------------------------------
  Table                               Purpose
  ----------------------------------- -----------------------------------
  `packages`                          Available plans, such as Free,
                                      Standard, and Premium.

  `subscriptions`                     Purchased package details and
                                      remaining job-post allowance.
  -----------------------------------------------------------------------

### 7. Payments and Notifications

  -----------------------------------------------------------------------
  Table                               Purpose
  ----------------------------------- -----------------------------------
  `payment_methods`                   Supported methods, such as Cash,
                                      bKash, Nagad, Rocket, Bank
                                      Transfer, and Card.

  `payment_transactions`              Payment amount, transaction ID,
                                      payment method, and status.

  `notifications`                     Messages and alerts for users.
  -----------------------------------------------------------------------

## Table Relationships

The database uses primary keys and foreign keys to maintain
relationships between tables.

-   **One-to-one:** `users` → `companies` and `users` → `seekers`.
-   **One-to-many:** `companies` → `jobs`.
-   **One-to-many:** `jobs` → `job_applications`.
-   **Many-to-many:** `jobs` ↔ `skills`, connected through `job_skills`.
-   **Many-to-many:** `seekers` ↔ `skills`, connected through
    `seeker_skills`.

For example, `jobs.company_id` references the company that created a job
post.

## Package Payment Workflow

1.  An employer selects a package.
2.  The system creates a subscription with a pending status.
3.  The employer pays and submits a transaction ID.
4.  The payment information is stored in `payment_transactions`.
5.  The admin verifies and approves the payment.
6.  The payment becomes completed and the subscription becomes active.

Supported payment methods in the database design include Cash, bKash,
Nagad, Rocket, Bank Transfer, and Card.

## Technology Stack

  Technology   Purpose
  ------------ -------------------------------
  PHP          Server-side application logic
  MySQL        Relational database
  HTML         Page structure
  CSS          Page styling
  JavaScript   Client-side interactivity

## Getting Started

The project document describes the database design and technology stack.
It does not specify the exact source-code directory structure, SQL
import filename, or local configuration values. Use the actual files in
your repository for those details.

For a typical local PHP/MySQL setup:

1.  Install a local PHP and MySQL environment, such as XAMPP.
2.  Start Apache and MySQL.
3.  Create a MySQL database for the project.
4.  Import the project's SQL database file, if included in the
    repository.
5.  Configure the database connection in the PHP configuration file
    using your local database name, username, and password.
6.  Place the project folder in your web server's document root.
7.  Open the project through your local server in a browser.

## Future Improvements

The project presentation identifies these possible future features:

-   **Chat system:** allow employers and job seekers to communicate
    inside the portal.
-   **Mobile application:** provide access to the portal through a
    mobile app.
-   **Multiple languages:** allow users to choose the language of the
    portal.

## Project Information

-   **Project name:** Jobs Portal
-   **Project category:** Database Design Project
-   **Programme:** IsDB-BISEW IT Scholarship Programme
-   **Round:** 73
-   **Batch:** PWAD/USSL-M/73/01

------------------------------------------------------------------------

*Jobs Portal --- making job searching and recruitment simpler, faster,
and clearer.*
