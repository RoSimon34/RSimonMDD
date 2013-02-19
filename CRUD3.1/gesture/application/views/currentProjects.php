	<div id="content">
		<div id="currentP_content">
			<?php
			/* var_dump($files); */
			if (isset($files) && count($files))
			{
			   ?>
			      <ul>
			         <?php
			         foreach ($files as $file)
			         {
			            ?>
			            <div id="currentProjects_list">
				               <li class="image_wrap">
				               <?php if($this->session->userdata('logged_in')){ ?>
				               <!-- <a href="#" class="delete_file_link" data-file_id="<?php echo $file->id?>"><span id="delete_btn">Delete</span></a> -->
				               <span id="delete_project_btn"><?php echo anchor("upload/deleteProject/".$file->id,"Delete Project");?></span>
				               <a id="edit_project"><?php echo anchor('upload/editProject/'.$file->id, '<span>Update Project</span>', 'title=update project')?></a>

				               <?php 
					               }
				               ?>
				               <strong<?php echo $file->title?></strong>
				               
				               <br />
				               <!-- <?php echo $file->filename?> -->
				               <span id="project_hover" class="fade">
				               		<img height="156" width="230" src='<?=base_url("/files/".$file->filename);?>'/>
				               </span>
				            </li>
			            </div>
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
		</div><!-- End of currentP_content Div-->
	</div><!-- End of content Div-->
</div><!-- End of Wrapper Div-->