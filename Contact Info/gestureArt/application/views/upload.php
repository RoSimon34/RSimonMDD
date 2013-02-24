	<div class="content">
		<div id="upload_content">
   
		   <h1>Create A Project Below</h1>
		   
		   <form id="upload_form" method="post" action="/Romaine/upload/upload_file" enctype="multipart/form-data" id="d">
		      <label for="title">Title</label>
		      <input id="upload_input" type="text" name="title" id="title" value="" />
		      <input id="upload_file" type="file" name="userfile" size="20" />
		      <br />
		      <br />
		      <label for="text">Description</label>
		      <br />
		      <br />
		      <textarea name="description"></textarea>
		      <br />
		      <br />
		      <input id="upload_submit" type="submit" value="Submit Project"/>
		   </form>
		   
		   <!-- <h1>Previous Projects Uploads</h1> -->
		   
		   <div id="files">
			   
		   </div>
	   
		</div><!-- End of upload_content div -->
	</div><!-- End of content div -->
</div><!-- End of wrapper -->
