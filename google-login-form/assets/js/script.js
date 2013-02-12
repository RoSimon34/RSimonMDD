$(function(){

	// If no url property is passed, the
	// href attribute will be used

	$('#b1').frameWarp();

	$('#b2').frameWarp({
		onMessage: function(msg){
			$('#messages').append('<b>Message Received:</b> '+ msg+'<br />');
		}
	});

	// The Cache is enabled by default
	$('#b3').frameWarp({
		url : 'http://www.cnn.com/'
	});

	// This will Disable caching
	$('#b4').frameWarp({
		url : 'http://www.cnn.com/',
		cache:false
	});
});