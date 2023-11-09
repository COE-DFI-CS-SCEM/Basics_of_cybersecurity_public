<!DOCTYPE html>
<html>
<head>
    <title>Cybersecurity Trivia CTF</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #b0e0e6;
            text-align: center;
            background-image: url("../../images/dash.jpg");
            background-repeat: no-repeat;
            background-size: cover;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        .dashboard-link {
            position: absolute;
            top: 10px;
            left: 10px;
            background-color: #4CAF50;
            color: #fff;
            padding: 5px 10px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
        }

        .challenge-title {
            font-size: 36px;
            color: #333;
            font-weight: bold;
        }

        .question-text {
            font-size: 24px;
            color: #333;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .hint {
            font-size: 16px;
            color: #555;
            cursor: pointer;
            margin-top: 10px;
        }

        .hint-text {
            display: none;
            background-color: #4CAF50; /* Green hint box */
            color: #fff;
            padding: 10px;
            border-radius: 5px;
            margin-top: 10px;
        }

        .submit-button {
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
        }

        .submit-button:hover {
            background-color: #45a049;
        }
        #submit{
            margin-top: 200px;

        }
    </style>
</head>
<body>
    <a class="dashboard-link" href="../../dashboard.php">Back to Dashboard</a>
    <div class="container">
        <div class="challenge-title">Challenge 8</div>
        <p>Welcome, your task is to answer the questions correctly and find the flag.</p>

        <div class="question-text">Question : What does the acronym "VPN" stand for?</div>
         <p> Hint: It creates a secure tunnel for your internet connection.</p>
        <form action="trivia.php" method="POST">
            <input type="text" name="answer1" placeholder="Enter your answer" required autocomplete="off"><br>
            <button class="submit-button"  type="submit">Submit</button>
        </form>
       <div id="submit"> <a href="../../flagsubmit.php"style="text-decoration: none;" <button class="submit-button" type="submit">Go To Submit page</button></a></div>

       
    </div>
    <?php
   
     
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
           
            $userAnswer = $_POST['answer1'];

            $correctAnswer = "virtualprivatenetwork";
            if ($userAnswer === $correctAnswer) {
                echo "<p class='bold-text'>Flag=network</p>";
            } else {
                echo "<p class='bold-text'>Sorry, your answer is incorrect. Please try again.</p>";
            }
        }
        ?>
</body>
</html>