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
<!-- #Header Starts -->

<h3></h3>
<!--<h2 align=center>Computer Science Engineering</h2>
-->
	
<div id="cse" class="clearfix grid">
    <h3></h3><h3></h3><h3></h3>
    <?php if(isset($_SESSION['login_status'])){ ?> <h3 align="center" style="color: black" >Welcome <?php echo($_SESSION['login_user']); ?></h3> <?php } ?>
    <h2 align="center" style="color: black">DEPARTMENT OF AI&DS</h2>
    <div class="figure-container">
        <figure class="effect-oscar wowload fadeInUp">
            <img src="images/portfolio/1.jpeg" height="100%" width="100%" alt="img01"/>
            <figcaption>
                <h2>Paper Presentation</h2>
                <p><br>Time: 11AM-3PM<br>Venue: xxxxxxxx<br>
                    <br>
                <a data-toggle="modal" data-target="#myaids1">View more</a></p>
            </figcaption>
        </figure>

        <figure class="effect-oscar wowload fadeInUp">
            <img src="images/portfolio/2.jpeg" height="100%" width="100%" alt="img01"/>
            <figcaption><br><br><br><br><br>
                <h2>Brainaza</h2>
                <p>Time: 1PM-3PM<br>Venue: xxxxxxx<br>
                    <br>
                <a data-toggle="modal" data-target="#myaids2">View more</a></p>
            </figcaption>
        </figure>

        <figure class="effect-oscar wowload fadeInUp">
            <img src="images/portfolio/3.jpeg" height="100%" width="100%" alt="img01"/>
            <figcaption>
                <h2>Bug Finder</h2>
                <p><br>Time: 11AM-3PM<br>Venue: xxxxxxxx<br>
                <a data-toggle="modal" data-target="#myaids3">View more</a></p>
            </figcaption>
        </figure>


        

        <figure class="effect-oscar wowload fadeInUp">
            <img src="images/portfolio/6.jpeg" height="100%" width="100%" alt="img01"/>
            <figcaption><br><br>
                <h2>E-Sports</h2>
                <p><br>Time: 9AM-11AM <br>Venue: xxxxxx<br>
                <a data-toggle="modal" data-target="#myaids4">View more</a></p>
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
<div id="myaids1" class="modal fade" role="dialog" >
  <div class="modal-dialog" >

    <!-- Modal content-->
    <div class="modal-content" >
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Paper Presentation</h4>
      </div>
      <div class="modal-body">
        
		<br>
		
		
		
		<p><b>RULES</b><br>
		•	Maximum number of participants in a team is 2<br>
    •	Each presenter will get 10 min for presentation +5 min for query<br>
		•	The presentation should be only in MS PowerPoint(PPT/PPTX) or PDF formats<br>
		•	The first slide should display the presentation & name of the presenters<br>
		•	The college ID card is mandatory for registration<br>
		•	The content of the presentation must be sent to<br>
		•	Presenters are request to send your presentation in advance to avoid any last-minute technology issues<br>
    •	The deadline for presentation submission:18.09.2023<br>

    <p>The make your presentation more attractive and also to get a greater audience to your paper, we highly recommend you to follow these steps:<br>
1.	Kindly send us your introduction in 5 sentences highlighting your research area.<br>
2.	Create a video for 30 sec which will be showcased during the symposium and prior to that.<br>
3.	Note: Your paper presentation will be recorded during the symposium.<br></p>


  <p><b>TIPS</b><br>
  The  main objective of the competition that the participant has to keep in mind while preparing is to develop and present a holistic style of approach which is able to motivate the audience. The report being supported/supplemented by technical reference papers gives an added advantages to the participants.<br></pr>

  
		
		
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


<div id="myaids2" class="modal fade" role="dialog" >
  <div class="modal-dialog" >

    <!-- Modal content-->
    <div class="modal-content" >
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">BRAINAZA</h4>
      </div>
      <div class="modal-body">
		
		<p><b>RULES</b><br>
    •	2-4 members form a team<br>
    •	There will be three rounds i.e., MCQ Round, Rapid Fire Round &Buzzer Round<br>
		•	The participants with the highest score at the end of the three rounds is declared the winner<br>
		•	In case of a tie, a tie-breaker round will be used to determine the winner<br></p>

    <p><b>MCQ Round</b><br>
    •	Participants are given a set of multiple choice questions<br>
    •	Each correct answer is awarded a certain number of points<br>
    •	The round will have a time limit<br></p>

    <p><b>Rapid Fire Round</b><br>
    •	Participants are given a series of questions and have a limited time to each one<br>
    •	Points are awarded for correct answers<br>
    •	The round may have a penalty for incorrect answer<br>

    <p><b>Buzzer Round</b><br>
    •	Participants are given a question. First Team to press the buzzer and give a<br>
    •	correct answer is awarded with points<br>
    •	There will be a penalty for incorrect answer<br>
    •	The round will have a time limit for pressing the buzzer<br>
    •	Limited to the rules of each round and penalties for violations<br>



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
<div id="myaids3" class="modal fade" role="dialog" >
  <div class="modal-dialog" >

    <!-- Modal content-->
    <div class="modal-content" >
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">BUG FINDER</h4>
      </div>
      <div class="modal-body">
		
		<p><br><b>RULES</b></br>
		•	2-4 members form a team<br>
		•	There will be two rounds i.e., MCQ Round Debugging<br> 
		•	The participant with the highest score at the end of the MCQ rounds is declared the winner of the next round.<br></p>
		
    <p><b>General rules</b><br>
    The participant with the highest score at the end of the two rounds is declared the winner.<br>

    <p><br><b>MCQ Round</b></br>
    •	Participants are given a set of multiple choice questions with based on the programming<br>
    •	language (C , C++ and Python)<br>
    •	Each correct answer is awarded a certain number of points.<br>
    •	The round will have a time limit of 15mins.<br>

    <p><br><b>Debugging Rounds:</b></br>
    •	The winner of the MCQ Round participants are allowed to Debug the code by using the language C, C++, Python and HTML.<br>
    •	Each correct answer is awarded a certain number of points.<br>
    •	The rounds will have a time limit of 45mins<br>

		
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

<div id="myaids4" class="modal fade" role="dialog" >
  <div class="modal-dialog" >

    <!-- Modal content-->
    <div class="modal-content" >
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">E-SPORTS(BGMI, FREE FIRE, LUDO KING)</h4>
      </div>
      <div class="modal-body">
        
			
		<p><b>RULES</b><br>
		•	4 members form a team(TDM).<br>
		•	One team will be completing with another team the winner will enter the next round repeated until the final team will be selected.<br>
		
		 
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