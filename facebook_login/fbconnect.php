<?php
if(!isset($_SESSION['user']))
{
	// First get Application Configurations
	$app_id		= "	122327831281689"; //Get App ID from facebook api
	$app_secret	= "57cbfb33eea4aab3bb42ac02e9d0a993"; //Get App Sercret from facebook api
	$site_url	= "http://localhost:8888/facebook_login/"; //Get Site URL from facebook api

	try{
		include_once "src/facebook.php";
	}catch(Exception $e){
		error_log($e);
	}
	// Next Create our application instance
	$facebook = new Facebook(array(
		'appId'		=> $app_id,
		'secret'	=> $app_secret,
		));

	// Next Get User ID
	$user = $facebook->getUser();
	
	if($user){
		// Get logout URL
		$logoutUrl = $facebook->getLogoutUrl();
	}else{
		// Get login URL
		$loginUrl = $facebook->getLoginUrl(array(
			'scope'			=> 'read_stream, publish_stream, email, user_about_me',
			'redirect_uri'	=> $site_url,
			));
	}

	if($user){

		try{
		// Next we have us proceed when we have a valid user thats logged in.
		$user_profile = $facebook->api('/me');
		//Next step connecting to the database. 
		mysqlc();
		
		$name = GetSQLValueString($user_profile['name'], "text"); //Get user name
		$email = GetSQLValueString($user_profile['email'], "text"); //Get user email
		$gender = GetSQLValueString($user_profile['gender'], "text"); //Get user gender
		$bio = GetSQLValueString($user_profile['bio'], "text"); //Get user bio information
		$query = sprintf("SELECT * FROM newmember WHERE email = %s",$email); //database query statement
		$res = mysql_query($query) or die('Query failed: ' . mysql_error() . "<br />\n$sql");
		if(mysql_num_rows($res) == 0)
		{
			// Next insert user information into database
			$iquery = sprintf("INSERT INTO newmember values('',%s,%s,%s,%s,'yes')",$name,$email,$gender,$bio);
			$ires = mysql_query($iquery) or die('Query failed: ' . mysql_error() . "<br />\n$sql");
			$_SESSION['user'] = $user_profile['email'];
			$_SESSION['id'] = $user_profile['id'];
		}
		else
		{
			$row = mysql_fetch_array($res);
			$_SESSION['user'] = $row['email'];
			$_SESSION['id'] = $user_profile['id'];
		}
		}catch(FacebookApiException $e){
				error_log($e);
				$user = NULL;
			}
		
	}
}
?>