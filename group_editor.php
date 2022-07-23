<?php
include('connection.php');
include('nav.php');
include('serverEditor.php');

if (($_SESSION['user']) == ""){
  ?>
  <script>window.location.href = 'admin/auth-normal-sign-in.php' </script>";

  <?php
}

if(isset($_POST['addLink'])){
  addLink($_POST['linkName'], $_POST['linkAddress'], $_GET['id']);
}

if(isset($_POST['dropLink'])){
  dropLink($_POST['linkId']);
}

if (isset($_POST['btn_delete_group'])) {
  deleteGroup($_GET['id']);
}

if (isset($_POST['btn_update_group'])) {
  updateGroup($_GET['id']);
}
 ?>

 <!-- header container start here -->
<div class="main-content">
  <div class="why-choose-us style2 gray-bg3 pt-100 pb-100 md-pt-70 md-pb-70">
      <div class="container">
         <div class="column">
             <div class="content-wrap text-center">
                  <div class="sec-title2 mb-40 col-sm-12">
                      <h2 class="sec-title2 mb-50">Group Editor</h2>
                  </div>
             </div>
         </div>
      </div>
  </div>
  <section class="intro-section gray-bg pt-94 pb-100 md-pt-64 md-pb-70">
      <div class="container">
          <div class="row clearfix">
              <!-- Content Column -->
              <div class="col-lg-8 md-mb-50">
                  <!-- Intro Info Tabs-->
                  <div class="intro-info-tabs">
                      <ul class="nav nav-tabs intro-tabs tabs-box" id="myTab" role="tablist">
                          <li class="nav-item tab-btns">
                              <a class="nav-link tab-btn active" id="prod-overview-tab" data-toggle="tab" href="#prod-overview" role="tab" aria-controls="prod-overview" aria-selected="true">Group Links</a>
                          </li>


                      </ul>
                      <div class="tab-content tabs-content" id="myTabContent">
                          <div class="tab-pane tab fade show active" id="prod-overview" role="tabpanel" aria-labelledby="prod-overview-tab">
                              <div class="content white-bg pt-30">
                                  <!-- Cource Overview -->
                                  <div class="course-overview">
                                      <div class="inner-box">
                                        <?php
                                        $id = $_GET['id'];
                                        $query1 = "SELECT * FROM link_categories WHERE ID = ".$id."";
                                        $query1_result = mysqli_query($con, $query1);
                                        if(mysqli_num_rows($query1_result)>0){
                                          while ($row = mysqli_fetch_array($query1_result)){
                                            $category_id = $row['ID'];
                                            $category = $row['CATEGORY'];
                                            $image = $row['IMAGE'];

                                          }}
                                            ?>
                                          <h4><?php echo $category; ?></h4>

                                          <h6>Availale links</h6>
                                          <ul class="review-list">
                                            <div class="table-responsive">
                                              <table class="table">
                                                <thead>
                                                  <tr>
                                                    <th>Link Name</th>
                                                    <th>address</th>
                                                    <th>action</th>
                                                  </tr>
                                                </thead>


                                            <?php
                                            $id = $_GET['id'];
                                            $query1 = "SELECT * FROM links WHERE CATEGORY_ID = ".$id."";
                                            $query1_result = mysqli_query($con, $query1);
                                            if(mysqli_num_rows($query1_result)>0){
                                              while ($row = mysqli_fetch_array($query1_result)){

                                                $link_id = $row['ID'];
                                                $link_name = $row['LINK_NAME'];
                                                $address = $row['ADDRESS'];
                                                $category_id = $row['CATEGORY_ID'];
                                                ?>
                                                <form class=""  method="post">

                                                    <input type="hidden" name="linkId" value="<?php echo $link_id; ?>">
                                                    <tr>
                                                      <td><a href="<?php echo $address ?>" style="color:blue"><?php echo "$link_name" ?></a></td>
                                                      <td><?php echo "$address"; ?></td>
                                                      <td><button type="submit" class="btn btn-info" name="dropLink">Drop</button></td>
                                                    </tr>
                                                  </form>

                                                <?php
                                              }
                                            }
                                                ?>

                                                </table>
                                          </ul>
                                          <h6>Add new Link</h6>
                                          <ul class="review-list">
                                              <form class="" action="" method="post">
                                                  <div class="col-lg-6 mb-35 col-md-6 col-sm-6">
                                                  <label for="name">Link Name:</label><br>
                                                    <input type="text" class="form-control col-lg-12" id="name" name="linkName" placeholder="Name" required="">
                                                </div>
                                                <div class="col-lg-6 mb-35 col-md-6 col-sm-6">
                                                  <label for="name">Address: </label><br>
                                                    <input class="form-control col-lg-12" type="text" id="name" name="linkAddress" placeholder="Link Address" required="">
                                                </div>

                                                <div class="col-lg-6 mb-35 col-md-6 col-sm-6">
                                                    <input type="submit" class="btn readon2 blue" name="addLink" value="Add">
                                                </div>

                                              </form>
                                          </ul>
                                      </div>
                                  </div>
                              </div>
                          </div>

                      </div>
                  </div>
              </div>

              <!-- Group Column -->

              <div class="video-column col-lg-4">
                  <div class="inner-column">
                  <!-- Video Box -->
                      <div class="intro-video media-icon orange-color2">
                          <img class="video-img" src="assets/images/<?php echo $image ?>" alt="Video Image" style="height:167px; width:327px">

                          <h4>Preview this Group</h4>
                      </div>
                      <!-- End Video Box -->
                      <form action="" method="post" enctype="multipart/form-data">
                      <div class="course-features-info">
                        <input type="hidden" name="category_id" value="<?php echo $category_id; ?>">
                          <ul>
                              <div class="form-group">
                                  <label for="Title">Edit Title:</label>
                                  <input type="text" class="form-control" id="email" placeholder="Edit Title" name="title" value="<?php echo $category; ?>">
                              </div>
                              <div class="form-group">
                                <label for="pwd">Change Image :</label>
                                <input type="file" class="form-control" id="file" placeholder="Choose file" name="image">
                              </div>
                          </ul>
                      </div>
                      <div class="btn-part">
                          <input type="submit" class="btn readon2 blue" name="btn_update_group" value="Update">
                      </div>
                      <div class="btn-part">
                          <input type="submit" class="btn readon2 orange" name="btn_delete_group" value="Delete Group">
                      </div>
                    </form>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- support start here -->

</div>

<!-- Footer Start -->
<?php include('footer.php'); ?>
