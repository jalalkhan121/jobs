
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="cs" lang="cs">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="content-language" content="cs" />
    <meta name="robots" content="all,follow" />
    
    <title>ONLINE JOB PORTAL </title>
    <meta name="description" content="..." />
    <meta name="keywords" content="..." />
    
    <link rel="index" href="./" title="Home" />
     <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/image_slide.js"></script>
    <link rel="stylesheet" media="screen,projection" type="text/css" href="./css/main.css" />
    <link rel="stylesheet" media="print" type="text/css" href="./css/print.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" media="aural" type="text/css" href="./css/aural.css" />
    <style type="text/css">
<!--
.style1 {
	color: #000066;
	font-weight: bold;
}
.style2 {
	font-size: medium;
	font-weight: bold;
}
-->
    </style>
</head>

<body id="www-url-cz">
<!-- Main -->
<div id="main" class="box">
<?php 
include "Header.php"
?>
<?php 
include "menu.php"
?>   
<!-- Page (2 columns) -->
    <div id="page" class="box">
    <div id="page-in" class="box">

        

        <!-- Content -->
        <div id="content">

           
            <!-- /article -->

            <hr class="noscreen" />

           
            <!-- /article -->

            <hr class="noscreen" />
            
            <!-- Article -->
           
            <!-- /article -->

            <hr class="noscreen" />

            <!-- Article -->
            <div class="article">
               

                <p>
                
        
<?php
$JobtitleID=$_GET['jobtitle'];
// Establish Connection with Database
$con = mysqli_connect("localhost","root","");
// Select Database
mysqli_select_db($con,"job");
// Specify the query to execute
$sql = "select * from employer_reg where EmployerId='".$JobtitleID."'";

// Execute query
$result = mysqli_query($con,$sql);
// Loop through each records 
while($row = mysqli_fetch_array($result))
{
$CompanyName=$row['CompanyName'];
$ContactPerson=$row['ContactPerson'];
$Address=$row['Address'];
$City=$row['City'];
$Email=$row['Email'];
$Mobile=$row['Mobile'];
$Area_Work=$row['Area_Work'];
?>
              
              <h2><span><?php echo $CompanyName;?></span></h2>
  <h3>Detail:</h3> 
  <p>Company Name  : <?php echo $CompanyName;?></p>
  <p>ContactPerson : <?php echo $ContactPerson;?></p>
  <p>Address : <?php echo $Address;?></p>
  <p>Experience   : Minimum 01 Year field relevent </p>
  <p>City  : <?php echo $City;?></p>
  <p>Email  : <?php echo $Email;?></p>
  <p>Area_Work  : <?php echo $Area_Work;?></p>
  <div id="applybutton"><a href="loginheader.php">
    <input type="button" value="Apply" /></a></div>
<?php
}
// Retrieve Number of records returned
$records = mysqli_num_rows($result);
// Close the connection
mysqli_close($con);
?>

                </p>
               
              <p class="btn-more box noprint">&nbsp;</p>
          </div> <!-- /article -->

            <hr class="noscreen" />
            
        </div> <!-- /content -->

<?php
include "right.php"
?>

    </div> <!-- /page-in -->
    </div> <!-- /page -->

 
<?php
include "footer.php"
?>
</div> <!-- /main -->

</body>
</html>
