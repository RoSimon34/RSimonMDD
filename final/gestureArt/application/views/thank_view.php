<!DOCTYPE HTML>
<html> 
<head> 
	<title>Gesture</title> 
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
	<link rel="stylesheet" href="css/themes/gesture_theme.css" />
	<!-- <link rel="stylesheet" href="themes/my-custom-theme.min.css" /> -->
	<link rel="stylesheet" href="css/style.css"/>
	<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>
</head> 

<body> 

<!-- ==================================================== Login page section ============================================= -->

<div data-role="page" id="login_view" class="wrapper" data-theme="b">
		<div data-role="header" data-theme="c">
			<h1>Login Below</h1>
			<a href="#home" data-role="button" data-icon="home" class="ui-btn-left" data-theme="b" data-iconpos="notext" data-transition="flow">Home</a>
		</div><!-- end header div-->
		
		<br />
		<div data-role="content" id="thank_login" >	
			<h2>Thank You For Signing Up</h2>
			<?php echo form_open("user/login"); ?>
			    <label for="email">Email:</label>
		    	<input type="text" id="email" name="email" value="" />
			    <label for="pass">Password:</label>
				<input type="password" id="pass" name="pass" value="" />
		        <input type="submit" class="" value="Sign in" />
		    <?php echo form_close(); ?>
		    
		</div><!-- end content div -->
		
		
</div><!-- end of page -->

</body>
</html>