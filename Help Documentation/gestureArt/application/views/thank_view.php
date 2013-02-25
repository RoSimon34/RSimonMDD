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
		<div data-role="header">
			<h1>Login Below</h1>
			<a href="#home" data-role="button" data-icon="home" class="ui-btn-left" data-transition="flow">Home</a>
		</div><!-- end header div-->
			
		<div data-role="content" id="main_detailP">	
			<?php echo form_open("user/login"); ?>
			    <label for="email">Email:</label>
		    	<input type="text" id="email" name="email" value="" />
			    <label for="pass">Password:</label>
				<input type="password" id="pass" name="pass" value="" />
		        <input type="submit" class="" value="Sign in" />
		    <?php echo form_close(); ?>
		
		    <div>
		    	<br />
		    	<br />
			    <h2>Thank You For Signing Up</h2>
			    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		    </div>
		</div><!-- end content div -->
		
		
</div><!-- end of page -->

</body>
</html>