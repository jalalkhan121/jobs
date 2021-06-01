<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$Id = $_GET['JobId'];
// Establish Connection with MYSQL
$con = mysqli_connect("localhost","root","");
mysqli_select_db($con,"job");

// Specify the query to Update Record
$sql1="select * from JobSeeker_Reg where JobSeekId=".$Id."";
$res=mysqli_query($con,$sql1);
while($row=mysqli_fetch_array($res)){
	$status=$row['Status'];
	if($status=='Confirm'){
		echo '<script type="text/javascript">alert("Job Seeker Request already Confirmed");window.location=\'ManageJob.php\';</script>';
		}
	
	
	}
$sql = "Update JobSeeker_Reg set Status='Confirm' where JobSeekId=".$Id."";
// Execute query
mysqli_query($con,$sql);
// Close The Connection
mysqli_close($con);
echo '<script type="text/javascript">alert("Job Seeker Request Confirmed");window.location=\'ManageJob.php\';</script>';
?>
</body>
</html>
