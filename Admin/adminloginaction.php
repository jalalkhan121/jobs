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
$con = mysqli_connect("localhost","root","");
mysqli_select_db($con,"job");

$UserName=$_POST['username'];
$Password=$_POST['password'];
if($UserName=="" || $Password==""){
	$_SESSION['add']="Username and password Required..!";
	?>
<script language="javascript">
window.location="index.php";
</script>
	<?php
	}
	else{

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
header("location:viewAdmin.php");
} 
mysqli_close($con);
	}
?>



</body>
</html>
