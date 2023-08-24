<?php session_start();
  if(isset($_SESSION['login_status'])) {
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Brahmastra 2k23</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Roboto+Mono" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/event_register_css/bootstrap.min.css">
    <link rel="stylesheet" href="css/event_register_css/magnific-popup.css">
    <link rel="stylesheet" href="css/event_register_css/jquery-ui.css">
    <link rel="stylesheet" href="css/event_register_css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/event_register_css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/event_register_css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/event_register_css/aos.css">

    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>


    <link rel="stylesheet" href="css/event_register_css/style.css">
  </head>
  <body id="registerBody">

  <div class="site-wrap">
    <!-- register form -->
    <div class="parallaxContainer">

     <div class="site-section">
       <div class="container">
         <div class="row">
           <div class="col-md-6" data-aos="fade-up">

             <form action="event_register_action.php" method="post" enctype="multipart/form-data">
              <h3>Personal Details</h3>
               <div class="border" style="border: 1px solid white;padding: 30px;">
               <div class="row form-group">
                 <div class="col-md-6 mb-3 mb-md-0">
                   <label for="fname">First Name</label>
                   <input type="text" name="firstName" id="fname" required="" class="form-control" placeholder="Enter First Name Here" pattern="[A-Za-z ]+" title="Only letters and spaces are allowed">
                 </div>
                 <div class="col-md-6">
                   <label for="lname">Last Name</label>
                   <input type="text" name="lastName" id="lname" required="" class="form-control" placeholder="Enter Last Name Here" pattern="[A-Za-z ]+" title="Only letters and spaces are allowed">
                 </div>
               </div>

              <div class="row form-group">
                 <div class="col-md-12">
                   <label for="email">Email</label>
                   <input type="email" name="email" id="email" required="" class="form-control" placeholder="Enter Your Email Here" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}" title="Enter a valid email address">
                 </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label for="phone">Mobile No</label>
                  <input type="tel" name="mobile" id="mobile" required="" class="form-control" placeholder="Enter Your Mobile Number Here" pattern="[0-9]{10}" title="Enter a 10-digit mobile number">
                </div>
              </div>
              <br>

              <div class="row form-group">
                <div class="col-md-12">
                  <label for="subject">Department Of Study</label>
                  <select id="selectWithInput" class="selectText" required="" name="dept" onchange="handleSelectChange()">
                      <option value="" selected disabled>Select Department </option>
                      <option value="B.E CSE" class="form-control">B.E CSE </option>
                      <option value="B.E EEE" class="form-control">B.E EEE </option>
                      <option value="B.E ECE" class="form-control">B.E ECE </option>
                      <option value="B.E MECH" class="form-control">B.E MECH </option>
                      <option value="B.TECH AIDS" class="form-control">B.Tech AIDS </option>
                    <option value="manual" class="form_control">OTHERS</option>
                  </select>
                  <br> 
                  <div id="manualInputWrapper" style="display: none; margin-top:20px;">
                    <input type="text" name="depart" id="depart" class="form-control" placeholder="Enter Your Department Here">
                  </div>
                </div>
              </div>
              <br>

              <div class="row form-group">
                <div class="col-md-12">
                  <label for="subject">Institution</label>
                  <input type="text" name="inst" id="inst" required="" class="form-control" placeholder="Enter Your Institution Name Here">
                </div>
              </div>
              <br>

              <div class="row form-group">
                <div class="col-md-12">
                  <label for="year">Year Of Study</label>
                  <select class="selectText" required="" name="year">
                      <option value="" selected disabled>select your year</option>
                      <option value="first">1st Year</option>
                      <option value="second">2nd Year</option>
                      <option value="third">3rd Year</option>
                      <option value="fourth">4th Year</option>
                  </select>
                </div>
              </div>
            </div>
            <br><br>
            <h3>Participation Details</h3>
            <div class="border" style="border: 1px solid white;padding: 30px;">
               <div class="row form-group">
                 <div class="col-md-12">
                   <label for="subject">Participating Department</label>
                   <select id="filterSelect" required="" class="selectText">
                      <option value="" selected disabled>Select Department </option>
                      <option value="cse" class="form-control">B.E CSE </option>
                      <option value="eee" class="form-control">B.E EEE </option>
                      <option value="ece" class="form-control">B.E ECE </option>
                      <option value="mech" class="form-control">B.E MECH </option>
                      <option value="aids" class="form-control">B.Tech AIDS </option>
                   </select>
                 </div>
               </div>

               <br>

               <div class="row form-group">
                 <div class="col-md-12">        
                   <label for="subject">Event</label>
                   <li name="event" id="itemList">
                   <ul id="event" name="event" class="item cse"><input type="checkbox" name="event[]" value="Paper Presentation,cse"> Paperio</ul>
                     <ul id="event" name="event" class="item cse"><input type="checkbox" name="event[]" value="Techcrack,cse"> Techcrack</ul>
                     <ul id="event" name="event" class="item cse"><input type="checkbox" name="event[]" value="Postero,cse"> Postero</ul>
                     <ul id="event" name="event" class="item cse"><input type="checkbox" name="event[]" value="Thegidi,cse"> Thegidi</ul>
                     <ul id="event" name="event" class="item aids"><input type="checkbox" name="event[]" value="Paper Presentation,aids"> Paper Presentation</ul>
                     <ul id="event" name="event" class="item aids"><input type="checkbox" name="event[]" value="AI Quiz,aids"> AI Quiz</ul>
                     <ul id="event" name="event" class="item aids"><input type="checkbox" name="event[]" value="Bug Finder,aids"> Bug Finder</ul>
                     <ul id="event" name="event" class="item aids"><input type="checkbox" name="event[]" value="Bidding War,aids"> Bidding War</ul>
                     <ul id="event" name="event" class="item eee"><input type="checkbox" name="event[]" value="Paper Presentation,ece"> Current Xplore</ul>
                     <ul id="event" name="event" class="item eee"><input type="checkbox" name="event[]" value="Electritech Expo,ece"> Electritech Expo</ul>
                     <ul id="event" name="event" class="item eee"><input type="checkbox" name="event[]" value="Miniute To Win It,ece"> Miniute To Win It</ul>
                     <ul id="event" name="event" class="item eee"><input type="checkbox" name="event[]" value="Buzzy,ece"> Buzzy</ul>
                     <ul id="event" name="event" class="item ece"><input type="checkbox" name="event[]" value="Paper Presentation,eee"> Paper Presentation</ul>
                     <ul id="event" name="event" class="item ece"><input type="checkbox" name="event[]" value="Binary Blast,eee"> Binary Blast</ul>
                     <ul id="event" name="event" class="item ece"><input type="checkbox" name="event[]" value="Tech kriti,eee"> Tech kriti</ul>
                     <ul id="event" name="event" class="item ece"><input type="checkbox" name="event[]" value="Eureka Quest,eee"> Eureka Quest</ul>
