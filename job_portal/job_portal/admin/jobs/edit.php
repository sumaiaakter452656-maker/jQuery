<?php include_once("../../dashboard_config.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Update</title>
    <link rel="stylesheet" href="../assets/css/crud.css">
</head>
<body>

<div class="card">
    <h3>Job Update Form</h3>

    <?php
        // Display Job Record
        $id = $_GET['id'];

        // Update Job Record
        if($_SERVER['REQUEST_METHOD']=='POST'){

            $company_id = $_POST['company_id'];
            $category_id = $_POST['category_id'];
            $city_id = $_POST['city_id'];
            $subscription_id = $_POST['subscription_id'];
            $title = $_POST['title'];
            $slug = strtolower(str_replace(" ", "-", $title));
            $job_type = $_POST['job_type'];
            $salary_min = $_POST['salary_min'];
            $salary_max = $_POST['salary_max'];
            $description = $_POST['description'];
            $deadline = $_POST['deadline'];
            $status = $_POST['status'];
            $is_featured = $_POST['is_featured'];

            // Update Query
            $conn->query("UPDATE jobs SET
            company_id = '$company_id',
            category_id = '$category_id',
            city_id = '$city_id',
            subscription_id = '$subscription_id',
            title = '$title',
            slug = '$slug',
            job_type = '$job_type',
            salary_min = '$salary_min',
            salary_max = '$salary_max',
            description = '$description',
            deadline = '$deadline',
            status = '$status',
            is_featured = '$is_featured'
            WHERE id = '$id'");

            if($conn->affected_rows){
                echo "<div class='message'>Update Success</div>";
            }

        }

        // Query for select one record
        $data = $conn->query("SELECT * FROM jobs WHERE id = '$id'");
        $row = $data->fetch_object();
    ?>

    <form action="" method="post">

        <input type="number" name="company_id" placeholder="Enter Company ID" value="<?php echo $row->company_id; ?>"><br>

        <input type="number" name="category_id" placeholder="Enter Category ID" value="<?php echo $row->category_id; ?>"><br>

        <input type="number" name="city_id" placeholder="Enter City ID" value="<?php echo $row->city_id; ?>"><br>

        <input type="number" name="subscription_id" placeholder="Enter Subscription ID" value="<?php echo $row->subscription_id; ?>"><br>

        <input type="text" name="title" placeholder="Enter Job Title" value="<?php echo $row->title; ?>"><br>

        <select name="job_type">
            <option value="full_time">Full Time</option>
            <option value="part_time">Part Time</option>
            <option value="contract">Contract</option>
            <option value="internship">Internship</option>
            <option value="remote">Remote</option>
        </select><br>

        <input type="number" step="0.01" name="salary_min" placeholder="Minimum Salary" value="<?php echo $row->salary_min; ?>"><br>

        <input type="number" step="0.01" name="salary_max" placeholder="Maximum Salary" value="<?php echo $row->salary_max; ?>"><br>

        <textarea name="description" placeholder="Enter Job Description"><?php echo $row->description; ?></textarea><br>

        <input type="date" name="deadline" value="<?php echo $row->deadline; ?>"><br>

        <select name="status">
            <option value="pending">Pending</option>
            <option value="approved">Approved</option>
            <option value="rejected">Rejected</option>
            <option value="closed">Closed</option>
        </select><br>

        <select name="is_featured">
            <option value="0">No</option>
            <option value="1">Yes</option>
        </select><br>

        <input type="submit" name="submit" value="UPDATE">

    </form>

    <br>
    <a href="index.php">Back to Job List</a><br><br>

</div>

</body>
</html>