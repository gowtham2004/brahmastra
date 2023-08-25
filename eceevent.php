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
<div id="myece1" class="modal fade" role="dialog" >
  <div class="modal-dialog" >

    <!-- Modal content-->
    <div class="modal-content" >
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">PAPER PRESENTATION</h4>
      </div>
      <div class="modal-body">
      <p>Paper Presentations aims to give a platform to young engineers to fuel their brains and ideate ideas that never existed. The event intends to encourage inventions, scientific investigations, and research to promote their applications for development in all sectors of Engineering.</p>

<p><strong> <h4> Call for Paper:</h4></strong></p>
<p>Contributions from students of diploma, bachelors, and masters of engineering colleges to share their innovative research work.</p>

<p><strong> <h4> Theme of Paper:</h4></strong></p>
<p>Students can select any technical subject related to Electronics and Communication Engineering or explore the thoughts and visions of the students.</p>

<p><strong> <h4> Domains:</h4></strong></p>
<p>&#8226; Microwave and Optical Communication<br>
&#8226; Wireless Communication and its technologies<br>
&#8226; Artificial Intelligence and Machine Learning<br>
&#8226; Nanotechnology<br>
&#8226; Internet of Things<br>
&#8226; VLSI - Design</p>

<p><strong> <h4> Rules:</h4></strong></p>
<p>&#8226; Maximum number of participants in a Team is 2.<br>
&#8226; The presentation should contain 6-12 slides, animations allowed.<br>
&#8226; The teams will get 7 minutes for presentation followed by a question and answer session.<br>
&#8226; Last day to submit the soft copy of your ppt (via e-mail) will be two days prior to the day of presentation.<br>
&#8226; The decision of judges will be final, and no arguments or appeals will be entertained.<br>
&#8226; Time limit should be strictly followed, and extension may lead to deduction of marks.<br>
&#8226; Students must have their college ID.<br>
&#8226; Deadline to submit your ppt: 20.09.2023 (Wednesday).<br>
&#8226; Send your ppt to email id.</p>

<p><strong> <h4>  Contact Details:</h4></strong></p>
<p>1. Rajavel N - 9361182825<br>
2. Anusiya M - 8056528850</p>
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
      <p>Test your circuits of intellect in our challenge. From semiconductors to circuits, charge up your understanding. Prizes await the brightest sparks!</p>

<h4>Round-1 [MCQ Maze]</h4>
<p><strong>Description:</strong><br>
Test your knowledge in our MCQ event, covering diverse topics. Put your skills to the test, compete and learn. Get ready to conquer the MCQ maze!</p>
<p><strong>Rules:</strong><br>
&bull; Number of participants: Max 2 per team<br>
&bull; Participants will face a test with 20 questions, each worth 1 mark.<br>
&bull; The challenge spans 15 minutes and the top 10 teams securing the highest scores will advance to the next round.</p>

<h4>Round-2 [Circuit Mastermind]</h4>
<p><strong>Description:</strong><br>
Unravel intricate electronic puzzles, diagnose glitches, and race against the clock to revive malfunctioning circuits. Sharpen your problem-solving skills.</p>
<p><strong>Rules:</strong><br>
&bull; Teams will encounter five error-ridden circuits, each worth 5 marks, in 15-minutes duration.<br>
&bull; The top 5 teams mastering these challenges will advance to the thrilling final round.</p>

<h4>Round-3 [Electro Talks]</h4>
<p><strong>Description:</strong><br>
Dive into the world of ideas at our Technical Talking Event. Engage in dynamic conversations and broaden your knowledge.</p>
<p><strong>Rules:</strong><br>
&bull; Participants select a Technical topic from a given list, speaking for 1 minute.<br>
&bull; Winning teams are determined by valid points earned from insightful explanations.</p>

<h4>Contact Details:</h4>
<ol>
    <li>Dhanush Karthick D - 8825927354</li><br>
    <li>Harini S - 9360395434</li>
