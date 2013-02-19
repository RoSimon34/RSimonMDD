<div class="content">
		<div id="editE_content">
			<h2>Edit an Employee</h2>
			<?php echo validation_errors(); ?>
			<?php echo form_open('users/updateUser/'.$user_id.'') ?>
			
				<label for="firstname">Firstname</label> 
				<input type="text" name="firstname" />
				<br />
				<label for="lastname">Lastname</label> 
				<input type="text" name="lastname" />
				<br />
				<label for="position">Position</label> 
				<input type="text" name="position"/>
				<br />
				<label for="info">Info</label>
				<textarea name="info"></textarea><br />
				
				<input type="submit" name="submit" value="Update Employee" id="edit_emp_btn" /> 
			
			</form>
		</div>
	</div>
</div><!-- End of wrapper -->