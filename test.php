<html>
  <title>BAYMAX: HOMEPAGE</title>
  <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Monteserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="animate.css">
  <style>
body, html {
    font-family: "Montserrat", sans-serif;
    height: 100%;
   line-height: 1.8;
   letter-spacing: 3px;
}

/* Create a Parallax Effect */
.bgimg-1{
  background-image: linear-gradient(rgba(255,255,255,0.7),rgba(255,255,255,0.7)),url('68815121-stethoscope-wallpapers (1)');
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
    min-height: 100%;
}

.w3-wide {letter-spacing: 12px;}
.w3-wider {letter-spacing: 30px;}
.w3-hover-opacity {cursor: pointer;}
.w3-opacity-min{opacity: 0.5;}
.button-width{width:500px;}
  </style>
  <body class="bgimg-1"> 
<?php
$i = 0;
$myfile = fopen("PredictedResults.txt", "r") or die("Unable to open file!");
// Output one line until end-of-file
while(!feof($myfile)) {  
  $i++; 
  if ($i == 1) $one = fgets($myfile);
  else if ($i == 2) $two = fgets($myfile);
  else if ($i == 3) $three = fgets($myfile);
  else if ($i == 4) $four = fgets($myfile);
  else if ($i == 5) $five = fgets($myfile);
  else if ($i == 6) $six = fgets($myfile);
  else if ($i == 7) $seven = fgets($myfile);
  else fgets($myfile);
}

echo $seven;
fclose($myfile);
?>

<!-- Navbar (sit on top) -->
<nav class="w3-sidebar w3-red w3-collapse w3-animate-left w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:32px">x</a>
  <div class="w3-container">
    <h3 class="w3-wider"><font color="white"><br>BAYMAX</font><br><br></h3>
  </div>
  <div class="w3-bar-block">
    <a href="HomePage.html" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Home</a>
    <a href = #about onclick="document.getElementById('about').style.display='block'" class="w3-bar-item w3-button w3-hover-white">About us</a>  
    <a href = #contact onclick="document.getElementById('contact').style.display='block'" class="w3-bar-item w3-button w3-hover-white">Contact</a> 
  </div>
</nav>
<header class="w3-container w3-top w3-hide-large w3-red w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-button w3-red w3-margin-right" onclick="w3_open()">☰</a>
  <span class="w3-wide">BAYMAX</span>
</header>


<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>


  
    <!--First parallax image with Logo text --> 
      <div class="fadeIn animated" style="white-space:nowrap; margin-left: 400px; margin-top: 100px">
        <h2> Here is the graph </h2><br><br>

          <p class="w3-large w3-center w3-padding-16">Im really good at:</p>
      
          <p >Cardio Vascular Disease</p>
          <div class="w3-grey">
            <div class="w3-container w3-padding-small w3-red w3-center" style="width:<?php echo $one ?>"><?php echo $one ?>%</div>
          </div>
          <p >Congestive Heart Failure</p>
          <div class="w3-grey">
            <div class="w3-container w3-padding-small w3-red w3-center" style="width:<?php echo $two ?>"><?php echo $two ?>%</div>
          </div>
          <p >Coronary Heart Disease</p>
          <div class="w3-grey">
            <div class="w3-container w3-padding-small w3-red w3-center" style="width:<?php echo $three ?>"><?php echo $three ?>%</div>
          </div>
          <p >Hard Coronary Heart Disease</p>
          <div class="w3-grey">
            <div class="w3-container w3-padding-small w3-red w3-center" style="width:<?php echo $four ?>"><?php echo $four ?>%</div>
          </div>
          <p >Intermittent Claudication</p>
          <div class="w3-grey">
            <div class="w3-container w3-padding-small w3-red w3-center" style="width:<?php echo $five ?>"><?php echo $five ?>%</div>
          </div>
          <p >Stroke</p>
          <div class="w3-grey">
            <div class="w3-container w3-padding-small w3-red w3-center" style="width:<?php echo $six ?>"><?php echo $six ?>%</div>
          </div>
          <p >Artial Fibrillation</p>
          <div class="w3-grey">
            <div class="w3-container w3-padding-small w3-red w3-center" style="width:<?php echo $seven ?>"><?php echo $seven ?>%</div>
          </div>
          <br><br>
      </div>
    
<!-- Contact Modal -->
<div id="contact" class="w3-modal">
  <div class="w3-modal-content w3-animate-zoom">
    <div class="w3-container w3-red">
      <span onclick="document.getElementById('contact').style.display='none'" class="w3-button w3-display-topright w3-large">x</span>
      <h1>Contact</h1>
    </div>
    <div class="w3-container">
      <p>Please enter the your message. We will contact you through email as soon as possible</p>
      <form style="margin-top:50px;" action="/action_page.php" target="_blank">
        <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Name" required name="Name"></p>
        <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="email" required name="email"></p>
        <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Message" required name="Message"></p>
        <p><button class="w3-button" type="submit">SEND MESSAGE</button></p>
      </form>
    </div>
  </div>
</div>

<div id="about" class="w3-modal">
  <div class="w3-modal-content w3-animate-zoom">
    <div class="w3-container w3-red">
      <span onclick="document.getElementById('about').style.display='none'" class="w3-button w3-display-topright w3-large">x</span>
      <h1>About Us</h1>
    </div>
    <div class="w3-container">
      <p>COMING SOON</p>
    </div>
  </div>
</div>    
  </body> 
</html>