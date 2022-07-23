<?php
function archive_report($rpt_id){
  include('../includes/connection.php');
  $sql3 = "UPDATE `respondents` SET `ARCHIVE`= 1 WHERE `ID`='$rpt_id'";
  $res = mysqli_query($con,$sql3);
}
 ?>
