<!DOCTYPE HTML>
<html> 
<html> 
<head> 
	<title>Gesture</title> 
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.0/jquery.mobile-1.3.0.min.css" />
	<link rel="stylesheet" href="css/themes/gesture_theme.css" />
	
	<?php $this->load->helper('html'); ?>
	<?php echo link_tag('css/themes/gesture_theme.css'); ?>
	<!-- <?php echo link_tag('js/update.js'); ?> -->

	
	<!-- <link rel="stylesheet" href="css/style.css"/> -->
	<?php echo link_tag('css/style.css'); ?>
	
	<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.3.0/jquery.mobile-1.3.0.min.js"></script>
	<script src="http://localhost:8888/gestureArt/js/update.js"></script>
	
</head> 

<body> 

	<!-- ==================================================== Welcome page section ============================================= -->
	
	<!-- Bellow is the welcome_view Page which in contained within a container div with a data-role of page, and a ID of welcome_view which is whats needed to call help page-->
	<div data-role="page" id="welcome_view" class="wrapper" data-theme="b">
			<!-- header contains the logo which is within a image tag-->
			<header>
				<!-- <h1><img src="images/logo_small.png"/></h1> -->
				<?php $this->load->helper('html'); ?>
				<h1 class="logo_img"><?php $img = array('src'=>'images/logo_small.png','class'=>'logo'); echo img($img); ?></h1>
			</header>
			
			<!-- below is a header that has a JQery data role of header which will take on there design theme, within the header is a header title, and a button which will send the user back to the home page -->
			<div data-role="header" data-theme="c">
				<h1>Activity</h1>
				
				<a href="#userpanel" data-role="button" data-iconpos="notext" data-icon="bars" data-iconpos="notext" data-theme="b" data-inline="true">Bars</a>
				
				<!--
<div data-role="controlgroup" data-type="horizontal" data-mini="true">
					<a href="#home" data-role="button" data-iconpos="notext" data-icon="home" data-theme="b" data-transition="flow">Home</a>
					<a href="#userpanel" data-role="button" data-iconpos="notext" data-icon="bars" data-iconpos="notext" data-theme="b" data-inline="true">Bars</a>
					<?php echo anchor('/user/logout', 'Logout',array('data-role'=>"button",'data-theme'=>"b",'data-transition'=>"flow",'data-icon'=>"delete")); ?>
				</div>
