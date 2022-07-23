<?php
// if (!isset($_SESSION['user'])){
//   header('location:auth-normal-sign-in.php');
// }


include('../includes/connection.php');
include('sidebar.php');
include('pdfgenerator.php');
include('archive_manager.php');

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

                                        <div class="row">

                                          <!-- card1 start -->


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
                                                    <h4 class="text-danger">Read Reports</h4>
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
                                                  <?php
                                                    function read_reports(){

                                                    ?>
                                                    <table class="table table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th>Report on:</th>
                                                                <th>Type</th>
                                                                <th>Date</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                          <?php
                                                          global $con;


                                                          $sql = "SELECT * FROM reports WHERE (reports.READ = 1) AND (reports.ARCHIVE = 0) ORDER BY ID DESC";

                                                          $myresult = mysqli_query($con, $sql);
                                                          if(mysqli_num_rows($myresult)>0){
                                                            while ($row = mysqli_fetch_array($myresult)){
                                                              $id = $row['ID'];
                                                              $type = $row['TYPE'];
                                                              $about = $row['ABOUT'];
                                                              $date = $row['DATE_CREATED'];
                                                              //loop
                                                              ?>

                                                              <tr>
                                                             <td>
                                                               <a href="single_report.php?id=<?php echo urlencode($id) ?> & type=<?php echo urlencode($type)?> & about=<?php echo urlencode($about); ?>">
                                                                 <div class="task-contain">
                                                                     <h6 class="bg-c-green d-inline-block text-center ti-email"></h6>
                                                                     <p class="d-inline-block m-l-20"><?php echo $about; ?></p>
                                                                 </div>
                                                                 </a>
                                                             </td>
                                                             <td>
                                                                 <p class="d-inline-block m-r-20"><?php echo $type; ?></p>

                                                             </td>
                                                             <td>
                                                                 <div class="text-primary">
                                                                     <?php echo $date; ?>
                                                                 </div>
                                                             </td>
                                                             <td>
                                                                 <div class="text-primary">
                                                                     <form class="" action="" method="post">
                                                                       <input type="hidden" name="reportId" value="<?php echo $id ; ?>">
                                                                       <button type="submit" class="btn-info"name="archive">Archive</button>
                                                                     </form>
                                                                 </div>
                                                             </td>

                                                         </tr>

                                                       <?php }} ?>

                                                        </tbody>
                                                    </table>
                                                    <?php }
                                                    ?>

                                                    <?php read_reports(); ?>
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
