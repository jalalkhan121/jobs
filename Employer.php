
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="cs" lang="cs">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="content-language" content="cs" />
    <meta name="robots" content="all,follow" />
    
    <title>ONLINE JOB COUNCELLING</title>
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
.style2 {font-weight: bold}
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
			<div align="center"><a href="EmployerReg.php"><strong>New Employer? Register Here</strong></a>
                  </div>
            <div class="article">
                <h2><span><a href="#">Our Employers</a></span></h2>
               

                <p>
                
              <table width="100%" border="1" cellpadding="1" cellspacing="2" bordercolor="#006699" >
<tr>
<th height="32"  width="20" bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"></div></th>
<th height="32" bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>Company Name</strong></div></th>
<th bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>City</strong></div></th>
<th bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>Work Area</strong></div></th>
</tr>
<?php
// Establish Connection with Database
$con = mysqli_connect("localhost","root","");
// Select Database
mysqli_select_db($con,"job");
// Specify the query to execute
$sql = "select * from Employer_Reg where Status='Confirm'";
// Execute query
$result =mysqli_query($con,$sql);
// Loop through each records 
while($row = mysqli_fetch_array($result))
{
	$id=$row['EmployerId'];
$CompanyName=$row['CompanyName'];
$Companycity=$row['City'];
$Area_Work=$row['Area_Work'];
?>
<tr>
<td class="style3"><div align="left" class="style9 style5"><strong><img src="design/company.jpg"></strong></div></td>
<td class="style3"><div align="left" class="style9 style5"><strong><?php echo $CompanyName;?></strong></div><a href="companyDetail.php?jobtitle=<?php echo $row['EmployerId'];?>">Detail</a></td>
<td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Companycity;?></strong></div></td>
<td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Area_Work;?></strong></div></td>
<td class="style3"><div align="left" class="style9 style5"><strong><a href="loginheader.php?JobId=<?php echo $row['JobId'];?>"><input type="button" value="Apply" /></a></strong></div></td>
</tr>
<?php
}
// Retrieve Number of records returned
$records = mysqli_num_rows($result);
?>

<?php
// Close the connection
mysqli_close($con);
?>
</table>
    </td>
  </tr>
</table>
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
