<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <style>
        body{
            background-image: url("./images/dash.jpg");
            background-repeat: no-repeat;
            background-size: cover;
        }
        #box{
            background-color:rgba(18, 40, 60, 0.15) ;
        }
        #box:hover{
            transform: scale(1.1);
            
        }
        #section{
            margin-top: -120px;
        }
        #logo{
      margin-left: 300px;
        }
        img{
          width: 48px;
          height: 48px;
          border-radius: 100%;
        }
        h2 span{
          margin-left: 170px;
          
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
?>

 <header class="text-gray-600 body-font bg-black">
  <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
  <h1 style="font-size: 20px;
          font-family: 'Lucida Console', 'Courier New', monospace; color: white; ">Hello <?php echo $_SESSION['username']; ?>!</h1>
    <a class="flex order-first lg:order-none lg:w-1/5 title-font font-medium items-center text-gray-900 lg:items-center lg:justify-center mb-4 md:mb-0" id="logo">
     <img src="./images/flag_logo.jpg" alt="flag">
      <span class="ml-3 text-xl text-white" style="  font-family: fantasy; font-size:30px;"> CTF Challenges</span>
    </a>
   
    <div class="lg:w-2/5 inline-flex lg:justify-end ml-5 lg:ml-0">
    <a href="./logout.php"><button  class="inline-flex items-center bg-[#93c5fd] border-0 py-1 px-3 focus:outline-none hover:bg-[#3b82f6] rounded text-base mt-4 md:mt-0 text-black" >Logout</button></a>
    </div>
  </div>
</header>

    </div>
<section class="text-gray-600 body-font " >
  <div class="container px-5 py-24 mx-auto ">
    <div class="flex flex-wrap -m-4">
      <div class="p-4 md:w-1/3">
        <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden "id="box">
          <div class="p-6">
            <h2 class="tracking-widest text-xs title-font font-medium text-black mb-1">Cryptography<span>Challenge 1</span></h2>
            <h1 class="title-font text-lg font-medium text-gray-900 mb-3" ><b>Simple</b></h1>
            
            <div class="flex items-center flex-wrap ">
              <a class="text-white inline-flex items-center md:mb-2 lg:mb-0"style="font-size:30px;" href="./CtfChallenges/challenge1/ctf1.php">Play
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="p-4 md:w-1/3">
        <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden"id="box">
         
          <div class="p-6">
          <h2 class="tracking-widest text-xs title-font font-medium text-black mb-1">Cryptography<span>Challenge 2</span></h2>
            <h1 class="title-font text-lg font-medium text-gray-900 mb-3"><b>Crypto Crack</b></h1>
            
            <div class="flex items-center flex-wrap">
            <a class="text-white inline-flex items-center md:mb-2 lg:mb-0"style="font-size:30px;" href="./CtfChallenges/challenge2/stegno.php">Play
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="p-4 md:w-1/3">
        <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden"id="box">
         
          <div class="p-6">
          <h2 class="tracking-widest text-xs title-font font-medium text-black mb-1">Linux<span>Challenge 3</span></h2>
            <h1 class="title-font text-lg font-medium text-gray-900 mb-3"><b>Concealed</b></h1>
           
            <div class="flex items-center flex-wrap ">
            <a class="text-white inline-flex items-center md:mb-2 lg:mb-0"style="font-size:30px;" href="./CtfChallenges/challenge3/ctf3.php">Play
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="text-gray-600 body-font " id="section" >
  <div class="container px-5 py-24 mx-auto ">
    <div class="flex flex-wrap -m-4">
      <div class="p-4 md:w-1/3">
        <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden "id="box">
          <div class="p-6">
          <h2 class="tracking-widest text-xs title-font font-medium text-black mb-1">Web Exploitation<span>Challenge 4</span></h2>
            <h1 class="title-font text-lg font-medium text-gray-900 mb-3"><b>Stegano</b></h1>
            
            <div class="flex items-center flex-wrap ">
            <a class="text-white inline-flex items-center md:mb-2 lg:mb-0"style="font-size:30px;" href="./CtfChallenges/challenge4/image.php">Play
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="p-4 md:w-1/3">
        <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden"id="box">
         
          <div class="p-6">
          <h2 class="tracking-widest text-xs title-font font-medium text-black mb-1">Web Exploitation<span>Challenge 5</span></h2>
            <h1 class="title-font text-lg font-medium text-gray-900 mb-3"><b>Web Insect</b></h1>
            
            <div class="flex items-center flex-wrap">
            <a class="text-white inline-flex items-center md:mb-2 lg:mb-0"style="font-size:30px;" href="./CtfChallenges/challenge5/ctf5.php">Play
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="p-4 md:w-1/3">
        <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden"id="box">
         
          <div class="p-6">
          <h2 class="tracking-widest text-xs title-font font-medium text-black mb-1">Web Exploitation<span>Challenge 6</span></h2>
            <h1 class="title-font text-lg font-medium text-gray-900 mb-3"><b>Query</b></h1>
           
            <div class="flex items-center flex-wrap ">
            <a class="text-white inline-flex items-center md:mb-2 lg:mb-0"style="font-size:30px;" href="./CtfChallenges/challenge6/CTF6.php">Play
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="text-gray-600 body-font " id="section" >
  <div class="container px-5 py-24 mx-auto ">
    <div class="flex flex-wrap -m-4">
      <div class="p-4 md:w-1/3">
        <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden "id="box">
          <div class="p-6">
          <h2 class="tracking-widest text-xs title-font font-medium text-black mb-1">Cryptography<span>Challenge 7</span></h2>
            <h1 class="title-font text-lg font-medium text-gray-900 mb-3"><b>The DecoMonk</b></h1>
            
            <div class="flex items-center flex-wrap ">
            <a class="text-white inline-flex items-center md:mb-2 lg:mb-0"style="font-size:30px;" href="./CtfChallenges/Challenge7/stego.php">Play
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="p-4 md:w-1/3">
        <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden"id="box">
         
          <div class="p-6">
          <h2 class="tracking-widest text-xs title-font font-medium text-black mb-1">Cryptography <span>Challenge 8</span></h2>
            <h1 class="title-font text-lg font-medium text-gray-900 mb-3"><b>Trivia</b></h1>
            
            <div class="flex items-center flex-wrap">
            <a class="text-white inline-flex items-center md:mb-2 lg:mb-0"style="font-size:30px;" href="./CtfChallenges/Challenge8/trivia.php">Play
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="p-4 md:w-1/3">
        <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden"id="box">
         
          <div class="p-6">
          <h2 class="tracking-widest text-xs title-font font-medium text-black mb-1">Web Exploitation<span>Challenge 9</span></h2>
            <h1 class="title-font text-lg font-medium text-gray-900 mb-3"><b>The Catalyzer</b></h1>
           
            <div class="flex items-center flex-wrap ">
            <a class="text-white inline-flex items-center md:mb-2 lg:mb-0"style="font-size:30px;" href="www.google.com">Play
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


</body>

</html>