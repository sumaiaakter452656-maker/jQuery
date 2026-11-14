<?php
$db = new mysqli("localhost", "root", "","jquery_dropdown");
$distid = $_GET['distid'];
$raw = $db->query("SELECT * FROM upazilas WHERE dist_id = '$distid'");
$option = "";
while($row = $raw->fetch_assoc()){
    option .= "<option value='".$row['id']."'>".$row['upazila']."</option>";
}
?>