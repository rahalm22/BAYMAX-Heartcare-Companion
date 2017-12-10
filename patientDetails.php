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
	echo "Connected successfully";
	$username = $_GET['username'];
	$age = $_GET['age'];
	$gender = $_GET['gender'];
	$height = $_GET['height'];
	$weight=$_GET['weight'];
	$HR=$_GET['HR'];
	$SBP=$_GET['sbp'];
	$DBP=$_GET['dbp'];
	$totChol=$_GET['totChol'];
	$triglyceride=$_GET['triglyceride'];
	$ldl=$_GET['ldl'];
	$hdl=$_GET['hdl'];
	$fgl=$_GET['fgl'];
	$CD=$_GET['CD'];
	$PD=$_GET['PD'];
	$smoking=$_GET['smoking'];
	$alcohol=$_GET['alcohol'];
	$PRIntervals=$_GET['PRIntervals'];
	$HM=$_GET['HM'];
	$cardiomegaly=$_GET['cardiomegaly'];
	$VD=$_GET['VD'];
	$SM=$_GET['SM'];
	$LVH=$_GET['LVH'];
	$stroke=$_GET['stroke'];
	$HCHD=$_GET['HCHD'];
	$CHD=$_GET['CHD'];
	$CHF=$_GET['CHF'];
	$cardiovascdisease=$_GET['cardiovascdisease'];
	$AF=$_GET['AF'];
	$IC=$_GET['IC'];
	
			$sql = "INSERT INTO baymax.patientdetails (patientusername, age, gender, height, weight, heartrate, sbp, dbp, totcholestrol, triglyceride, ldl, hdl, fastingglucose, diabetes, parentdiabetes, smoking, alcohol, printervals, hypertensivemedication, cardiomegaly, valve, significantmurmur, lvh, stroke, hardcoronaryheart, coronaryheart, conjestiveheartfailure, cardiovascular, artialfibrillation, intermittentclaudication) VALUES ('$username', '$age','$gender','$height','$weight','$HR','$SBP','$DBP','$totChol','$triglyceride','$ldl','$hdl','$fgl','$CD','$PD','$smoking','$alcohol','$PRIntervals','$HM','$cardiomegaly','$VD','$SM','$LVH','$stroke','$HCHD','$CHD','$CHF','$cardiovascdisease','$AF','$IC')";	

	


	if ($conn->query($sql) === TRUE) {
	   echo file_get_contents("DataRecorded.html");
		//echo file_get_contents("DoctorHomePage.html");
		$conn->close();

	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
		$conn->close();	
	}




?>