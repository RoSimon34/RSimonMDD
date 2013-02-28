<!DOCTYPE HTML>
<html> 
<head> 
	<title>Gesture</title> 
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.0/jquery.mobile-1.3.0.min.css" />
	<link rel="stylesheet" href="css/themes/gesture_theme.css" />
	
	<?php $this->load->helper('html'); ?>
	<?php echo link_tag('css/themes/gesture_theme.css'); ?>

	
	<!-- <link rel="stylesheet" href="css/style.css"/> -->
	<?php echo link_tag('css/style.css'); ?>
	
	<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.3.0/jquery.mobile-1.3.0.min.js"></script>
	<script src="http://localhost:8888/gestureArt/js/update.js"></script>
	<!--

	<script src="http://localhost:8888/gestureArt/js/jquery.js"></script>
	<script src="http://localhost:8888/gestureArt/js/comment.js"></script>
	<script type="text/javascript" src="<?=base_url()?>js/jquery.js"></script>
    <script type="text/javascript" src="<?=base_url()?>js/comment.js"></script>
-->
</head> 

<body> 

<!-- ========================================================== Home Page Section ================================================ -->
	
	<!-- Bellow is the Home_view Page which in contained within a container div with a data-role of page, and a ID of Home_view which is whats needed to call help page-->
	<div data-role="page" id="home" class="wrapper">
    	
		<header><!-- header contains the logo which is within a image tag-->
			<!-- <h1><img src="images/dt_logo.png"/></h1> -->
			
			<?php $this->load->helper('html'); ?>
			<h1 class="logo_img"><?php $img = array('src'=>'images/logo_small.png','class'=>'logo'); echo img($img); ?></h1>
		</header>
		
		<!-- below is a header that has a JQery data role of header which will take on there design theme, within the header is a header title, and a button which will send the user back to the home page -->
		<div data-role="header" data-theme="c" class="header_content">
			<h1>Home</h1>
			<a href="#mypanel" data-role="button" data-icon="bars" data-iconpos="notext" data-theme="b" data-inline="true">Bars</a>
			<!-- <a href="#mypanel" data-role="button" data-icon="bars" data-iconpos="notext" class="ui-btn-left">menu</a> -->
		</div><!-- end header div-->
		
		
		<!-- Below is the main content div of this section / page. it houses the content i want to present to the user. -->
		<div data-role="content" class="main" id="home_content">	
				<ul data-role="listview" data-theme="a" data-inset="true" data-filter="true" data-filter-placeholder="Search Artist Name or Project">
				<? $files=$this->_ci_cached_vars["projects"];
				
				foreach ($files as $file)
			         {

				?>
					<li>
						<a href="#detail_view" data-transition="flip" data-prefetch>
							<img src="<?php echo base_url("/files/".$file->filename);?>" />
							<h2><?php echo $file->title?></h2>
							<p>By: Killer Fox</p>
							<div class="vote_section">
								<img src="images/t_up_listP.png" />
								<h2>300</h2>
								
							</div>
						</a>
					</li>
					
				<? 	} ?>
					
				</ul>
		</div><!-- end content div -->
		
		<!-- blelow is a footer div which contains a list of buttons which is linked to the specific page it is needed to go to -->
		<div data-role="footer" data-position="fixed" class="footer_content">
			<div data-role="navbar">
				<ul>
					<li><a href="#register_view" data-mini="true" data-theme="b" data-transition="flip">Sign Up For Free</a></li>
					<li><a href="#login_view" data-mini="true" data-theme="a" data-transition="flip">Login</a></li>
				</ul>
			</div><!-- Nav bar -->
		</div><!-- end footer div -->
		
		<!-- blelow is a hiden panel div which contains a list of styled links which is then directed to other pages. when the user clicks on the panel icon the hidden panel will then show itself to the user presenting the hidden content -->
		<div data-role="panel" id="mypanel" data-position-fixed="true" data-display="push">
			<ul data-role="listview" data-theme="a" class="nav-search">
	            <li data-icon="delete"><a href="#" data-rel="close">Close menu</a></li>
	            <li data-theme="b"><a href="#contact_view" data-transition="pop">Contact / Support</a></li>
	            <li data-theme="b"><a href="#terms_view" data-transition="pop">Terms and Policies</a></li>
	            <li data-theme="b"><a href="#copyright_view" data-transition="pop">Copyright Information</a></li>
	            <li data-theme="b"><a href="#help_view" data-transition="pop">Help / FAQ</a></li>
	        </ul>
    	</div><!-- /panel -->
	
	</div><!-- end of page -->
	
	
