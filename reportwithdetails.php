<?php
include('nav.php');
 ?>

 <!-- report with details starts here -->

<div class="text-center fluid-container">
  <h2 class="title mb-15">Report with contact details</h2>
</div>

<form class="" action="submit_with_details.php" method="post" enctype="multipart/form-data">

<div class="main" style="background-color: #eeeeef;" >
    <div class="container">
      <div class="row justify-content-center">
           <div class="col-sm-12 col-md-10 col-lg-6">
                <p class="text-justify">We will use the information you provide to contact you to discuss your concerns and put you in touch with appropriate support. This report itself does not necessarily initiate a formal investigative process, but will allow an appropriate member of staff to contact you to speak to you about the options available to you, and the steps we may take as a University. The information you provide in this report will only be shared with relevant members of staff on a need-to-know basis. By submitting this form, you agree to the use of your personal information as detailed in the Privacy Notice and confidentiality guidance.</p>

                <div class="container-fluid">
                  <button type="button" name="n0" class = "btn btn-primary btn-block btn-cont" style="height:4em;">Continue</button>
                </div>
                <br><br>
           </div>
         </div>
      </div>
  </div>

<?php include('common_quiz.php') ?>

<!-- Contact details/question 7 start here -->
<div class="main col-lg-12 col-md-12 col-sm-12" style="background-color: #eeeeef; " >
  <div class="inner-part text-left mb-50">
    <div class="form-group col-lg-8 col-md-10 col-sm-12" style="margin: auto;">
         <br>
         <p><b>Contact details</b></p> <br>

          <div class="fluid-container" style="margin-bottom: 5%;">
              <h4 style="margin-bottom: 1%">Name</h4>
              <input type="text" name="contact_name" value="" class = "form-control contact_name" placeholder="Enter Your Full name here">
              <font id = "error20" class = "error-msg"></font>
          </div>

          <div class="fluid-container" style="margin-bottom: 5%;">
              <h4 style="margin-bottom: 1%">Telephone number</h4>
              <input type="text" name="contact_number" value="" class = "form-control contact_number" placeholder="+254721234567">
              <font id = "error21" class = "error-msg"></font>
          </div>

          <div class="fluid-container" style="margin-bottom: 5%;">
              <h4 style="margin-bottom: 1%">Email address</h4>
              <input type="text" name="contact_email" value="" class = "form-control contact_email" placeholder="johndoe@example.com">
          </div>

          <div class="fluid-container" style="margin-bottom: 5%;">
              <h4 style="margin-bottom: 1%">Student number/Staff Number</h4>
              <input type="text" name="contact_student_number" value="" class = "form-control contact_student_number" placeholder="student/staff number">
          </div>

      </div>
    </div>

  <div class="col-lg-6 col-md-12 col-sm-12" style="margin:auto; padding-bottom: 10px">
      <div class="row justify-content-center">
        <div class="col">
          <input type="button" name="n_d_8" value="< Back" class = "btn btn-primary btn-block btn-back" style="height:3em">
        </div>
        <div class="col">
          <input type="button" name="n_d_8" value="Continue" class = "btn btn-primary btn-block btn-cont" style="height:3em">
        </div>
      </div>
  </div>
</div>

<!-- End contact details -->

<!-- Submit starts here  -->
<div class="main col-lg-12 col-md-11 col-sm-12" style="background-color: #eeeeef; margin: auto;">
 <div class="inner-part text-left mb-50">
    <div class="text-justify" style="margin:auto;">
      <div class="col-lg-8 col-md-11 col-sm-12" style="margin:auto;">
          <p>By submitting this form you agree to the use of your personal information and a member of staff from the University will contact you to discuss your report, options on what can happen next, and support available to you. If you would prefer not to provide this information and be contacted you can choose to <a href="reportanonymously.php" style="color:blue">submit the information anonymously instead</a>. Information already entered will be copied over to the new report. Any information you provide anonymously will still be used to inform proactive and preventative work by the University.</p>
      </div>
    </div>
  </div>
   <div class="col-lg-6 col-md-12 col-sm-12" style="margin:auto; padding-bottom: 10px">
       <div class="row justify-content-center">
           <div class="col">
             <input type="button" name="n" value="< Back" class = "btn btn-primary btn-block btn-back" style="height:3em">
           </div>

           <div class="col">
              <input type="submit" name="btn_submit_with_details" value="Submit Report" class = "btn btn-primary btn-block " style="height:3em">
           </div>
        </div>
    </div>
</div>
<!-- End of Submit-->

</form>

<script type="text/javascript">

</script>

<!-- Footer Start -->
<?php include('footer.php'); ?>
