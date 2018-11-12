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
				<td width="157" valign="top">
				 <!--Account Left side menu -->
				 <ul>
					 <li>
					   <a href="experts_account.php">Payment Symmery </a>					   </li>
					 <li>
					   <a href="experts_account_details.php">Account Details	</a></li>
					 <li> 
					   <a href="#">Account Setting 
					   </a>
				   </li>
				 
				 </ul> <!--#/Account Left side menu -->
				 </td>
				 <!-- Payemnet Summery-->
				<td width="621" valign="top">
					<table width="621" border="1">
					  <tr>
						<td width="127">Customer</td>
						<td width="164">Job No </td>
						<td width="186">Date</td>
						<td width="116">Amount</td>
					  </tr>
					  <tr>
						<td>First Last </td>
						<td>First123456</td>
						<td>May 12, 2013 </td>
						<td>$89.90</td>
					  </tr>
					  <tr>
					    <td>&nbsp;</td>
					    <td>&nbsp;</td>
					    <td>&nbsp;</td>
					    <td>&nbsp;</td>
				      </tr>
					  <tr>
					    <td>&nbsp;</td>
					    <td>&nbsp;</td>
					    <td>&nbsp;</td>
					    <td>&nbsp;</td>
				      </tr>
					  <tr>
					    <td>&nbsp;</td>
					    <td>&nbsp;</td>
					    <td>&nbsp;</td>
					    <td>&nbsp;</td>
				      </tr>
					  <tr>
					    <td>&nbsp;</td>
					    <td>&nbsp;</td>
					    <td>&nbsp;</td>
					    <td>&nbsp;</td>
				      </tr>
					  <tr>
					    <td>&nbsp;</td>
					    <td>&nbsp;</td>
					    <td>&nbsp;</td>
					    <td>&nbsp;</td>
				      </tr>
					  <tr>
					    <td>&nbsp;</td>
					    <td>&nbsp;</td>
					    <td>&nbsp;</td>
					    <td>&nbsp;</td>
				      </tr>
				  </table>

				</td> <!-- /#Payemnet Summery-->
						
						<!--Google Adds -->
						<td width="160" valign="top">
						 Resereved for Adds/RSS
						</td><!--/#Google Adds -->
			  </tr>
			  <tr>
				<td>&nbsp;</td>
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