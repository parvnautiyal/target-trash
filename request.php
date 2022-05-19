<?php
 session_start();
  if(isset($_SESSION['name']))
     header("Location: dashcompany.php");
$con = mysqli_connect('localhost','root');
mysqli_select_db($con,'trashtarget_db');
if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}
$status = $_POST['status'];


$q = "UPDATE trashtype_client SET status='$ACCEPTED' ";

    mysqli_query($con,$q);
mysqli_close($con);
header("Location: dashcompany.php");
?>