<?php session_start();
 error_reporting(0) ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ONLINE JOB PORTAL</title>
</head>

<body>
<?php

$UserName=$_POST['txtUserName'];
$Question=$_POST['cmbQue'];
$Answer=$_POST['txtAnswer'];
$UserType=$_POST['rdUser'];

$con = mysqli_connect("localhost","root","");
mysqli_select_db($con,"job");

if($UserType=="Employer")
{

$sql = "select * from employer_reg  where UserName='".$UserName."' and Question='".$Question."' and Answer='".$Answer."'";
$result = mysqli_query($con,$sql);
$records = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);
echo $records;
if ($records==0)
{
echo '<script type="text/javascript">alert("Wrong Information Provided");window.location=\'Forget.php\';</script>';
}
else
{
$_SESSION['ID']=$row['EmployerId'];
$_SESSION['Name']=$row['CompanyName'];
header("location:Employer/index.php");
} 
mysqli_close($con);
}
else
{

$sql = "select * from jobseeker_reg  where UserName='".$UserName."' and Question='".$Question."' and Answer='".$Answer."'";
$result = mysqli_query($con,$sql);
$records = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);
if ($records==0)
{
echo '<script type="text/javascript">alert("Wrong Information Provided");window.location=\'Forget.php\';</script>';
}
else
{
$_SESSION['ID']=$row['JobSeekId'];
$_SESSION['Name']=$row['JobSeekerName'];
header("location:JobSeeker/index.php");
} 
mysqli_close($con);
}
?>
</body>
</html>