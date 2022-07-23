<?php
// if (!isset($_SESSION['user'])){
//   header('location:auth-normal-sign-in.php');
// }
include('../includes/connection.php');
include('sidebar.php');
include('pdfgenerator.php');
include('reports.php');


if (($_SESSION['user']) == ""){
  ?>
  <script>window.location.href = 'auth-normal-sign-in.php' </script>";

  <?php
}
?>
<?php
if (isset($_POST['archive'])) {
  archive_report($_POST['reportId']);
}
 ?>

             <!-- Modal -->

                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">

                                    <div class="page-body">
                                      <h4 class="text-primary">Top Repoted Cases</h4>
                                        <div class="row">

                                          <!-- card1 start -->

                                          <?php

                                          $query = "SELECT ID, TYPE, DATE_CREATED, ABOUT, COUNT(ABOUT) AS TOTAL FROM reports GROUP BY ABOUT ORDER BY TOTAL DESC LIMIT 4";
                                          $myresults = mysqli_query($con, $query);
                                          if(mysqli_num_rows($myresults)>0){
                                            while ($row = mysqli_fetch_array($myresults)){
                                              $id = $row['ID'];
                                              $type = $row['TYPE'];
                                              $about = $row['ABOUT'];
                                              $date = $row['DATE_CREATED'];
                                              $count = $row['TOTAL'];
                                              //loop
                                              ?>

                                              <div class="col-md-6 col-xl-3">
                                                  <div class="card widget-card-1">
                                                      <div class="card-block-small">
                                                          <i class="ti-user bg-c-blue card1-icon"></i>
                                                          <span class="text-c-blue f-w-600"><?php echo $about; ?></span>
                                                          <?php
                                                            if($count == 1){
                                                              echo "<h4>". $count." Case </h4>";
                                                            }else {
                                                              echo "<h4>". $count." Cases </h4>";
                                                            }
                                                           ?>
                                                          <div>
                                                              <span class="f-left m-t-10 text-muted">
                                                                  <i class="text-c-blue f-16 icofont icofont-warning m-r-10"></i>Just Update
                                                              </span>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>

                                            <?php }} ?>
                                            <!-- card1 end -->
                                            <!-- card1 start -->

                                            <!-- card1 end -->
                                            <!-- card1 start -->

                                            <!-- card1 end -->
                                            <!-- card1 start -->

                                            <!-- card1 end -->
                                            <!-- Statestics Start -->
                                    <div class="col-md-12 col-xl-10">
                                        <div class="card project-task">
                                            <div class="card-header">
                                                <div class="card-header-left ">
                                                  <?php
                                                    $q = "SELECT COUNT(*) as count from reports WHERE (reports.READ = 0) AND (ARCHIVE = 0)";
                                                    $myresults = mysqli_query($con, $q);
                                                    if(mysqli_num_rows($myresults)>0){
                                                      while ($row = mysqli_fetch_array($myresults)){
                                                        $new_count = $row['count'];
                                                      }}
                                                   ?>
                                                    <h4 class="text-danger">New Reports <label class="badge bg-danger"><?php echo $new_count ?></label></h4>
                                                    <form class="" action="" method="post">
                                                      <button type="button" class="btn-danger" name="print" style="">Generate PDF</button>

                                                    </form>
                                                </div>
                                                <div class="card-header-right">
                                                    <ul class="list-unstyled card-option">
                                                        <li><i class="icofont icofont-simple-left "></i></li>
                                                        <li><i class="icofont icofont-maximize full-card"></i></li>
                                                        <li><i class="icofont icofont-minus minimize-card"></i></li>
                                                        <li><i class="icofont icofont-refresh reload-card"></i></li>
                                                        <li><i class="icofont icofont-error close-card"></i></li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="card-block p-b-10">
                                                <div class="table-responsive">


                                                    <?php new_reports(5); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <?php
                                      $q = "SELECT COUNT(*) as count from reports WHERE (reports.READ = 1) AND (ARCHIVE = 0)";
                                      $myresults = mysqli_query($con, $q);
                                      if(mysqli_num_rows($myresults)>0){
                                        while ($row = mysqli_fetch_array($myresults)){
                                          $read_count = $row['count'];
                                        }}
                                     ?>
                                    <div class="col-md-12 col-xl-10">
                                        <div class="card project-task">
                                            <div class="card-header">
                                                <div class="card-header-left ">
                                                    <h4 class="text-primary">Read Reports<label class="badge bg-primary"><?php echo $read_count ?></label></h4>
                                                    <form class="" action="" method="post">
                                                      <button type="button" class="btn-danger" name="print" style="">Generate PDF</button>

                                                    </form>
                                                </div>
                                                <div class="card-header-right">
                                                    <ul class="list-unstyled card-option">
                                                        <li><i class="icofont icofont-simple-left "></i></li>
                                                        <li><i class="icofont icofont-maximize full-card"></i></li>
                                                        <li><i class="icofont icofont-minus minimize-card"></i></li>
                                                        <li><i class="icofont icofont-refresh reload-card"></i></li>
                                                        <li><i class="icofont icofont-error close-card"></i></li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="card-block p-b-10">
                                                <div class="table-responsive">


                                                    <?php read_reports(); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php

                                    $query = "SELECT COUNT(*) AS COUNT_ARCHIVES FROM reports WHERE ARCHIVE = 1";
                                    $myresults = mysqli_query($con, $query);
                                    if(mysqli_num_rows($myresults)>0){
                                      while ($row = mysqli_fetch_array($myresults)){
                                        $count_archives = $row['COUNT_ARCHIVES'];
                                          }
                                        }
                                     ?>


                                    <div class="col-md-12 col-xl-10">
                                        <div class="card project-task">
                                            <div class="card-header">
                                                <div class="card-header-left ">
                                                    <h4 class="text-primary">Archives<label class="badge badge-warning"><?php echo $count_archives ?></label></h4>

                                                </div>
                                                <div class="card-header-right">
                                                    <ul class="list-unstyled card-option">
                                                        <li><i class="icofont icofont-simple-left "></i></li>
                                                        <li><i class="icofont icofont-maximize full-card"></i></li>
                                                        <li><i class="icofont icofont-minus minimize-card"></i></li>
                                                        <li><i class="icofont icofont-refresh reload-card"></i></li>
                                                        <li><i class="icofont icofont-error close-card"></i></li>
                                                    </ul>

                                                </div>
                                            </div>

                                            <div class="card-block p-b-10">
                                                <div class="table-responsive">
                                                  <a href="archives.php">
                                                  <button type="button" class="btn btn-primary btn-outline-primary" name="button">View archives</button>
                                                  </a>


                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                            <!-- Email Sent End -->
                                            <!-- Data widget start -->

                                    </div>

                                    <div id="styleSelector">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="fixed-button">

                </div>
            </div>
        </div>

        <!-- Trigger the modal with a button -->


        <!-- Warning Section Starts -->
        <!-- Older IE warning message -->
    <!--[if lt IE 9]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="assets/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->