<!-- ========================================================== Detail Page Section ================================================ -->
	
	<!-- Bellow is the Home_view Page which in contained within a container div with a data-role of page, and a ID of Home_view which is whats needed to call help page-->
	<div data-role="page" id="detail_view" class="wrapper">
    	
		<header><!-- header contains the logo which is within a image tag-->
			<!-- <h1><img src="images/dt_logo.png"/></h1> -->
			<h1 class="logo_img"><?php $img = array('src'=>'images/logo_small.png','class'=>'logo'); echo img($img); ?></h1>
		</header>
		
		<!-- below is a header that has a JQery data role of header which will take on there design theme, within the header is a header title, and a button which will send the user back to the home page -->
		<div data-role="header" data-theme="c">
			<h1><!-- <?php echo $files->title?> --></h1>
			<!-- <a href="#mypanel" data-role="button" data-icon="bars" data-iconpos="notext" data-theme="a" data-inline="true">Bars</a> -->
			<a href="#home" data-role="button" data-icon="home" class="ui-btn-left" data-theme="b" data-transition="flow">Home</a>
		</div><!-- end header div-->
		
		
		<!-- Below is the main content div of this section / page. it houses the content i want to present to the user. -->
		<div data-role="content" class="main" data-theme="a">	
			<!-- <?php $files=$this->_ci_cached_vars["individualP"];?> -->         
	       <img src='<?=base_url("/files/".$files->filename);?>'/></a>
	       <br />
	       <br />
	       <div id="individualP_lower">
	       
	       		<h1><?php echo $files->title?></h1>
	       		
	       		<p><?php echo $files->medium?></p>
	       		<p><?php echo $files->description?></p>
	       		<p><?php echo $files->inspiration?></p>
	       		
	       		<!-- <?php echo anchor('upload/projectsView', '<li><span id="individualP_back_btn">Back to Projects</span></li>', 'title=projects') ?> -->
	       
	       </div><!-- End of individualP_lower Div-->
		           
		</div><!-- end content div -->
		
		<!-- blelow is a footer div which contains a list of buttons which is linked to the specific page it is needed to go to -->
		<div data-role="footer" data-position="fixed">
			<div data-role="navbar">
				<ul>
					<li><a href="#" data-mini="true" data-theme="b" data-transition="flip">Thumbs Up</a></li>
					<li><a href="#comment_view" data-mini="true" data-theme="b" data-transition="flip">Comment</a></li>
				</ul>
			</div><!-- Nav bar -->
		</div><!-- end footer div -->
	
	</div><!-- end of page -->
	
	<!-- ==================================================== Comment page section ============================================= -->

