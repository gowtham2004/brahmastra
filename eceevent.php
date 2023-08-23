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
  <div id="loader-wrapper">
  <div id="loader"></div>
  <div class="loader-section section-left"></div>
  <div class="loader-section section-right"></div>
</div>
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
    <h2 align="center" style="color: black">DEPARTMENT OF ECE</h2>
    <div class="figure-container">
        <figure class="effect-oscar wowload fadeInUp">
            <img src="images/portfolio/1.jpeg" height="100%" width="100%" alt="img01"/>
            <figcaption>
                <h2 style="color: #f5f2f2;">Paper Presentation</h2>
                <p><br>Time: 11AM-3PM<br>Venue: xxxxxxxx<br>
                    <br>
                <a data-toggle="modal" data-target="#myece1">View more</a></p>
            </figcaption>
        </figure>

        <figure class="effect-oscar wowload fadeInUp">
            <img src="images/portfolio/eee2.jpg" height="100%" width="100%" alt="img01"/>
            
            <figcaption><br><br><br><br><br>
                <h2 style="color: #fafafa; font-size: 34px;">Binary Blast</h2>
                <p>Time: 1PM-3PM<br>Venue: xxxxxxx<br>
                    <br>
                <a data-toggle="modal" data-target="#myece2">View more</a></p>
            </figcaption>
        </figure>

        <figure class="effect-oscar wowload fadeInUp">
            <img src="images/portfolio/c3.jpeg" height="300px" width="100%" alt="img01"/>
            <figcaption>
                <h2 style="color: #fffbfb;">Tech Kriti</h2>
                <p><br>Time: 11AM-3PM<br>Venue: xxxxxxxx<br>
                <a data-toggle="modal" data-target="#myece3">View more</a></p>
            </figcaption>
        </figure>

        <figure class="effect-oscar wowload fadeInUp">
            <img src="images/portfolio/cc4.jpeg" height="300px" width="100%" alt="img01"/>
            <figcaption><br><br>
                <h2 style="color: #111;">Eureka quest</h2>
                <p><br>Time: 9AM-11AM <br>Venue: xxxxxx<br>
                <a data-toggle="modal" data-target="#myece4">View more</a></p>
            </figcaption>
        </figure>

        
    </div>
</div>
<h3></h3>
<!-- works -->


<h3></h3>

<!-- works -->

<h3></h3>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="footer text-center spacer" >
<p class="wowload flipInX">
<a href="#"><img src="images/portfolio/FB.png"/></a> 
<a href="#"><img src="images/portfolio/twitter.png"/></a> 
<a href="#"><img src="images/portfolio/isnta.png"/></a> 

<br> <b>© 2k23 Brahmastra. All rights reserved.</b>
</div>
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
<div id="myece1" class="modal fade" role="dialog" >
  <div class="modal-dialog" >

    <!-- Modal content-->
    <div class="modal-content" >
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">PAPER PRESENTATION</h4>
      </div>
      <div class="modal-body">
        <p>Paper Presentations aims at giving a platform to young engineers to fuel their brains to ideate the ideas that never existed. The event intends to encourage inventions, scientific investigations and research to promote their applications for development in all sectors of Engineering. </p>
		<br>
		
		<p><b>CALL FOR PAPER:</b><br>
    Contributions from students of diploma, bachelors and masters of engineering colleges to share their innovative research work.</p>
		
		<p><b>THEME OF PAPER:</b><br>
		Students can select any technical subject related to Electronics and Communication Engineering or whether the thoughts or vision of the students can reach.</p>
		<p><b>DOMAINS:</b><br>
			VLSI Design
	Communication Engineering    
	Microwave and Optical Communication 
	Wireless Communication
	Mobile Communication
	Embedded System
	Robotics
	Artificial Intelligence
	Machine Learning
	Nanotechnology
	Internet of Things
	Image Processing  
	Digital Signal Processing
	Satellite Communication
	5G Networks
	Photo electronics
</p>

<p><b>RULES:     </b><br>
•	The presentation topics should be selected from the domains mentioned above.
•	Maximum number of participants in a Team is 3.
•	The presentation should contain 6-25 slides, animations allowed.
•	The teams will get 7(5+2) minutes for presentation and followed by question and answer session.
•	The mail with submissions should contain:
		Title- theme of the paper.
		Name of members in team.
		In presentation (ppt) format. 
•	 Last day to submit soft copy of your report (via e-mail) will be two days prior to the day of presentation.
•	The decision of judges will be final and no arguments or appeal will be entertained.
•	Time limit should be strictly followed and extension may lead to deduction of marks.
•	Students must have their college id. 
•	Deadline to submit your ppt-20.09.2023(Friday). 
•	Sent your ppt to email id.

</p>
		<p><b>CONTACT DETAILS</b><br>
    1.	N.Rajavel -9361182825 <br>
    2.	M.Anusiya-8056528850 <br>
    3.	C.Kmali-6380757352  <br>

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


