	<div class="content">
		<div id="createE_content">
			<h2>Add an Employee</h2>
			<span class="form_errors"><?php echo validation_errors(); ?></span>
			
			<?php echo form_open('users/createUser') ?>
			
				<label for="firstname">Name</label> 
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
				<input type="submit" name="submit" id="createE_btn" value="Add an employee" /> 
			
			</form>
		</div>
	</div>
</div><!-- End of wrapper -->