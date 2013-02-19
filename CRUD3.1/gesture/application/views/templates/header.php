<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta charset= "UTF-8" />
		<title>Gesture.com</title> 
		
		<script src="/gesture/themes/6/mcVideoPlugin.js" type="text/javascript"></script>
		<script src="/gesture/themes/6/js-image-slider.js" type="text/javascript"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
		<script src="<?php echo base_url()?>js/site.js"></script>
		<script src="<?php echo base_url()?>js/ajaxfileupload.js"></script>
		<!--
<link href="<?php base_url();?>/gesture/themes/6/js-image-slider.css" rel="stylesheet" type="text/css" />
		
		<link rel="stylesheet" href="<?php base_url();?>/gesture/themes/6/mcVideoPlugin.js" type="text/javascript">
-->
		

	
	</head>
	
	<body>
		<div id="wrapper">
			<header id="head">
				<h1 class="logo"><a href="/gesture/">Logo</a></h1>
				
				<?php
					if($this->session->userdata('logged_in')){
				?>
				<nav>
					
					<?php echo anchor('upload/projectsView', '<li><span id="projects">Projects</span></li>', 'title=projects') ?>
					<?php echo anchor('admin', '<li><span id="admin">User profile</span></li>', 'title=administration') ?>
				</nav>
				<?php
				}else{
				?>
				<nav>
					<?php echo anchor('pages/', '<li><span id="home">Home</span></li>', 'title=home') ?>
					<?php echo anchor('upload/projectsView', '<li><span id="projects">Projects</span></li>', 'title=projects') ?>
				</nav>
				<?php
				}
				?>
			</header>