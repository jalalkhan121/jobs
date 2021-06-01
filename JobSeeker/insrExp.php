<?php error_reporting(0)?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
if(!isset($_SESSION))
{
session_start();
}
     $Id=$_SESSION['ID'];
	$Month=$_POST['Month'];
	$Year=$_POST['Year'];
	$month_year=$Month.$Year;
	$endDate=$_POST['endDate'];
	$endYear=$_POST['endYear'];
	$Endmonth_year=$endDate.$endYear;
	$WorkExperience=$_POST['WorkExperience'];
	$AreaWork=$_POST['AreaWork'];
	$currentjob=$_POST['Last_name22'];
	$Companyname=$_POST['Companyname'];
	$Location=$_POST['Location'];
	if($Month=="" || $Year=="" || $endDate=="" || $endYear=="" || $WorkExperience=="" || $AreaWork=="" || $currentjob=="" || $Companyname=="" ||$Location=="" ){
		
		echo '<script type="text/javascript">alert("Please fill all the entries..!");window.location=\'Experience.php\';</script>';
		
		}
		else{
	
$con = mysqli_connect("localhost","root", "");
// Select Database
mysqli_select_db($con,"job");
	
	$sql = "INSERT INTO experience(seekerid,start_date,EndDate,Work_exp,Work_area,Current_job,Cmp_name,Location) values('".$Id."','".$month_year."','".$Endmonth_year."','".$WorkExperience."','".$AreaWork."','".$currentjob."','".$Companyname."','".$Location."')";

	$result=mysqli_query ($con,$sql) or die(mysqli_error($con));

		echo '<script type="text/javascript">alert("profile created Succesfully");window.location=\'Experience.php\';</script>';
		

	mysqli_close ($con);
		}
	

	
    ?>
    

</body>
</html>
