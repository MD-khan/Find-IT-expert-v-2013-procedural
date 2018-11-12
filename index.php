<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Business Solutions</title>
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
			include('menu/main_menu.php');			
			?>
	  </div>
	  <div id="search">
			<form action="search_result.php" method="">
				<input type="text" value="Search" class="txtfield" onBlur="javascript:if(this.value==''){this.value=this.defaultValue;}" onFocus="javascript:if(this.value==this.defaultValue){this.value='';}" />
				<input type="submit" value="" class="button" />
			</form>
		</div>
	</div> <!-- /#header -->
	
	<!--Main Contents-->
	<div id="adbox">
	  <div class="body">
	  
	    <div id="login_customer">
		<form>
				  <table width="353" border="0" align="center">
			  <tr>
				<td width="343"><table width="334" border="0">
  <tr>
    <td width="143"><strong>Customer Log in: </strong></td>
    <td width="175"> <div align="right"><a href="registration_customer.html">Sing Up </a></div></td>
  </tr>
</table></td>
			  </tr>
			  <tr>
				<td><table width="297" border="0">
				  <tr>
					<td width="110"><div align="right">Your Email </div></td>
					<td width="171"><input name="customer_email" type="text" id="customer_email"></td>
				  </tr>
				  <tr>
					<td><div align="right">Password</div></td>
					<td><input type="password" name="customer_pass"></td>
				  </tr>
				</table></td>
			  </tr>
			  <tr>
			    <td><table width="327" border="0">
                  <tr>
                    <td width="183"><a href="#">Forgot Your Password ?</a> </td>
                    <td width="153"><input type="submit" name="customer_login" id="customer_login" value="Log In"></td>
                  </tr>
                </table></td>
			    </tr>
			  <tr>
			    <td><a href="registration_customer.html">Sing Up</a> </td>
			    </tr>
		  </table>
		  </form>
       </div>
	  
		  <div id="login_expert"> 
		     <form action="experts_login_action.php" name="experts_login" method="post">
				  <table width="353" border="0" align="center">
			  <tr>
				<td width="343"><table width="334" border="0">
  <tr>
    <td width="143"><strong>Experts Log in: </strong></td>
    <td width="175"> <div align="right"><a href="registration_customer.html">Sing Up </a></div></td>
  </tr>
</table></td>
			  </tr>
			  <tr>
				<td><table width="297" border="0">
				  <tr>
					<td width="110"><div align="right">Your Email </div></td>
					<td width="171"><input name="experts_email" type="text" id="experts_email"></td>
				  </tr>
				  <tr>
					<td><div align="right">Password</div></td>
					<td><input type="password" name="experts_pass"></td>
				  </tr>
				</table></td>
			  </tr>
			  <tr>
			    <td><table width="327" border="0">
                  <tr>
                    <td width="183"><a href="#">Forgot Your Password ?</a> </td>
                    <td width="153"><input type="submit" name="expert_login" id="expert_login" value="Log In"></td>
                  </tr>
                </table></td>
			    </tr>
			  <tr>
			    <td><a href="registration_customer.html">Sing Up</a> </td>
			    </tr>
		  </table>
		  </form>

		  </div>
		  
	  
	  </div> <!--end body-->
</div> <!--end adbox--> 
			 
	 
	 <!-- /#contents -->
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