<!-- Bellow is the login_view Page which in contained within a container div with a data-role of page, and a ID of login_view which is whats needed to call help page-->
<div data-role="page" id="comment_view" class="wrapper" data-theme="b">
		<header><!-- header contains the logo which is within a image tag-->
			<!-- <h1><img src="images/logo_small.png"/></h1> -->
			
			<h1 class="logo_img"><?php echo img('/images/logo_small.png'); ?></h1>

		</header>
		
		<!-- below is a header that has a JQery data role of header which will take on there design theme, within the header is a header title, and a button which will send the user back to the home page -->
		<div data-role="header" data-theme="c">
			<h1>Project Name</h1>
			<a href="#home" data-role="button" data-icon="home" data-theme="b" class="ui-btn-left" data-transition="flow">Home</a>
		</div><!-- end header div-->
		
		<!-- Below is the main content div of this section / page. it houses the Login Form i want to present to the user. -->
		<div data-role="content" id="comment_content">
			
	        <? foreach ($result as $comment): ?>
	        
	            <div>
	            	<p>Username : <?=$comment->username?></p>
	                <!-- <p>email : <?=$comment->email?></p> -->
	                <p>Message : <?=$comment->message?></p>
	            </div>
	            
	        <? endforeach; ?>
	        <div class="submitComment" id="insertbeforMe">
		        <form method="POST" action="">
			        <p>
			        	<label>Enter Your Name</label>
			            <input type="text" name="username" />
			            
			        </p>
			         <p>
			         	<h3>Add your comment</h3>
			            <textarea name="message"></textarea>
			        </p>
			        <input type="hidden" value="<?=base_url()?>" id="baseurl"/>
			        <input type="submit" value="Submit Comment"/>
			        <input type="reset" value="Reset"/>
		        </form>
	        </div>
			
		</div><!-- end content div -->
		
		<!-- blelow is a footer div which contains nothing at the moment-->
		<div data-role="footer" data-position="fixed">
			
		</div><!-- end footer div -->
</div><!-- end of page -->
	
<!-- ==================================================== Login page section ============================================= -->

<!-- Bellow is the login_view Page which in contained within a container div with a data-role of page, and a ID of login_view which is whats needed to call help page-->
<div data-role="page" id="login_view" class="wrapper" data-theme="b">
		<header><!-- header contains the logo which is within a image tag-->
			<!-- <h1><img src="images/logo_small.png"/></h1> -->
			
			<h1 class="logo_img"><?php echo img('/images/logo_small.png'); ?></h1>

		</header>
		
		<!-- below is a header that has a JQery data role of header which will take on there design theme, within the header is a header title, and a button which will send the user back to the home page -->
		<div data-role="header" data-theme="c">
			<h1>Login Below</h1>
			<a href="#home" data-role="button" data-icon="home" data-theme="b" class="ui-btn-left" data-transition="flow">Home</a>
		</div><!-- end header div-->
		
		<!-- Below is the main content div of this section / page. it houses the Login Form i want to present to the user. -->
		<div data-role="content" id="login_content">
			<!-- The line beflow is using php to echo a form open tag and it is calling the users controller and the login function within the controller -->
			<?php echo form_open("user/login"); ?>
			    <label for="email">Email:</label>
		    	<input type="text" id="email" name="email" value="" />
			    <label for="pass">Password:</label>
				<input type="password" id="pass" name="pass" value="" />
				<br/>
		        <input data-theme="c" type="submit" class="" value="Sign in" />
		    <?php echo form_close(); ?>
				
		</div><!-- end content div -->
		
		<!-- blelow is a footer div which contains nothing at the moment-->
		<div data-role="footer" data-position="fixed">
			
		</div><!-- end footer div -->
</div><!-- end of page -->


<!-- ==================================================== Register page section ============================================= -->

