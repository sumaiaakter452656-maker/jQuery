<?php
include_once("../../dashboard_config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Category</title>
    <link rel="stylesheet" href="../assets/css/crud.css">
</head>
<body>

<div class="card">
    <h3>Category Entry Form</h3>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $name = $_POST['name'];
        $slug = strtolower(str_replace(" ", "-", $name));

        $sql = "INSERT INTO categories (name, slug)
                VALUES ('$name', '$slug')";

        $conn->query($sql);

        if ($conn->affected_rows > 0) {
            echo "Category Created Successfully";
        }
    }
    ?>

    <form action="" method="post">
        Category Name:
        <input type="text" name="name" required>

        <input type="submit" name="submit" value="SAVE">
    </form>

    <br>
    <a href="index.php">Back</a>
</div>

</body>
</html>