<<<<<<< HEAD
                     <ul id="event" name="event" class="item mech"><input type="checkbox" name="event[]" value="Paper Presentation,mech"> Paper Presentation</ul>
                     <ul id="event" name="event" class="item mech"><input type="checkbox" name="event[]" value="Cad Modeling,mech"> Cad Modeling</ul>
                     <ul id="event" name="event" class="item mech"><input type="checkbox" name="event[]" value="Water Rocketry,mech"> Water Rocketry</ul>
                     <ul id="event" name="event" class="item mech"><input type="checkbox" name="event[]" value="Mr.Lathe,mech"> Mr.Lathe</ul>

                   </li>
                 </div>
                </div>

               <br>
                 <p style="color: red;">Note : Pay The Registration fee 250 per canditate. use the above qr code and enter the Transaction id below and upload the evidence</p>
                 <div class="row form-group">
  <div class="col-md-12">
    <label for="subject">Upload Proof of Payment *</label>
    <input type="file" name="image" id="image" accept="image/*" class="form-control" required="">
  </div>
</div>
<div class="row form-group">
  <div class="col-md-12">
    <label for="uploaded-image">Uploaded Image</label>
    <div id="uploaded-image-container">
      <!-- Placeholder for the uploaded image -->
    </div>
  </div>