<!-- Bellow is the register_view Page which in contained within a container div with a data-role of page, and a ID of register_view which is whats needed to call help page-->
<div data-role="page" id="register_view" class="wrapper" data-theme="b">
		<header><!-- header contains the logo which is within a image tag-->
			<!-- <h1><img src="images/logo_small.png"/></h1> -->
			
			<h1 class="logo_img"><?php echo img('/images/logo_small.png'); ?></h1>

		</header>
		
		<!-- below is a header that has a JQery data role of header which will take on there design theme, within the header is a header title, and a button which will send the user back to the home page -->
		<div data-role="header" data-theme="c">
			<h1>Sign Up Below</h1>
			<a href="#home" data-role="button" data-icon="home" data-theme="b" class="ui-btn-left" data-transition="flow">Home</a>
		</div><!-- end header div-->
		
		<!-- Below is the main content div of this section / page. it houses all the Registration Form i want to present to the user. -->
		<div data-role="content" id="register_content">	
			<!-- The line below will call the class of error that i have set within the controller for the user registration which will check for any errors -->
			<?php echo validation_errors('<p class="error">'); ?>
			<!-- The line beflow is using php to echo a form open tag and it is calling the users controller and the registration function within the controller -->
			<?php echo form_open("user/registration"); ?>
				<p>
					<label for="user_name">User Name:</label>
					<input type="text" id="user_name" name="user_name" value="<?php echo set_value('user_name'); ?>" />
				</p>        
				<p>
					<label for="email_address">Your Email:</label>
					<input type="text" id="email_address" name="email_address" value="<?php echo set_value('email_address'); ?>" />
				</p>
				<p>
					<label for="password">Password:</label>
					<input type="password" id="password" name="password" value="<?php echo set_value('password'); ?>" />
				</p>
				<p>
					<label for="con_password">Confirm Password:</label>
					<input type="password" id="con_password" name="con_password" value="<?php echo set_value('con_password'); ?>" />
				</p>        
				<p>
					<br/>
					<input type="submit" id="reg_submitbtn" data-theme="c" class="greenButton" value="Submit" />
				</p>
			<?php echo form_close(); ?>
		</div><!-- end content div -->
		
		<!-- blelow is a footer div which contains nothing at the moment-->
		<div data-role="footer" data-position="fixed">
		</div><!-- end footer div -->
</div><!-- end of page -->


<!-- ==================================================== Contact Info page section ============================================= -->

<!-- Bellow is the contact_view Page which in contained within a container div with a data-role of page, and a ID of contact_view which is whats needed to call help page-->
<div data-role="page" id="copyright_view" class="wrapper" data-theme="b">
		<header><!-- header contains the logo which is within a image tag-->
			<!-- <h1><img src="images/logo_small.png"/></h1> -->
			
			<h1 class="logo_img"><?php echo img('/images/logo_small.png'); ?></h1>

		</header>
		
		<!-- below is a header that has a JQery data role of header which will take on there design theme, within the header is a header title, and a button which will send the user back to the home page -->
		<div data-role="header">
			<h1>Contact information</h1>
			<a href="#home" data-role="button" data-icon="home" class="ui-btn-left" data-transition="flow">Home</a>
		</div><!-- end header div-->
		
		<!-- Below is the main content div of this section / page. it houses all the content i want to present to the user. -->
		<div data-role="content">	
			<h2>Copyright Information</h2>
			<p>Gesture will not collect or share personally identifiable information such as your name, email, or personal artwork without your knowledage and permission. We only collect Personal Information that you voluntarily submit when you create a Gesture Profile and upload / create your projects.</p>
			
			<p>While we may share your information with other members of the Gesture community we will not provide your information to unaffiliated third parties.</p>
			
		</div><!-- end content div -->
		
		<!-- blelow is a footer div which contains nothing at the moment-->
		<div data-role="footer" data-position="fixed">
		</div><!-- end footer div -->
</div><!-- end of page -->

<!-- ==================================================== Terms of Use page section ============================================= -->

