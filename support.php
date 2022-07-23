<?php
include('connection.php');
include('nav.php');

 ?>

 <!-- header container start here -->
<div class="main-content">
  <div class="why-choose-us style2 gray-bg3 pt-100 pb-100 md-pt-70 md-pb-70">
      <div class="container">
          <h2 class="sec-title2 mb-50 text-center">Support</h2>
      </div>
  </div>


  <!-- support start here -->
<?php include('groups.php'); ?>

<div class="rs-testimonial style3">
    <div class="container">
        <div class="sec-title mb-60 text-center md-mb-30">

            <h3 class="title mb-15">There are two ways you can report something</h3>
        </div>

        <div class="container ">
          <div class="row justify-content-center">
            <div class="col-sm-12 col-md-6 col-lg-5">
                      <a href="reportwithdetails.php"><button type="button" name="button" class="btn btn-info btn-block btn-back" style="height:4em;">Report with contact details</button></a>

                    </div>

                    <br>
                    <br>
                    <h3>OR</h3>
                    <br>
                    <div class="col-sm-12 col-md-6 col-lg-5">
                          <a href="reportanonymously.php"><button type="button" name="button" class="btn btn-info btn-block btn-cont" style="height:4em;">Report anonymously</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr style="color:#34495E">
</div>



<!-- Footer Start -->
<?php include('footer.php'); ?>
