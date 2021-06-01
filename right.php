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
				   include "Connections/job.php";
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
                <h3 >Login</h3>
<div class="login">
                <form name="form1" method="post" action="login.php">
                  <table width="100%" border="0">
                    <tr>
                      <td><strong>User Name</strong></td>
                    </tr>
                    <tr>
        <td><span id="sprytextfield1">
                        <label>
                        <input type="text" name="txtUser" id="txtUser">
                        </label>
                      <span class="textfieldRequiredMsg">*Enter the name</span></span>
          <label></label></td>
                    </tr>
                    <tr>
                      <td><strong>Password</strong></td>
                    </tr>
                    <tr>
                <td><span id="sprytextfield2">
                        <label>
                        <input type="password" name="txtPass" id="txtPass">
                        </label>
                      <span class="textfieldRequiredMsg">*Enter the password</span></span></td>
                    </tr>
                    <tr>
                      <td><strong>User Type</strong></td>
                    </tr>
                    <tr>
                      <td><label>
                        <select name="cmbUser" id="cmbUser">
                          <option value="JobSeeker">JobSeeker</option>
                          <option value="Employer" selected="selected">Employer</option>
                          </select>
                      </label></td>
                    </tr>
                    <tr>
                      <td><label>
                        <div align="center">
                          <input type="submit" name="button" id="button" value="Login">
                          </div>
                      </label></td>
                    </tr>
                    <tr>
                      <td><div align="center"><a href="Forget.php"><strong>Forgot Password? </strong></a></div></td>
                    </tr>
                  </table>
      </form>
              </div>
                <br/>

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
