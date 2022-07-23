<table border="1">
  <thead>
    <tr>
      <th>name</th>
      <th>Question</th>
      <th>Answer</th>
      <th>Date</th>
    </tr>
  </thead>
  <tbody>

<?php
$host = "localhost";
$user = "root";
$password = '';
$db_name = "support";

$con = mysqli_connect($host, $user, $password, $db_name);
if(mysqli_connect_errno()) {
    die("Failed to connect with MySQL: ". mysqli_connect_error());
}
//
//
// $sql = "INSERT INTO Admin(USERNAME) VALUES ('Sir Alex'),('Sir Alex'),('Sir Alex');";
// if(mysqli_query($con, $sql)){
//   echo "Added successfully";
//   $reporter_id = mysqli_insert_id($con);
//   echo "last id: ";
//   echo $reporter_id;
// }

include('includes/connection.php');
$sql = "SELECT ID FROM respondents WHERE id = 7";
$result = mysqli_query($con, $sql);
if(mysqli_num_rows($result)>0){
  while ($row = mysqli_fetch_array($result)){
    $id = $row['ID'];

 ?>

    <tr>
      <td rowspan = 3">simon</td>
      <td>What is your age</td>
      <td>23</td>
      <td rowspan="3">2/3/2020</td>
    </tr>
    <tr>
      <td>What is your home</td>
      <td>Busia</td>
    </tr>
    <tr>

      <td>Why are you reporting this</td>
      <td>I was harrased</td>
    </tr>

  </tbody>

</table>
