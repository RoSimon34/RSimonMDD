<div class="content">
		<div id="editP_content">
			<div id="editForm">
				<h2>Edit Selected Project</h2>
				<?php echo validation_errors(); ?>
				
				<?php echo form_open('upload/updateProject/'.$project_data->id) ?>
				
					<label for="title">Title</label> 
					<br/>
					<input type="text" name="title" value="<? echo $project_data->title;?>"/>
					<br/>
					<label for="text">Description</label>
					<br/>
					<br/>
					<textarea name="description"><? echo $project_data->description;?></textarea>
					<br/>
					
					<input type="submit" name="submit" id="edit_project_btn" value="Update Project"/>
				
				</form>
			</div>
		</div>
	</div>
</div><!-- End of wrapper -->