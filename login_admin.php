<?php 

 session_start();
  if(isset($_SESSION['name']))
     header("Location: dashadmin.php");
        
?>

<?php 
$mysql_host='localhost';
$mysql_user='root';
$conn = @mysqli_connect($mysql_host,$mysql_user);
if(!$conn)
{
	die ("connection failed");
}
if( !@mysqli_select_db($conn,'trashtarget_db'))
{
	echo "databse not selected";
}

  $namee = $_POST['username'];
  $pass = $_POST['pass'];
  $query = " SELECT username ,  a_password FROM admin_data WHERE username='$namee' AND a_password='$pass'";
  $result = @mysqli_query($conn,$query);
  
  $rowcount = @mysqli_num_rows($result);
  if($rowcount == 1 )
  {
    $_SESSION['name'] = $namee; 
    $x= $_SESSION['name'];   
    header("Location: dashadmin.php");
         
	//   echo "your username and password is correct";
  }
  else{
      $msg = '<p style="margin-top:300px;margin-left:380px;color:red;cursor:pointer;font-size:60px;"> Invalid username or password </p>';
      echo $msg; 
      }
  ?>