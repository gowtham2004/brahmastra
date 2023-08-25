<?php
    session_start();
    include("includes/config.php");

    if(isset($_POST['signup'])) {
        $userName = $_POST['username'];
        $email = $_POST['email'];
        $pass = $_POST['password'];
        $what_num = $_POST['wnum'];

        $qry = "SELECT * FROM login_register WHERE what_num= '$what_num'";
        $smt = $dbh->prepare($qry);
        $smt->execute();
        if($smt->rowCount() > 0) {
            echo("<script>alert('User Mobile Already Exist!'); window.location.href='cseevent.php';</script>");
        }
        else {
            $query = "SELECT * FROM login_register where email = '$email'";
            $stmt = $dbh->prepare($query);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            if($stmt->rowCount() > 0){
                echo("<script>alert('User Email Already Exist!'); window.location.href='cseevent.php';</script>");
            }
            else {
                $sql="INSERT INTO login_register(username,email,what_num,password) VALUES(:username,:email,:what_num,:password)";
                $query = $dbh->prepare($sql);
                $query->bindParam(':username',$userName,PDO::PARAM_STR);
                $query->bindParam(':email',$email,PDO::PARAM_STR);
                $query->bindParam(':what_num',$what_num,PDO::PARAM_STR);
                $query->bindParam(':password',$pass,PDO::PARAM_STR);
                $result = $query->execute();
                if($result){
                    // echo("<script>alert('inserted');</script>");
                    $query = "SELECT id FROM login_register where username=:userName";
                    $stmt = $dbh->prepare($query);
                    $stmt->bindParam(':userName',$userName,PDO::PARAM_STR);
                    $stmt->execute();
                    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
                    foreach($result as $row){
                        $_SESSION['login_ID'] = $row["id"];
                    }
                    $_SESSION['login_user'] = $userName;
                    $_SESSION['login_status'] = TRUE;
                    echo("<script>alert('User Successfully Created!'); window.location.href='cseevent.php';</script>");
                }
                else {
                    echo("<script>alert('User Email Already Exist!'); window.location.href='cseevent.php';</script>");
                }
            }
        }  
    }

    if(isset($_POST['login']))
    {
        $email = $_POST['email'];
        $pass = $_POST['password'];
        $login = false;
        $query = "SELECT * FROM login_register";
        $stmt = $dbh->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if($stmt->rowCount() > 0){
            foreach ($result as $row)
            {
                if($_POST['email'] == $row["email"] and $_POST['password'] == $row["password"]) {
                    header('Location:cseevent.php');
                    $_SESSION['login_ID'] = $row["id"];
                    $_SESSION['login_user'] = $row['username'];
                    $_SESSION['login_status'] = TRUE;
                    if($row["event_status"] == 1){
                        $_SESSION['event_status'] = TRUE;
                    }
                    $login = true;
                }
            }
        }
        if($login == false){
            echo("<script>alert('User Not Found!'); window.location.href='cseevent.php';</script>");
        }
    
    }
?>