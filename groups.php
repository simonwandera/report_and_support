<div id="rs-popular-courses" class="rs-popular-courses style4 orange-color pt-110 pb-120 md-pt-70 md-pb-80" style="background-color: #eeeeef">
    <div class="container">
      <div class="content-wrap text-center">
      </div>
        <div class="row">

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



          <div class="col-lg-4 col-md-6 mb-30">
              <div class="courses-item" >
                  <div class="img-part" style="height:167px;">
                      <img src="assets/images/<?php echo $image; ?>" alt="">
                  </div>
                  <div class="content-part" style="background-color: #fff; height: 8cm">
                      <div style="background-color:#21a7d0;">
                        <a href="#"><h3><?php echo $category; ?></h3></a>
                      </div>
                      <div class="" style="font-family: sans-serif;">
                        <ul>



                        <?php
                        $query2 = "SELECT * FROM links WHERE CATEGORY_ID =".$category_id."";
                        $query2_result = mysqli_query($con, $query2);

                        if(mysqli_num_rows($query2_result)>0){
                          while ($row = mysqli_fetch_array($query2_result)){
                            $link_id = $row['ID'];
                            $link_name = $row['LINK_NAME'];
                            $add = $row['ADDRESS'];
                            $address = mysqli_real_escape_string($con, $add);


                            //loop
                            ?>
                            <li><a href="<?php echo "//".$address; ?>" style="color:blue"><?php echo $link_name; ?></a><br><br></li>


                          <?php }} ?>
                          </ul>


                      </div>
                      <style>
                      div.bottom-part{
                        position: absolute;
                        bottom: 0px;
                        right: 50%;

                      }


                      </style>

                  </div>
              </div>
          </div>

          <?php }} ?>


        </div>
    </div>
</div>
