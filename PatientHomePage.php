<?php
   include('session.php');
?>

<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="animate.css">

	<style>

body, html {
    font-family: "Montserrat", sans-serif;
    height: 100%;
   line-height: 1.8;
   letter-spacing: 2px;
}

h1,h2{
  letter-spacing: 4px;
  font-family: "Montserrat", sans-serif;
}

h3{
  font-family: "Montserrat", sans-serif;
}

input
{
  -webkit-box-shadow:none;
  -moz-box-shadow: none;

 border-radius: 7px;
 border-color: #FFC0CB;
    padding:1px;
    text-indent: 5px;
    letter-spacing: 2px;
}
label{
  display: inline;
}


input[type=number]{
    width: 290px;
} 

.bgimg-1{
	background-image: linear-gradient(rgba(255,255,255,0.7),rgba(255,255,255,0.7)),url('68815121-stethoscope-wallpapers (1)');
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
    min-height: 100%;
}

/* Customize the label (the container) */
.container {
  display: block;
  position: relative;
  padding-left: 35px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 15px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* Hide the browser's default radio button */
.container input {
  position: absolute;
  opacity: 0;
}

/* Create a custom radio button */
.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 25px;
  width: 25px;
  background-color: black;
  border-radius: 30%;
}

/* On mouse-over, add a grey background color */
.container:hover input ~ .checkmark {
  background-color: #ccc;
}

/* When the radio button is checked, add a blue background */
.container input:checked ~ .checkmark {
  background-color: red;
}

/* Create the indicator (the dot/circle - hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the indicator (dot/circle) when checked */
.container input:checked ~ .checkmark:after {
  display: block;
}

/* Style the indicator (dot/circle) */
.container .checkmark:after {
  top: 9px;
  left: 9px;
  width: 8px;
  height: 8px;
  border-radius: 70%;
  background: white;
}
/* Create a Parallax Effect */

.yesnocontainer{
  position
  margin-left: 2em;
}


.w3-wide {letter-spacing: 4px;}
.w3-wider {letter-spacing: 27px;}
.w3-hover-opacity {cursor: pointer;}
.w3-opacity-min{opacity: 0.5;}
.button-width{width:300px;}
.w3-opacity-max{opacity: 1;}

	</style>
	<body class="bgimg-1">
				<!-- Navbar (sit on top) -->
<nav class="w3-sidebar w3-red w3-collapse w3-animate-left w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:32px">x</a>
  <div class="w3-container">
    <h3 class="w3-wider"><font color="white"><br>BAYMAX</font><br><br></h3>
  </div>
  <div class="w3-bar-block">
    <a href="HomePage.html" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Home</a><br>
    <a href="Patient_History.html" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">My History</a><br>
    <a href = #about onclick="document.getElementById('about').style.display='block'" class="w3-bar-item w3-button w3-hover-white">About us</a>  
    <a href = #contact onclick="document.getElementById('contact').style.display='block'" class="w3-bar-item w3-button w3-hover-white">Contact</a> 
    <a href="PatientLogin.html" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Sign Out</a>
  </div>
