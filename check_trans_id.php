<?php
    session_start();
    if(isset($_SESSION['login_status'])) {
        if (isset($_POST['email'])) {
            $email = $_POST['email'];
            if ($row['count'] > 0) {
                echo "Email already exists";
            } else {
                echo "";
            }
        }
    }

$mysqli->close();
?>