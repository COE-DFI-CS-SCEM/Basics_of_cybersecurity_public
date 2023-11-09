<!DOCTYPE html>
<html>
<head>
    <title>Submission</title>
    <style>
        body {
            font-family: Consolas, monospace;
            
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-image:url("./images/flag_submit.jpg") ;
            background-size: cover;
        }
        .login-container {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(1px);
            border-radius: 50px;
            padding: 50px;
            text-align: center;
            width: 400px;
            
            
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
        #back{
            background-color: #4CAF50; 
            border: none;
            color: white;
            padding: 5px 10px;
            border-radius: 5%;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin-bottom: 600px;
            margin-left: -400px;
        }
        .back_button{
            background-color: rgba(10, 88, 19, 1);
            background-color: #4CAF50; 
            border: none;
            color: white;
            padding: 5px 10px;
            border-radius: 5%;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 15px;
            margin-bottom: 600px;
            margin-left: -400px;
        }
        .back_button:hover{
            background-color: rgba(10, 88, 19, 1);
            transition: 0.7s;
        }
        
       
    </style>
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
if(isset($_POST['submit']))
{ 
$ch_no = $_POST['ChallengeNo']; 
$flag = $_POST['flag'];
global $test;
$query="SELECT * FROM `flags` WHERE ch_no='$ch_no' AND flag='$flag'";
$query_run=mysqli_query($conn,$query);
if(!$query_run)
{
    die('Error'.mysqli_error($conn));
}
if (mysqli_num_rows($query_run) > 0) 
{
    echo 'hello';
    $temp=$_SESSION['username'];
    $query1="INSERT INTO `submission`(`username`, `ch_no`, `time`) VALUES ('$temp','$ch_no',current_timestamp())";
    $run1 = mysqli_query($conn, $query1);
    if ($run1) {
        header('location:right.php'); 
    }
    
   
   }
   
    
    else
    {
        header('location:wrong.php');
      
    }
}
?>
</head>
<body>
    <div>
 <a href="dashboard.php"><button type="button" class="back_button" >Back to Dashboard</button></a>
    </div>
    <div class="login-container" align>
        
        <h2>{Submit_Your_FLAG}</h2>
        <form action="flagsubmit.php" method="post">
            <form action="" method="post">
                <label style="font-size: large;" for="ChallengeNo">Challenge No:</label>
                <select id="ChallengeNo" name="ChallengeNo">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                </select>
                <input type="text" placeholder="FLAG{your_captured_flag}"  required name="flag" name="flag" autocomplete="off">
                <button type="submit" name="submit" ><b>Submit</b></button>
                <p><ul><li>Flag format is mentioned in above field </li><li>Select challenge no. appropriately</li></ul></p>
              </form>
        </form>
        
    </div>
   
	</div>
</body>
</html>
