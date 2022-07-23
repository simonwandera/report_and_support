<?php

  session_start();
  $_SESSION['user'] = "";
  $_SESSION['title'] = '';
  session_unset();
  session_destroy();

  header("location:../index.php");


 ?>
