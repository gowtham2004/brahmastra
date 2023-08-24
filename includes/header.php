
<div class="navbar-wrapper">
      <div class="container">
            <div class="navbar navbar-inverse navbar-fixed-top" role="navigation" id="top-nav" >
              <div class="container">
                <div class="navbar-header">
                <?php if(isset($_SESSION["login_status"])) { ?>
                        <button type="button" class="navbar-toggle collapsed" style="color:black;height:30px;width:150px;font-weight:bold;background-color:red;margin-top:15px;border: none;border-radius:15px;" onclick="window.location.href='logout.php';" >Logout</button> <?php } 
                      else { ?> 
                        <button type="button" class="navbar-toggle collapsed" style="color:white;height:30px;width:150px;font-weight:bold;background-color:blue;margin-top:15px;border: none;border-radius:15px;" data-toggle="modal" data-target="#register" aria-pressed="false" autocomplete="off">SIGNIN/SIGNUP</button>
                      <?php } ?>
			            <br><br>	
                  <span style="font-size:30px;cursor:pointer;color:white;padding-left:10%" onclick="openNav()">&#9776;</span>
                </div>
                <!-- Nav Starts -->
                <div class="navbar-collapse  collapse">
                  <ul class="nav navbar-nav navbar-right ">
                  <?php if(isset($_SESSION['event_status'])) { ?> <li ><a href="student_dashboard.php">DASHBOARD</a></li> <?php } ?>

                    <li ><a href="aidsevent.php">AI&DS</a></li>
                    <li ><a href="cseevent.php">CSE</a></li>
                    <li ><a href="eceevent.php">ECE</a></li>
                    <li ><a href="eeeevent.php">EEE</a></li>
                    <li ><a href="mechevent.php">MECH</a></li>
				            <li >
                      <?php if(isset($_SESSION["login_status"])) { ?>
                        <button type="button" class="" style="color:black;height:30px;width:150px;font-weight:bold;background-color:red;margin-top:25px;border: none;border-radius:15px;" onclick="window.location.href='logout.php';" >Logout</button> <?php } 
                      else { ?> 
                        <button type="button" class="" style="color:white;height:30px;width:150px;font-weight:bold;background-color:blue;margin-top:25px;border: none;border-radius:15px;" data-toggle="modal" data-target="#register" aria-pressed="false" autocomplete="off">SIGNIN/SIGNUP</button>
                      <?php } ?>
                    </li>
				          </ul>                                                                                                       
                <!-- #Nav Ends -->
                </div>
              </div>
          </div>
      </div>
      <div id="mySidenav" class="sidenav">
        <b style="padding-left:25%;font-size:170%;color:white;">Brahmastra:'23</b>  
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()" style="padding-left:70%">&times;</a> 
        <br><br><br><br><br>
        <h4 style="font:Calibri"><a href="index.html">Home</a>
        <a href="aidsevent.php">AI&DS</a>
        <a href="cseevent.php">CSE</a>
        <a href="eceevent.php">ECE</a>
        <a href="eeeevent.php">EEE</a>
        <a href="mechevent.php">MECH</a>
</div>
