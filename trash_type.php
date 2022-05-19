<?php
session_start();
$x=$_SESSION['name'];
$db = new mysqli("localhost","root","","trashtarget_db");
if (isset($_POST['submit'])) {

$trash = implode(',',$_POST['option']);
$time_c = $_POST['time'];
$date = $_POST['date'];
$q = $db->query("INSERT INTO `trashtype_client`(`uname`,`trash`,`pick_date`,`pick_time`) values ('$x','$trash','$date','$time_c')"); 

if($q>0)
{
	echo "<script> alert('Trash is Submitted');</script>";
	header("Location: dashclient.php");
}
else
{
	echo "<script> alert('Please select atleast one Trash');</script>";
}

}


?>