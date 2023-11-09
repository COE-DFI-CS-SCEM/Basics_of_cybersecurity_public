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
            background-image: url("./images/bg_signup.jpg");
            background-size: cover;
        }
        .signup-container {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(2px);
            border-radius: 10%;
            padding: 20px;
            text-align: center;
            width: 480px;
        }

        .signup-container h1 {
            color: #333;
        }

        .signup-container input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: none;
            border-radius: 5px;
        }

        .signup-container button {
            background: #333;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s, transform 0.3s;
        }

        .signup-container button:hover {
            background: #555;
            transform: scale(1.05);
        }
        .footer{
            height: 200vh;
            background-color: aquamarine;
            margin-top: auto;
        }
        #save{
            width: 500px;
            margin-left: -10px;
           
        }
        #place{
            width: 400px;
         
        }
    </style>
</head>
<?php
session_start();
$host = "localhost";
$user = "root";
$pwd = "";
$db = "ctf_db";
$conn = mysqli_connect($host, $user, $pwd, $db);
if (!$conn) {
    echo "error";
} else {
    // No need to echo an empty string here
}

if (isset($_POST['save'])) {
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $passwd = $_POST['passwd'];
    $ph_no = $_POST['ph_no']; // Updated variable name
    $instit_name = $_POST['instit_name']; // Updated variable name
    $query = "INSERT INTO users (`full_name`, `email`, `username`, `passwd`, `ph_no`, `instit_name`) VALUES ('$full_name', '$email', '$username', '$passwd', '$ph_no', '$instit_name')";
    $run = mysqli_query($conn, $query);
    if ($run) {
        echo "Your Account was successfully created";
        header('Location: index.php'); // Corrected the header location
        exit; // Terminate the script after the redirect
    } else {
        echo "Unsuccessful account creation. Please try again. Redirecting to ACCOUNT CREATION PAGE";
        header('Location: signup.php'); // Corrected the header location
        exit; // Terminate the script after the redirect
    }
}
?>

<body>
    <div class="signup-container">
        <h1> CTF </h1>
        <h2>{Capture The Flag}</h2>
        <h3>Create Your Account</h3>
        <form action="signup.php" method="post" id="save" name="save">
            <input  type="text" placeholder="Full Name" id="place" required name="full_name">
            <input  type="email" placeholder="Email" id="place" required name="email">
            <input  type="username" placeholder="Username" id="place" required name="username" maxlength="9">
            <input  type="password" placeholder="Password" id="place" required name="passwd">
            <input  type="tel" placeholder="Phone Number" id="place" required name="ph_no">
            <input  type="text" placeholder="Institution Name" id="place" required name="instit_name" >
            <button type="submit" name="save">Sign Up</button>
        </form>
    </div>
</body>
</html>
