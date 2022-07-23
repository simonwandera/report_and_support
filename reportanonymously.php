<!-- Nav stars here -->
<?php
include('nav.php');
 ?>
 <!-- End of Nav -->
 <!-- header container start here -->

<div class="text-center fluid-container">
   <h2 class="title mb-15">Report anonymously</h2>
</div>

<form class="" action="submit_anonymous.php" method="post" enctype="multipart/form-data">

  <div class="main" style="background-color: #eeeeef;" >
      <div class="container">
        <div class="row justify-content-center">
           <div class="col-sm-12 col-md-10 col-lg-6">
              <p class="text-justify">We understand that there any many reasons you may be choosing to report anonymously. We use anonymous reports to better understand the issues impacting our University community, to monitor trends and inform proactive and preventative work. If you choose to make an anonymous report, we will not be able to identify you or contact you to offer direct support. We will not be able to initiate an investigation or formal process on the basis of an anonymous report. The exception to this is if the duty of care guidance applies. If you would prefer, you can make a report with contact details, and an appropriate member of staff will be in touch to speak to you about the options available to you.</p>

              <div class="container-fluid">
                  <input type="button" name="n0" value="Continue" class = "btn btn-primary btn-block btn-cont" style="height:4em">
              </div>
              <br><br>
            </div>
        </div>
      </div>
  </div>

  <?php include('common_quiz.php') ?>

  <!-- Question seven starts here -->
