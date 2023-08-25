<?php 
try {
session_start(); 
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

<body  >
  <!-- <div id="loader-wrapper">
  <div id="loader"></div>
  <div class="loader-section section-left"></div>
  <div class="loader-section section-right"></div>
</div> -->
<div class="topbar animated fadeInLeftBig"></div>

<!-- Header Starts -->
<?php include("includes/header.php"); ?>
<!-- #Header Starts -->

<h3></h3>
<!--<h2 align=center>Computer Science Engineering</h2>
-->

	
<div id="cse" class="clearfix grid">
    <h3></h3><h3></h3><h3></h3>
	<?php if(isset($_SESSION['login_status'])){ ?> <h3 align="center" style="color: black" >Welcome <?php echo($_SESSION['login_user']); ?></h3> <?php } ?>
    <h2 align="center" style="color: black">DEPARTMENT OF EEE</h2>
    <div class="figure-container">
        <figure class="effect-oscar wowload fadeInUp">
            <img src="images/portfolio/1.jpeg" height="100%" width="100%" alt="img01"/>
            <figcaption>
                <h2 style="color: #f5f2f2;">Current Xplore</h2>
                <p><br>Time: 10.30am-12.30pm<br>Venue: G-block seminar hall<br>
                    <br>
                <a data-toggle="modal" data-target="#myeee1">View more</a></p>
            </figcaption>
        </figure>

        <figure class="effect-oscar wowload fadeInUp">
            <img src="images/portfolio/e2.jpeg" height="100%" width="100%" alt="img01"/>
            
            <figcaption><br><br><br><br><br>
                <h2 style="color: #fafafa; font-size: 34px;">ElectriTech Expo</h2>
                <p>Time: 10.30am-12.30pm<br>Venue: EEE Workshop<br>
                    <br>
                <a data-toggle="modal" data-target="#myeee2">View more</a></p>
            </figcaption>
        </figure>

        <figure class="effect-oscar wowload fadeInUp">
            <img src="images/portfolio/c3.jpeg" height="300px" width="100%" alt="img01"/>
            <figcaption>
                <h2 style="color: #fffbfb;">Minute To Win It</h2>
                <p><br>Time: 2am<br>Venue: G block lobby<br>
                <a data-toggle="modal" data-target="#myeee3">View more</a></p>
            </figcaption>
        </figure>

        <figure class="effect-oscar wowload fadeInUp">
            <img src="images/portfolio/cc4.jpeg" height="300px" width="100%" alt="img01"/>
            <figcaption><br><br>
                <h2 style="color: #111;">Buzzy</h2>
                <p><br>Time: 2am <br>Venue: G-block lobby<br>
                <a data-toggle="modal" data-target="#myeee4">View more</a></p>
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
<div id="myeee1" class="modal fade" role="dialog" >
  <div class="modal-dialog" >

    <!-- Modal content-->
    <div class="modal-content" >
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">CURRENT XPLORE</h4>
      </div>
      <div class="modal-body">
        
		
		<p><b>Topics</b><br>

    “Smart Grid solutions for Sustainable Energy Managemnet”<br>
    “Advancements in Power Electronics and Renewable Energy”<br>
    “ Innovative IoT Applications in Electrical Systems”<br>
    “Electrifying the Future:Electric Vehicles and Infrastructure”<br>
    “Emerging Trends in Robotics and Automation”<br>
    “Power Quality and Grid Stability: Challenges and Solutions”<br>
    “AI and Machine Learning for Energy Efficiency”<br>
    “Energy Harvesting Technologies for Self-Sustainable Systems”<br>
    “Smart Sensors for Real-Time Monitoring”<br>
    “Intelligent Control Techniques for Power Systems”<br>
    “Electric Power Systems for Smart Cities”<br>
    “Applications of Blockchain in Energy Management”<br>
    “Energy Storage Systems and Battery Technologies”<br>
    “Wireless Power Transfer and Energy Harvesting”<br>
		
		
		<p><b>RULES</b><br>
		•The team size is maximum of 2 members<br>
    •Each participant will be given 8 minutes for presentation and 2minutes for question session<br>
    •Participate should present their idea within 15-20 slides<br>
    •Candidates should send their paper in soft copy to our mail id(brahmastra23@chettinadtech.ac.in )and also 1 hard copy at the presenting time<br>
    •Participants should send their paper before presenting on stage<br>
    •Accepted papers will be intimated through their respective mail.id<br>
    •Participants are requested to have a copy of their presentation their mail or in pen drive<br>
    •Paper should be submitted as a MS word document (.doc) or pdf document<br>
    •Name, Department, E-Mail ID, Contact number, Institution name should be sent along with the paper<br>
		</p>
		
		<p><b>Student Co-ordinators</b><br>
    T.Priyadharshini-IV EEE (9994581021)<br>
    E.Muniyappan-III EEE (8072159305)</pr>

    <p><b>Staff Co-ordinator</b><br>
    Dr.M.Senthilkumar , Professor/EEE<br></pr>

    <p><b>Time & Venue</b><br>
    10:30AM to 12:30 & G-Block Seminar Hall<br></p>
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



<div id="myeee2" class="modal fade" role="dialog" >
  <div class="modal-dialog" >

    <!-- Modal content-->
    <div class="modal-content" >
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">ELECTRITECH EXPO(Showcase of Electrical Innovations)</h4>
      </div>
      <div class="modal-body">
		
		<p><b>RULES</b><br>
		• Maximum three students per team<br>
    •Four minutes presentation and two minutes answering query<br>
    •Winner list based on innovation and demonstrate the project<br>
    •The arbitrator’s decision is final<br></p>
		
		<p><b>Student Co-ordinators</b><br>
		P.Senthilmurugan-IV EEE (9361620179)<br>
    S.Lakshan-III EEE (8124750515)</p>

    <p><b>Staff Co-ordinator</b><br>
    Ms.A.Bhuvaneswari, AP/EEE</p>

    <p><b>Time & Venue</b><br>
    EEE Workshop & 10.30AM to 12.30PM</p>

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
<div id="myeee3" class="modal fade" role="dialog" >
  <div class="modal-dialog" >

    <!-- Modal content-->
    <div class="modal-content" >
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">MINUTE TO WIN IT(Suspense Event)</h4>
      </div>
      <div class="modal-body">
		
		<p><br><b>RULES</b></br>
		• Individual / Group participants<br>
    • Fun games based on the Given Material<br>
    • Maximum 4 rounds will be conducting<br></p>
		
		
    
    <p><b>Student Co-ordinators</b><br>
		R.Kowsalya-IV EEE (9345785875)<br>
    S.Karthickeyan-IV EEE (9345599244)<br>
    T.Saran-III EEE (8610669610)</p>

    <p><b>Staff Co-ordinator</b><br>
    Ms.D.Pushpalatha, SAP/EEE</p>

    <p><b>Time & Venue</b><br>
    2PM & G-Block Lobby </p>

    <p><b>NOTE</b><br>
    Selected candidates should bring their identity card at the time of presentation<p>
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

<div id="myeee4" class="modal fade" role="dialog" >
  <div class="modal-dialog" >

    <!-- Modal content-->
    <div class="modal-content" >
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">BUZZY(Fun Events)</h4>
      </div>
      <div class="modal-body">
        <p>Tech Buzz is a Fun Event. A path of wire is there and a handle with small hole is given. Participants 
have to move that handle along the path within 5minutes. If the Handle touched the path wire, a 
buzzer will alarm. A person who completes the path without the alarm sound, they said to be 
Winner</p>
		
		
		
			
		<p><b>RULES</b><br>
		• Only one participant is allowed to participate at a time<br>
    • The Handle should not touch the path more than 3 times<br>
    • If it touches more than 3 times the participant will be declared as out<br>
    • A person who completes the path is declared as Winner</p><br>
		
		

     <p><b>Student Co-ordinators</b><br>
      S.Pavithra-IV EEE (8610004603)<br>
      S.Pranav-IV EEE (9344480066)<br>
      R.Nikithalakshmi-IV EEE (7397724334) </p>

    <p><b>Staff Co-ordinator</b><br>
    Ms.D.Pushpalatha, SAP/EEE</p>

    <p><b>Time & Venue</b><br>
    2PM & G-Block Lobby</p>
		 
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

<?php include("includes/login_signup_page.php"); ?>
</html>
<?php 
}
catch (Exception $e) {
    echo("<script>alert('An Error Detected Contact Web Admin'); window.location.href = 'index.html';</script>");
}
?>