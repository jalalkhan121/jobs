<?php
session_start();
ob_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$UserName=$_POST['txtUser'];
$Password=$_POST['txtPass'];
$UserType=$_POST['cmbUser'];
if($UserType=="Administrator")
{

include "Connections/job.php";

$sql = "select * from user_master where UserName='".$UserName."' and Password='".$Password."'";
$result = mysqli_query($con,$sql);
$records = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);
if ($records==0)
{
echo '<script type="text/javascript">alert("Wrong UserName or Password");window.location=\'index.php\';</script>';
}
else
{
header("location:Admin/index.php");
} 
mysqli_close($con);
}
else if($UserType=="JobSeeker")
{
include "Connections/job.php";
$sql2 = "select * from jobseeker_reg where UserName='".$UserName."' and Password='".$Password."' and Status='Confirm'"; 
$result2 = mysqli_query($con,$sql2) or die(mysqli_error($con));
//print_r($result2);
$records = mysqli_num_rows($result2);
$row = mysqli_fetch_array($result2);
	if ($records==0)
	{
	echo '<script type="text/javascript">alert("Wrong UserName or Password");window.location=\'index.php\';</script>';
	}
	else
	{
	$_SESSION['ID']=$row['JobSeekId'];
	
	//echo $_SESSION['ID']; die;
	$_SESSION['Name']=$row['JobSeekerName'];
	header("location:JobSeeker/index.php");
	} 
mysqli_close($con);
}
else
{
include "Connections/job.php";
$sql = "select * from employer_reg where UserName='".$UserName."' and Password='".$Password."' and Status='Confirm'";
$result = mysqli_query($con,$sql);
$records = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);
if ($records==0)
{
echo '<script type="text/javascript">alert("Wrong UserName or Password");window.location=\'index.php\';</script>';
}
else
{
$_SESSION['ID']=$row['EmployerId'];
$_SESSION['Name']=$row['CompanyName'];
header("location:Employer/index.php");
} 
mysqli_close($con);
}
?>

</body>
</html>
