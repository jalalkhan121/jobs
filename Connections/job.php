<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_job = "localhost";
$database_job = "job";
$username_job = "root";
$password_job = "";
$con = mysqli_connect($hostname_job, $username_job, $password_job,$database_job) or die(mysqli_error()); 
//$job = mysqli_connect($hostname_job, $username_job, $password_job,$database_job) or die(mysqli_error()); 
?>