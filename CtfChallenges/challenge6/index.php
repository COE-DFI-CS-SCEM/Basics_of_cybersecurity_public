<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<?php
session_start();
$user = "root";
$host="localhost";
$pwd = ""; 
$db = "ctf_db"; 
$conn = mysqli_connect($host, $user, $pwd, $db);
if(!$conn)
{
  echo "Error Connecting the Database ";
}
if(isset($_POST['login']))
{ 
$value1 = $_POST['value1']; 
$value2= $_POST['value2'];
$sql="SELECT * FROM `values` WHERE `value1`='$value1' and `value2` = '$value2';";
$result=mysqli_query($conn, $sql); 
$num = mysqli_num_rows($result);

	if($num>0 ){

		header('location:success.php');

	}
  else{echo'error';

}
}
?>
<body>
<form id="login-form" method="post" action="index.php">
  <h1>MATHC THE VALUES</h1>
  <label for="user">Value1</label>
  <input type="text" name="value1" required>
  <label for="password">Value2</label>
  <input type="password" name="value2" required>
  <input type="submit" value="Match" name="login">
</form>
  
</body>
</html>
 
