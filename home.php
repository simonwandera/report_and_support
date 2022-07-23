<?php


include('nav.php');
include('connection.php');
if(!isset($_SESSION['user'])){
  $_SESSION['user'] = "";
}
?>

 <!-- header container start here -->
<div class="main-content">
  <div class="why-choose-us style2 gray-bg3 pt-100 pb-100 md-pt-70 md-pb-70">
               <div class="row container m-auto">

                 <div class="col-lg-4  hidden-sm hidden-md mb-30">
                   <img src="assets/images/laptop.jpg" alt="" class = "rounded-circle left-image " width="400" height="400">
                   <div class="left-icon">
                     <i class="fa fa-at fa-5x" style="color:#3498DB;"></i>
                   </div>
                 </div>

                 <div class="col-sm-11 col-md-11 col-lg-4" style="margin-right: auto; margin-left: auto; position:center">
                     <h2 class="text-center mb-50">Report + Support</h2>
                     <div class="content-wrap text-center "><p>Welcome to the Maseno University's Report & Support tool. This is the place to report student misconduct and find out about support available for students from the University and other services</p></div>
                     <div class="content-wrap text-center"><p>You can report an incident to the University using the buttons below. If you report with contact details a member of staff will make contact to discuss what you would like to happen next and discuss the support available for you. If you report anonymously we will use this information to better understand the issues impacting our University community, to monitor trends and inform proactive and preventative work.</p></div>
                 </div>

                 <div class="col-lg-4 hidden-sm hidden-md mb-30">
                   <div class="right-icon ">
                     <i class="fa fa-asterisk fa-5x" style="color:#3498DB;"></i>
                   </div>
                   <img src="assets/images/water.jpg" alt="" class = "rounded-circle left-image " width="350px" height="350px">
                 </div>

               </div>
  </div>



  <div class="rs-testimonial style3">
      <div class="container">
          <div class="sec-title mb-60 text-center md-mb-30">

              <h3 class="title mb-15">There are two ways you can report something</h3>
          </div>

          <div class="container ">
            <div class="row justify-content-center">

              <div class="col-sm-12 col-md-6 col-lg-5">
                <a href="reportwithdetails.php"><button type="button" class="btn btn-info btn-block" name="button" style="height:4em;">Report with contact details</button></a>
              </div>

              <br>
              <br>
              <h3>OR</h3>
              <br>

              <div class="col-sm-12 col-md-6 col-lg-5">
                <a href="reportanonymously.php"><button type="button" class="btn btn-info btn-block" name="button" style="height:4em;">Report anonymously</button></a>
              </div>

            </div>
          </div>

      </div>
  </div>
  <hr style="color:#34495E">


  <!-- support start here -->
  <?php include('groups.php'); ?>


</div>

<!-- Footer Start -->
<?php include('footer.php'); ?>
