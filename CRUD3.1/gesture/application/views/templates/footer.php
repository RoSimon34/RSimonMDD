		<footer>
			
				<div class="footer_items">
					<p id="copy">&copy; Copyright 2012 Gesture.com All rights reserved</p>
					<?php
					if($this->session->userdata('logged_in')){
					
						echo anchor('admin/logout', '<span id="logout_btn">Logout</span>', 'title=logout');
						
					}else{
						echo anchor('pages/login', '<span id="login_btn">Login</span>', 'title=login');
					}
					?>
				</div><!-- footer closed -->
				
		</footer>
	</body>

</html>