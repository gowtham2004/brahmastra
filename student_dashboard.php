<?php 
  session_start();
  include("includes/config.php");
  if(isset($_SESSION['event_status'])) { 
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta name="author" content="PSG iTech" />
<meta name="description" content="Brahmastra:,the national level inter-collegiate fest for those who want ot express the talents of different."/>
<meta name="keywords" content="Brahmastra,Brahmastra:,Brahmastra,"/>
<meta name="application-name" content="Brahmastra" />
<title>Brahmastra 2k23</title>

<!-- Google fonts -->
<link href='assets/1.css' rel='stylesheet' type='text/css'>

<!-- font awesome -->
<link href="boot.css" rel="stylesheet">

<!-- bootstrap -->
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />

<!-- animate.css -->
<link rel="stylesheet" href="assets/animate/animate.css" />
<link rel="stylesheet" href="assets/animate/set.css" />
  <link rel="stylesheet" href="loader/normalize.min.css">
  <link rel="stylesheet" href="loader/css/style.css">
<!-- gallery -->
<link rel="stylesheet" href="assets/gallery/blueimp-gallery.min.css">

<!-- Favicon -->
	<link rel="shortcut icon" href="favicon.png" type="image/png">

<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
	document.body.style.backgroundColor="rgba(0,0,0,0.5)";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
	document.body.style.backgroundColor="rgba(255,255,255,1)";
	}
</script>

<link rel="stylesheet" href="assets/style.css">
<link rel="stylesheet" href="login/style.css">
<link rel="stylesheet" href="events/event.css">

</head>

<body>
  <!-- <div id="loader-wrapper">
  <div id="loader"></div>
  <div class="loader-section section-left"></div>
  <div class="loader-section section-right"></div>
  </div> -->
<div class="topbar animated fadeInLeftBig"></div>

<!-- Header Starts -->
<?php include("includes/header.php"); ?>
<!-- #Header Starts -->

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div id="cse" class="clearfix grid" style="padding:50px;">
<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                          Events Registered 
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Reg ID</th>
                                            <th>Canditate Name</th>
                                            <th>Student Department</th>
                                            <th>Student Instution</th>
                                            <th>Student year</th>
                                            <th>Event Department</th>
                                            <th>Event Name</th>
                                            <th>Transaction ID</th>
                                            <th>Registered Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                          $sql = "SELECT * FROM event_register where user_id = :user";
                                          $query = $dbh->prepare($sql);
                                          $user_id = $_SESSION['login_ID'];
                                          $query->bindparam(':user',$user_id,PDO::PARAM_STR);
                                          $query->execute();
                                          $results=$query->fetchAll(PDO::FETCH_OBJ);
                                          $cnt=1;
                                          if($query->rowCount() > 0)
                                          {
                                            foreach($results as $result)
                                            { ?>                                      
                                        <tr class="odd gradeX">
                                            <td class="center"><?php echo htmlentities($cnt);?></td>
                                            <td class="center"><?php echo htmlentities($result->reg_id);?></td>
                                            <td class="center"><?php echo htmlentities($result->username);?></td>
                                            <td class="center"><?php echo htmlentities($result->dept);?></td>
                                            <td class="center"><?php echo htmlentities($result->college);?></td>
                                            <td class="center"><?php echo htmlentities($result->year);?></td>
                                            <td class="center"><?php echo htmlentities($result->event_dept);?></td>
                                            <td class="center"><?php echo htmlentities($result->event_name);?></td>
                                            <td class="center"><?php echo htmlentities($result->tran_id);?></td>
                                            <td class="center"><?php echo htmlentities($result->insert_time);?></td>
                                        </tr>
                                        <?php $cnt=$cnt+1;}} ?>                                      
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
</div>





<!--THIS-->
<!--Modal ends-->


<!-- jquery -->
<script src="assets/jquery.js"></script>

<!-- wow script -->
<script src="assets/wow/wow.min.js"></script>


<!-- boostrap -->
<script src="assets/bootstrap/js/bootstrap.js" type="text/javascript" ></script>

<!-- jquery mobile -->
<script src="assets/mobile/touchSwipe.min.js"></script>
<script src="assets/respond/respond.js"></script>

<!-- gallery -->
<script src="assets/gallery/jquery.blueimp-gallery.min.js"></script>

<!-- custom script -->
<script src="assets/script.js"></script>
<script src='loader/preloader.js'></script>
<script src='loader/jquery.min.js'></script>
<script src="loader/js/index.js"></script>

</body>
<?php include("includes/login_signup_page.php"); ?>
</html>

<?php }
    else{
        header("Location:cseevent.php");
    }

?>