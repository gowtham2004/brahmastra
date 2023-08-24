<?php 
    session_start();
    if(isset($_POST['submit'])) {
        $user  = $_POST['user'];
        $pass = $_POST['pass'];
        if($user == "admin" && $pass == "1234"){
            $_SESSION['admin_login'] = TRUE;
            header("Location: admin.php");
        }
        else {
            echo("<script>alert('Wrong Username Or Password');</script>");
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="img/favicon.png" type="image/png">
</head>
<body>
    <div class="wrapper">
        <form action="admin_login.php" method="POST">
        <h1>Admin Login</h1>
        <div class="input-box">
            <input type="text" placeholder="Username" name="user" required>
            <i class='bx bxs-user'></i>     
           </div>
        <div class="input-box">
            <input type="password" placeholder="Password" name="pass" required>
            <i class='bx bxs-lock-alt'></i>
        </div>
        <div class="remember-forgot">
            <!--<a href="#">forgot password?</a>-->
        </div>
        <button type="submit" name="submit" class="btn">Log in</button>
        
    </form>
    </div>
</body>
</html>