<!-- Bellow is the terms_view Page which in contained within a container div with a data-role of page, and a ID of terms_view which is whats needed to call help page-->
<div data-role="page" id="terms_view" class="wrapper" data-theme="b">
		<header><!-- header contains the logo which is within a image tag-->
			<!-- <h1><img src="images/logo_small.png"/></h1> -->
			
			<h1 class="logo_img"><?php echo img('/images/logo_small.png'); ?></h1>

		</header>
		
		<!-- below is a header that has a JQery data role of header which will take on there design theme, within the header is a header title, and a button which will send the user back to the home page -->
		<div data-role="header">
			<h1>Terms and Policies</h1>
			<a href="#home" data-role="button" data-icon="home" class="ui-btn-left" data-transition="flow">Home</a>
		</div><!-- end header div-->
			
			
		<!-- Below is the main content div of this section / page. it houses all the content i want to present to the user. -->
		<div data-role="content">	
			
			<h2>
				Web Site Terms and Conditions of Use
			</h2>
			
			<h3>
				1. Terms
			</h3>
			
			<p>
				By accessing this web site, you are agreeing to be bound by these 
				web site Terms and Conditions of Use, all applicable laws and regulations, 
				and agree that you are responsible for compliance with any applicable local 
				laws. If you do not agree with any of these terms, you are prohibited from 
				using or accessing this site. The materials contained in this web site are 
				protected by applicable copyright and trade mark law.
			</p>
			
			<h3>
				2. Use License
			</h3>
			
			<ol type="a">
				<li>
					Permission is granted to temporarily download one copy of the materials 
					(information or software) on Gesture's web site for personal, 
					non-commercial transitory viewing only. This is the grant of a license, 
					not a transfer of title, and under this license you may not:
					
					<ol type="i">
						<li>modify or copy the materials;</li>
						<li>use the materials for any commercial purpose, or for any public display (commercial or non-commercial);</li>
						<li>attempt to decompile or reverse engineer any software contained on Gesture's web site;</li>
						<li>remove any copyright or other proprietary notations from the materials; or</li>
						<li>transfer the materials to another person or "mirror" the materials on any other server.</li>
					</ol>
				</li>
				<li>
					This license shall automatically terminate if you violate any of these restrictions and may be terminated by Gesture at any time. Upon terminating your viewing of these materials or upon the termination of this license, you must destroy any downloaded materials in your possession whether in electronic or printed format.
				</li>
			</ol>
			
			<h3>
				3. Disclaimer
			</h3>
			
			<ol type="a">
				<li>
					The materials on Gesture's web site are provided "as is". Gesture makes no warranties, expressed or implied, and hereby disclaims and negates all other warranties, including without limitation, implied warranties or conditions of merchantability, fitness for a particular purpose, or non-infringement of intellectual property or other violation of rights. Further, Gesture does not warrant or make any representations concerning the accuracy, likely results, or reliability of the use of the materials on its Internet web site or otherwise relating to such materials or on any sites linked to this site.
				</li>
			</ol>
			
			<h3>
				4. Limitations
			</h3>
			
			<p>
				In no event shall Gesture or its suppliers be liable for any damages (including, without limitation, damages for loss of data or profit, or due to business interruption,) arising out of the use or inability to use the materials on Gesture's Internet site, even if Gesture or a Gesture authorized representative has been notified orally or in writing of the possibility of such damage. Because some jurisdictions do not allow limitations on implied warranties, or limitations of liability for consequential or incidental damages, these limitations may not apply to you.
			</p>
						
			<h3>
				5. Revisions and Errata
			</h3>
			
			<p>
				The materials appearing on Gesture's web site could include technical, typographical, or photographic errors. Gesture does not warrant that any of the materials on its web site are accurate, complete, or current. Gesture may make changes to the materials contained on its web site at any time without notice. Gesture does not, however, make any commitment to update the materials.
			</p>
			
			<h3>
				6. Links
			</h3>
			
			<p>
				Gesture has not reviewed all of the sites linked to its Internet web site and is not responsible for the contents of any such linked site. The inclusion of any link does not imply endorsement by Gesture of the site. Use of any such linked web site is at the user's own risk.
			</p>
			
			<h3>
				7. Site Terms of Use Modifications
			</h3>
			
			<p>
				Gesture may revise these terms of use for its web site at any time without notice. By using this web site you are agreeing to be bound by the then current version of these Terms and Conditions of Use.
			</p>
			
			<h3>
				8. Governing Law
			</h3>
			
			<p>
				Any claim relating to Gesture's web site shall be governed by the laws of the State of Florida without regard to its conflict of law provisions.
			</p>
			
			<p>
				General Terms and Conditions applicable to Use of a Web Site.
			</p>
			
			
			
			<h2>
				Privacy Policy
			</h2>
			
			<p>
				Your privacy is very important to us. Accordingly, we have developed this Policy in order for you to understand how we collect, use, communicate and disclose and make use of personal information. The following outlines our privacy policy.
			</p>
			
			<ul>
				<li>
					Before or at the time of collecting personal information, we will identify the purposes for which information is being collected.
				</li>
				<li>
					We will collect and use of personal information solely with the objective of fulfilling those purposes specified by us and for other compatible purposes, unless we obtain the consent of the individual concerned or as required by law.		
				</li>
				<li>
					We will only retain personal information as long as necessary for the fulfillment of those purposes. 
				</li>
				<li>
					We will collect personal information by lawful and fair means and, where appropriate, with the knowledge or consent of the individual concerned. 
				</li>
				<li>
					Personal data should be relevant to the purposes for which it is to be used, and, to the extent necessary for those purposes, should be accurate, complete, and up-to-date. 
				</li>
				<li>
					We will protect personal information by reasonable security safeguards against loss or theft, as well as unauthorized access, disclosure, copying, use or modification.
				</li>
				<li>
					We will make readily available to customers information about our policies and practices relating to the management of personal information. 
				</li>
			</ul>
			
			<p>
				We are committed to conducting our business in accordance with these principles in order to ensure that the confidentiality of personal information is protected and maintained. 
			</p>		

			
		</div><!-- end content div -->
		
		<!-- blelow is a footer div which contains nothing at the moment-->
		<div data-role="footer" data-position="fixed">
			
		</div><!-- end footer div -->
