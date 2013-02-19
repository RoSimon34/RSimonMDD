<div class="content">
		<div id="admin_content">
			<div id="admin_img"></div>
			<h2>User Profile / Upload view</h2>
			<h3>Welcome: <?php echo $username; ?></h3>	
			
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			
			<span id="current_p_btn"><?php echo anchor('upload/projectsView', '<span id="projects_p">Current Projects</span>', 'title=projects') ?></span>
			<span id="create_project"><?php echo anchor('upload/', '<span>Create / Edit Project</span>', 'title=create project')?></span>
			
		</div>
	</div>
	
</div><!-- End of wrapper -->


