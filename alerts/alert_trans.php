<?php
    session_start();
    if(isset($_SESSION)) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script>
        alert("Sorry! Transaction ID already Exist Try Again");
        window.location.href = "../event_register.php";
    </script>
</body>
</html>
<?php 
    }
?>