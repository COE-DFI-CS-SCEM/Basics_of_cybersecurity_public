<!DOCTYPE html>
<html>
<head>
    <title>Submission</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-image:url("./images/flag_submit.jpg") ;
            background-size: cover;
        }
        .login-container {
            background-image: url("./images/wrong.jpg");
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            border-radius: 50px;
            padding: 50px;
            width: 300px;
            height: 300px;
            
            
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
            margin-left: -450px;
        }
        .back_button:hover{
            background-color: rgba(10, 88, 19, 1);
            transition: 0.7s;
        }
        
       
    </style>
   
</head>
<body>
    <div>
 <a href="dashboard.php"><button type="button" class="back_button" >Back to Dashboard</button></a>
    </div>
    <div class="login-container" align>
        
    </div>
   

</body>
</html>