<div id="myece2" class="modal fade" role="dialog" >
  <div class="modal-dialog" >

    <!-- Modal content-->
    <div class="modal-content" >
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">BINARY BLAST</h4>
      </div>
      <div class="modal-body">
		<p>Ignite Your Electronics Knowledge! Test your circuits of intellect in our challenge. From semiconductors to circuits, let’s charge up your understanding. Prizes await the brightest sparks!<br>
		
		<br><p><b>ROUND-1 [MCQ MAZE]</b><br>
		Test your knowledge in our MCQ event, covering diverse topics. Put your skills to the test, compete and learn. Get ready to conquer the MCQ maze! <br>
		Participants will face a difficult test with 20 questions, each worth 1 mark. The challenge spans 15 minutes, and the top 10 teams securing the highest scores, will advance to the next round.
		<p>ROUND-2 [CIRCUIT MASTERMIND]</b><br>
		Unravel intricate electronic puzzles, diagnose glitches, and race against the clock to revive malfunctioning circuits. Sharpen your problem-solving skills. <br>
	Teams will encounter five error-ridden circuits, each worth 5 marks, in 15-minutes duration. The top 5 teams mastering these challenges will advance to the thrilling final round.

		
		<p><b>ROUND-3 [ELECTRO TALKS]</b><br>
		Dive into the world of ideas at our Technical Talking Event. Engage in dynamic conversations and broaden your knowledge.
	Participants must select a Technical topic from a given list and speak for 1 minute. <br> Winning teams are determined by valid points earned from insightful explanations. Unveil your knowledge and compete in this engaging challenge!


    <p><b>RULES & CONDITIONS</b><br>
		•	Participants should form a group of two peoples
    •	Decisions of the judges shall be conclusive
    •	Latecomers may be restricted from entering the ongoing event
    •	Discussion with other team is considered as malpractice

		
		<p><b>CONTACT DETAILS</b><br>
		1. Dhanush Karthick D - 8825927354 <br>
	2. Harini S - 9360395434


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
<div id="myece3" class="modal fade" role="dialog" >
  <div class="modal-dialog" >

    <!-- Modal content-->
    <div class="modal-content" >
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">TECH KRITI</h4>
      </div>
      <div class="modal-body">
		<p> Round-I >>> Technical Connections</p>
		<br>  20 Questions
 Each Question carries 1 Mark
 Duration: 15 Minutes
 Top 10 Teams will be qualified for Next round</br>
		<p><b>DESCRIPTION</b><br>
		Participants will face a challenging round consisting of 20 questions, each carrying a 
value of 1 mark. The competition will unfold over a span of 15 minutes, during which teams will 
strive to demonstrate their knowledge and quick thinking. The top-performing 10 teams will earn 
the coveted qualification for the next round, showcasing their prowess in this intense intellectual 
contest</p>
		
		<p><br><b>Round-II >>> Circuit Simulation [Multisim]
</b></br>
 Two circuits will be given with Errors
 Each Circuit carries 10 Marks
 Duration: 20 Minutes
 Top 5 Teams will be qualified for Final round<br></p>
		
		<p><b>DESCRIPTION</b><br>
		During this phase, participants will receive two circuits, each containing errors that 
need to be identified and rectified. Each circuit holds a weightage of 10 marks, and teams will 
have 20 minutes to meticulously debug and correct the circuits. The top 5 teams excelling in this 
challenge will advance to the highly anticipated final round, showcasing their problem-solving 
abilities and technical smartness.
		
		<p><br><b>Round-III >>> Test your circuit minds</b></br>
		 Some Electronic Components will be given
 Participants can construct any circuit using Breadboard
 Winner & Runner will be selected in their circuit complexity & Output accuracy <br></p>
<p><b>DESCRIPTION</b><br>
In this segment of the competition, participants will receive a selection of electronic 
components, granting them the freedom to construct a circuit of their choice using a breadboard. 
The evaluation criteria for determining the winner and runner-up will encompass the intricacy of 
the circuit design as well as the precision of its output, highlighting the fusion of technical skill 
and accuracy in their creations
		<p><br><b>RULES</b></br>
		 Participants should form a group of two people
 Decisions of the judges shall be conclusive
 Late comers may be restricted from entering ongoing event
 Discussion with other team is considered as malpractice
		
		<p><br><b>CONTACT DETAILS</b></br>
		1. Arunprasath B -8220878401 <br>
2. Shalini S-9787663960

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

<div id="myece4" class="modal fade" role="dialog" >
  <div class="modal-dialog" >

    <!-- Modal content-->
    <div class="modal-content" >
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">EUREKA QUEST</h4>
      </div>
      <div class="modal-body">
        <p>Explore a new dimension of coding through <b>Carbine Coders 2k23!!</b> Quick-witted people with basic coding skills are the ones we’re looking for. 
		The event will also test the swift thinking abilities and problem solving skills of the participants.</p>
		
		<p><b>Round 1: Get acquainted with Python</b><br>
		• No of Participants : Max.4 per team <br>
		• The students are expected to find the components or gadgets that are kept in the dark 
room.<br>
<p><b>Rules</b><br>

 Participants from a team should select five gadgets from a lot.
 Only one member from a team will be allowed in a dark room who should find the five
gadgets correctly.
 The best five teams will be selected for next round based on timing and gadget count.

		
		<p><b>Round 2: Description</b><br>
		 No of Participants: max.4 per team.
 The students are expected to find the clue correctly to reach the final destination.
 The best two entries will be selected by the panel based on the timing, and those that 
reach their destination on a first come, first served basis.
			
		<p><b>RULES</b><br>
		 A task will be given to the participants.
 Once the task is completed, a clue will be given that directs you to another place where 
you can find another clue.
 Each clue will help you move toward your final destination.
 A task will be given at the final location.
 The first two teams that finish the final task will be selected by the panel.

		
		<p><b>Event Co-ordinators:</b><br>
    1. R.Sudhan - 6383379014 <br>
2. R.Vedhashree - 9047706249
		 
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
	
<!--EEE-->	







  

 
<!--MECH-->











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