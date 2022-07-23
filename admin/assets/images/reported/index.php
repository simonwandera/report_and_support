<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>try</title>
    <script src="jquery.min.js"></script>
    <style type="text/css">
    .grid{
      width: 200px; height: 200px; background-color: red; display: inline-block;
      font-size: 25px; margin: 22px; padding: 22px; color: #fff; text-align: center; display: none;
    }

    </style>
  </head>
  <body>

    <form class="" action="" method="post">


    <div class="grid">
      one

      <input type="text" name="one" value="" required>

      <br>
      <button type="button" name="button" onclick="showPrev()">Show Prev</button>
      <button type="button" name="button" onclick="showNext()">Show Next</button>
    </div>

    <div class="grid">
      Two

      <br>
      <input type="text" name="two" value="" required>
      <br>
      <button type="button" name="button" onclick="showPrev()">Show Prev</button>
      <button type="button" name="button" onclick="showNext()">Show Next</button>
    </div>

    <div class="grid">
      Three
      <br>
      <input type="text" name="three" value="" required>
      <br>
      <button type="button" name="button" onclick="showPrev()">Show Prev</button>
      <button type="button" name="button" onclick="showNext()">Show Next</button>
    </div>
    <div class="grid">
      Four
      <br>
      <input type="text" name="four" value="" required>
      <br>
      <button type="button" name="button" onclick="showPrev()">Show Prev</button>
      <button type="button" name="button" onclick="showNext()">Show Next</button>
    </div>
    <div class="grid">
      Five
      <br>
      <input type="text" name="five" value="" required>
      <br>
      <button type="button" name="button" onclick="showPrev()">Show Prev</button>
      <button type="button" name="button" onclick="showNext()">Show Next</button>
    </div>
    <div class="grid">
      Six
      <br>
      <input type="text" name="six" value="" required>
      <br>
      <button type="button" name="button" onclick="showPrev()">Show Prev</button>
      <button type="button" name="button" onclick="showNext()">Show Next</button>
    </div>
    <div class="grid">
      Seven
      <br>
      <input type="text" name="seven" value="" required>
      <br>
      <button type="button" name="button" onclick="showPrev()">Show Prev</button>
      <button type="button" name="button" onclick="showNext()">Show Next</button>
    </div>
    <div class="grid">
      Confirm
      <input type="submit" name="submit" value="submit">

    </div>
  </form>


    <script>
      var visibleDiv = 0;
      function showDiv(){
        $(".grid").hide();
        $(".grid:eq("+ visibleDiv +")").show();
      }
      showDiv();

  function showNext()
  {
    if(visibleDiv== $(".grid").length-1)
    {
      visibleDiv = 0;
    }
    else {
      visibleDiv ++;
    }
    showDiv();
  }


      function showPrev()
      {
        if(visibleDiv == 0)
        {
          visibleDiv= $(".grid").length-1;
        }
        else {
          visibleDiv --;
        }
        showDiv();
      }

    </script>

<?php
if(isset($_POST['submit'])){
  echo $_POST['one'];
  echo "<br>";
  echo $_POST['two'];
  echo "<br>";
  echo $_POST['three'];
  echo "<br>";
  echo $_POST['four'];
  echo "<br>";
  echo $_POST['five'];
  echo "<br>";
  echo $_POST['six'];
  echo "<br>";
  echo $_POST['seven'];
  echo "<br>";
}



 ?>

  </body>
</html>
