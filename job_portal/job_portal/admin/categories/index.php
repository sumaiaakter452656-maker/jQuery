<?php include_once("../../dashboard_config.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category List</title>
    <link rel="stylesheet" href="../assets/css/crud.css">
    <link rel="stylesheet" href="../../assets/css/style.css">
</head>
<body>

    <div class="container">
        <div class="top-bar">
            <h3>Category List</h3>

            <a class="btn" href="create.php">
                <span>+ New Entry</span>
            </a>
        </div>

        <?php
            $rawData = $conn->query("SELECT * FROM categories");
        ?>

        <table>
            <tr>
                <th>ID</th>
                <th>Category Name</th>
                <th>Slug</th>
                <th>Action</th>
            </tr>

            <?php
                while($row = $rawData->fetch_assoc()){ 
            ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>

                    <td><?php echo $row['name']; ?></td>

                    <td><?php echo $row['slug']; ?></td>

                    <td class="action">

                        <a class="edit" title="Edit Category"
                        href="edit.php?id=<?php echo $row['id']; ?>">
                            Edit
                        </a>

                        <a onclick="return confirm('Are you sure to delete')"
                        class="danger" title="Delete Category"
                        href="delete.php?id=<?php echo $row['id']; ?>">
                            Delete
                        </a>

                    </td>
                </tr>

            <?php
                }
            ?>
        </table>
    </div>

</body>
</html>