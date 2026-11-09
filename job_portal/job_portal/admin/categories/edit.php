<?php
include_once("../../dashboard_config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category Update</title>
    <link rel="stylesheet" href="../assets/css/crud.css">
</head>
<body>

<div class="card">
    <h3>Category Update Form</h3>

    <?php
        // Display Category Record
        $id = $_GET['id'];

        // Update Category Record
        if($_SERVER['REQUEST_METHOD']=='POST'){

            $name = $_POST['name'];
            $slug = strtolower(str_replace(" ", "-", $name));

            // Update Query
            $conn->query("UPDATE categories SET
            name = '$name', slug = '$slug'
            WHERE id = '$id'");

            if($conn->affected_rows){
                echo "<div class='message'>Update Success</div>";
            }
        }

        // Query for select one record
        $data = $conn->query("SELECT * FROM categories WHERE id = '$id'");
        $row = $data->fetch_object();
    ?>

    <form action="" method="post">
        <input type="text" name="name"
        placeholder="Enter Category Name"
        value="<?php echo $row->name; ?>"><br>

        <input type="submit" name="submit" value="UPDATE">
    </form>

    <br>
    <a href="index.php">Back to Category List</a><br><br>

</div>

</body>
</html>