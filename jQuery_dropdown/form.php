<?php
$db = new mysqli("localhost", "root", "","jquery_dropdown");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="../jQuery/js/jquery.min.js"></script>
</head>

<body>
    <h2>Registration Form</h2>
    <form action="" >
        district: <br>
        <select id="district">
            <option value="" disabled selected>Select one</option>
            <?php
            $raw = $db->query("SELECT * FROM districts");
            while($row = $raw->fetch_assoc()){
                //echo "<option value='".$row['id']."'>".$row['name']."</option>";
            
            ?>

            <option value="<?php echo $row['id']; ?>"><?php echo $row['district']; ?></option>
            <?php } ?>
        </select> <br>
        upazila: <br>
        <select name="" id="upazila">
            <option value="" disabled selected>Select one</option>
        </select> <br>


        <input type="submit" value="Submit">
    </form>
    <script>

        $(document).ready(function(){
            $("#district").on('change', function(){
                alert((this).val());
                $.get("upazila.php", {distid: $(this).val()}
                , function(data){
                   //alert(data);
                     $("#upazila").html(data);
                });
            });
        });
    </script>
</body>
</html>