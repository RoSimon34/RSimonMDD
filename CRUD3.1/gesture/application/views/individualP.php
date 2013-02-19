	<div id="content">
		<div id="individualP_content">	
		      <ul>
		            <li class="image_wrap">
		            
		               <img src='<?=base_url("/files/".$files->filename);?>'/></a>
		               <br />
		               <br />
		               <div id="individualP_lower">
		               
		               		<h1><?php echo $files->title?></h1>
		               		
		               		<p><?php echo $files->description?></p>
		               		
		               		<?php echo anchor('upload/projectsView', '<li><span id="individualP_back_btn">Back to Projects</span></li>', 'title=projects') ?>
		               
		               </div><!-- End of individualP_lower Div-->
		            </li>
		      </ul>
		   </form>
	   	</div><!-- End of individualP_content Div-->
	   </div><!-- End of content Div-->
</div><!-- End of Wrapper Div-->