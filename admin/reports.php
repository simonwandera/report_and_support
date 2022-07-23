<!-- NEW ReportS -->
<?php
function archive_report($rpt_id){
  include('../includes/connection.php');
  $sql3 = "UPDATE `respondents` SET `ARCHIVE`= 1 WHERE `ID`='$rpt_id'";
  $res = mysqli_query($con,$sql3);
}
 ?>
<?php
  function new_reports($current_limit){

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


        $sql = "SELECT * FROM reports WHERE (reports.READ = 0) AND (ARCHIVE = 0) ORDER BY ID DESC LIMIT ".$current_limit."";

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
  <?php } ?>

<!-- READ REPORTS -->
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


          $sql = "SELECT * FROM reports WHERE (reports.READ = 1) AND (ARCHIVE = 0)ORDER BY ID DESC LIMIT 5";

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



    <?php
      function archives(){

      ?>
      <table class="table table-hover">
          <thead>
              <tr>
                  <th>Report on:</th>
                  <th>Type</th>
                  <th>Date</th>
              </tr>
          </thead>
          <tbody>
            <?php
            global $con;


            $sql = "SELECT * FROM reports WHERE (ARCHIVE = 1) ORDER BY ID DESC";

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
           </tr>

         <?php }} ?>

          </tbody>
      </table>
      <?php }
      ?>

      <?php
        function logs(){

        ?>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>USERNAME</th>
                    <th>TIMESTAMP</th>
                </tr>
            </thead>
            <tbody>
              <?php
              global $con;


              $sql = "SELECT * FROM logs ORDER BY TIME DESC";

              $myresult = mysqli_query($con, $sql);
              if(mysqli_num_rows($myresult)>0){
                while ($row = mysqli_fetch_array($myresult)){
                  $id = $row['ID'];
                  $username = $row['USERNAME'];
                  $timestamp = $row['TIME'];
                  //loop
                  ?>
              <tr>
                 <td>
                   <a href="single_report.php?id=<?php echo urlencode($id) ?> & type=<?php echo urlencode($type)?> & about=<?php echo urlencode($about); ?>">
                     <div class="task-contain">
                         <h6 class="bg-c-green d-inline-block text-center"><?php echo $id ?></h6>
                     </div>
                     </a>
                 </td>
                 <td>
                     <p class="d-inline-block m-r-20"><?php echo $username; ?></p>

                 </td>
                 <td>
                     <div class="text-primary">
                         <?php echo $timestamp; ?>
                     </div>
                 </td>
             </tr>

           <?php }} ?>

            </tbody>
        </table>
        <?php }
        ?>
<!-- ARVHIVES -->
