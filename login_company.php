<?php 

 session_start();
  if(isset($_SESSION['name']))
     header("Location: dashcompany.php");
        
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

  $nam = $_POST['username'];
  $pass = $_POST['pass'];
  $query = "SELECT username ,  comp_password FROM signup_company WHERE username='$nam' AND comp_password='$pass' ";
  $result = @mysqli_query($conn,$query);
  $rowcount = @mysqli_num_rows($result);
  if($rowcount == 1 )
  {
    $msg = '<p style="margin-top:300px;margin-left:380px;color:red;cursor:pointer;font-size:60px;"> Invalid username or password </p>';
    echo $msg; 
         
	//   echo "your username and password is correct";
  }
  else{
    $_SESSION['name'] = $nam; 
    $x= $_SESSION['name'];   
    header("Location: dashcompany.php");
      }
  ?>
   