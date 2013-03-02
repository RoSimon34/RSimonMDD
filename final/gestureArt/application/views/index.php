<!DOCTYPE HTML>
<html>
<head>
<style>
ul,ol,li{
	list-style-type: none;
}

h2{
	color: #2864B4;
	text-decoration: none;
}
</style>

<script type="text/javascript" language="javascript"	src="http://code.jquery.com/jquery-latest.js"></script>
<script>
	$(document).ready(function(){
		  $(".voteMe").click(function() {
			var voteId = this.id;
			var upOrDown = voteId.split('_'); 
			$.ajax({
				type: "post",
				url: "http://localhost/technicalkeeda/demos/voteMe",
				cache: false,				
				data:'voteId='+upOrDown[0] + '&upOrDown=' +upOrDown[1],
				success: function(response){				
					try{
						if(response=='true'){	
							var newValue = parseInt($("#"+voteId+'_result').text()) + 1;            
							$("#"+voteId+'_result').html(newValue);
						}else{
							alert('Sorry Unable to update..');
						}
					}catch(e) {		
						alert('Exception while request..');
					}		
				},
				error: function(){						
					alert('Error while request..');
				}
			 });
		});
	});
</script>
</head>
<body>
<ul>					 
		<li>	
		<div>

			<h2>How to Show Hide Toggle Table Column Using Jquery</h2>
			<span><a id="1_upvote" class="voteMe"><img src="http://www.technicalkeeda.com/img/images/up_vote.png"/></a><span id="1_upvote_result" >10</span></span> | 
			<a id="1_downvote" class="voteMe"><img src="http://www.technicalkeeda.com/img/images/down_vote.png"/></a><span id="1_downvote_result" >1</span>
		</div>
		</li>

					 
		<li>
		<div>

			<h2>Load Json data on page scroll using jQuery Php Codeigniter and Mysql</h2>
			<span><a id="2_upvote" class="voteMe"><img src="http://www.technicalkeeda.com/img/images/up_vote.png"/></a><span id="2_upvote_result" >14</span></span> | 
			<a id="2_downvote" class="voteMe"><img src="http://www.technicalkeeda.com/img/images/down_vote.png"/></a><span id="2_downvote_result" >1</span>
		</div>

		</li>
					 
		<li>
		<div>

			<h2>Password and Confirm Password Validation in Jquery</h2>
			<span><a id="3_upvote" class="voteMe"><img src="http://www.technicalkeeda.com/img/images/up_vote.png"/></a><span id="3_upvote_result" >5</span></span> | 
			<a id="3_downvote" class="voteMe"><img src="http://www.technicalkeeda.com/img/images/down_vote.png"/></a><span id="3_downvote_result" >1</span>

		</div>
		</li>
		
	</ul>
</body>
</html>
