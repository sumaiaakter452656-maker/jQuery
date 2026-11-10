-- =========================================================
-- ChakriHub Job Portal — starter database schema (MySQL 8 / MariaDB)
-- Import in phpMyAdmin: create DB "job_portal" -> Import this file
-- =========================================================
CREATE DATABASE IF NOT EXISTS job_portal CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE job_portal;

CREATE TABLE users (
  id           INT AUTO_INCREMENT PRIMARY KEY,
  name         VARCHAR(100) NOT NULL,
  email        VARCHAR(150) NOT NULL UNIQUE,
  phone        VARCHAR(20),
  password     VARCHAR(255) NOT NULL,              -- store password_hash() output
  role         ENUM('seeker','employer','admin') NOT NULL DEFAULT 'seeker',
  photo        VARCHAR(255),
  status       ENUM('active','blocked') NOT NULL DEFAULT 'active',
  created_at   TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE companies (
  id           INT AUTO_INCREMENT PRIMARY KEY,
  user_id      INT NOT NULL,
  name         VARCHAR(150) NOT NULL,
  industry     VARCHAR(100),
  size         VARCHAR(30),
  website      VARCHAR(255),
  email        VARCHAR(150),
  phone        VARCHAR(20),
  address      VARCHAR(255),
  about        TEXT,
  logo         VARCHAR(255),
  FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
);

CREATE TABLE categories (
  id    INT AUTO_INCREMENT PRIMARY KEY,
  name  VARCHAR(100) NOT NULL
);

CREATE TABLE jobs (
  id               INT AUTO_INCREMENT PRIMARY KEY,
  company_id       INT NOT NULL,
  category_id      INT,
  title            VARCHAR(150) NOT NULL,
  job_type         ENUM('Full-time','Part-time','Remote','Contract','Internship') DEFAULT 'Full-time',
  location         VARCHAR(100),
  vacancy          INT DEFAULT 1,
  experience       VARCHAR(50),
  salary_min       INT,
  salary_max       INT,
  negotiable       TINYINT(1) DEFAULT 0,
  description      TEXT,
  responsibilities TEXT,
  requirements     TEXT,
  skills           VARCHAR(255),
  deadline         DATE,
  status           ENUM('draft','pending','active','closed') DEFAULT 'pending',
  views            INT DEFAULT 0,
  created_at       TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (company_id)  REFERENCES companies(id) ON DELETE CASCADE,
  FOREIGN KEY (category_id) REFERENCES categories(id) ON DELETE SET NULL
);

CREATE TABLE seeker_profiles (
  user_id   INT PRIMARY KEY,
  headline  VARCHAR(150),
  dob       DATE,
  gender    VARCHAR(10),
  address   VARCHAR(255),
  bio       TEXT,
  skills    VARCHAR(255),
  resume    VARCHAR(255),
  FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
);

CREATE TABLE educations (
  id         INT AUTO_INCREMENT PRIMARY KEY,
  user_id    INT NOT NULL,
  degree     VARCHAR(150),
  institute  VARCHAR(150),
  year       YEAR,
  result     VARCHAR(30),
  FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
);

CREATE TABLE experiences (
  id           INT AUTO_INCREMENT PRIMARY KEY,
  user_id      INT NOT NULL,
  position     VARCHAR(150),
  company      VARCHAR(150),
  start_date   DATE,
  end_date     DATE NULL,
  is_current   TINYINT(1) DEFAULT 0,
  description  TEXT,
  FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
);

CREATE TABLE applications (
  id               INT AUTO_INCREMENT PRIMARY KEY,
  job_id           INT NOT NULL,
  user_id          INT NOT NULL,
  cover_letter     TEXT,
  expected_salary  INT,
  resume           VARCHAR(255),
  status           ENUM('new','reviewed','shortlisted','interview','rejected','hired') DEFAULT 'new',
  applied_at       TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  UNIQUE KEY one_application (job_id, user_id),
  FOREIGN KEY (job_id)  REFERENCES jobs(id)  ON DELETE CASCADE,
  FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
);

CREATE TABLE saved_jobs (
  user_id   INT NOT NULL,
  job_id    INT NOT NULL,
  saved_at  TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (user_id, job_id),
  FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE,
  FOREIGN KEY (job_id)  REFERENCES jobs(id)  ON DELETE CASCADE
);

INSERT INTO categories (name) VALUES
('IT & Software'),('Marketing'),('Design & Creative'),('Accounts & Finance'),
('Customer Support'),('Healthcare'),('Supply Chain'),('Education');

-- Admin login: admin@chakrihub.test / admin123
INSERT INTO users (name, email, password, role) VALUES
('Site Admin', 'admin@chakrihub.test', '$2y$10$uM6P89W539Ib7T1TaE5Jve7RLD/IQqK7XU0V40EMcN3EPaRLE3wOS', 'admin');
