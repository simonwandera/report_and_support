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

    <div class="pcoded-content">
        <div class="pcoded-inner-content">
            <div class="main-body">
                <div class="page-wrapper">

                    <!-- <div class="page-body"> -->

                      <div class="row">

                        <div class="col-md-6 col-lg-12">
                            <div class="card widget-card-1">
                                <div class="card-block-small">
                                  <div class="card-header-left">
                                      <h3 class="text-Custom text-center"><b>Link Group Settings Menu</b></h3>
                                      <p class="text-center">Click on the link group settings icon you would like to Edit its content.</p>
                                  </div>
                                  </div>
                                </div>
                        </div>

                        <?php

                        $query1 = "SELECT * FROM link_categories";
                        $query1_result = mysqli_query($con, $query1);
                        if(mysqli_num_rows($query1_result)>0){
                          while ($row = mysqli_fetch_array($query1_result)){
                            $category_id = $row['ID'];
                            $category = $row['CATEGORY'];
                            $image = $row['IMAGE'];
                            //loop
                            ?>



                              <div class="col-md-6 col-lg-4">
                                  <div class="card widget-card-1">
                                      <div class="card-block-small">
                                          <a href="../group_editor.php?id=<?php echo  $category_id ?>"><i class="ti-settings bg-c-blue card1-icon"></i></a>
                                          <br>
                                          <?php
                                              echo "<h4 class = 'text-left'>". $category."  </h4>";
                                           ?>
                                          <div>
                                              <span class="f-left m-t-10 text-muted">
                                                <?php
                                                $query2 = "SELECT COUNT(*) as count_links from links WHERE CATEGORY_ID = $category_id";
                                                $query2_result = mysqli_query($con, $query2);
                                                if(mysqli_num_rows($query2_result)>0){
                                                  while ($row = mysqli_fetch_array($query2_result)){
                                                    $count_links = $row['count_links'];
                                                 ?>
                                                  <i class="text-c-blue f-16 icofont icofont-warning m-r-10"></i><?php echo $count_links." Links available"; ?>
                                              </span>
                                              <?php }} ?>
                                          </div>
                                      </div>
                                  </div>

                              </div>

                        <?php }} ?>
                        <div class="container col-lg-4">
                        <div class="card widget-card-1">
                          <div class="card-block-small ">
                            <i class="ti-plus bg-c-pink card1-icon"></i>
                            <br>
                            <?php
                                echo "<h4 class = 'text-left'>Add new</h4>";
                             ?>
                          </div>
                        </div>
                        </div>

                        </div></div></div></div></div></div>

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