</nav>
<header class="w3-container w3-top w3-hide-large w3-red w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-button w3-red w3-margin-right" onclick="w3_open()">☰</a>
  <span class="w3-wide">BAYMAX</span>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>
		<div class="w3-display-container fadeIn animated" id="patientdetailsdoctor">
		<div class="w3-display-topmiddle inner contact">
			
		<h1 class="w3-wide"><br><b>Welcome <?php echo $login_session; ?>! Please Enter Your Details</b></h1><br>
    <hr class="w3-border-grey" style="margin:auto;width:100%">
		<form class = "animated fadeIn" action="patientPredict.php" method="get">
			<div class="half left cf">
        <h2>Personal</h2>
        <br><input type="number" name="age" placeholder="Age" required name = "age" size="70"><br><br>

        <label class="container">Male
          <input type = "radio" name = "gender" checked="checked" value = "M">
          <span class="checkmark"></span>
        </label>
      
        
        <label class="container">Female
          <input type = "radio" name = "gender" value = "F">
          <span class="checkmark"></span>
        </label><br>


        <input type ="number"  step="0.01" name="height" placeholder="Height (Metres)" required name = "height" size="32">&nbsp&nbsp<input type ="number"  step="0.01" name="weight" placeholder="Weight (Kilograms)" required name = "weight" size="32"><br><br><br>
        <hr class="w3-border-grey" style="margin:auto;width:100%"><br>
        <h2>Investigations</h2><br>
        <input type="number"  step="0.01" name="HR" placeholder="Heart Rate" size="70"><br><br>
	  		
  			Blood Pressure: <br>
  			<input type ="number"  step="0.01" name="sbp" placeholder="SBP" size="32">&nbsp&nbsp<input type ="number"  step="0.01" name="dbp" placeholder="DBP" size="32"><br><br>

  			Cholestrol:<br>
        <input type="number"  step="0.01" name="totChol" placeholder="Total Cholestrol(mg/dL)" size = "32"><br>
        <input type="number"  step="0.01" name="triglyceride" placeholder="Triglyceride(mg/dL)" size="32"><br>
        <input type="number"  step="0.01" name="ldl" placeholder="LDL(mg/dL)" size="32"><br>
        <input type="number"  step="0.01" name="hdl" placeholder="HDL(mg/dL)" size="32"><br><br>
  			
        <input type="number"  step="0.01" name="fgl" placeholder="Fasting Glucose Level (mg/dL)" size="70"><br><br>

        Current Diabetes: &nbsp&nbsp&nbsp<span style="margin-left: 2px"><input type = "radio" name = "CD" value = "Yes">&nbspYes&nbsp&nbsp<input type = "radio" name = "CD" value = "No">&nbsp No</span><br>
        Parental Diabetes: &nbsp&nbsp<input type = "radio" name = "PD" value = "Yes">&nbspYes&nbsp&nbsp<input type = "radio" name = "PD" value = "No">&nbsp No<br><br>        

        <input type="number"  step="0.01" name="smoking" placeholder="Smoking (Pack Years)" size = "70"><br><br>

        <input type="number"  step="0.01" name="alcohol" placeholder="Alcohol (Unit/Week)" size = "70"><br><br>


        <input type="number"  step="0.01" name="PRIntervals" placeholder="PR Intervals (mSec)" size = "70"><br><br>

        Use of Hypertensive Medication: &nbsp <input type = "radio" name = "HM" value = "Yes">&nbspYes&nbsp&nbsp<input type = "radio" name = "HM" value = "No">&nbsp No<br>

        Cardiomegaly: &nbsp<span style="margin-left: 174px"><input type = "radio" name = "cardiomegaly" value = "Yes">&nbspYes&nbsp&nbsp<input type = "radio" name = "cardiomegaly" value = "No">&nbsp No</span><br>

        Left Venticular Hypertrophy: &nbsp<span style="margin-left: 40px"><input type = "radio" name = "LVH" value = "Yes">&nbspYes&nbsp&nbsp<input type = "radio" name = "LVH" value = "No">&nbsp No</span><br>

        Valve Disease: &nbsp<span style="margin-left: 175px"><input type = "radio" name = "VD" value = "Yes">&nbspYes&nbsp&nbsp<input type = "radio" name = "VD" value = "No">&nbsp No</span><br>

        Significant Murmur: &nbsp<span style="margin-left: 120px"><input type = "radio" name = "SM" value = "Yes">&nbspYes&nbsp&nbsp<input type = "radio" name = "SM" value = "No">&nbsp No</span><br>

        Coronary Heart Disease: &nbsp<span style="margin-left: 79px"><input type = "radio" name = "CHD" value = "Yes" >&nbspYes&nbsp&nbsp<input type = "radio" name = "CHD" value = "No">&nbsp No</span><br>
  		
  		CardioVascular Disease: &nbsp<span style="margin-left: 81px"><input type = "radio" name = "cardiovascdisease" value = "Yes" >&nbspYes&nbsp&nbsp<input type = "radio" name = "cardiovascdisease" value = "No">&nbsp No</span><br>

        Artial Fibrillation: &nbsp<span style="margin-left: 137px"><input type = "radio" name = "AF" value = "Yes">&nbspYes&nbsp&nbsp<input type = "radio" name = "AF" value = "No">&nbsp No</span><br>
        <br>

  			<hr class="w3-border-grey" style="margin:auto;width:100%"><br><br>
  			<input class="w3-btn w3-red" type="submit" value="ANALYZE"><br><br>	
  			</div>	 
	</form>
	</div>
	</div>
	<script>
	function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}
</script>

<!-- Contact Modal -->
<div id="contact" class="w3-modal">
  <div class="w3-modal-content w3-animate-zoom">
    <div class="w3-container w3-red">
      <span onclick="document.getElementById('contact').style.display='none'" class="w3-button w3-display-topright w3-large">x</span>
      <h1>Contact</h1>
    </div>
    <div class="w3-container">
      <p>Please enter the your message. We will contact you through email as soon as possible</p>
      <form action="/action_page.php" target="_blank">
        <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Name" required name="Name"></p>
        <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Email" required name="email"></p>
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
