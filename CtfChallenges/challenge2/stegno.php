<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image:url("../../images/dash.jpg");
            background-repeat:no-repeat;
            background-size:cover;
        }

        .container {
            text-align: center;
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        .challenge-name { 
            font-size: 40px;
            font-family: 'Comic Sans MS', cursive; /* Choose a cartoon-style font */
            background: linear-gradient(to right, black, orange, indigo, yellow, violet); /* Rainbow gradient background */
            -webkit-background-clip: text; /* Clip text to the background */
             color: transparent; /* Make text transparent */

        }

        .image-container {
            width: 100%;
        }

        .image {
            width: 75%;
            display: block;
            margin: 0 auto;
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

        .description {
            font-size: 18px;
            margin-top: 20px;
            margin-left: 10px;
        }
        #hint{
            background-color:#8FBC8F;
            
            width:200px;
        }
        img{
            border-radius:40px;
        }
        p{
            margin-left:-1100px;
        }
        p span{
            font-weight:bold;
        }
        #div{
            margin-left:1000px;
        }
        
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="challenge-name">Challenge 2</div>
        <p class="description"><span>Description:</span> This is the challenge based on Cryptography.</br>    The following paragaph has 10 error words.</br>   Pick the letter from the word from each line </p>

        <div id="div"> <p>Exploring the boundless realms of the cosmos has forever been a source of fascination ands</br> 
               wonder for humanity. From the enigmatic allure of distant galaxies to the enigmatic dancee</br> 
               of stars in the night sky, the universe offers an inexhaustible treasure trove of mysteriesv</br>
               waiting to be unraveled. As we gaze at the celestial tapestry above, our innate curiosityr</br> 
               is piqued, propelling us to embark on astronomical journeys of discovery. Whether it's peeringa</br>
               through a telescope to witness the elegant rings of Saturn or launching sophisticated probesq</br> 
               to probe the secrets of distant planets, our quest for understanding the cosmos continues tof</br> 
               shape our collective scientific pursuit. The universe is a captivating canvas where the intricateu</br>
               dance of celestial bodies tells a story that has captured the human imagination for eonsv,</br>
               reminding us of the limitless wonders that await our exploration beyond the confines of Earthc.</p>

        </div>
        <div class="input-group mb-3" id="drop" >
            <button class="btn btn-outline-primary text-black dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" >Hint!</button>
            <ul class="dropdown-menu" >
              <li><a class="dropdown-item "  > * Every line has a misspelled letter in a  word</br> * Last is last always </br> * Contcatenate all the letters which makes the word misspelled frome each line</br> * Use ROT-13 to decode the word</a></li>

              
            </ul>
           
          </div>
        <form action="your-php-script.php" method="POST">
           
            <a href="../../flagsubmit.php" style="text-decoration:none;"<button class="submit-button" type="submit">Go To Submit</button></a>
        </form>

       
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>