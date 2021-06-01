<link href="css/main.css" rel="stylesheet" type="text/css" />
        <!-- Right column -->
        <div id="col_div">
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css">
<div id="col" class="noprint">
            <div id="col-in">
                <!-- About Me -->
                <h3><img src="design/employer.jpg" /></h3>

                <div id="about-me">
                   <table width="180" border="1px" bgcolor="#F7A366">
                   <?php
				   $con = mysqli_connect("localhost","root","");
mysqli_select_db($con,"job");
				   $query="select * from employer_reg";
				   $query2="select * from application_master where status='Apply'";
				   $result=mysqli_query($con,$query);
				   $resultseeker=mysqli_query($con,$query2);
				   $totalemp=mysqli_num_rows($result);
				   $totaljobseeker=mysqli_num_rows($resultseeker);
				   ?>
                   <tr><td><?php echo $totalemp ?>        Employes</td></tr>
                    <tr><td><?php echo $totaljobseeker ?>        Applications</td></tr>
                   </table>
                    
                  
</div> <!-- /about-me -->

                <hr class="noscreen" />

                <!-- Category -->
               

      <hr class="noscreen" />

                <!-- Archive -->
              

            <hr class="noscreen" />

                <!-- Links -->
              
                <hr class="noscreen" />
          </div> <!-- /col-in -->
</div> <!-- /col -->
        <script type="text/javascript">
<!--
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
//-->
</script>
</div>
