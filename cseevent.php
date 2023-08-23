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
<div id="mypaperio" class="modal fade" role="dialog" >
  <div class="modal-dialog" >

    <!-- Modal content-->
    <div class="modal-content" >
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">PAPERIO</h4>
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
		<p>Are you someone who loves designing as well as coding? Have you sat hours at an end trying to make a website and loved it?</p>
		This is Tech Crack, a competition where you can showcase your talents in coding as<br> well as designing. Put your skills to the test and design a website as the clock ticks<br>
		
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
		<p> Have you always been fascinated by the world of Android? Then brace yourselves for 'Postero 2k23'.</p>
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
		Winning this round is what it takes to be THE Postero. Can you become an Postero? Then show us how good your designing and implementing skills are in Android! 
		It’s more than enough to have a basic understanding of Android, because, guess what, you’ll be given Internet access! 
		This round will be an Android App Development round. 
		In this, you’ll have to choose a slot and develop an Android app for the problem statement specified in that slot. 
		Can you, with the help of Mr.Google, make your way to becoming the Postero of 2k23?
		
		<p><br><b>Round 2</b></br>
		• This is the round where you will be exhibiting your android skills<br>
		• You will be given with the problem statement for which you need to showcase your skills<br>
		• The winners will be selected on the basis of UI/UX, performance, Memory Space usage<br></p>
		
		<p><br><b>RULES</b></br>
		• Competitors must develop only native android apps<br>
		• Competitors must bring their own android phones and connectors in case they need<br> 
		• Participants must only work with android studio<br></p>
		
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

    <div id="mypostero" class="modal fade" role="dialog" >
  <div class="modal-dialog" >

    <!-- Modal content-->
    <div class="modal-content" >
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Postero</h4>
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
      Anssari.J : 9843595539<br>
      Harinisri.B : 8248999137</p>
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
		<p> Idea's change the way a person can think. It is based on how we express them. Posters are the way of exhibiting ideas.</p>
		<br> We have come with the theme. Try to do something innovative in a way that will inspire generations</br><br>
		
		<p><b>FORMAT</b><br>
			• On-spot theme will be given<br>
			• Only one round is conducted on which the winner will be selected<br>
			• The working platform will be <b>Adobe Photoshop CC 2015</b><br>
			• The maximum time Limit will be 120 minutes</p>
		
		<p><b>RULES</b><br>
			• A team can consists of maximum two members<br>
			• Teams can consists of students from different colleges<br>
			• Plagiarism is not allowed<br>
			• Usage of patterns must be priorly informed to the co-ordinators<br>
			• Minimum knowledge is required<br>
			• Judges decision is final</p>
			
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