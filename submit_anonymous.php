<?php
include('includes/connection.php');
include('nav.php');
 ?>

 <!-- Submit start here -->
 <div class="main col-lg-12 col-md-11 col-sm-12" style="background-color: #e7f9fb; margin: auto;">
   <div class="inner-part text-left mb-50">
       <div class="col-lg-5 col-md-10 col-sm-12 text-justify" style="margin:auto;">
           <div class="fluid-container">
              <?php
              if(isset($_POST['submit_anonymous']))
              {
                $who_answer = $_POST['n1_answer'];
                $conn_answer = $_POST['n2_answer'];
                $rel_answer = $_POST['n3_answer'];
                $dtl_answer = mysqli_real_escape_string($con, $_POST['n4_answer']);
                // $file = "No File provided";
                $file = $_FILES['file']['name'];
                if ($file == '') {
                  $file = "No File provided";
                }else {
                  $target = "admin/assets/uploaded/".basename($file);
                }

                $factor = array();

                //$attachment = $_POST['n1_answer'];

                if(!empty($_POST['factor'])){
                  foreach (($_POST['factor']) as $fact) {
                    if($fact=="other"){
                      continue;
                    }else {
                      array_push($factor, $fact);
                    }
                  }
                }

                if($_POST['n5_other_text'] != ""){
                  array_push($factor, $_POST['n5_other_text']);
                }

                $ever_reported_answer = $_POST['n6_answer'];
                $age_answer = $_POST['age'];
                $disability_answer = $_POST['disabiliy'];
                $ethnicity_answer = $_POST['ethnicity'];
                $gender_answer = $_POST['gender'];
                $same_gender_answer = $_POST['same_gender'];
                $legal_sex_answer = $_POST['legal_sex'];
                $religion_answer = $_POST['religion_answer'];
                $sexual_orientation_answer = $_POST['sexual_orientation_answer'];
                $today = date("Y-m-d");
                $reasons = array();

                if(!empty($_POST['reasons'])){
                  foreach (($_POST['reasons']) as $reason) {
                    if($reason == "Other"){
                      continue;
                    }else {
                      array_push($reasons, $reason);
                    }
                  }
                }else {
                  array_push($reasons, "Not selected");
                }
                if($_POST['why_other_text'] != ""){
                  array_push($reasons, $_POST['why_other_text']);
                }

                $reporter_query = "INSERT INTO respondents (TYPE, DATE_CREATED) VALUES ('anonymous', '$today')";
                if(mysqli_query($con, $reporter_query)){
                  $reporter_id = mysqli_insert_id($con);
                  //echo "the new reporter is: ";
                  //echo $reporter_id;
                }else {
                  echo "Failed to add";
                }
                $answers_query = "INSERT INTO responses(RESPONDENT_ID, QUESTION_ID, ANSWER) VALUES ('$reporter_id',1,'$who_answer'),('$reporter_id',2,'$conn_answer'), ('$reporter_id',3,'$rel_answer'), ('$reporter_id',4,'$dtl_answer'), ('$reporter_id',5,'$file'),('$reporter_id',6,'multiple'), ('$reporter_id',7,'$ever_reported_answer'), ('$reporter_id',8,'$age_answer'), ('$reporter_id',9,'$disability_answer'), ('$reporter_id',10,'$ethnicity_answer'), ('$reporter_id',11,'$gender_answer'), ('$reporter_id',12,'$same_gender_answer'), ('$reporter_id',13,'$legal_sex_answer'), ('$reporter_id',14,'$religion_answer'), ('$reporter_id',15,'$sexual_orientation_answer'),('$reporter_id',16,'multiple')";
                if ($file != "No File provided") {
                  $move = move_uploaded_file($_FILES['file']['tmp_name'], $target);
                  if($move){
                    //do nothing
                  }else {
                    echo "Failed to submit!!";
                  }

                }

                if(mysqli_query($con, $answers_query)){
                  //echo "<h6>Report Submitted</h6>";
                }else {
                  echo "Report not Submitted";
                  //echo mysqli_error($con);
                }

                foreach ($factor as $key) {
                  $factor_query = "INSERT INTO related_factors(RESPONDENT_ID, FACTOR) VALUES ('$reporter_id','$key')";
                  if(mysqli_query($con, $factor_query)){
                    //pass
                  }
                }

                foreach ($reasons as $reason) {
                  $x = mysqli_real_escape_string($con, $reason);

                  $reasons_query = "INSERT INTO anonymous_reasons(RESPONDENT_ID, REASON) VALUES ('$reporter_id','$x')";
                  if(mysqli_query($con, $reasons_query)){
                    //pass
                  }else {
                    echo mysqli_error($con);
                    echo "<br>";
                  }
                }
              }
               ?>
            </div>
            <h2 class="sec-title2 mb-50 text-left">Report Submitted successfully</h2>
            <div class="content-wrap">
              <p>Thank you for submitting your report. We will use this information to better understand the issues impacting our University community, to monitor trends and inform proactive and preventative work.</p>
            </div>
            <h6><?php echo "MSU/RPT/: ".$reporter_id; ?></h6><br>
        </div>
    </div>
  </div>

  <!-- end of submit -->

<!-- Footer Start -->
<?php include('footer.php'); ?>
