<?php
try {
  session_start();
  include_once('includes/config.php');
  if(isset($_POST['register'])){
    $name = $_POST['firstName']." ".$_POST['lastName'];
    $user_id = $_SESSION['login_ID'];
    $email = $_POST['email'];
    $phone = $_POST['mobile'];
    $college = $_POST['inst'];
    if(isset($_POST['dept'])) { $dept = $_POST['dept']; }
    else { $dept = $_POST['depart']; }
    $year = $_POST['year'];
    $event = $_POST['event'];
    $trans_id = $_POST['trans_id'];

    $qry = "SELECT * FROM event_register WHERE email=:mail";
    $smt = $dbh->prepare($qry);
    $smt->bindParam(':mail',$email,PDO::PARAM_STR);
    $smt->execute();
    if($smt->rowCount() > 0) {
      echo("<script>alert('User Email Already Exist!'); window.location.href='event_register.php';</script>");
    }
    else {

    $qry = "SELECT * FROM event_register WHERE phone=:phone";
    $smt = $dbh->prepare($qry);
    $smt->bindParam(':phone',$phone,PDO::PARAM_STR);
    $smt->execute();
    if($smt->rowCount() > 0) {
      echo("<script>alert('User Phone Number Already Exist!'); window.location.href='event_register.php';</script>");
    }
    else {

    $qry = "SELECT tran_id FROM event_register WHERE tran_id=:t_id";
    $smt = $dbh->prepare($qry);
    $smt->bindParam(':t_id',$trans_id,PDO::PARAM_STR);
    $smt->execute();
    if($smt->rowCount() > 0) {
      echo("<script>alert('User Transaction ID Already Exist!'); window.location.href='event_register.php';</script>");
    }
    else {
      $sql = "SELECT reg_id AS last_id FROM event_register ORDER BY last_id DESC LIMIT 1";
      $stmt = $dbh->prepare($sql);
      $stmt->execute();
      $result = $stmt->fetch(PDO::FETCH_ASSOC);
      if($stmt->rowCount() > 0) {
        $id = $result['last_id'];
      }
      else{
        $id = 0;
      }
      $new_id = intval(substr($id, 5, strlen($id)));
      $new_value = $new_id + 1;
      $new_offset = str_pad($new_value, 3, '0', STR_PAD_LEFT);
      $reg_id = "BHM".$new_offset;

      $targetDir = "payment_proof/";
      $proofName = basename($_FILES["image"]["name"]);
      $targetPath = $targetDir . $trans_id . ".jpg";
      if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetPath)) { }
      else { echo "<script>alert('Upload Failed');</script>"; }

      foreach($event as $ev) {
        $data = explode(',',$ev);
        $q = "INSERT INTO event_register(reg_id, user_id, username, email, phone, dept, college, year, event_dept, event_name, tran_id) VALUES ('$reg_id', '$user_id','$name','$email', '$phone', '$dept', '$college', '$year', '$data[1]','$data[0]', '$trans_id')";
        $result = $dbh->query($q);
      }
      $query = "UPDATE login_register SET event_status = '1' WHERE id = :user_id";
      $stmt = $dbh->prepare($query);
      $stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
      $stmt->execute();
      $_SESSION['event_status'] = TRUE;
      header("Location:student_dashboard.php");
    }
  }
}
  }
}
catch (Exception $e) {
    echo("<script>alert('An Error Detected Contact Web Admin'); window.location.href = 'index.html';</script>");
}
?>
