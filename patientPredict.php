<?php	
	$myfile = fopen("patientPredictionDetails.txt", "w") or die("Unable to open file!");

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
	$LVH=$_GET['LVH'];
	$VD=$_GET['VD'];
	$SM=$_GET['SM'];
	$CHD=$_GET['CHD'];
	$cardiovascdisease=$_GET['cardiovascdisease'];
	$AF=$_GET['AF'];
	$space=" ";

	$bmi = $weight / ($height * $height);

	fwrite($myfile, $age); //0
	fwrite($myfile, $space);

	fwrite($myfile, $gender); //1
	fwrite($myfile, $space);

	fwrite($myfile, $bmi); //2
	fwrite($myfile, $space);

	//fwrite($myfile, $weight);
	//fwrite($myfile, $space);

	fwrite($myfile, $HR); //3
	fwrite($myfile, $space);

	fwrite($myfile, $SBP); //4
	fwrite($myfile, $space);

	fwrite($myfile, $DBP); //5
	fwrite($myfile, $space);

	fwrite($myfile, $totChol); //6
	fwrite($myfile, $space);

	fwrite($myfile, $triglyceride); //7
	fwrite($myfile, $space);

	fwrite($myfile, $ldl); //8
	fwrite($myfile, $space);

	fwrite($myfile, $hdl); //9 
	fwrite($myfile, $space);

	fwrite($myfile, $fgl); //10
	fwrite($myfile, $space);

	fwrite($myfile, $CD); //11
	fwrite($myfile, $space);

	fwrite($myfile, $PD); //12
	fwrite($myfile, $space);

	fwrite($myfile, $smoking); //13
	fwrite($myfile, $space);

	fwrite($myfile, $alcohol); //14
	fwrite($myfile, $space);

	fwrite($myfile, $PRIntervals); //15
	fwrite($myfile, $space);

	fwrite($myfile, $HM); //16
	fwrite($myfile, $space);
 
	fwrite($myfile, $cardiomegaly); //17
	fwrite($myfile, $space);

	fwrite($myfile, $LVH); //18
	fwrite($myfile, $space);

	fwrite($myfile, $VD); //19
	fwrite($myfile, $space);

	fwrite($myfile, $SM); //20
	fwrite($myfile, $space);

	fwrite($myfile, $CHD); //21
	fwrite($myfile, $space);

	fwrite($myfile, $cardiovascdisease); //22
	fwrite($myfile, $space);

	fwrite($myfile, $AF); //23
	fwrite($myfile, $space);

	fclose($myfile);

	echo file_get_contents("patientDataRecorded.html");
	exec('java main');
?>