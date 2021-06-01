<?php 
session_start();
?><head>
<link rel="stylesheet" type="text/css" href="css/cssStyle.css">
</head>

<div id="wrapper">

	<form name="login-form" class="login-form" action="adminloginaction.php" method="post">
	
		<div class="header">
		<h1>Admin Login</h1>
		<span>
        <?php
		if(isset($_SESSION['add']))
{
echo "<center><font color='red'>".$_SESSION['add']."<cenetr></font>";
unset($_SESSION['add']);
}
		?>
        
        </span>
		</div>
	
		<div class="content">
		<input name="username" type="text" class="input username" placeholder="Username" />
		<div class="user-icon"></div>
		<input name="password" type="password" class="input password" placeholder="Password" />
		<div class="pass-icon"></div>		
		</div>

		<div class="footer">
		<input type="submit" name="submit" value="Login" class="button" />
		
		</div>
	
	</form>

</div>
<div class="gradient"></div>
