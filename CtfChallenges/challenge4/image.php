<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>challenge4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <style>
        body{
            background-image: url("../../images/dash.jpg");
            background-repeat: no-repeat;
            background-size: cover;
        }
        h1{
            font-weight: bold;
            font-family:'Times New Roman', Times, serif;
           margin-left: 500px;
            shwo
        }
        #box{
            width: 400px;
            height: 180px;
          margin-left: 800px;
          margin-top: -100px;
          border-radius: 30px;
          background-color:rgba(255, 255, 255, 0.3)
        
        }
        p{
            font-size: x-large;
            margin-left: 20px;
            padding: 5px;
         
          padding-top: 30px;
          font-style: italic;
        }
        p span{
            font-weight: bold;
            margin-top: 50px;
            align-items: center;
            justify-content: center;
        }
        footer{
            margin-left: 690px;
            margin-top: 40px;
            opacity:0.3
        
        }
        #drop{
            margin-top:90px;
            margin-left: 40px;
        }
        #sub{
            margin-left: 130px;
            margin-top: 90px;
        }
     
        .flip-box {
  background-color: transparent;
  width: 300px;
  height: 200px;
  border: 1px solid #f1f1f1;
  perspective: 1000px; 
}
.flip-box-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.8s;
  transform-style: preserve-3d;
}
.flip-box:hover .flip-box-inner {
  transform: rotateY(180deg);
}
.flip-box-front, .flip-box-back {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden; 
  backface-visibility: hidden;
}
.flip-box-front {
  background-color: #bbb;
  color: black;
}
.flip-box-back {
  background-color: dodgerblue;
  color: white;
  transform: rotateY(180deg);
}
#div{
    border-radius: 40px;
    margin-left: 300px;
    margin-top: 30px;
}

    
        </style>
<h1> Challenge-4</h1>
<div class="flip-box" id="div">
  <div class="flip-box-inner" style=" border-radius:40px;">
    <div class="flip-box-front" style=" border-radius:40px;">
      <img src="./simple.png" alt="stegnoimg" style="width:400px;height:300px; border-radius:40px;">
    </div>
    <div class="flip-box-back">
      
      <p>For more hint refer footer </p>
    </div>
  </div>
</div>
<div id="box">
    <p><span>description: </span>This is the challenge based on image stegnography ,find the flag in the image </p>
</div>
<button id="drop" class="btn btn-outline-primary text-black dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" >Hint!</button>
            <ul class="dropdown-menu  bg-transparent border-dark border-1.5" >
              <li><a class="dropdown-item "  > Use image stegnographic decoding technique</a></li>
              
            </ul>
           <a href="../../flagsubmit.php" <button type="submit" value="Submit "  id="sub" class="btn btn-transperent btn-outline-dark "> Go To Submit</button></a>
           
          
<footer>
 <a href="Resource" > @ copyright: you can run decrypt source code here</a>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
 </html> 


 
