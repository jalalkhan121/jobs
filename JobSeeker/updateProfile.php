<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$txtId = $_POST['txtId'];
$txtName=$_POST['txtName'];
$txtAddress = $_POST['txtAddress'];
$txtCity=$_POST['txtCity'];
$txtEmail=$_POST['txtEmail'];
$txtMobile = $_POST['txtMobile'];
$txtqualification=$_POST['txtqualification'];
$txtGnd=$_POST['txtGnd'];
$txtBirthDate=$_POST['txtBirthDate'];
$txtUser=$_POST['txtUser'];
$txtPassword=$_POST['txtPassword'];
// Establish Connection with Database
$con = mysqli_connect("localhost","root", "");
// Select Database
mysqli_select_db($con,"job");
// Specify the query to Update Record
$sql = "Update JobSeeker_Reg  set JobSeekerName='".$txtName."', Address='".$txtAddress."',City='".$txtCity."',Email='".$txtEmail."',Mobile='".$txtMobile."',Qualification='".$txtqualification."',Gender='".$txtGnd."',BirthDate='".$txtBirthDate."',UserName='".$txtUser."',Password='".$txtPassword."' where JobSeekId=".$txtId."";
// Execute query
mysqli_query($con,$sql);
// Close The Connection
mysqli_close($con);
echo '<script type="text/javascript">alert("Profile Updated Succesfully");window.location=\'Profile.php\';</script>';
?>
</body>
</html>
