<?php
if (!isset($_SESSION)) 
{
  session_start();
  
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php

	$txtTitle=$_POST['txtTitle'];
	$job_category=$_POST['job_category'];
	$txtTotal=$_POST['txtTotal'];
	$Location=$_POST['Location'];
	$cmbQual=$_POST['cmbQual'];
	$applyDate=$_POST['applyDate'];
	$txtDesc=$_POST['txtDesc'];
	$Name=$_SESSION['Name'];
	if($cmbQual=="Other")
	{
	$cmbQual=$_POST['txtOther'];
	}
	// Establish Connection with MYSQL
$con = mysqli_connect("localhost","root","");
// Select Database
mysqli_select_db($con,"job");
	// Specify the query to Insert Record
	$sql = "insert into job_master (CompanyName,Location,JobTitle,Work_aera,Vacancy,MinQualification,App_date,Description) values('".$Name."','".$Location."','".$txtTitle."','".$job_category."','".$txtTotal."','".$cmbQual."','".$applyDate."','".$txtDesc."')";
	// execute query
	mysqli_query($con,$sql);
	// Close The Connection
	mysqli_close ($con);
	echo '<script type="text/javascript">alert(" Inserted Succesfully");window.location=\'ManageJob.php\';</script>';

?>
</body>
</html>