-->
				
			
				
			
			</div><!-- end header div-->
			
			
			<!-- Below is the main content div of this section / page. it houses the content i want to present to the user. -->
			<div data-role="content" class="main">	
				<h2>Welcome back, <?php echo $this->session->userdata('user_name'); ?>!</h2>
				
				
					<? $files=$this->_ci_cached_vars["projects"];
					
					foreach ($files as $file)
				         {
	
					?>
						<div class="welcome_Projects">
							<div class="image">
								<img class="project_image" src="<?php echo($file->file);?>" />
							</div>
							<div class="welcome_ProContent">
								<h2><?php echo $file->title?></h2>
								<p>By: Killer Fox</p>
								<div data-role="controlgroup" data-type="horizontal" data-mini="true" class="welcome_vote_section">
								<!-- <div> -->
									<!-- <img src="images/t_up_listP.png" /> -->
									
									<a href="#update_view" class="editP" data-projectID="<?php echo $file->id?>" data-role="button" data-iconpos="notext" data-icon="edit" data-iconpos="notext" data-theme="b" data-inline="true" data-prefetch>Edit</a>
									
									<a href="#welcome_view" class="deleteP" data-projectID="<?php echo $file->id?>" data-role="button" data-iconpos="notext" data-icon="delete" data-iconpos="notext" data-theme="b" data-inline="true" data-prefetch>Delete</a>
									
									
								</div><!-- //welcome_vote_section -->
							</div><!-- //welcome_ProContent -->
						</div><!-- //welcome Project -->
						
					<? 	} ?>
					

				
			</div><!-- end content div -->
			
			<!-- blelow is a footer div which contains a list of buttons which is linked to the specific page it is needed to go to -->
			<div data-role="footer" data-position="fixed">
			
				

				<div data-role="navbar">
					<ul>
						<li><a href="#upload_view" data-mini="true" data-theme="b" data-transition="flip" data-prefetch>Create Project</a></li>
						<li><a href="#current_view" data-mini="true" data-theme="d" data-transition="flip" data-prefetch>Current</a></li>
					</ul>
				</div><!-- Nav bar -->
			</div><!-- end footer div -->
			
			<!-- blelow is a hiden panel div which contains a list of styled links which is then directed to other pages. when the user clicks on the panel icon the hidden panel will then show itself to the user presenting the hidden content -->
			<div data-role="panel" id="userpanel" data-position-fixed="true" data-display="push">
				<ul data-role="listview" data-theme="a" class="nav-search">
		            <li data-icon="delete"><a href="#" data-rel="close">Close menu</a></li>
		            <li data-theme="b"><a href="#home" data-icon="home" data-theme="b" data-transition="flow" data-prefect>Home</a></li>
		            <li data-theme="b"><a href="#contact_view" data-transition="pop" data-prefetch>Contact / Support</a></li>
		            <li data-theme="b"><a href="#terms_view" data-transition="pop" data-prefetch>Terms and Policies</a></li>
		            <li data-theme="b"><a href="#copyright_view" data-transition="pop" data-prefetch>Copyright Information</a></li>
		            <li data-theme="b"><a href="#upload_view" data-transition="pop" data-prefetch>Create Project</a></li>
		            <li data-theme="b"><?php echo anchor('/user/logout', 'Logout',array('data-theme'=>"b",'data-transition'=>"flow")); ?></li>
		        </ul>
	        </div><!-- /panel -->
	</div><!-- end of page -->
	
	<!-- ==================================================== Upload View/page section ============================================= -->
	
	<!-- Bellow is the upload_view Page which in contained within a container div with a data-role of page, and a ID of upload_view which is whats needed to call help page-->
	<div data-role="page" id="upload_view" class="wrapper" data-theme="b">
			<header><!-- header contains the logo which is within a image tag-->
				<h1 class="logo_img"><?php echo img('/images/logo_small.png'); ?></h1>
			</header>
			
			<!-- below is a header that has a JQery data role of header which will take on there design theme, within the header is a header title, and a button which will send the user back to the home page -->
			<div data-role="header" data-theme="c">
				<h1>Create A Project</h1>
				<a href="#welcome_view" data-theme="b" data-role="button" data-icon="home" class="ui-btn-left" data-transition="flow">Profile</a>
			</div><!-- end header div-->
			
			<!-- Below is the main content div of this section / page. it houses the content i want to present to the user. -->
			<div data-role="content" class="main" id="createP_content">	
				<!-- <form method="post" action="/gestureArt/upload/upload_file" enctype="multipart/form-data"> -->
				
				<!-- The line beflow is using php to echo a form open tag and it is calling the upload controller and the upload_file function within the controller -->
				
				<?php echo form_open("upload/upload_file"); ?>
				<p>
					<label for="title">Title:</label>
					<input type="text" id="title" name="title" value="" />
				</p> 
				
				<p>
					<label for="file_upload">File Upload:</label>
					<input id="flie_upload" type="file" name="file_upload"/>
					<input id="file" type="hidden" name="file"/>
				</p>
        
				<p>
					<label for="medium">Medium:</label>
					<input type="text" id="medium" name="medium" value="" />
				</p>
				<p>
					<label for="text">Description:</label>
					<input type="text" id="description" name="description" value="" />
				</p>
				<p>
					<label for="text">Inspiration:</label>
					<input type="text" id="inspiration" name="inspiration" value="" />
				</p>   
				<br/>      
				<p>
					<input type="submit" data-theme="c" class="greenButton" value="Submit" />
				</p>
			<?php echo form_close(); ?>
				
				<!-- <h1>Previous Projects Uploads</h1> -->
		   
				<div id="files">
					   
				</div>		
				
			</div><!-- end content div -->
			
			<!-- blelow is a footer div which contains nothing at the moment -->
			<div data-role="footer" data-position="fixed">
				
			</div><!-- end footer div -->
	</div><!-- end of page -->
	
	<!-- ==================================================== UpdateView/page section ============================================= -->
	
	<!-- Bellow is the upload_view Page which in contained within a container div with a data-role of page, and a ID of upload_view which is whats needed to call help page-->
	<div data-role="page" id="update_view" class="wrapper" data-theme="b">
			<header><!-- header contains the logo which is within a image tag-->
				<h1 class="logo_img"><?php echo img('/images/logo_small.png'); ?></h1>
			</header>
			
			<!-- below is a header that has a JQery data role of header which will take on there design theme, within the header is a header title, and a button which will send the user back to the home page -->
			<div data-role="header" data-theme="c">
				<h1>Update Your Project</h1>
				<a href="#welcome_view" data-theme="b" data-role="button" data-icon="home" class="ui-btn-left" data-transition="flow">Profile</a>
			</div><!-- end header div-->
			
			<!-- Below is the main content div of this section / page. it houses the content i want to present to the user. -->
			<div data-role="content" class="main" id="updateP_content">	
				<!-- <form method="post" action="/gestureArt/upload/upload_file" enctype="multipart/form-data"> -->
				
				<!-- The line beflow is using php to echo a form open tag and it is calling the upload controller and the upload_file function within the controller -->
				
			<?php echo form_open('upload/updateProject/',array("data-ajax"=>false)) ?>
				<p>
					<label for="title">Title</label>
					<input type="text" name="title" value=""/>
					<input type="hidden" name="id" value=""/>
				</p> 
				<p>
					<label for="medium">Medium</label>
					<input type="text" name="medium" value=""/>
				</p>        
				<p>
					<label for="text">Description</label>
					<textarea name="description"></textarea>
				</p>
				<p>
					<label for="text">Inspiration:</label>
					<textarea name="inspiration"></textarea>
				</p>   
				<br/>      
				<p>
					<input type="submit" data-theme="c" class="greenButton" value="Submit" data-prefetch />
				</p>
				
			<?php echo form_close(); ?>
			</div><!-- end content div -->
			<!-- blelow is a footer div which contains nothing at the moment -->
			<div data-role="footer" data-position="fixed">
				
			</div><!-- end footer div -->
	</div><!-- end of page -->
	
	<!-- ==================================================== Current/page section ============================================= -->
	
	<!-- Bellow is the upload_view Page which in contained within a container div with a data-role of page, and a ID of upload_view which is whats needed to call help page-->
	<div data-role="page" id="current_view" class="wrapper" data-theme="b">
			<header><!-- header contains the logo which is within a image tag-->
				<h1 class="logo_img"><?php echo img('/images/logo_small.png'); ?></h1>
			</header>
			
			<!-- below is a header that has a JQery data role of header which will take on there design theme, within the header is a header title, and a button which will send the user back to the home page -->
			<div data-role="header" data-theme="c">
				<h1>Your Projects</h1>
				<a href="#welcome_view" data-theme="b" data-role="button" data-icon="home" class="ui-btn-left" data-transition="flow">Profile</a>
			</div><!-- end header div-->
			
			<!-- Below is the main content div of this section / page. it houses the content i want to present to the user. -->
			<div data-role="content" class="main" id="updateP_content">
				<ul data-role="listview" data-theme="a" data-inset="true" data-filter="true" data-filter-placeholder="Search Artist Name or Project">	
					<? $files=$this->_ci_cached_vars["projects"];
					
					foreach ($files as $file)
				         {
	
					?>
						<li>
							<a href="#detail_view2" data-transition="flip" data-prefetch>
								<img src="<?php echo($file->file);?>" />
								<h2><?php echo $file->title?></h2>
								<p>By: Killer Fox</p>
								<div class="vote_section">
									<?php $img = array('src'=>'images/t_up_listP.png','class'=>'logo'); echo img($img); ?>
									<h2>300</h2>
									
								</div>
							</a>
						</li>
						
					<? 	} ?>
				</ul>
			</div><!-- end content div -->
			<!-- blelow is a footer div which contains nothing at the moment -->
			<div data-role="footer" data-position="fixed">
				
			</div><!-- end footer div -->
	</div><!-- end of page -->
	
	<!-- ========================================================== User Project Detail Page Section ================================================ -->
	
	<!-- Bellow is the Home_view Page which in contained within a container div with a data-role of page, and a ID of Home_view which is whats needed to call help page-->
	<div data-role="page" id="detail_view2" class="wrapper">
    	
		<header><!-- header contains the logo which is within a image tag-->
			<!-- <h1><img src="images/dt_logo.png"/></h1> -->
			<h1 class="logo_img"><?php $img = array('src'=>'images/logo_small.png','class'=>'logo'); echo img($img); ?></h1>
		</header>
		
		<!-- below is a header that has a JQery data role of header which will take on there design theme, within the header is a header title, and a button which will send the user back to the home page -->
		<div data-role="header" data-theme="c">
			<h1><?php echo $file->title?></h1>
			<!-- <a href="#mypanel" data-role="button" data-icon="bars" data-iconpos="notext" data-theme="a" data-inline="true">Bars</a> -->
			<a href="#current_view" data-role="button" class="ui-btn-left"  data-theme="b" data-transition="flow" data-prefetch>Your Projects</a>
		</div><!-- end header div-->
		
		
		<!-- Below is the main content div of this section / page. it houses the content i want to present to the user. -->
		<div data-role="content" class="main" data-theme="a" id="detail_content">	
			<!-- <?php $files=$this->_ci_cached_vars["individualP"];?> -->         
	       <img class="detail_image" src="<?php echo($file->file);?>" />
	       <div id="individualP_lower">
	       
	       		<h1><?php echo $file->title?></h1>
	       		
	       		<!-- <h2>Description</h2> -->
	       		<p><?php echo $file->description?></p>
	       		
	       		<h2>Medium Used</h2>
	       		<p><?php echo $file->medium?></p>
	       		
	       		<h2>Inspiration</h2>
	       		<p><?php echo $file->inspiration?></p>
	       		
	       		<!-- <?php echo anchor('upload/projectsView', '<li><span id="individualP_back_btn">Back to Projects</span></li>', 'title=projects') ?> -->
	       
	       </div><!-- End of individualP_lower Div-->
		           
		</div><!-- end content div -->
		
		<!-- blelow is a footer div which contains a list of buttons which is linked to the specific page it is needed to go to -->
		<div data-role="footer" data-position="fixed">
			
		</div><!-- end footer div -->
	
	</div><!-- end of page -->
</body>
</html>