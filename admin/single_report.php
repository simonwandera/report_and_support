<?php
 include('sidebar.php');
 include('../includes/connection.php');

 if (($_SESSION['user']) == ""){
   ?>
   <script>window.location.href = 'auth-normal-sign-in.php' </script>";
   <?php
 }
 ?>
        <div class="pcoded-content">
            <div class="pcoded-inner-content">
                <!-- Main-body start -->
            <div class="main-body">
                <div class="page-wrapper">
                <div class="page-body">
                    <div class="card">
                        <div class="card-header">

                          <?php
                          $rpt_id = $_GET['id'];
                          $query1 = "SELECT * FROM anonymous_report WHERE RESPONDENT_ID =".$rpt_id." limit 1";
                          $query1_result = mysqli_query($con, $query1);

                          if(mysqli_num_rows($query1_result)>0){
                            while ($row = mysqli_fetch_array($query1_result)){
                              $date_created = $row['DATE_CREATED'];
                           ?>
                            <h4>Single Report</h4><br>
                            <h5>Report on: <b class = "text-primary"><?php echo $_GET['about']; ?></b></h5>
                            <br>
                            <h5>Date reported: <b class = "text-primary"><?php echo $date_created; ?></b></h5>
                          <?php }} ?>
                        </div>
                        <div class="table-border-style">
                            <div class="table-responsive">
                                <table class="table table-bordered" style="">
                                    <thead>
                                        <tr class = "table-active">
                                            <th>#</th>
                                            <th>Type of Responce</th>
                                            <th>Questions</th>
                                            <th>Responces</th>

                                        </tr>
                                    </thead>
                                    <tbody>

                                      <?php
                                      $report_type = $_GET['type'];
                                      if($report_type == "anonymous"){
                                        $type = "Anonymous report";
                                      }else {
                                        $type = "Report With contact Details";
                                      }

                                      $rpt_id = $_GET['id'];
                                      $update_read = "UPDATE respondents SET respondents.READ = 1 WHERE ID =  '$rpt_id'";
                                      mysqli_query($con,$update_read);
                                      if(true){
                                        $query1 = "SELECT * FROM anonymous_report WHERE RESPONDENT_ID =".$rpt_id." limit 1";
                                        $query1_result = mysqli_query($con, $query1);

                                        $query2 = "SELECT * FROM anonymous_report WHERE RESPONDENT_ID =".$rpt_id."";
                                        $query2_result = mysqli_query($con, $query2);

                                        $query3 = "SELECT * FROM related_factors WHERE RESPONDENT_ID =".$rpt_id."";
                                        $query3_result = mysqli_query($con, $query3);

                                        $query4 = "SELECT * FROM anonymous_reasons WHERE RESPONDENT_ID =".$rpt_id."";
                                        $query4_result = mysqli_query($con, $query4);

                                        $query5 = "SELECT * FROM contact_details WHERE CONTACT_ID =".$rpt_id."";
                                        $query5_result = mysqli_query($con, $query5);

                                        if(mysqli_num_rows($query1_result)>0){
                                          while ($row = mysqli_fetch_array($query1_result)){
                                            $id = $row['RESPONDENT_ID'];
                                            $report_type = $row['TYPE'];
                                            if($report_type == "anonymous"){
                                              $type = "Anonymous report";
                                            }else {
                                              $type = "Report With contact Details";
                                            }
                                            $question = $row['QUESTION'];
                                            $responce = $row['ANSWER'];
                                            $date = $row['DATE_CREATED'];
                                            //loop
                                            ?>
                                          <tr class="table">
                                              <th scope="row" rowspan="16"><?php echo $id ?></th>
                                              <td rowspan="16"><?php echo $type; ?></td>
                                              <td><?php echo $question; ?></td>
                                              <td style="sentence-wrapper"><?php echo $responce; ?></td>
                                          </tr>
                                          <?php }} ?>
                                        <?php
                                        if(mysqli_num_rows($query2_result)>0){
                                          while ($row = mysqli_fetch_array($query2_result)){
                                            $id = $row['RESPONDENT_ID'];
                                            $type = $row['TYPE'];
                                            $q_id = $row['QUESTION_ID'];
                                            $question = $row['QUESTION'];
                                            $responce = $row['ANSWER'];
                                            $date = $row['DATE_CREATED'];
                                              if($q_id == 1 ){
                                                continue;
                                              }
                                              elseif ($q_id == 5) {
                                                ?>
                                              <tr class="table">
                                                <td><?php echo $question; ?></td>
                                              <td>
                                                <?php
                                                if($responce == 'No File provided'){
                                                  echo "No File Attached to this report";
                                                }else {
                                                  ?>
                                                  <a href="download.php?path=assets/uploaded/<?php echo $responce ?>" class="font-weight-bold">Click to Download new the file evidence</a>
                                              <?php
                                            }
                                              echo "</td>";
                                              echo "</tr>";
                                              continue;
                                                }
                                              elseif ($q_id == 6) {
                                                ?>
                                              <tr class="table">
                                                <td><?php echo $question; ?></td>
                                                <td>
                                                <?php
                                                if(mysqli_num_rows($query3_result)>0){
                                                  while ($row = mysqli_fetch_array($query3_result)){
                                                    $id = $row['RESPONDENT_ID'];
                                                    $factor = $row['FACTOR'];
                                                ?>
                                                <li><?php echo $factor ?></li>
                                                <?php
                                                    }
                                                  }
                                              echo "</td>";
                                              echo "</tr>";
                                              continue;
                                                }
                                              elseif ($q_id == 17 && $type == 'with_details') {
                                              ?>
                                              <tr class="table">
                                                <td><?php echo "Contact Details"; ?></td>
                                                <td>
                                                  <?php
                                                  if(mysqli_num_rows($query5_result)>0){
                                                    while ($row = mysqli_fetch_array($query5_result)){
                                                      $id = $row['CONTACT_ID'];
                                                      $name = $row['CONTACT_NAME'];
                                                      $email = $row['CONTACT_EMAIL'];
                                                      $student_no = $row['STUDENT_NUMBER'];
                                                      ?>
                                                      Name: <p><?php echo $name ?></p>
                                                      Email: <p><?php echo $email ?></p>
                                                      Student/Staff no:<p><?php echo $student_no ?></p>
                                                      <?php
                                                    }
                                                  }
                                                  echo "</td>";
                                                  echo "</tr>";
                                                  continue;
                                                  }

                                                  elseif ($q_id == 16 AND $type == 'anonymous') {
                                                    ?>
                                                      <tr class="table">
                                                        <td><?php echo $question; ?></td>
                                                        <td>
                                                          <?php
                                                            if(mysqli_num_rows($query4_result)>0){
                                                              while ($row = mysqli_fetch_array($query4_result)){
                                                                $id = $row['RESPONDENT_ID'];
                                                                $reason = $row['REASON'];
                                                          ?>
                                                          <li><?php echo $reason ?></li>
                                                          <?php
                                                            }
                                                          }
                                                          echo "</td>";
                                                          echo "</tr>";
                                                          continue;
                                                    }
                                                ?>
                                        <tr class="table">
                                          <td><?php echo $question; ?></td>
                                          <td><?php echo $responce; ?></td>
                                        </tr>
                                      <?php }} ?>
                                    </tbody>
                                </table>
                              <?php
                            }
                              ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main-body end -->
        <div id="styleSelector">
        </div>
    </div>
</div>
<script type="text/javascript" src="assets/js/jquery/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="assets/js/popper.js/popper.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/jquery-slimscroll/jquery.slimscroll.js"></script>
<script type="text/javascript" src="assets/js/modernizr/modernizr.js"></script>
<script type="text/javascript" src="assets/js/modernizr/css-scrollbars.js"></script>
<script type="text/javascript" src="assets/js/classie/classie.js"></script>
<script type="text/javascript" src="assets/js/script.js"></script>
<script src="assets/js/pcoded.min.js"></script>
<script src="assets/js/demo-12.js"></script>
<script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
</body>
</html>
