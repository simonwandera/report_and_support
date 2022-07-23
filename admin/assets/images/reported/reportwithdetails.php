<?php
include('nav.php');
 ?>

 <!-- report with details starts here -->
<div class="main-content" >
  <div class="container">
    <div class="column">
      <div class="rs-quick-contact">
           <div class="inner-part text-center mb-50">
               <h2 class="title mb-15">Report with contact details</h2>
           </div>
      </div>
    </div>
  </div>
</div>

<form class="" action="submitwithdetails.php" method="post">

<div class="main" style="background-color: #eeeeef;" >
  <div class="" style="margin-right: 30%; margin-left: 30%">
    <div class="container">
      <div class="column">
           <div class="inner-part text-left mb-50">
              <div class="newsletter-wrap">
                <p>We will use the information you provide to contact you to discuss your concerns and put you in touch with appropriate support. This report itself does not necessarily initiate a formal investigative process, but will allow an appropriate member of staff to contact you to speak to you about the options available to you, and the steps we may take as a University. The information you provide in this report will only be shared with relevant members of staff on a need-to-know basis. By submitting this form, you agree to the use of your personal information as detailed in the Privacy Notice and confidentiality guidance.</p>
              </div>

              <div class="inner-part text-center mb-50" style="background-color: #fff";>
                  <button type="button" id = "" name="n0" class="btn btn-info btn-lg btn-cont" style="margin-top: 5%; margin-bottom: 5%; height:4em; width:14em;">Continue</button>
              </div>
           </div>
      </div>
  </div>
  </div>
</div>

<?php include('common_quiz.php') ?>


<div class="main" style="background-color: #eeeeef;" >
<div class="" style="margin-right: 20%; margin-left: 20%">
  <div class="form-group">
           <div class="inner-part text-left mb-50">

             <br>
             <p><b>Contact details</b></p> <br>

              <div class="col-lg-12 col-md-10 col-sm-12 mb-50">
                  <h4>Name</h4>
                  <input type="text" name="contact_name" value="" class = "form-control contact_name">
                  <font id = "error20" class = "error-msg"></font>
              </div>

              <div class="col-lg-12 mb-50">
                  <h4>Telephone number</h4>
                  <input type="text" name="contact_number" value="" class = "form-control contact_number">
                  <font id = "error21" class = "error-msg"></font>
              </div>

              <div class="col-lg-12 mb-50">
                  <h4>Email address</h4>
                  <input type="text" name="contact_email" value="" class = "form-control contact_email">
              </div>

              <div class="col-lg-12 mb-50">
                  <h4>Student number/Staff Number</h4>
                  <input type="text" name="contact_student_number" value="" class = "form-control contact_student_number">
              </div>

           </div>
           <div class="inner-part text-center col-lg-12 col-md-10 col-sm-12 mb-50" style="background-color: #fff;">
                 <button type="button" name="n_d_8" class="btn btn-info btn-lg btn-back" style="margin-top: 5%; margin-bottom: 5%; height:4em; margin-left:0%; width:14em;">< Back</button>
                 <button type="button" name="n_d_8" class="btn btn-primary btn-lg btn-cont" style="margin-top: 5%; margin-bottom: 5%; height:4em; width:14em; margin-right:0%">Continue</button>
           </div>
      </div>
  </div>
</div>


<div class="main" style="background-color: #eeefff;" >
  <div class="myclass" style="margin-right: auto; margin-left: auto; width: 45em">
    <div class="container">
      <div class="column">
           <div class="inner-part text-left mb-50">
              <div class="newsletter-wrap">
                <p>By submitting this form you agree to the use of your personal information and a member of staff from the University will contact you to discuss your report, options on what can happen next, and support available to you. If you would prefer not to provide this information and be contacted you can choose to <a href="reportanonymously.php" style="color:blue">submit the information anonymously instead</a>. Information already entered will be copied over to the new report. Any information you provide anonymously will still be used to inform proactive and preventative work by the University.</p>
              </div>
           </div>
           <div class="inner-part text-center mb-50" style="background-color: #fff;">
             <button type="submit" name="btn_submit_with_details" class="btn btn-primary btn-lg" style="margin-top: 5%; margin-bottom: %; height:4em; width:14em; margin-right:0%">Submit</button><br>
             <button type="button" name="button" class="btn btn-info btn-lg" style="margin-top: 5%; margin-bottom: 5%; height:4em; margin-left:0%; width:14em;">< Back</button>
           </div>
      </div>
  </div>
</div>
</div>

</form>

<script type="text/javascript">




</script>

<!-- Footer Start -->
<?php include('footer.php'); ?>
