$(document).ready(function(){
    
    var baseurl = $('#baseurl').val();
    $('.submitComment').submit(function(){
        
        $.ajax({
            url : baseurl + 'gestureArt/comment/insert',
            data : $(' form').serialize(),
            type: "POST",
            success : function(comment){
                
                $(comment).hide().insertBefore('#insertbeforMe').slideDown('slow');
            }
        })
        return false;
    })
    
    
$("#comment_view").on("pageshow", function(e){
		
		
		$.ajax({
			
			type: "GET",
			dataType: "json",
			url: "/gestureArt/comment/index/"+ projectID,
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
						url: "upload/updateProject/",
						data: form.serialize(),
						success: function(){ 
							
							$.mobile.changePage( "#welcome_view", { transition: "flip"} );
						}
						
						
					})
				});
				
			}
			
		})
	});

})