<?php
session_start();
if($_SESSION['admin_login']){
if(isset($_GET['parameter'])){
    $param = $_GET['parameter'];
    $data = explode(",",$param);
    $event_dept = $data[0];
    $event_name = $data[1];
    include_once("../includes/config.php");
    if(isset($_GET['inid'])) {
        $id=$_GET['inid'];
        $status=0;
        $sql = "update login_register set log_status=:status WHERE id=:id";
        $query = $dbh->prepare($sql);
        $query -> bindParam(':id',$id, PDO::PARAM_STR);
        $query -> bindParam(':status',$status, PDO::PARAM_STR);
        $query -> execute();
    }

    if(isset($_GET['id'])) {
        $id=$_GET['id'];
        $status=1;
        $sql = "update login_register set log_status=:status WHERE id=:id";
        $query = $dbh->prepare($sql);
        $query -> bindParam(':id',$id, PDO::PARAM_STR);
        $query -> bindParam(':status',$status, PDO::PARAM_STR);
        $query -> execute();
    }
?>
<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


    <title>EVENT Page</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/table.css">

</head>

<body id="page-top">

    <?php include("header.php"); ?>
    <div class="container">
      <div class="header_wrap">
        <div class="num_rows">
		
				<div class="form-group"> 	<!--		Show Numbers Of Rows 		-->
			 		<select class  ="form-control" name="state" id="maxRows">
						 <option value="10">10</option>
						 <option value="15">15</option>
						 <option value="20">20</option>
						 <option value="50">50</option>
						 <option value="70">70</option>
						 <option value="100">100</option>
                    <option value="5000">Show ALL Rows</option>
					</select>
			 		
			  	</div>
        </div>
        <div class="tb_search">
<input type="text" id="search_input_all" onkeyup="FilterkeyWord_all_table()" placeholder="Search.." class="form-control">
        </div>
      </div>
<table class="table table-striped table-class" id= "table-id">	
<thead>
    <tr>
		<th>Reg_ID</th>
		<th>Name</th>
		<th>Email</th>
		<th>Phone</th>
        <th>Stud_Dept</th>
        <th>College</th>
        <th>Year</th>
        <th>Trans_ID</th>
        <th>Action</th>
	</tr>
    </thead>
    <tbody>
        <?php 
            $query = "SELECT event_register.*,login_register.log_status AS stat  FROM event_register JOIN login_register ON event_register.user_id = login_register.id WHERE event_dept = :dept AND event_name = :event_name";
            $stmt = $dbh->prepare($query);
            $stmt->bindParam(':dept', $data[0]);
            $stmt->bindParam(':event_name', $data[1]);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            if($stmt->rowCount() > 0){
            foreach ($result as $row) { ?>
            <tr>
                <td><?php echo $row["reg_id"]; ?></td>
                <td><?php echo $row["username"]; ?></td>
                <td><?php echo $row["email"]; ?></td>
                <td><?php echo $row["phone"]; ?></td>
                <td><?php echo $row["dept"]; ?></td>
                <td><?php echo $row["college"]; ?></td>
                <td><?php echo $row["year"]; ?></td>
                <td><?php echo $row["tran_id"]; ?></td>
                <td>
                    <?php if($row['stat'] == 1) { ?>
                        <a href="event_details.php?parameter=<?php echo $param; ?>&<?php echo $param; ?>&inid=<?php echo $row['user_id'];?>"><button class="btn btn-danger" onclick="return confirm('Are you sure you want to checkout this canditate?');"> Check_Out</button>
                    <?php } else {?>
                        <a href="event_details.php?parameter=<?php echo $param; ?>&<?php echo $param; ?>&id=<?php echo $row['user_id'];?>"><button class="btn btn-success" onclick="return confirm('Are you sure you want to checkin this canditate?');"> Check_IN</button> 
                    <?php } ?>
                </td>
            </tr>
        <?php } } ?>
    <tbody>
</table>

<!--Start Pagination -->
            <div class='pagination-container'>
				<nav>
				  <ul class="pagination">
				   <!--	Here the JS Function Will Add the Rows -->
				  </ul>
				</nav>
			</div>
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; CCET Brahmastra 2k23</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->
        </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="../logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- JS query and pagination -->
    <script src="js/query.js"></script>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>

<!--  Developed By Yasser Mas -->
<?php 
        }
        else {
            header('Location: admin.php');
        }
    }
    else {
        header('Location: admin.php');
    }
?>