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
                <p><br>Time: 11AM-3PM<br>Venue: xxxxxxxx<br>
                    <br>
                <a data-toggle="modal" data-target="#myeee1">View more</a></p>
            </figcaption>
        </figure>

        <figure class="effect-oscar wowload fadeInUp">
            <img src="images/portfolio/e2.jpeg" height="100%" width="100%" alt="img01"/>
            
            <figcaption><br><br><br><br><br>
                <h2 style="color: #fafafa; font-size: 34px;">ElectriTech Expo</h2>
                <p>Time: 1PM-3PM<br>Venue: xxxxxxx<br>
                    <br>
                <a data-toggle="modal" data-target="#myeee2">View more</a></p>
            </figcaption>
        </figure>

        <figure class="effect-oscar wowload fadeInUp">
            <img src="images/portfolio/c3.jpeg" height="300px" width="100%" alt="img01"/>
            <figcaption>
                <h2 style="color: #fffbfb;">Minute To Win It</h2>
                <p><br>Time: 11AM-3PM<br>Venue: xxxxxxxx<br>
                <a data-toggle="modal" data-target="#myeee3">View more</a></p>
            </figcaption>
        </figure>

        <figure class="effect-oscar wowload fadeInUp">
            <img src="images/portfolio/cc4.jpeg" height="300px" width="100%" alt="img01"/>
            <figcaption><br><br>
                <h2 style="color: #111;">Buzzy</h2>
                <p><br>Time: 9AM-11AM <br>Venue: xxxxxx<br>
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
        <p>Are you a passionate Coder who likes to play with Algorithmic challenges,then sharpen your wit to face an exhilarating set of problems. Remember speed and accuracy matters a lot. Come up with a solution, code it and beat the clock to prove your prowess</p>
		<br>
		
		<p><b>FORMAT </b><br>
		• It is a single round coding contest with six problems,spanning for 150 minutes<br>
		• Problem Statement will be given such that the input to the program and the desired output are defined<br>
		• Participants are expected to write the code that performs the necessary processing/transformations<br>
		• A submitted solution is checked against several testcases and a response will be generated<br>
		• The objective is to solve the as many problems as possible</p>
		
		<p><b>RULES</b><br>
		• Each team should have two members<br>
		• The team members need not be from the same institution/college<br>
		• Mobile phones and other materials are not allowed inside the contest arena<br>
		• Teams involved in any kind of malpractice will be immediatly disqualified<br>
		• The decision taken by the organizers will be final<br>
		• Lone wolves are not allowed</p>
		
		<p><b>CONTACT DETAILS</b><br>
		 Ram Prakash P : 9489889301<br>
		 Sailesh       : 9092499086
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


