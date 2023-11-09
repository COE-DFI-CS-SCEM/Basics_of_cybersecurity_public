<!DOCTYPE html>
<html>
<head>
    <title>CTF Challenge</title>
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
    body{
    background-image: url("../../images/dash.jpg");
    background-repeat: no-repeat;
    background-size: cover;
}
.signup-container {
    background: rgba(255, 255, 255, 0.7);
    backdrop-filter: blur(10px);
    border-radius: 10px;
    padding: 20px;
    width: 1200px;
    height: 370px;
    margin-left: 60px;
    
}
p{
    color: rgb(35, 33, 33);
    font-size: larger;
    text-align: center;
    margin-top: 20px;
    font-weight: lighter;
}
p span{
    font-weight: bold;
    font-size:xx-large;
    color: navy;
    text-shadow: 2px 2px 2px rgb(0, 0, 2);
    text-transform: uppercase;
}
 p em{
    font-size: x-large;
    font-family:  'Creepster',cursive;
}


 #sub{
    
   font-weight: bold;
   color: black;
   width: 200px;
   height: 50px;
   border-radius: 30px;
   margin-left: 530px;
   margin-top: -10px;
   transition: transform 0.3s ease;
} 
#sub:hover{
    transform:scale(1.1);
}
#img{
    width: 250px;
    height: 250px;
    border-radius: 35%;
    margin-left: 360px;
    margin-top: 50px;
}

#drop{
    width: 900px;
    height: 40px;
    margin-left: 100px;
    margin-top: 10px;
    
   
}
#drop2{
    transition: transform 0.3s ease; 
}
#drop2:hover{
    transform:scale(1.1);

}

#text{
    font-size: xx-large;
    margin-top: -300px;
    margin-left: 500px;
    color: aliceblue;
    font-weight: bold;
    font-family:  'Creepster',cursive;
}


#but{
    margin-left: 300px;
   margin-top: 200px;
   width: 80px;
   height: 40px;
}
#descr{
    font-family: Arial, Helvetica, sans-serif;
    font-size: 1.4em; 
    font-weight: 100; 
    line-height: 1.6em;
    text-align: left;
    
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
            margin-top: 20px;
            margin-left: 60px;
        }
        .back_button:hover{
            background-color: rgba(10, 88, 19, 1);
            transition: 0.7s;
        }
        h1{
            margin-top: -20px;
        }
    </style>
</head>
<body>
<a href="../../dashboard.php"><button type="button" class="back_button" >Back to Dashboard</button></a>
    </div>
    <h1 style="color: black; text-align: center; font-style: bold;">CTF Challenge 6</h1>
    <p><em>find the  </em><span>flag</span> </p>
    <div>

    <div class="signup-container">
        <h3 align="left"><u><ul>Description :</ul></u></h3>
        <p id="descr">
        A web-based Capture The Flag (CTF) competition is an online cybersecurity challenge where participants aim to find and exploit vulnerabilities in web applications or systems to discover hidden "flags"<br>
        </p>
        <h3 align="left"><u><ul>Instructions :</ul></u></h3>
        <p id="descr">
            <ul id="descr">
                <li>CLick<a href="./index.php"> here </a>to goto the webpage.</li>
                <li>Try to get the flag by matching value1 and value2.</li>
            </ul>
        </p>

    </div>
    <form  id="form">
        <div class="input-group mb-3" id="drop" >
            <button id="drop2" class="btn btn-outline-primary text-black dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" >Hint!</button>
            <ul class="dropdown-menu  bg-transparent border-dark border-1.5" >
              <li><a class="dropdown-item "  > Try Injections  </a></li>
              <li><a class="dropdown-item "  > Think Deeper!!</a></li>
              
              
            </ul>
           
          </div>
         <a href="../../flagsubmit.php" <button type="submit"   id="sub" class="btn btn-transperent btn-outline-primary"> Go To Submit</button></a>
     
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>