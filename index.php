<!DOCTYPE html>
<html>
<head>
    <title>{FiND_fLAG!}</title>
    <style>
        body {
            font-family: Consolas, monospace;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-image: url("./images/bg_index.jpg");
            background-size: cover;
        }

        .login-container {
            background: rgba(255, 255, 255, 0.5);
            backdrop-filter: blur(2px);
            border-radius: 10%;
            padding: 50px;
            text-align: center;
            width: 300px;
           
          
        }

        .login-container h1 {
            color: #000000;
        }

        .login-container input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: none;
            border-radius: 5px;
        }

        .login-container button {
            background: #fff5f5;
            color: #000000f1;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s, transform 0.3s;
        }

        .login-container button:hover {
            background: #38d78f;
            transform: scale(1.05);
        }
    </style>
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
$username = $_POST['username']; 
$password = $_POST['password'];
 $_SESSION["username"] = $username;
// $username =$_SESSION["username"];
$sql="SELECT * FROM `users` WHERE `username`='$username' and `passwd` = '$password';";
$result=mysqli_query($conn, $sql); 
$num = mysqli_num_rows($result);

	if($num == 1){

		header('location:dashboard.php');

	}

}
?>
<body>
    <div class="login-container">
        <h1><b>CTF</b></h1>
        <h2>{Capture The Flag}</h2>
        <form action="index.php" method="post" id="login">
            <input type="text" placeholder="Username" required name="username" name="username">
            <input type="password" placeholder="Password" required name="password" name="password">
            <button type="submit" name="login"><b>Login</b></button>
        </form>
        <a href="signup.php"><h4>Don't have account? -> SignUp</h4></a>
    </div>
</body>
</html>
