<?php

include_once("../../dashboard_config.php"); // Database Connection

$id = $_GET['id'];

$conn->query("DELETE FROM categories WHERE id = '$id'");

if($conn->affected_rows){
    header("Location: index.php");
}

?>