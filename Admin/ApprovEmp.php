<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$Id = $_GET['EmpId'];
// Establish Connection with MYSQL
$con = mysqli_connect("localhost","root","");
mysqli_select_db($con,"job");
// Specify the query to Update Record
$sql1="select * from Employer_Reg where EmployerId=".$Id."";
$res=mysqli_query($con,$sql1);
while($row=mysqli_fetch_array($res)){
	$status=$row['Status'];
	if($status=='Confirm'){
		echo '<script type="text/javascript">alert("Employer Request already Confirmed");window.location=\'ManageEmployer.php\';</script>';
		}
	
	
	}
$sql = "Update Employer_Reg set Status='Confirm' where EmployerId=".$Id."";
// Execute query
mysqli_query($con,$sql);
// Close The Connection
mysqli_close($con);
echo '<script type="text/javascript">alert("Employer Request Confirmed");window.location=\'ManageEmployer.php\';</script>';
?>
</body>
</html>
