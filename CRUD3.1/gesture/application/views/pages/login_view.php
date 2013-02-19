	<div class="content">
		<div id="login_content">
			<div id="login_form">
				<h2>Administrator Login Below</h2>
				
				<!-- <form id="login_form"> -->
				<?php
					if(!$this->session->userdata('logged_in')){
				?>
				
					<?php echo validation_errors(); ?>
					<?php echo form_open('pages/verifylogin'); ?>
				
					<label for="username">Username:</label>
					<input type="text" size="20" id="username" name="username"/>
					<br/>
					<label for="password">Password:</label>
					<input type="password" size="20" id="password" name="password"/>
					<br/>
					<input type="submit" value="Login" id="login_submit_btn"/>
				</form>
				
				<?php
					}else{
				?>
					<p>You are already Logged in</p>
				<?php
					}
				?>
			</div><!-- End login form div -->
		</div><!-- End login_content div -->
	</div><!-- End content div -->
</div><!-- End Wrapper -->