<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>

<body>
    <form action="">
    <input type="text" id="name" placeholder="Enter Name"><br>
    <textarea id="address" placeholder="Enter Address"></textarea><br>
    <button type="submit" class="btn_submit">Submit</button>

    </form>
    <button id="btn1">Click</button>
    <script>

        $(document).ready(function(){
            // $("#btn1").click(function(){
            //     $.get("data.php",{name:"farzana"},
            //      function(data, statuses){
            //         alert(data);
            //     })
            // })
            $(".btn_submit").click(function(){
              let name = $("#name").val();
              let address = $("#address").val();
                // alert(name);
                // alert(address);
              $.get("insert.php",{name:name,add:address},
               function(data, status){
                  alert(data);
              });
            });
        });
    </script>
</body>
</html>