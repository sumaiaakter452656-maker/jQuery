<?php include_once("../../dashboard_config.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job List</title>
    <link rel="stylesheet" href="../assets/css/crud.css">
</head>
<body>

<div class="container">
    <div class="top-bar">
        <h3>Job List</h3>
        <a class="btn" href="create.php">New Entry</a>
    </div>

    <?php
    $rawData = $conn->query("SELECT * FROM jobs");
    ?>

    <table>
        <tr>
            <th>ID</th>
            <th>Company ID</th>
            <th>Job Title</th>
            <th>Job Type</th>
            <th>Deadline</th>
            <th>Status</th>
            <th>Action</th>
        </tr>

        <?php
        while($row = $rawData->fetch_assoc()){
        ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['company_id']; ?></td>
            <td><?php echo $row['title']; ?></td>
            <td><?php echo $row['job_type']; ?></td>
            <td><?php echo $row['deadline']; ?></td>
            <td><?php echo $row['status']; ?></td>

            <td class="action">
                <a class="edit" href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>

                <a onclick="return confirm('Are you sure to delete')"
                class="danger" href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
            </td>
        </tr>
        <?php
        }
        ?>
    </table>
</div>

</body>
</html>