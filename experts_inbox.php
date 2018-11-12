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
	    <table width="961" border="0">
  <tr>
    <td width="177" valign="top"><table width="171" border="1" cellspacing="5">
      <tr>
	  	<!--Couunt Total message -->
        <td width="161">
		Message(20)
		</td><!--#/Couunt Total message -->
      </tr>
      <tr>
        <td>Send</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
    </table>
      <!--Google Adds -->
	  <div align="center"> 
	  <br>
	  <br>
	   Reserved for Adds
	  </div><!--/#End google -->
	  
	 </td>
				<td colspan="2" valign="top">
				 <!--Message list-->
				 <table width="765" border="1" cellpadding="0">
				  <tr>
					<th width="128">Sender</th>
					<th width="380">Sublect</th>
					<th width="150">Date</th>
					<th width="79">Action</th>
				  </tr>
				  <tr>
				    <td height="27"><div align="center">Shohag</div></td>
				    <td>I need to set up wirless Network </td>
				    <td>Jun 23, 8:21am </td>
				    <td><a href="#">Reply</a> | <a href="#">Delete</a> </td>
			       </tr>
				  <tr>
				    <td height="27">&nbsp;</td>
				    <td>&nbsp;</td>
				    <td>&nbsp;</td>
				    <td>&nbsp;</td>
			       </tr>
				  <tr>
				    <td height="27">&nbsp;</td>
				    <td>&nbsp;</td>
				    <td>&nbsp;</td>
				    <td>&nbsp;</td>
			       </tr>
				  <tr>
				    <td height="27">&nbsp;</td>
				    <td>&nbsp;</td>
				    <td>&nbsp;</td>
				    <td>&nbsp;</td>
			       </tr>
				  <tr>
				    <td height="27">&nbsp;</td>
				    <td>&nbsp;</td>
				    <td>&nbsp;</td>
				    <td>&nbsp;</td>
			       </tr>
				  <tr>
				    <td height="27">&nbsp;</td>
				    <td>&nbsp;</td>
				    <td>&nbsp;</td>
				    <td>&nbsp;</td>
			       </tr>
				  <tr>
				    <td height="27">&nbsp;</td>
				    <td>&nbsp;</td>
				    <td>&nbsp;</td>
				    <td>&nbsp;</td>
			       </tr>
				  <tr>
				    <td height="27">&nbsp;</td>
				    <td>&nbsp;</td>
				    <td>&nbsp;</td>
				    <td>&nbsp;</td>
			       </tr>
				  <tr>
				    <td height="27">&nbsp;</td>
				    <td>&nbsp;</td>
				    <td>&nbsp;</td>
				    <td>&nbsp;</td>
			       </tr>
				  <tr>
				    <td height="27">&nbsp;</td>
				    <td>&nbsp;</td>
				    <td>&nbsp;</td>
				    <td>&nbsp;</td>
			       </tr>
				  <tr>
				    <td height="27">&nbsp;</td>
				    <td>&nbsp;</td>
				    <td>&nbsp;</td>
				    <td>&nbsp;</td>
			       </tr>
				  <tr>
				    <td height="27">&nbsp;</td>
				    <td>&nbsp;</td>
				    <td>&nbsp;</td>
				    <td>&nbsp;</td>
			       </tr>
				</table> 
				 <!--#End Message List-->		</td>
</tr>
  <tr>
    <td>&nbsp;</td>
    <td width="656">&nbsp;</td>
    <td width="106">&nbsp;</td>
  </tr>
</table>


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