</ol>

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
      <p><strong> <h4> Round 1: Technical Connections</strong></p>

<p><strong> <h4> Description:</h4></strong>
&#8226; Number of participants: max. 2 per team.<br>
&#8226; Group of images will be displayed as a clue to find the component's name.<br>
&#8226; The best 10 entries will be selected by the panel.</p>

<p><strong> <h4> Rules for the Event:</h4></strong>
&#8226; 20 Questions<br>
&#8226; Each Question carries 1 Mark<br>
&#8226; Duration: 15 Minutes<br>
&#8226; Top 10 Teams will be qualified for the Next round</p>

<p><strong>  <h4> Round 2: Circuit Simulation [Multisim]</h4></strong></p>

<p><strong>  <h4>  Description:</h4></strong>
&#8226; Number of participants: max. 2 per team.<br>
&#8226; Two circuits will be given to the participants with errors in Multisim.<br>
&#8226; Participants are asked to spot the errors.<br>
&#8226; The best 5 entries will be selected by the panel based on timing and the number of circuits solved.</p>

<p><strong> <h4> Rules for the Event:</h4></strong>
&#8226; Two circuits will be given with Errors.<br>
&#8226; Each circuit carries 10 Marks.<br>
&#8226; Duration: 20 Minutes.<br>
&#8226; Top 5 Teams will be qualified for the Final round.</p>

<p><strong> <h4> Round 3: Test your circuit minds</h4></strong></p>

<p><strong> <h4> Description:</h4></strong>
&#8226; Electronic components will be given to the participants.<br>
&#8226; Participants will be asked to construct a circuit from the given components.<br>
&#8226; Circuits must be constructed on a breadboard.<br>
&#8226; The best 2 entries will be selected by the panel based on their circuit and output accuracy.</p>

<p><strong> <h4> Rules & Regulations:</h4></strong>
&#8226; Participants should use only the given components.<br>
&#8226; Participants can construct any circuit using a Breadboard.<br>
&#8226; Winners & Runners will be selected based on their circuit complexity & Output accuracy.</p>

<p><strong> <h4>Contact Details: </h4> </strong></p>

<p>1. Arunprasath .B - 8220878401<br>
2. Shalini.S - 9787663960</p>
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
		
		<p><b> <h5> Round 1: Get acquainted with Python</h5></b><br>
		• No of Participants : Max.4 per team <br>
		• The students are expected to find the components or gadgets that are kept in the dark 
room.<br>
<p><b> <h5>Rules</h5></b><br>
&#8226; Participants from a team should select five gadgets from a lot.<br>
&#8226; Only one member from a team will be allowed in a dark room who should find the five
gadgets correctly. <br>
&#8226; The best five teams will be selected for next round based on timing and gadget count.

		
		<p><b><h5>Round 2: Description</h5></b><br>
		&#8226; No of Participants: max.4 per team. <br>
    &#8226; The students are expected to find the clue correctly to reach the final destination. <br>
    &#8226; The best two entries will be selected by the panel based on the timing, and those that <br>
reach their destination on a first come, first served basis. <br>
			
		<p><b><h5>RULES</h5></b><br>
		&#8226; A task will be given to the participants. <br>
    &#8226; Once the task is completed, a clue will be given that directs you to another place where 
you can find another clue. <br>
&#8226; Each clue will help you move toward your final destination. <br>
&#8226; A task will be given at the final location. <br>
&#8226; The first two teams that finish the final task will be selected by the panel. <br>

		
		<p><b><h5>Event Co-ordinators:</h5></b><br>
    1. R.Sudhan - 6383379014 <br>
2. R.Vedhashree - 9047706249 <br>
		 
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
<?php 
}
catch (Exception $e) {
    echo("<script>alert('An Error Detected Contact Web Admin'); window.location.href = 'index.html';</script>");
}
?>