<div id="myeee2" class="modal fade" role="dialog" >
  <div class="modal-dialog" >

    <!-- Modal content-->
    <div class="modal-content" >
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">ELECTRITECH EXPO</h4>
      </div>
      <div class="modal-body">
		<p>Are you someone who loves designing as well as coding? Have you sat hours at an end trying to make a website and loved it?</p>
		This is Web ninja, a competition where you can showcase your talents in coding as<br> well as designing. Put your skills to the test and design a website as the clock ticks<br>
		
		<br><p><b>Round 1</b><br>
		• There will be an MCQ in all the web technologies which will test your design skills<br>
		• There will be 30 questions which has to be answered in 30 minutes</p>
		
		<p>Round 2</b><br>
		• You will be given a template on spot, out of which you need to create the nearest match of it<br>
		• The team who creates an exact or nearest match within a short period of time will be declared as winners</p>
		
		<p><b>RULES</b><br>
		• A team must consists of 2 members<br>
		• Team members can be from different colleges<br>
		• Usage of internet, mobile phones and other electronic gadgets is strictly prohibited<br>
		• Basic knowledge in HTML, CSS and JavaScript is needed<br>
		• Decision of the Judges will be final</p>
		
		<p><b>CONTACT DETAILS</b><br>
		Vasanthan S : 9894753624<br>
		Rashmi :9443314141</p>

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
        <h4 class="modal-title">MINUTE TO WIN IT</h4>
      </div>
      <div class="modal-body">
		<p> Have you always been fascinated by the world of Android? Then brace yourselves for 'ANDROXUS 2k23'.</p>
		<br> Here's your chance to prove that you're unbeatable in your app development skills</br>
		<p><b>DESCRIPTION</b><br>
		Are you someone who’s always got the eye for spotting errors? Then this round’s for you! It’s just a warm-up to the much awaited Android app development round! 
		This will be a code debugging round, where you will be provided with a program with some errors in it.
		You’ll have to debug the errors within the given time. 
		Eclipse IDE will be used. Let’s see how you debug your way through the grand finals !</p>
		
		<p><br><b>Round 1</b></br>
		• The first round will be a debugging round in which the participants will be debugging a program<br>
	    • The selection will be based on the maximum number of errors found and least time taken to correct it<br>
		• Eclipse IDE will be used for this round<br></p>
		
		<p><b>DESCRIPTION</b><br>
		Winning this round is what it takes to be THE ANDROXUS. Can you become an ANDROXUS? Then show us how good your designing and implementing skills are in Android! 
		It’s more than enough to have a basic understanding of Android, because, guess what, you’ll be given Internet access! 
		This round will be an Android App Development round. 
		In this, you’ll have to choose a slot and develop an Android app for the problem statement specified in that slot. 
		Can you, with the help of Mr.Google, make your way to becoming the ANDROXUS of 2k23?
		
		<p><br><b>Round 2</b></br>
		• This is the round where you will be exhibiting your android skills<br>
		• You will be given with the problem statement for which you need to showcase your skills<br>
		• The winners will be selected on the basis of UI/UX, performance, Memory Space usage<br></p>
		
		<p><br><b>RULES</b></br>
		• Competitors must develop only native android apps<br>
		• Competitors must bring their own android phones and connectors in case they need<br> 
		• Participants must only work with android studio<br></p>
		
		<p><br><b>CONTACT DETAILS</b></br>
		Akil Ayyapan R A : 9787919223<br>
        Krishna Prasad A S : 8608648420</p>
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
        <h4 class="modal-title">BUZZY</h4>
      </div>
      <div class="modal-body">
        <p>Explore a new dimension of coding through <b>Carbine Coders 2k23!!</b> Quick-witted people with basic coding skills are the ones we’re looking for. 
		The event will also test the swift thinking abilities and problem solving skills of the participants.</p>
		
		<p><b>Round 1: Get acquainted with Python</b><br>
		• Have you always wanted to learn Python, but never got around to it? Take your first baby steps in Python with us. <br>
		• You’ll be provided with a few programs in python, where the lines of code are jumbled.<br>
		• Rearrange the lines of code to pass the test cases and stay alive in the competition.<br>
		  <b>P.S. </b>You’ll have access to the Internet, in case you need to sort out your syntactical queries.<br>
		  <br><b>Selection criteria:</b><br>
		  The team that solves the most number of problems in the given 45 minutes will qualify for the next round.</p>
		
		<p><b>Round 2: A twist in the tale</b><br>
		• Each team will be provided with two different problem statements,one for each member.<br>
		  <b>P.S. </b> Expect the unexpected.<br>
		  <br><b>Selection criteria:</b><br>
		  The team that solves both the problems statements the fastest will be declared the winners.</p>
		
			
		<p><b>RULES</b><br>
		• Each team must consist of two members, not necessarily from the same college<br>
		• Mobiles phones and other electronic gadgets are strictly prohibited<br>
		• Decisions taken by the Judges will be final and binding</p><br>
		
		
		
		<p><b>Event Co-ordinators:</b><br>
		 Hari Nandha J R : 9003791901<br>
		 Rishika Jain A : 9487583082</p>
		 
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