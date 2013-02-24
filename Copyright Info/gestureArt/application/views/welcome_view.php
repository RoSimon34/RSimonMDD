<!DOCTYPE HTML>
<html> 
<head> 
	<title>Gesture</title> 
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.0/jquery.mobile-1.3.0.min.css" />
	<link rel="stylesheet" href="css/themes/gesture_theme.css" />
	<!-- <link rel="stylesheet" href="themes/my-custom-theme.min.css" /> -->
	<link rel="stylesheet" href="css/style.css"/>
	<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.3.0/jquery.mobile-1.3.0.min.js"></script>
</head> 

<body> 

	<!-- ==================================================== Welcome page section ============================================= -->
	
	<div data-role="page" id="welcome_view" class="wrapper" data-theme="b">
			<header>
				<h1><img src="images/logo_small.png"/></h1>
			</header>
			
			<div data-role="header">
				<h1>Activity</h1>
				
				<div data-role="controlgroup" data-type="horizontal" data-mini="true">
					<a href="#home" data-role="button" data-icon="home" data-theme="a" data-transition="flow">Home</a>
					<a href="#userpanel" data-role="button" data-icon="bars" data-iconpos="notext" data-theme="a" data-inline="true">Bars</a>
				</div>
				
				<!-- <a data-prefetch href="<?php echo base_url('index.php/user/logout'); ?>" data-role="button" data-icon="delete" class="ui-btn-right" data-transition="flow">Logout</a> -->
				
				<?php echo anchor('user/logout', 'Logout',array('data-role'=>"button",'class'=>"ui-btn-right",'data-transition'=>"flow")); ?>
			</div><!-- end header div-->
				
			<div data-role="content" class="main">	
				<h2>Welcome Back, <?php echo $this->session->userdata('user_name'); ?>!</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				
			</div><!-- end content div -->
			
			
			<div data-role="footer" data-position="fixed">
				<div data-role="navbar">
					<ul>
						<li><a href="#upload_view" data-mini="true" data-theme="a" data-transition="flip">Create / Edit Project</a></li>
						<li><a href="#home" data-mini="true" data-theme="d" data-transition="flip">Current</a></li>
					</ul>
				</div><!-- Nav bar -->
			</div><!-- end footer div -->
			
			<div data-role="panel" id="userpanel" data-position-fixed="true" data-display="push">
				<ul data-role="listview" data-theme="c" class="nav-search">
		            <li data-icon="delete"><a href="#" data-rel="close">Close menu</a></li>
		            <li data-theme="a"><a href="#contact_view" data-transition="pop">Contact / Support</a></li>
		            <li data-theme="a"><a href="#terms_view" data-transition="pop">Terms and Policies</a></li>
		            <li data-theme="a"><a href="#copyright_view" data-transition="pop">Copyright Information</a></li>
		            <li data-theme="a"><a href="#upload_view" data-transition="pop">Create / Edit Projects</a></li>
		        </ul>
	        </div><!-- /panel -->
	</div><!-- end of page -->
	
	<!-- ==================================================== Upload View/page section ============================================= -->

	<div data-role="page" id="upload_view" class="wrapper" data-theme="b">
			<header>
				<h1><img src="images/logo_small.png"/></h1>
				<!--

				<?php $this->load->helper('html'); ?>
				<?php echo img('/images/logo_small.png'); ?>
	
-->
			</header>
			
			<div data-role="header">
				<h1>Create A Project Below</h1>
				<a href="#welcome_view" data-role="button" data-icon="home" class="ui-btn-left" data-transition="flow">Profile</a>
			</div><!-- end header div-->
				
			<div data-role="content">	
				<!-- <form method="post" action="/gestureArt/upload/upload_file" enctype="multipart/form-data"> -->
				
				<?php echo form_open("upload/upload_file"); ?>
					<label for="title">Title</label>
					<input id="upload_input" type="text" name="title" id="title" value="" />
					<input id="upload_file" type="file" name="userfile" size="20" />
					
					<label for="medium">Medium Used</label>
					<input id="upload_input" type="text" name="medium" id="medium" value="" />
					
					<label for="text">Description</label>
					<textarea name="description"></textarea>
					
					<label for="text">Inspiration</label>
					
					<textarea name="inspiration"></textarea>
					
					<input id="upload_submit" type="submit" value="Submit Project"/>
				<!-- </form> -->		
				<?php echo form_close(); ?>
				
				<!-- <h1>Previous Projects Uploads</h1> -->
		   
				<div id="files">
					   
				</div>		
				
			</div><!-- end content div -->
			
			<div data-role="footer" data-position="fixed">
				
			</div><!-- end footer div -->
	</div><!-- end of page -->
	
</body>
</html>