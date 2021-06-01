<?php
error_reporting(0);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="cs" lang="cs">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="content-language" content="cs" />
    <meta name="robots" content="all,follow" />
    
    <title>ONLINE JOB PORTAL</title>
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
                <h2><span><a href="#">Available Job</a></span></h2>
               

                <p>
                
             
<?php
// Establish Connection with Database
include "Connections/job.php";
$date1=date("Y/m/d");
$job_location = $_POST['job_location'];
$job_category = $_POST['job_category'];
// Specify the query to execute
$sql = "SELECT * from job_master WHERE  Location = '".$job_location."' AND Work_aera = '".$job_category."' AND App_date>='".$date1."'";
// Execute query
$result = mysqli_query($con,$sql);

// Loop through each records 
if(mysqli_num_rows($result) > 0)
{
      while($row = mysqli_fetch_array($result)){
      $id=$row['JobId'];
$CompanyName=$row['CompanyName'];
$location=$row['Location'];
$JobTitle=$row['JobTitle'];
$App_date=$row['App_date'];
	?>
     <table width="100%" border="1" cellpadding="1" cellspacing="2" bordercolor="#006699" >
<tr>
<th height="32" bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"></div></th>
<th height="32" bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>Company Name</strong></div></th>
<th bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>JobTitle</strong></div></th>
<th bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>Location</strong></div></th>
<th bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>Apply Date</strong></div></th>

</tr>
	<tr>
<td class="style3"><div align="left" class="style9 style5"><strong><img src="design/pics.jpg"></strong></div></td>
<td class="style3"><div align="left" class="style9 style5"><strong><?php echo $CompanyName;?></strong></div></td>
<td class="style3" bgcolor="#FEFFFF"><div align="left" class="style9 style5"><strong><?php echo $JobTitle;?></strong></div><a href="jobtitleDetail.php?jobtitle=<?php echo $row['JobId'];?>">Detail</a></td>
<td class="style3"><div align="left" class="style9 style5"><strong><?php echo $location;?></strong></div></td>
<td class="style3"><div align="left" class="style9 style5"><strong><?php echo $App_date;?></strong></div></td>
 <td class="style3"><div align="left" class="style9 style5"><strong><a href="loginheader.php?JobId=<?php echo $row['JobId'];?>"><input type="button" value="Apply" /></a></strong></div></td>


 

</tr>

<?php
	  }
	  ?>
      <?php
	}
	else{
		?>
					
				<span style ="color:red">Sorry,no job abailable. Please try again</span>
               
				<?php
		}
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
