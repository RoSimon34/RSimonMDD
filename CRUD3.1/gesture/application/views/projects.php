	<div id="content">	
	<?php
	/* var_dump($files); */
	if (isset($projects) && count($projects))
	{
	   ?>
	      <ul>
	         <?php
	         foreach ($projects as $project)
	         {
	            ?>
	            <li class="image_wrap">
	               <!-- <a href="#" class="delete_file_link" data-file_id="<?php echo $file->id?>">Delete</a> -->
	               <strong><?php echo $project->title?></strong>
	               <strong><?php echo $project->id?></strong>
	               <br />
	               <!-- <?php echo $project->filename?> -->
	               <img src='<?=base_url("/files/".$project->filename);?>'/></a>
	            </li>
	            <?php
	         }
	         ?>
	      </ul>
	   </form>
	   <?php
	}
	else
	{
	   ?>
	   <p>No Files Uploaded</p>	
	   <?php
	}
	?>
	</div><!-- End of content Div-->
</div><!-- End of Wrapper Div-->