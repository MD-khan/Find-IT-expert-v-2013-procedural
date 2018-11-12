<?php 
include_once('config.php');
?>
<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Welcome to <?=APP_TITLE?> :: Experts Home</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" charset="utf-8" />	
	<!--[if lte IE 7]>
		<link rel="stylesheet" href="css/ie.css" type="text/css" charset="utf-8" />	
	<![endif]-->
</head>

<body>
	<div id="header">
		<a href="index.php" id="logo"><img src="images/logo.jpg" alt="LOGO" /></a>
		<div id="navigation">
			<?php 
			// calling main menu
			include('menu/experts_menu.php');			
			?>
		</div>
			 <div id="welcome">
			 Welcome: First Last 
			 </div>
	</div> <!-- /#header -->
	
	<div id="contents">
		<div class="background">
			  <!--Experts Account -->
		  <div>
			  <table width="960" border="1">
			  <tr>
				<td width="157" height="260" valign="top">
				 <!--Account Left side menu -->
				 <ul>
					 <li>
					   <a href="experts_account.php">Payment Symmery </a>					   </li>
					 <li>
					   <a href="experts_account_details.php">Account Setting	</a></li>
					 <li> 
					   <a href="#">Account Setting 
					   </a>
				   </li>
				 
				 </ul> <!--#/Account Left side menu -->
			    </td>
				 <!-- Payemnet Summery-->
				<td width="621" valign="top"><table width="622" height="363" border="0" cellspacing="2">
                  <tr>
                    <td width="224" height="59">Account Settings </td>
                    <td width="381">Change Password </td>
                  </tr>
                  <tr>
						<td height="296" valign="top">
						<div>
						Authorized Payment PayPal Accounts 
						<br>
						<br>
						<img src="https://www.paypal.com/en_US/i/logo/PayPal_mark_37x23.gif" align="left" 		                        style="margin-right:7px;">					
						<span style="font-size:11px; font-family: Arial, Verdana;">The safer, easier way                         to pay.</span>
						</div>
						</td>
               				<td valign="top">
							<form>
							<!--Change Experts Password -->
							<table width="382" border="0" cellspacing="5">
							  <tr>
								<td width="168"><div align="right">Current Password </div></td>
								<td width="155">
								<input type="password" name="experts_pass" id="experts_pass"></td>
							  </tr>
							  <tr>
								<td><div align="right">New Password </div></td>
								<td><input type="password" name="ex_new_pass" id="ex_new_pass"></td>
							  </tr>
							  <tr>
								<td><div align="right">Re-enter Paswword </div></td>
								<td><input type="password" name="ex_renter_pass" id="ex_renter_pass"></td>
							  </tr>
							  <tr>
							    <td colspan="2" align="center">
								<input type="submit" name="Submit" value="Change Password"></td>
						      </tr>
							  </table>
							<!--/#Change Experts Password -->
							</form>				   			  </td>
                  </tr>
                </table></td> 
				<!-- /#Payemnet Summery-->
						
						<!--Google Adds -->
						<td width="160" valign="top">
						 Resereved for Adds/RSS
						</td><!--/#Google Adds -->
			  </tr>
			  <tr>
				<td height="27">&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			  </tr>
			</table>

			  </div><!--/#Experts Account -->
      </div>
	</div> <!-- /#contents -->
	<div id="footer">
		
		<ul class="contacts">
		<?php 
		// Contract US 
		include('menu/contacts.php');
		?>
		</ul>
		
		<!--Social Network-->
		<ul id="connect">
			<?php 
			// call socialnetwork.php file
			include('menu/socialnetwork.php');
			?>
		</ul>
		
		<!--Newsletter-->
		<div id="newsletter">
			<?php include('menu/newsletter.php'); ?>
		</div>
		
		<span class="footnote">
		<?php include('menu/copyright.php'); ?>
		</span>
	</div> <!-- /#footer -->
</body>
</html>