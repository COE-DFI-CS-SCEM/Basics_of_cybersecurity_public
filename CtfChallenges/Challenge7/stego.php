<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
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

        .challenge-name {
            font-size: 40px;
            color: #333;
            font-weight: bold;
            margin-left:500px;
        }

        .image-container {
            width: 100%;
        }

        .image {
            width: 75%;
            display: block;
            margin: 0 auto;
            border: 1px solid #ddd;
            border-radius: 10px;
        }

        .description {
            font-size: 18px;
            margin-top: 20px;
            color: #444;
            font-weight: bold;
            margin-left:450px;
        }

        .hidden-message {
            font-size: 18px;
            color: #000;
            font-weight: bold;
            margin-left:400px;
        }

        .hint {
            font-size: 16px;
            color: #555;
            margin-top: 10px;
            font-weight: bold;
        }

        .bold-text {
            font-weight: bold;
        }

        .submit-button {
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-left:600px;
        }

        .submit-button:hover {
            background-color: #45a049;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <a class="dashboard-link" href="../../dashboard.php">Back to Dashboard</a>
    <div class="container">
        <div class="challenge-name">Challenge 7</div>
        <p class="description">This challenge is based on Cryptography.</p>
        <p class="hidden-message">Your task is to find the flag in the source code.</p>
        
        <div class="image-container">
            <img class="image" src="challenge-image.jpg" alt="Steganography Challenge" style="width: 500px; height: 500px;">
        </div>

        <p class="hint">Hint: star with the power </p>
        <!-- <h2>flag:cHVuZWV0aHJhamt1bWFy</h2>//decode using online decoder -->

        <form action="check_answer.php" method="POST">
        <a href="../../flagsubmit.php" style="text-decoration:none;"<button class="submit-button" type="submit">Go To Submit</button></a>
        </form>
        <?php
      
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $userAnswer = $_POST['user_answer'];
            $correctAnswer = "YourCorrectAnswer";
            if ($userAnswer === $correctAnswer) {
                echo "<p class='bold-text'>Congratulations! You've solved the challenge.</p>";
            } else {
                echo "<p class='bold-text'>Sorry, your answer is incorrect. Please try again.</p>";
            }
        }
        ?>
        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
