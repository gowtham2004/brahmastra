<?php session_start(); ?>
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

<div id="cse" class="clearfix grid">
    <h3></h3><h3></h3><h3></h3>
    <?php if(isset($_SESSION['login_status'])){ ?> <h3 align="center" style="color: black" >Welcome <?php echo($_SESSION['login_user']); ?></h3> <?php } ?>
    <h2 align="center" style="color: black">DEPARTMENT OF CSE </h2>
    <div class="figure-container">
        <figure class="effect-oscar wowload fadeInUp">
            <img src="images/portfolio/1.jpeg" height="100%" width="100%" alt="img01"/>
            <figcaption>
                <h2 style="color: #ffffff;">Paperio</h2>
                <p><br>Time: 11AM-3PM<br>Venue: xxxxxxxx<br>
                    <br>
                <a data-toggle="modal" data-target="#mypaperio">View more</a></p>
            </figcaption>
        </figure>

        <figure class="effect-oscar wowload fadeInUp">
            <img src="images/portfolio/c1.jpeg" height="100%" width="100%" alt="img01"/>
            <figcaption><br><br><br><br><br>
                <h2 style="color: #000000;">Tech Crack</h2>
                <p>Time: 1PM-3PM<br>Venue: xxxxxxx<br>
                    <br>
                <a data-toggle="modal" data-target="#mytechcrack">View more</a></p>
            </figcaption>
        </figure>

        <figure class="effect-oscar wowload fadeInUp">
            <img src="images/portfolio/c3.jpeg" height="300px" width="100%" alt="img01"/>
            <figcaption>
                <h2 style="color: #ffffff;">Postero</h2>
                <p><br>Time: 11AM-3PM<br>Venue: xxxxxxxx<br>
                <a data-toggle="modal" data-target="#mypostero">View more</a></p>
            </figcaption>
        </figure>

        <figure class="effect-oscar wowload fadeInUp">
            <img src="images/portfolio/cc4.jpeg" height="300px" width="100%" alt="img01"/>
            <figcaption><br><br>
                <h2 style="color: #111;">Thegidi</h2>
                <p><br>Time: 9AM-11AM <br>Venue: xxxxxx<br>
                <a data-toggle="modal" data-target="#mythegidi">View more</a></p>
            </figcaption>
        </figure>

        
    </div>
</div>

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
<div id="mypaperio" class="modal fade" role="dialog" >
  <div class="modal-dialog" >

    <!-- Modal content-->
    <div class="modal-content" >
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">PAPERIO</h4>
      </div>
      <div class="modal-body">
        
      <p><b>RULES AND INSTRUCTION </b><br>
      Paper presentation aims at giving a platform to young engineers to fuel their brains to ideate the ideas never existed. The events intense to encourage our inventions , scientific investigations and research to promote their application for development in all sectors of engineering and technology.</P>

      <p><b>CALL FOR PAPER </b><br>
      Contributions from students of Diploma, bachelors and masters of engineering colleges to share their innovative research work.</P>

      <p><b>THEME FOR PAPER </b><br>
      Students can select any technical subject related to Computer Science and Engineering or whether the thoughts or vision of students can reach</P>

      <p><b>DOMAIN </b><br>
      •	Artificial Intelligence.<br>
      •	Artificial Intelligence.<br>
      • Big data<br>
      • Block Chain technology<br>
      •	Cloud Computing<br>
      • Cluster Computing<br>
	    • Edge Computing.<br>
      • Embedded Systems.<br>
      • Internet Of Things.<br>
      • Grid Computing.<br>
      •	Li-fi Technology.<br>
      •	Nano Computing.<br>
      •	Quantum Computing.<br>
      •	Robotics.<br>
      •	Virtual Reality.<br>


		
		<p><b>RULES</b><br>
		1)	The presentation topics can be selected from the domains mentioned above. You are open to choose other technology which comes under Computer Science.<br>
    2)	Maximum number of participants in a team is 2.<br>
    3)	A team will get 7 minutes ( 5 minutes for presentation ,followed 2 minutes for question and answer session).<br>
    4)	The mail with ppt submission contains:<br>
                        •	Group name.<br>
                        •	Title – theme of paper.<br>
                        •	Name of members in team.<br>
                        •	In presentation (ppt).<br>
                        •	Format example : Gmail Subject<br>
                                          o	Team ABC.<br>
                                          o	Quantum Computing.<br>
                                          o	Member 1 , Member 2.<br>
    5)	Last day to submit soft copy of your report (via e-mail) will be two days prior to the day of presentation.<br>
    6)	The decision of judges will be final and no arguments or appeal will be entertained.<br>
    7)	Time limit should be strictly followed and extension may lead to deduction of marks.<br>
    8)	Student should have their college id card.<br>
    9)	Deadline to submit your ppt 20.09.2023(Wednesday).<br>
    10)	Send your ppt to gmail id brahmastra23cse@gmail.com

		
		<p><b>CONTACT DETAILS</b><br>
      Giriraaj.L : 9344131522<br>
      Ridhanya.R : 9025789598</p>
		 </p>
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


