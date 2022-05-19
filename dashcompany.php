<?php
session_start();
if(!isset($_SESSION['name']  ) )
header("Location: login_page_company.php");

?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Yoga Studio Template">
    <meta name="keywords" content="Yoga, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CrossFit | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:400,500,600,700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/nav.css" type="text/css">

    <style>



#trash {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#trash td, #trash th {
  border: 1px solid #ddd;
  padding: 8px;
}

#trash tr:nth-child(even){background-color: #f2f2f2;}

#trash tr:hover {background-color: #ddd;}

#trash th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: rgb(155,217,81);
  color: white;
}

* {
  box-sizing: border-box;
}

.zoom {
  padding: 50px;
  
  transition: transform .2s;
  width: 200px;
  height: 200px;
  margin: 0 auto;
}

.zoom:hover {
  -ms-transform: scale(1.5); /* IE 9 */
  -webkit-transform: scale(1.5); /* Safari 3-8 */
  transform: scale(1.5); 
}

    </style>
</head>

<body>
    <!-- Page Preloder -->
    <ul>
  <li ><a  class="active" href="home.html" style="font-size:16.5px; font-family: 'Oswald', sans-serif;"><?php   echo  " WELCOME    :&nbsp; " .  $_SESSION['name'] ; ?></a></li>
 <li style="float:right;"><form action="logout.php" method="post"> <button style=" background-color:rgb(130,208,38); color:white; font-size:30px; font-family: 'Oswald', sans-serif;" name="sub" >Sign Out</button></form>
</ul>
<br>
<hr>
<h1>New Requests</h1>
<br>
<br>
<div class="container" style="height:auto;" id="trash">
<form action="request.php" method="POST">
<table width=100%>
  <tr>
    
    <th>Client Name</th>
    <th>Trash</th>
    <th>Date</th>
    <th>Time</th>
    <th>Location</th>
    <th>Status</th>
  </tr>
<?php
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'trashtarget_db');

$s="SELECT signup_client.c_name,trash,pick_date,pick_time,signup_client.c_adr  FROM trashtype_client, signup_client where signup_client.c_username=trashtype_client.uname and status='PENDING'";  
$result=mysqli_query($con,$s);
while($record=mysqli_fetch_assoc($result))
{
  echo "<tr>";

  echo "<td>".$record['c_name']."</td>";
  echo "<td>".$record['trash']."</td>";
  echo "<td>".$record['pick_date']."</td>";
  echo "<td>".$record['pick_time']."</td>";
  echo "<td>".$record['c_adr']."</td>";
  echo "<td> &nbsp; <input type='text' name='status' value=''> </td>";
 

  echo "</tr>";
}
mysqli_close($con);
?>
<button type="submit" class="registerbtn">Update</button>
</table>
</form>
<br>
<br>

</div>
<br>
<br>
<footer class="footer-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-text">
                        <div class="reserved"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | <a href="home.html">TargetTrash</a> <i class="fa fa-heart-o" aria-hidden="true"></i>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
<div class="social-links">
        <a href="#"><i class="fa fa-pinterest"></i></a>
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-instagram"></i></a>
    </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->
    <!-- Search model -->
	<div class="search-model">
		<div class="h-100 d-flex align-items-center justify-content-center">
			<div class="search-close-switch">+</div>
			<form class="search-model-form">
				<input type="text" id="search-input" placeholder="Search here.....">
			</form>
		</div>
	</div>
    <!-- Search model end -->
    
    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/circle-progress.min.js"></script>
    <script src="js/main.js"></script>
    </body>

</html>