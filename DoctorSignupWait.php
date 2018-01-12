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
	//echo "Connected successfully";

	if(strlen($_GET['email']) > 0){
				//echo "<p> Thank you, ".$_GET['username'].' for your purchase from our web site</p>' ;
			$user = $_GET['email'];
			$pass = $_GET['password'];
	}
	/*$sql = "INSERT INTO baymax.doctorlogin (username, password) VALUES ('$user', '$pass')";

	if ($conn->query($sql) === TRUE) {
	   // echo "<br>New record created successfully";*/
		echo file_get_contents("DoctorSignupWait.html");
		/*$conn->close();
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
		$conn->close();	
	}*/




?>