<!-- Warning Section Ends -->
<!-- Required Jquery -->
<script type="text/javascript" src="assets/js/jquery/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="assets/js/popper.js/popper.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap/js/bootstrap.min.js"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="assets/js/jquery-slimscroll/jquery.slimscroll.js"></script>
<!-- modernizr js -->
<script type="text/javascript" src="assets/js/modernizr/modernizr.js"></script>
<!-- am chart -->
<script src="assets/pages/widget/amchart/amcharts.min.js"></script>
<script src="assets/pages/widget/amchart/serial.min.js"></script>
<!-- Todo js -->
<script type="text/javascript " src="assets/pages/todo/todo.js "></script>
<!-- Custom js -->
<script type="text/javascript" src="assets/pages/dashboard/custom-dashboard.js"></script>
<script type="text/javascript" src="assets/js/script.js"></script>
<script type="text/javascript " src="assets/js/SmoothScroll.js"></script>
<script src="assets/js/pcoded.min.js"></script>
<script src="assets/js/demo-12.js"></script>
<script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script>
var $window = $(window);
var nav = $('.fixed-button');
    $window.scroll(function(){
        if ($window.scrollTop() >= 200) {
         nav.addClass('active');
     }
     else {
         nav.removeClass('active');
     }
 });
</script>
</body>

</html>
