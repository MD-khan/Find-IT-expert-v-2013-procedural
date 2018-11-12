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
	  <table width="955" height="373" border="1">
  <tr>
		<td width="150" height="369" valign="top">
		<!--User Pictuire-->
		<div>
		<img src="images/experts.png" alt="Expert" width="150" height="150">
		</div><!--/#Picture -->
		 
		 <!--Experts Ranking -->
		 <div align="center">
		 <p> 
		 Your Rank: <br>
		 *****
		 </p>
		 </div> <!--/#Experts Ranking -->
		</td>
    <td width="605" valign="top">
	<!--Expert's Job Notification -->
	<div>
	  <table width="605" border="0">
        <tr>
          <td width="317"><strong>Job Notifications: </strong></td>
          <td width="278">Following Jobs matches with your skills </td>
        </tr>
        <tr>
          <td height="158"><table width="263" border="0">
            <tr>
              <td width="81">Job No. </td>
              <td width="103">Rob123456789</td>
            </tr>
            <tr>
              <td>Customer:</td>
              <td>Robin Khan </td>
            </tr>
            <tr>
              <td>Time: </td>
              <td>20th July </td>
            </tr>
            <tr>
              <td>Address:</td>
              <td>192 London st <br>
			      East Boston, MA 02128
				  USA			   </td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>Job No</td>
              <td>MD123654789</td>
            </tr>
            <tr>
              <td>Customer:</td>
              <td>MD KHAN </td>
            </tr>
            <tr>
              <td>Time: </td>
              <td>21th Jun 2013 </td>
            </tr>
            <tr>
              <td>Address:</td>
              <td>67 Beningto st, <br>
			  	  East Boston,<br>
				  MA 02128				   </td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td><a href="#">See more </a></td>
            </tr>
          </table></td>
          <td valign="top"><table width="275" border="0">
            <tr>
              <td width="114">Job:</td>
              <td width="151">Computer Repaire </td>
            </tr>
            <tr>
              <td>Customer</td>
              <td>John Khan </td>
            </tr>
            <tr>
              <td>Address</td>
              <td>
			  34 Milk st <br>
			  Downtown Boston <br>
			  MA 09878 <br>
			  USA			   </td>
            </tr>
            <tr>
              <td>Job</td>
              <td>Web Site Design </td>
            </tr>
            <tr>
              <td>Customer:</td>
              <td>Mr Jou asah</td>
            </tr>
            <tr>
              <td>Address:</td>
              <td>China</td>
            </tr>
            <tr>
              <td>Job: </td>
              <td>Virus Clean </td>
            </tr>
            <tr>
              <td>Customer:</td>
              <td>Shohag</td>
            </tr>
            <tr>
              <td>Address</td>
              <td>Dhaka, Bangladesh </td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>ads</td>
              <td><a href="#">See more </a></td>
            </tr>
          </table></td>
        </tr>
      </table>
	</div> 
	<!--/# Job notification -->
	</td>
	
    <td width="178" valign="top"><table width="178" border="1">
      <tr>
        <td>Pending Payment <br>
		  <ul> 
		  <li>Job no. first123456<br>
		   finished: Jun 1, 2013<br>
		   Please claim to us		   		   
		  </li>
		  <li> <a href="#">Claim Form</a></li>
		  </ul>
		
		</td>
      </tr>
      <tr>
        <td>Payment Summery<br>
          <ul>
            <li> March 24,2013 $000.00</li>
            <li> <a href="#">See all Payment history</a></li>
          </ul></td>
      </tr>
    </table></td>
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