<div id="mytechcrack" class="modal fade" role="dialog" >
  <div class="modal-dialog" >

    <!-- Modal content-->
    <div class="modal-content" >
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Tech Crack</h4>
      </div>
      <div class="modal-body">
		
		<p><b>RULES</b><br>
    There will be 3 rounds.<br>
    2) First round : MCQ<br>
          •	There will be 20 questions.<br>
          •	Time allocated-20 minutes.<br>
          •	Participants will be shortlisted based on their marks.<br>
    3) Second round : Basic Programming<br>
          •	There will be 5 programming questions.<br>
          •	Participants can choose any of the following pogramming languages for 2nd & 3rd
    rounds<br>   
          •	C<br>
          •	C++<br>
          •	JAVA<br>
          •	Python<br>
          •	Time allocated-40 minutes.<br>
          •	 Participants will be shortlisted based on their performance.<br>
    4) Third round : Advanced Programming<br>
          •	 There will be one question.<br>
          •	 Time allocated-45 minutes.<br>
          •	 Participants who first successfully complete the problem will be considered the Winner.<br>
    5) Participants will be provided with paper for practicing the problems logic.<br>
    6) Participants can participate in pairs (2 persons per team)<br>
</p>
		
		<p><b>CONTACT DETAILS</b><br>
		Manojkumar.P : 8825792220<br>
		Menaka.M : 6385228053</p>

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
<div id="mypostero" class="modal fade" role="dialog" >
  <div class="modal-dialog" >

    <!-- Modal content-->
    <div class="modal-content" >
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Postero</h4>
      </div>
      <div class="modal-body">
		
		<p><br><b>RULES</b></br>
		1)	The topic of the poster will be provided on the spot through a lot basis, and it will be based on a specific theme.<br>
    2)	Participants are free to use any open editing tool of their choice, such as Photoshop, Picsart, Canva, etc., to design their posters.<br>
    3)	The event has a time limit of 60 mins for participants to create their posters.<br>
    4)	The theme of the event will be both technical topics and non-technical topics.<br>
    5)	Participants can use their own mobile phones or laptops for designing. If a participant requires a system, they should inform the Event Coordinators in advance via phone.<br>
    6)	The competition consists of a single round, and the winner will be determined based on the posters created during this round.<br>
    7)	Each team should consist of 2 members.<br>
    8)	Posters will be evaluated based on creativity, idea representation, and presentation.<br>
    9)	The decision of the jury panel will be considered final<br>
<br></p>
		
		<p><br><b>CONTACT DETAILS</b></br>
      Ansari.L: 9344131522<br>
      Harinisri. : 9025789598</p>
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
     
    </div>

  </div>
</div>

<div id="mythegidi" class="modal fade" role="dialog" >
  <div class="modal-dialog" >

    <!-- Modal content-->
    <div class="modal-content" >
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Thegidi</h4>
      </div>
      <div class="modal-body">
		
		<p><b>RULES</b><br>
    1)	Each team can consist of a maximum of 2 members.<br>
    2)	The event will comprise three levels, each with its own unique challenge.<br>
    3)	Level 1: A PowerPoint presentation (PPT) will be shown to all participants.<br>
    4)	Level 2 and Final: Each team will be provided with a headphone to participate in the challenge.<br>
    5)	Throughout the event, make sure to attentively follow the instructions provided by the event coordinators.<br>
    6)	Your success in each level will depend on your ability to interpret and implement the instructions correctly.<br>
</p>
			  
		<p><b>CONTACT DETAILS</b><br>
		  Pranav Jeyan V : 9842194689<br>
			Kalpana Chawla S : 8248280895
			
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