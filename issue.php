<?php
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'trashtarget_db');
$name=$_POST['name'];
$address=$_POST['address'];
$desc=$_POST['desc'];
$q="insert into prob (Name,Address,Issue) values ('$name','$address','$desc')";
$status=mysqli_query($con,$q);
mysqli_close($con);
header("Location: waste.html");
?>
