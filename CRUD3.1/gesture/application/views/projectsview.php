	<div id="content">
		<div id="currentP_content">
			<?php
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
				               
				               <?php 
					               }
				               ?>
				               <strong<?php echo $file->title?></strong>
				               
				               <br />
				               <!-- <?php echo $file->filename?> -->
				               <span id="project_hover" class="fade">
				               <a href="../upload/individualProject/<?php echo $file->id; ?>">
				               <img height="156" width="230" src='<?=base_url("/files/".$file->filename);?>'/>
				               </a></span>
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