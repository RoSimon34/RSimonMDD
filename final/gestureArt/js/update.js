$(function () {

	var projectID;
	var add_image;
	/*  This function is for the update functionality by getting the projectID */
	$(".editP").on("click", function(e){
		
		e.preventDefault();
		projectID = $(this).attr("data-projectID");
		console.log(this);
		$.mobile.changePage( "#update_view", { transition: "flip"} );
		
	});

	/* This function is uploading a file and turning it into a string which will then be stored in my database */
	$("#upload_view").on('change', '#flie_upload', function(){
		if(this.files && this.files[0]){
	
			var reader = new FileReader();
			
			reader.onload = function(e){
				add_image = e.target.result;
			}
			
			reader.readAsDataURL(this.files[0]);
		
		}
	});
	/* This is my delete functionality for the user getting the project Id and deleting the project bassically*/
	$(".deleteP").on("click", function(e){
		
		e.preventDefault();
		projectID = $(this).attr("data-projectID");
		console.log(this);
		$.ajax({
			
			type: "GET",
			/* dataType: "json", */
			url: "/gestureArt/upload/deleteProject/",
			data: {id:projectID},
			success: function(){ 
				
				console.log("delete ran");
				window.location="/gestureArt/";
				
			}
			
			
		})

	});
	/*This function is poppulating the database with the uploaded content*/
	$("#upload_view form [type='submit']").on("click",function(e) {
		
		e.preventDefault();
		$("#file").attr("value",add_image);
		/* console.log($("#upload_view form").serialize()); */
		$.ajax({
			
			type: "POST",
			dataType: "json",
			url: "/gestureArt/upload/upload_file",
			data: $("#upload_view form").serialize(),
			success: function(){ 
				
				window.location="/gestureArt/";
			}
			
			
		})
	 })
	/* This function is poppulating the update form with the data from the database pertaining to the selected project by ID and then updating it with any new content*/
	$("#update_view").on("pageshow", function(e){
		
		/* console.log("helo world"); */
		$.ajax({
			
			type: "GET",
			dataType: "json",
			url: "/gestureArt/upload/editProject/"+ projectID,
			success: function(data){
				
				
				var form = $("#update_view form");
				form.find("[name='title']").attr("value",data.title);
				form.find("[name='id']").attr("value",data.id);
				form.find("[name='medium']").attr("value",data.medium);
				form.find("[name='description']").text(data.description);
				form.find("[name='inspiration']").text(data.inspiration);
				form.find("[type='submit']").on("click",function(e){
					
					e.preventDefault();
					
					$.ajax({
			
						type: "POST",
						dataType: "json",
						url: "/gestureArt/upload/updateProject/",
						data: form.serialize(),
						success: function(){ 
							
							$.mobile.changePage( "#welcome_view", { transition: "flip"} );
						}
						
						
					})
				});
				/* console.log(data); */
			}
			
		})
	});
    
});


$.ajax({
  type: "POST",
  url: "some.php",
  data: { name: "John", location: "Boston" }
}).done(function( msg ) {
  alert( "Data Saved: " + msg );
});