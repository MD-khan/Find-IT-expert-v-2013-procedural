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
			<form action="" method="">
				<input type="text" value="Search" class="txtfield" onBlur="javascript:if(this.value==''){this.value=this.defaultValue;}" onFocus="javascript:if(this.value==this.defaultValue){this.value='';}" />
				<input type="submit" value="" class="button" />
			</form>
		</div>
	</div> <!-- /#header -->
	<div id="contents">
		<div class="background">
			<div id="solutions">
				<span>This website template has been designed by <a href="http://www.freewebsitetemplates.com/">Free Website Templates</a> for you, for free. You can replace all this text with your own text.</span>
				<p>
					This website template has been designed by <a href="http://www.freewebsitetemplates.com/">Free Website Templates</a> for you, for free. You can replace all this text with your own text.
					You can remove any link to our website from this website template, you're free to use this website template without linking back to us.
					If you're having problems editing this website template, then don't hesitate to ask for help on the <a href="http://www.freewebsitetemplates.com/forum/">Forum</a>.
				</p>
				<ul>
					<li>
						<p>
							<b>LOREM IPSUM DOLOR SIT AMET, CONSECTETUR ADIPIS CINGELIT</b>
							Nunc ut turpis vitae purus cursus malesuada at sed lacus. Integer pretium luctus felis, a dictum dui malesuada in. Praesent nunc erat, mollis sed varius id, blandit ut nisi. Aliquam in ipsum purus, 
							in dignissim turpis. Nullam a adipiscing felis. Etiam a egestas dui.
						</p>
					</li>
					<li>
						<p>
							<b>PRAESENT NUNC ERAT, MOLLIS SED VARIUS ID, BLANDIT UT NISI ALIQUAM IN IPSUM PURUS</b>
							dignissim turpis. Nullam a adipiscing felis. Etiam a egestas dui. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
						</p>
					</li>
					<li>
						<p>
							<b>NUNC EU NEQUE VEL VELIT FRINGILLA PLACERAT AT EU NULLA</b>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ut turpis vitae purus cursus malesuada at sed lacus. Integer pretium luctus felis, a dictum dui malesuada in. Praesent nunc erat, mollis 
							sed varius id, blandit ut nisi. Aliquam in ipsum purus, in dignissim turpis. Nullam a adipiscing felis. Etiam a egestas dui.
						</p>
					</li>
				</ul>
				<p>
					<b>BE PART OF OUR COMMUNITY:</b>
					If you&acute;re experiencing issues and concerns about this website template, join the discussion <a href="http://www.apple.com/startpage/">on our forum</a> and meet other people in the community who share 
					the same interests with you.
				</p>
			</div>
		</div>
	</div> <!-- /#contents -->
	<div id="footer">
		<ul class="contacts">
			<h3>Contact Us</h3>
			<li><span>Email</span><p>: company@email.com</p></li>
			<li><span>Address</span><p>: 189 Lorem Ipsum Pellentesque, Mauris Etiam ut velit odio Proin id nisi enim 0000</p></li>
			<li><span>Phone</span><p>: 117-683-9187-000</p></li>
		</ul>
		<ul id="connect">
			<h3>Get Updated</h3>
			<li><a href="blog.php">Blog</a></li>
			<li><a href="http://facebook.com/freewebsitetemplates" target="_blank">Facebook</a></li>
			<li><a href="http://twitter.com/fwtemplates" target="_blank">Twitter</a></li>
		</ul>
		<div id="newsletter">
			<p><b>Sign-up for Newsletter</b>
				In sollicitudin vulputate metus, sed commodo diam elementum nec. Sed et risus sed magna convallis adipiscing.
			</p>
			<form action="" method="">
				<input type="text" value="Name" class="txtfield" onBlur="javascript:if(this.value==''){this.value=this.defaultValue;}" onFocus="javascript:if(this.value==this.defaultValue){this.value='';}" />
				<input type="text" value="Enter Email Address" class="txtfield" onBlur="javascript:if(this.value==''){this.value=this.defaultValue;}" onFocus="javascript:if(this.value==this.defaultValue){this.value='';}" />
				<input type="submit" value="" class="button" />
			</form>
		</div>
		<span class="footnote">&copy; Copyright &copy; 2011. All rights reserved</span>
	</div> <!-- /#footer -->
</body>
</html>