</div>
<script>
  const imageInput = document.getElementById("image");
  const uploadedImageContainer = document.getElementById("uploaded-image-container");

  imageInput.addEventListener("change", (event) => {
    const selectedImage = event.target.files[0];

    if (selectedImage) {
      const imageElement = document.createElement("img");
      imageElement.src = URL.createObjectURL(selectedImage);
      imageElement.classList.add("uploaded-image");
      
      // Clear previously uploaded images
      uploadedImageContainer.innerHTML = "";
      
      uploadedImageContainer.appendChild(imageElement);
    } else {
      uploadedImageContainer.innerHTML = "";
    }
  });
</script>
<style>
  .uploaded-image {
    max-width: 100%;
    max-height: 200px; /* Adjust the height as needed */
    margin-top: 10px;
  }
</style>

                <div class="row form-group">
                  <div class="col-md-12">
                    <label for="subject">Transaction Reference ID * </label>
                    <input type="text" name="trans_id" id="trans_id" class="form-control" required="" placeholder="Put Your Reference Id here">
                  </div>
                </div>
               <br>
              </div>
               <br>

               <div class="row form-group">

                 <div class="col-md-12">
                   <input type="checkbox" name="rules" id="rules" class="radioButton" required="">I have read the rules and regulations.
                 </div>
               </div>

               <br>

               <div class="row form-group">
                 <div class="col-md-12">
                   <input type="submit" name="register" value="Register" class="btn btn-primary py-2 px-4 text-white">
                 </div>
               </div>


             </form>
           </div>




    <!--qr code-->

    



           <div class="col-md-5 ml-auto" data-aos="fade-up" data-aos-delay="100">
             <div class="p-2 mb-3">
              <br><br>
              <p class="mb-0 font-weight-bold text-secondary text-uppercase mb-3">Payment Details</p>
              <p class="mb-4">
                <ul>
                  <img src="images/qr.jpg" alt="" height="300px" width="300px"><br><br>
                  <h4>Merchant Name: </h4><h5>Chettinad College Of Engineering And Technology</h5><br><br>
                  <h4>For UPI Payment : </h4><h4 style="color:red">kvbupiqr.99188@kvb</h4>
                </ul>
              <br><br><br><br><br>              
               <p class="mb-0 font-weight-bold text-secondary text-uppercase mb-3">General Rules</p>
               <p class="mb-4">
                <ul>
                  <li>College ID card is mandatory.</li>
                  <li>Only formal wear is allowed. (Jeans, Tee-shirt and casual wear is strictly prohibited)</li>
                  <li>Participants are not allowed to use smartphones or other electronic gadgets inside the campus.</li>
                  <li>Decision of the judges will be final and binding.</li>
                </ul>
               </p>

             </div>
           </div>
         </div>
       </div>
     </div><!-- end of site section -->

   </div><!-- end of parallax -->

    <!-- end of registration form -->

  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>

  </body>
</html>

<script>
function handleSelectChange() {
    var selectElement = document.getElementById('selectWithInput');
    var manualInputWrapper = document.getElementById('manualInputWrapper');

    if (selectElement.value === 'manual') {
        manualInputWrapper.style.display = 'block';
    } else {
        manualInputWrapper.style.display = 'none';
    }
}
document.addEventListener("DOMContentLoaded", function() {
    // Get references to the select and list elements
    const filterSelect = document.getElementById("filterSelect");
    const itemList = document.getElementById("itemList");

    // Add an event listener to the select element
    filterSelect.addEventListener("change", function() {
        const selectedValue = filterSelect.value;

        // Loop through all list items and show/hide based on the selected value
        const items = itemList.getElementsByClassName("item");
        for (let i = 0; i < items.length; i++) {
            const item = items[i];
            if (selectedValue === "all" || item.classList.contains(selectedValue)) {
                item.style.display = "block";
                itemList.style.display = "block";
            } else {
                item.style.display = "none";
                itemList.style.display = "block";
            }
        }
    });
});
</script>

<?php }
  else{
    header("Location:index.html");
  }
?>