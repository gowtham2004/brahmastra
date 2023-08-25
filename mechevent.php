<?php 
try {
session_start(); ?>
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

<body  >
  <!-- <div id="loader-wrapper">
  <div id="loader"></div>
  <div class="loader-section section-left"></div>
  <div class="loader-section section-right"></div>
</div> -->
<div class="topbar animated fadeInLeftBig"></div>

<!-- Header Starts -->
<?php include("includes/header.php"); ?>


<h3></h3>
<!--<h2 align=center>Computer Science Engineering</h2>
-->

	
<div id="cse" class="clearfix grid">
    <h3></h3><h3></h3><h3></h3>
    <?php if(isset($_SESSION['login_status'])){ ?> <h3 align="center" style="color: black" >Welcome <?php echo($_SESSION['login_user']); ?></h3> <?php } ?>
    <h2 align="center" style="color: black">DEPARTMENT OF MECH</h2>
    <div class="figure-container">
      <figure class="effect-oscar wowload fadeInUp">
        <img src="images/portfolio/1.jpeg" height="300px" width="100%" alt="img01"/>
        <figcaption>
            <h2 style="color: #f5f2f2;">PAPER PRESENTATION</h2>
            <p><br>Time: 11AM-3PM<br>Venue: xxxxxxxx<br>
                <br>
            <a data-toggle="modal" data-target="#mymech1">View more</a></p>
        </figcaption>
    </figure>

        <figure class="effect-oscar wowload fadeInUp">
            <img src="images/portfolio/mech1.jpeg" height="300px" width="100%" alt="img01"/>
            <figcaption>
                <h2 style="color: #f5f2f2;">CAD MODELING</h2>
                <p><br>Time: 11AM-3PM<br>Venue: xxxxxxxx<br>
                    <br>
                <a data-toggle="modal" data-target="#mymech2">View more</a></p>
            </figcaption>
        </figure>

        <figure class="effect-oscar wowload fadeInUp">
            <img src="images/portfolio/mechrocket.jpeg" height="100%" width="100%" alt="img01"/>
            
            <figcaption><br><br><br><br><br>
                <h2 style="color: #fafafa; font-size: 34px;">Water Rocketry</h2>
                <p>Time: 1PM-3PM<br>Venue: xxxxxxx<br>
                    <br>
                <a data-toggle="modal" data-target="#mymech3">View more</a></p>
            </figcaption>
        </figure>

        <figure class="effect-oscar wowload fadeInUp">
            <img src="images/portfolio/mech3.jpeg" height="300px" width="100%" alt="img01"/>
            <figcaption>
                <h2 style="color: #fffbfb;">Mr.Lathe</h2>
                <p><br>Time: 11AM-3PM<br>Venue: xxxxxxxx<br>
                <a data-toggle="modal" data-target="#mymech4">View more</a></p>
            </figcaption>
        </figure>
        
    </div>
</div>
<h3></h3>
<!-- works -->


<h3></h3>

<!-- works -->

<?php include("includes/footer.php"); ?>
<!-- # Footer Ends -->

 
 <script>
	function regi()
	{
		alert("Please Login to register");
	}
 </script>
 
 
 
 
 <!--THIS-->
 <!--CSE-->
<!-- Modal content-->
<div id="mymech1" class="modal fade" role="dialog" >
  <div class="modal-dialog" >

    <!-- Modal content-->
    <div class="modal-content" >
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Paper Presentation</h4>
      </div>
      <div class="modal-body">
      <p><strong>Event Name:</strong> Paper Presentation</p>

<p>&#8226; Maximum number of participants in a team is 3.</p>
<p> &#8226; The topics for the papers can be chosen on your own.</p>
<p> &#8226; It is advisable that the presentation focuses on one particular topic.</p>
<p>&#8226; The report should be well comprehended, albeit advanced, which could appeal to an undergraduate.</p>
<p><strong>Student Coordinators:</strong></p>
<p>1. M. Sakthivel<br>2. P. Dhivakar</p>
<?php if(isset($_SESSION['login_status']) && !isset($_SESSION['event_status'])) { ?>
      <button type="button" style="background-color:green; " class="btn btn-default btn-block" onclick="window.location.href='event_register.php';">Register Now</button> 
    <?php } else if(isset($_SESSION['event_status'])) { ?>
      <h3 style="color: green;text-align:center;">You Are Registered!</h3>
    <?php } else { ?>
      <button type="button" class="btn btn-default btn-block" onclick="regi()">Register</button>
      <?php } ?>
      </div>     
    </div>
  </div>
</div>


<div id="mymech2" class="modal fade" role="dialog" >
  <div class="modal-dialog" >

    <!-- Modal content-->
    <div class="modal-content" >
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">CAD Modelling</h4>
      </div>
      <div class="modal-body">
      <p><strong>Event Name:</strong> CAD Modelling</p>

<p><strong>Description:</strong></p>
<p>"IMAGINATION IS MORE IMPORTANT THAN KNOWLEDGE"</p>
<p>World of designing is running faster than the speed of light. Now it’s time to express your imagination power. Here “CAD WAR” is challenging your designing brilliance. The battle has begun, so challenge your mind. If you are mad for CAD, get armed up with all your design weapons and tricks in this war of designing.</p>
<p><strong>Rules and Regulations:</strong></p>
<p>&#8226; Students must carry a valid college ID card.</p>
<p> &#8226; Should not use any electronic accessories inside a venue hall.</p>
<p> &#8226; Three hours will be allotted for the selected candidate to complete their designs.</p>
<p><strong>Flow of Event:</strong></p>
<p><strong>ROUND 1:</strong> Selection round for 15 minutes (20 objective-type questions)</p>
<p><strong>ROUND 2:</strong> Design a given 2D model into a 3D model using AUTOCAD.</p>
<p>&#8226; Maximum 2 participants per team.</p>
<p>&#8226; Model will be given at the time of the competition.</p>
<p> &#8226; The final result will be judged on the basis of completeness and optimum time.</p>
<p> &#8226; Top 3 teams will be awarded handsome prizes and merit certificates.</p>
<p> &#8226; For any clarification or further details, interested candidates can contact the event organizers.</p>
<p><strong>Student Coordinators:</strong></p>
<p>1. S. Iyyappan<br>2. L. Gokulnath</p>

<?php if(isset($_SESSION['login_status']) && !isset($_SESSION['event_status'])) { ?>
      <button type="button" style="background-color:green; " class="btn btn-default btn-block" onclick="window.location.href='event_register.php';">Register Now</button> 
    <?php } else if(isset($_SESSION['event_status'])) { ?>
      <h3 style="color: green;text-align:center;">You Are Registered!</h3>
    <?php } else { ?>
      <button type="button" class="btn btn-default btn-block" onclick="regi()">Register</button>
      <?php } ?>
		</div>    
    </div>
  </div>
</div>
</div>
<div id="mymech3" class="modal fade" role="dialog" >
  <div class="modal-dialog" >

    <!-- Modal content-->
    <div class="modal-content" >
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Water Rocketry</h4>
      </div>
      <div class="modal-body">
      <p><strong>Event Name:</strong> Water Rocketry</p>

<p><strong>Description:</strong></p>
<p>Competitors build water rockets designed to fly the greatest distance.</p>
<p><strong>Event preparation:</strong> Build entry prior to event</p>
<p><strong>Team size:</strong> 1-2 students per team</p>
<p><strong>Materials:</strong></p>
<p>M.1 Two-litre plastic soda bottles<br>M.2 Tape, any kind; no glue of any kind<br>M.3 Paper or plastic sheet material such as cardboard, Styrofoam, thin plastic sheet, etc.<br>M.3 Twine, string, thread or ribbon (for parachute lines)</p>
<p><strong>Construction Rules:</strong></p>
<p>C.1 Rockets must be built by the participating students using only the above listed materials.</p>
<p>C.2 Only one two-litre bottle may be filled with water and pressurized.</p>
<p>C.3 Paint or decorations on the plastic of the pressurized bottles are prohibited.</p>
<p>C.4 The mouth of the pressurized bottle must fit over a half-inch schedule 40 PVC pipe.</p>
<p>C.5 Additional two-litre bottles may be cut and added to the pressurized bottle using only tape.</p>
<p>C.6 Fins must not interfere with the mouth of the pressurized bottle so that it can fit on the launcher.</p>
<p><strong>Competition Rules:</strong></p>
<p>R.1 The competitors add the desired amount of water to their rockets prior to being pressurized to Competition pressure (20-80 psi).</p>
<p>R.2 Competitors select the desired launch angle.</p>
<p>R.3 Each rocket is officially launched and judged only once.</p>
<p>R.4 Rockets considered unsafe to launch by the judges will be disqualified.</p>
<p>R.5 The distance from the launcher to the closest part of the fully-at-rest rocket is measured by the judges.</p>
<p><strong>Scoring and Awards:</strong></p>
<p>S.1 Awards for the longest distances.</p>
<p>S.2 Ties are broken by the following criteria, in order: construction quality, rocket weight (lighter is favored), and style.</p>
<p><strong>Event Coordinators:</strong></p>
<p>1. G Sakthivel<br>2. M. Krishna Kumar</p>

<?php if(isset($_SESSION['login_status']) && !isset($_SESSION['event_status'])) { ?>
      <button type="button" style="background-color:green; " class="btn btn-default btn-block" onclick="window.location.href='event_register.php';">Register Now</button> 
    <?php } else if(isset($_SESSION['event_status'])) { ?>
      <h3 style="color: green;text-align:center;">You Are Registered!</h3>
    <?php } else { ?>
      <button type="button" class="btn btn-default btn-block" onclick="regi()">Register</button>
      <?php } ?>
		
      </div>    
    </div>
  </div>
</div>

<div id="mymech4" class="modal fade" role="dialog" >
  <div class="modal-dialog" >

    <!-- Modal content-->
    <div class="modal-content" >
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Mr.Lathe</h4>
      </div>
      <div class="modal-body">
      <p><strong>Event Name:</strong> Mr. Lathe</p>

<p>Participants are required to perform a set of operations on the job using a lathe machine. The problem statement will be declared on the spot.</p>
<p>There will be a total of two rounds:</p>
<p>• Round 1: Profile cutting, to be completed in 40-45 mins.</p>
<p>• Round 2: Profile cutting, to be completed in 50-55 mins. Participants will be shortlisted after Round 1 for Round 2.</p>
<p><strong>Rules and Regulations:</strong></p>
<p>&#8226; All participants should carry workshop aprons and wear leather shoes.</p>
<p>&#8226; Participants should carry their college ID card.</p>
<p>&#8226; Experience of working with a Lathe machine.</p>
<p>&#8226; Only one member in a team.</p>
<p>&#8226; Accuracy of up to 5% is expected.</p>
<p>&#8226; Not more than 2 tools would be provided. Fine will be levied if any damages occur (Tool, Machine) during operation.</p>
<p>&#8226; Any kind of malpractices like the use of cell phones during the competition is completely banned.</p>
<p>&#8226; Judges' decision will be final.</p>
<p>&#8226; No extra work piece will be provided, and carrying any extra material is banned.</p>
<p>&#8226; After the completion of the task, all accessories must be returned.</p>
<p><strong>Student Coordinators:</strong></p>
<p> S. Kaviyarasu<br> R. Lingesh Waran</p>

		 
<?php if(isset($_SESSION['login_status']) && !isset($_SESSION['event_status'])) { ?>
      <button type="button" style="background-color:green; " class="btn btn-default btn-block" onclick="window.location.href='event_register.php';">Register Now</button> 
    <?php } else if(isset($_SESSION['event_status'])) { ?>
      <h3 style="color: green;text-align:center;">You Are Registered!</h3>
    <?php } else { ?>
      <button type="button" class="btn btn-default btn-block" onclick="regi()">Register</button>
      <?php } ?>
		 
      </div>
     
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

<?php include("includes/login_signup_page.php");?>
</html>
<?php 
}
catch (Exception $e) {
    echo("<script>alert('An Error Detected Contact Web Admin'); window.location.href = 'index.html';</script>");
}
?>