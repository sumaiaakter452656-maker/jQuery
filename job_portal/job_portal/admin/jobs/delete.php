<?php

include_once("../../dashboard_config.php");

$id = $_GET['id'];

$conn->query("DELETE FROM jobs WHERE id = '$id'");

if($conn->affected_rows){
    header("Location: index.php");
}

?>