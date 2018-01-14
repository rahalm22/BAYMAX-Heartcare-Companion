<?php
    $servername = "localhost";
    $username = "root";
    $password = "";

    // Create connection
    $conn = new mysqli($servername, $username, $password);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }     


    $sql = "SELECT date(baymax.patienthistory.datetime)
            FROM baymax.patienthistory WHERE baymax.patienthistory.username='rahal' ";
    $result = mysqli_query($conn, $sql);

    $result_array = Array();

    while($row = mysqli_fetch_assoc($result))
    {
         $result_array[] = $row['date(baymax.patienthistory.datetime)'];  # Return the actual date value and not an array
    }
        
    $sql2 = "SELECT baymax.patienthistory.weight
            FROM baymax.patienthistory WHERE baymax.patienthistory.username='rahal' ";
    $result2 = mysqli_query($conn, $sql2);

    $result_array2 = Array();

    while($row2 = mysqli_fetch_assoc($result2))
    {
        $result_array2[] = $row2;  # Return the actual date value and not an array
    }
   // echo $result_array2[0];

?>


<!DOCTYPE HTML>
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
  background-image: linear-gradient(rgba(255,255,255,0.7),rgba(255,255,255,0.7)),url('Heart41');
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
.w3-centeralign{align-content: center;}
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
    <div class="w3-display-container fadeIn animated" id="patientdetailsdoctor">
    <div class="w3-display-topmiddle inner contact"><br>
      
    <h1 class="w3-wide" ><br><b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspYour Weight Variation&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</b></h1><br>
    <hr class="w3-border-grey" style="margin:auto;width:100%"><br><br>
    
  
  <div id="chartContainer" style="height: 370px; width: 100%;"></div>
  <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    <script>
        var dateArray = [<?php 
            $firstLoop = true;
            foreach ($result_array as $date_result) {
                # Here you could format your $date_result variable as a specific datetime format if needed to make it compatible with Javascripts Date class.
                if ($firstLoop) {
                    $firstLoop = false;
                    echo "new Date('$date_result')";
                } else {
                    echo ", new Date('$date_result')";
                }
            }
        ?>];
        console.log(dateArray);
        /*var weightArray = [<?php 
            $firstLoop2 = true;
            foreach ($result_array2 as $weight_result) {
                # Here you could format your $date_result variable as a specific datetime format if needed to make it compatible with Javascripts Date class.
                if ($firstLoop2) {
                    $firstLoop2 = false;
                    echo "$weight_result";
                } else {
                    echo ",$weight_result";
                }
            }
        ?>];
    console.log(weightArray);*/

    var chart = new CanvasJS.Chart("chartContainer", {
      animationEnabled: true,
      theme: "light2",
      title:{
        text: "Simple Line Chart"
      },                       
      axisY:{
        includeZero: false
      },
      data: [{        
        type: "line",       
        dataPoints: [
          { x:dateArray[0], y: 34 },
          { x:dateArray[1], y: 43 },
          { x:dateArray[2], y: 65 },
          { x:dateArray[3], y: 76 },
          { x:dateArray[4], y: 56 },
          { x:dateArray[5], y: 87 },
          { x:dateArray[6], y: 90 },
          { x:dateArray[7], y: 67 }


        ]
      }]
    });
    chart.render();

    
  </script>

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
