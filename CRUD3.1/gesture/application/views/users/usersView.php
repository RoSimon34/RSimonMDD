	<div class="content">
		<div id="usersView_content">
			<h2>GLMT Employees</h2>
			<span id="add_emp_btn"><?php echo anchor('users/createU', '<span>Add Employee</span>', 'title=create user') ?></span>
			<?php foreach ($users as $users_item): ?>
				<div id="employee_info">
			    <h3>First Name: <?php echo $users_item['firstname'] ?></h3>
			    <h3>Last Name: <?php echo $users_item['lastname'] ?></h3>
			    <h3>Position: <?php echo $users_item['position'] ?></h3>
			    <h3>Info: <?php echo $users_item['info'] ?></h3>
			    <span id="delete_user"><?php echo anchor("users/deleteUser/".$users_item['users_id'],"Delete Employee");?></span>
			    <span id="edit_user"><?php echo anchor("users/editUser/".$users_item['users_id'],"Edit Employee");?></span>
			    <!-- <p><a href="pages/users/<?php echo $users_item['users_id'] ?>">View User Info</a></p> -->
			    </div>
			
			<?php endforeach ?>
		</div>
	</div>
</div><!-- End of wrapper -->