<div class="main col-lg-12 col-md-12 col-sm-12" style="background-color: #eeeeef; margin: auto;" >
  <div class="inner-part text-justify mb-50">
    <div class="text-left col-lg-8 col-md-10 col-sm-12" style="margin: auto;">
      <h4>Can you tell us why you've chosen to report anonymously?</h4>
      <h3 style="color:grey">select all that apply (optional)</h3>
    </div>

    <div class="text-left col-lg-7 col-md-10 col-sm-12" style="margin: auto;">
      <div class="row">
        <div class="text-right" style="padding:10px">
          <input type="checkbox" name="reasons[]" value="I've reported in the past and nothing happened" class = "form-control reasons" id="reason_one" style="height:30px; width: 30px">
        </div>
        <div class="text-left" style="padding:10px">
          <label for="reason_one">I have reported in the past and nothing happened</label>
        </div>
      </div><br>

      <div class="row">
        <div class="text-right" style="padding:10px">
          <input type="checkbox" name="reasons[]" value="I'm worried I won't be believed" class = "form-control reasons" id="reason_two" style="height:30px; width: 30px">
        </div>
        <div class="text-left" style="padding:10px">
          <label for="reason_two">I'm worried I won't be believed</label>
        </div>
      </div><br>

      <div class="row">
        <div class="text-left" style="padding:10px">
          <input type="checkbox" name="reasons[]" value="I feel embarrassed/ashamed" class = "form-control reasons" id="reason_three" style="height:30px; width: 30px">
        </div>
        <div class="text-left" style="padding:10px">
          <label for="reason_three">I feel embarrassed/ashamed</label>
        </div>
      </div><br>

      <div class="row">
        <div class="text-left" style="padding:10px">
          <input type="checkbox" name="reasons[]" value="I'm worried about the repercussion for me or others" class = "form-control reasons" id="reason_four" style="height:30px; width: 30px">
        </div>
        <div class="text-left" style="padding:10px">
          <label for="reason_four">I'm worried about the repercussion for me or others</label>
        </div>
      </div><br>

      <div class="row">
        <div class="text-left" style="padding:10px">
          <input type="checkbox" name="reasons[]" value="I don't want to get anyone in trouble" class = "form-control reasons" id="reason_five" style="height:30px; width: 30px">
        </div>
        <div class="text-left" style="padding:10px">
          <label for="reason_five">I don't want to get anyone in trouble</label>
        </div>
      </div><br>

      <div class="row">
        <div class="text-left" style="padding:10px">
          <input type="checkbox" name="reasons[]" value="I'm worried about being called a trouble maker" class = "form-control reasons" id="reason_six" style="height:30px; width: 30px">
        </div>
        <div class="text-left" style="padding:10px">
          <label for="reason_six">I'm worried about being called a trouble maker</label>
        </div>
      </div><br>

      <div class="row">
        <div class="text-left" style="padding:10px">
          <input type="checkbox" name="reasons[]" value="I'm concerned it might impact my future career/studies" class = "form-control reasons" id="reason_seven" style="height:30px; width: 30px">
        </div>
        <div class="text-left" style="padding:10px">
          <label for="reason_seven">I'm concerned it might impact my future career/studies</label>
        </div>
      </div><br>

      <div class="row">
        <div class="text-left" style="padding:10px">
          <input type="checkbox" name="reasons[]" value="I've reported it but no-one took me seriously" class = "form-control reasons" id="reason_eight" style="height:30px; width: 30px">
        </div>
        <div class="text-left" style="padding:10px">
          <label for="reason_eight">I've reported it but no-one took me seriously</label>
        </div>
      </div><br>

      <div class="row">
        <div class="text-left" style="padding:10px">
          <input type="checkbox" name="reasons[]" value="I want the University to have this information" class = "form-control reasons" id="reason_nine" style="height:30px; width: 30px">
        </div>
        <div class="text-left" style="padding:10px">
          <label for="reason_nine">I want the University to have this information</label>
        </div>
      </div><br>

      <div class="row">
        <div class="text-left" style="padding:10px">
          <input type="checkbox" name="reasons[]" value="The person didn't want to report it themselves" class = "form-control reasons" id="reason_ten" style="height:30px; width: 30px">
        </div>
        <div class="text-left" style="padding:10px">
          <label for="reason_ten">The person didn't want to report it themselves</label>
        </div>
      </div><br>

      <div class="row">
        <div class="text-left" style="padding:10px">
          <input type="checkbox" name="reasons[]" value="I don't know what to do" class = "form-control reasons" id="reason_eleven" style="height:30px; width: 30px">
        </div>
        <div class="text-left" style="padding:10px">
          <label for="reason_eleven">I don't know what to do</label>
        </div>
      </div><br>

      <div class="row">
        <div class="text-left" style="padding:10px">
          <input type="checkbox" name="reasons[]" value="I don't want anyone to know what happened" class = "form-control reasons" id="reason_twelve" style="height:30px; width: 30px">
        </div>
        <div class="text-left" style="padding:10px">
          <label for="reason_twelve">I don't want anyone to know what happened</label>
        </div>
      </div><br>

      <div class="row">
        <div class="text-left" style="padding:10px">
          <input type="checkbox" name="reasons[]" value="I feel like they have more authority than me" class = "form-control reasons" id="reason_thirteen" style="height:30px; width: 30px">
        </div>
        <div class="text-left" style="padding:10px">
          <label for="reason_thirteen">I feel like they have more authority than me</label>
        </div>
      </div><br>

      <div class="row">
        <div class="text-left" style="padding:10px">
          <input type="checkbox" name="reasons[]" value="Other" class = "form-control reasons" id="reason_forteen" style="height:30px; width: 30px">
        </div>
        <div class="text-left" style="padding:10px">
          <label for="reason_forteen">Other</label>
          <input type="text" name="why_other_text" id = "why_other_text" class = "form-control why_other" placeholder="please describe here">
          <font id = "error14" class = "error-msg"></font>
        </div>
      </div>
      </div>
    </div><br>

    <div class="col-lg-6 col-md-12 col-sm-12" style="margin:auto; padding-bottom: 10px">
        <div class="row justify-content-center">

               <div class="col">
                  <input type="button" name="n_a_8" value="< Back" class = "btn btn-primary btn-block btn-back" style="height:3em">
              </div>

               <div class="col">
                  <input type="button" name="n_a_8" value="Continue" class = "btn btn-primary btn-block btn-cont" style="height:3em">
              </div>
          </div>
      </div>
  </div>
  <!-- Anonymous questions seven Ends here -->

  <!-- Submit starts here -->
  <div class="main col-lg-12 col-md-11 col-sm-12" style="background-color: #eeeeef; margin: auto;">
   <div class="inner-part text-left mb-50">
      <div class="text-justify" style="margin:auto;">
        <div class="col-lg-8 col-md-11 col-sm-12" style="margin:auto;">
            <p>By submitting an anonymous form, you will not receive any contact from the University regarding the report. If you would prefer to be contacted by a member of staff, please <a href="reportwithdetails.php" style="color:blue">complete a report with contact details</a>. Information already entered will be copied over to the new report. Any information you provide anonymously will still be used to inform proactive and preventative work by the University.</p>
        </div>
      </div>
    </div>
    <div class="col-lg-6 col-md-12 col-sm-12" style="margin:auto; padding-bottom: 10px">
      <div class="row justify-content-center">
          <div class="col">
             <input type="button" name="n" value="< Back" class = "btn btn-primary btn-block btn-back" style="height:3em">
           </div>
           <div class="col">
              <input type="submit" name="submit_anonymous" value="Submit Report" class = "btn btn-primary btn-block " style="height:3em">
           </div>
        </div>
    </div>
  </div>
  <!-- submit ends here -->

</form>
<script type="text/javascript">
</script>
  <!-- support start here -->

<!-- Footer Start -->
<?php include('footer.php'); ?>