</div><!-- end of page -->

<!-- ==================================================== Copyright Info page section ============================================= -->

<!-- Bellow is the copyright_view Page which in contained within a container div with a data-role of page, and a ID of copyright_view which is whats needed to call help page-->
<div data-role="page" id="copyright_view" class="wrapper" data-theme="b">
		<header><!-- header contains the logo which is within a image tag-->
			<h1><img src="images/logo_small.png"/></h1>
			
			<h1 class="logo_img"><?php echo img('/images/logo_small.png'); ?></h1>

		</header>
		
		<!-- below is a header that has a JQery data role of header which will take on there design theme, within the header is a header title, and a button which will send the user back to the home page -->
		<div data-role="header">
			<h1>Legal</h1>
			<a href="#home" data-role="button" data-icon="home" class="ui-btn-left" data-transition="flow">Home</a>
		</div><!-- end header div-->
			
		<!-- Below is the main content div of this section / page. it houses all the content i want to present to the user. -->
		<div data-role="content">	
			<h2>Copyright Information</h2>
			<p>Gesture does not send Spam or sell email addresses.. This Privacy Policy describes how we treat the information we collect when you visit our web sites and/or received any emails from Gesture.</p>
			
			<h4>1. YOUR PERSONAL INFORMATION COLLECTED BY GESTURE</h4>
			<p>Gesture will not collect or share personally identifiable information such as your name, email, or personal artwork without your knowledage and permission. We only collect Personal Information that you voluntarily submit when you create a Gesture Profile and upload / create your projects.</p>
			
			<p>While we may share your information with other members of the Gesture community we will not provide your information to unaffiliated third parties.</p>
			
			<h4>2. REVIEW AND ACCESS. </h4>
			<p>Upon your request, you can access a summary of the information we collect about you. You will have an opportunity to correct, update or modify this information.</p>
			
			<h4>3. USER'S GRANT OF LIMITED LICENSE</h4>
			<p>Gesture Inc does not claim any permanent ownership of Content you submit or make available for inclusion on the Service. However, in the modern age of content hosting and the propagation and streaming of content across the web, we require a limited license to host and display this content, as specified below, which lasts as long as you chose to host your work on the service. For example, one purpose for this limited license is to enable Gesture to stream and present your work across the Gesture.com Network that present your work professionally - linking back to your portfolio.</p>
			
		</div><!-- end content div -->
		
		<!-- blelow is a footer div which contains nothing at the moment-->
		<div data-role="footer" data-position="fixed">
		</div><!-- end footer div -->
