<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #b0e0e6;
            text-align: center;
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
        }

        .hidden-message {
            font-size: 18px;
            color: #000;
            font-weight: bold;
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
        }

        .submit-button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <a class="dashboard-link" href="dashboard.html">Back to Dashboard</a>
    <div class="container">
        <div class="challenge-name">Challenge 7</div>
        <p class="description">This challenge is based on Steganography.</p>
        <p class="hidden-message">Your task is to find the hidden message in the image below.</p>
        
        <div class="image-container">
            <img class="image" src="challenge-image.jpg" alt="Steganography Challenge" style="width: 500px; height: 500px;">
        </div>

        <p class="hint">Hint: Look closely at the image pixels.</p>

        <form action="check_answer.php" method="POST">
            <input type="text" name="user_answer" placeholder="Enter your answer">
            <button class="submit-button" type="submit">Submit</button>
        </form>

        <?php
        // PHP code for handling the challenge
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Get the user's answer
            $userAnswer = $_POST['user_answer'];

            // You can validate and process the answer here
            // Example:
            $correctAnswer = "YourCorrectAnswer";
            if ($userAnswer === $correctAnswer) {
                echo "<p class='bold-text'>Congratulations! You've solved the challenge.</p>";
            } else {
                echo "<p class='bold-text'>Sorry, your answer is incorrect. Please try again.</p>";
            }
        }
        ?>
    </div>
</body>
</html>
