<?php
function addLink($Name, $Address, $category_id){
include('connection.php');
  $sql = "INSERT INTO `links`(`LINK_NAME`, `ADDRESS`, `CATEGORY_ID`) VALUES ('$Name', '$Address', '$category_id')";
  if(mysqli_query($con, $sql)){
      echo '<script>alert("Link Added")</script>';
  }else {
      echo mysqli_error($con);
      echo '<script>alert("Error")</script>';
    }

}

  function dropLink($link_id){
    include('connection.php');
    $sql = "DELETE FROM links WHERE ID = '$link_id'";
    if(mysqli_query($con, $sql)){
        echo '<script>alert("Link Deleted")</script>';
    }else {
        echo mysqli_error($con);
        echo '<script>alert("Error")</script>';
      }
  }

  function updateGroup($category_id){

      include('connection.php');

      $category_id = $_POST['category_id'];
      $sql = "SELECT IMAGE FROM link_categories WHERE ID = $category_id";
      $result = mysqli_query($con, $sql);
      if(mysqli_num_rows($result)>0){
        while ($row = mysqli_fetch_array($result)){
          $default_image = $row['IMAGE'];
        }
      }

      $image = $_FILES['image']['name'];
      if($image == ""){
        $image = $default_image;
      }
      $target = "assets/images/".basename($image);
      $category = $_POST['title'];

      $sql3 = "UPDATE `link_categories` SET `CATEGORY`='$category', `IMAGE`='$image' WHERE `ID`='$category_id'";

      $move = move_uploaded_file($_FILES['image']['tmp_name'], $target);
      $res = mysqli_query($con,$sql3);
      if($res){
          echo '<script>alert("'.$category.' Updated sussessfully")</script>';
      }else {
          echo '<script>alert("Error")</script>';
      }
    }


    function deleteGroup($category_id){

        include('connection.php');

        $sql3 = "DELETE FROM `links` WHERE `CATEGORY_ID`='$category_id'";
        $sql4 = "DELETE FROM `link_categories` WHERE `ID`='$category_id'";

        $res = mysqli_query($con,$sql3);
        $res2 = mysqli_query($con,$sql4);
        if($res){
            echo '<script>alert("Links related to this group were Deleted permanently")</script>';
        }else {
            echo '<script>alert("Error")</script>';
        }

        if($res2){
            echo '<script>alert("'.$category.' Deleted successfully")</script>';
            echo '<script>window.location.href = "admin/linkCategorySettings.php" </script>';
        }else {
            echo '<script>alert("Error")</script>';
        }

      }

 ?>