</div><!-- end of page -->

<!-- ==================================================== Contact Info page section ============================================= -->

<!-- Bellow is the Contact_view Page which in contained within a container div with a data-role of page, and a ID of contact_view which is whats needed to call help page-->
<div data-role="page" id="contact_view" class="wrapper" data-theme="b">
		<header><!-- header contains the logo which is within a image tag-->
			<!-- <h1><img src="images/logo_small.png"/></h1> -->
		
			<h1 class="logo_img"><?php echo img('/images/logo_small.png'); ?></h1>

		</header>
		
		<!-- below is a header that has a JQery data role of header which will take on there design theme, within the header is a header title, and a button which will send the user back to the home page -->
		<div data-role="header">
			<h1>Contact / Support</h1>
			<a href="#home" data-role="button" data-icon="home" class="ui-btn-left" data-transition="flow">Home</a>
		</div><!-- end header div-->
			
		<!-- Below is the main content div of this section / page. it houses all the content i want to present to the user. -->
		<div data-role="content">	
			<h2>Contact Information</h2>
			
			<h4>Phone:</h4>
			<p>(733)-758-9987</p>
			
			<h4>Mailing Address:</h4>
			<p>3300 University Blvd  Winter Park, FL 32792</p>
			
			<h4>Email:</h4>
			<p>We want to her from you.</p>
			<address>
				Have any questions, suggestions, or if you want to report a more serious matter; for example missue of our website shoot us an email at:<a href="mailto:support@gesture.com">Support@Gesture.com</a>
			</address>
			<p>If you don't get an answer immediately, We might just be travelling through the middle of nowhere. We will get back to you as soon as possible. That's a promise! </p>
			
			
		</div><!-- end content div -->
		
		<!-- blelow is a footer div which contains nothing at the moment-->
		<div data-role="footer" data-position="fixed">
		</div><!-- end footer div -->
</div><!-- end of page -->

<!-- ==================================================== Help / FAQ Info page section ============================================= -->

<!-- Bellow is the help_view Page which in contained within a container div with a data-role of page, and a ID of help_view which is whats needed to call help page-->
<div data-role="page" id="help_view" class="wrapper" data-theme="b">
		<header><!-- header contains the logo which is within a image tag-->
			<!-- <h1><img src="images/logo_small.png"/></h1> -->
			
			<h1 class="logo_img"><?php echo img('/images/logo_small.png'); ?></h1>

		</header>
		
		<!-- below is a header that has a JQery data role of header which will take on there design theme, within the header is a header title, and a button which will send the user back to the home page -->
		<div data-role="header">
			<h1>FAQ</h1>
			<a href="#home" data-role="button" data-icon="home" class="ui-btn-left" data-transition="flow">Home</a>
		</div><!-- end header div-->
		
		<!-- Below is the main content div of this section / page. it houses all the content i want to present to the user. -->
		<div data-role="content">	
			<h2>Frequently Asked Questions (FAQ)</h2>
			
			<h4>How do I become a member?</h4>
			<p>To become a member of the Gesture.com network all you have to do is sign up by clicking the signup for free button at the bottom of the home screen. It is free and it only takes menimal action to do so.</p>
			
			<h4>How do you begin the process of creating projects?</h4>
			<p>Inorder to have the option of creating a project you must be a member and have signed into the application. You will then be redirected to your "User Hub" where you will have to click on the Create a project button at the bottom of the screen and flow the simple steps needed to create a file.</p>
			
		</div><!-- end content div -->
		
		<!-- blelow is a footer div which contains nothing at the moment-->
		<div data-role="footer" data-position="fixed">
		</div><!-- end footer div -->
</div><!-- end of page -->

</body>
</html>
