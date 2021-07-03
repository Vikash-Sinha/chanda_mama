<!-- Database connection -->
<?php


  $dbname = 'newdashboard';
  $host = 'localhost';
  $username = 'root';
  $password = '';

  $conn = mysqli_connect($host,$username,$password,$dbname) or die("Connection Failed");

  // if(!$conn){
  //   echo 'Connection Error '.mysqli_error($conn);
  // }

?>
