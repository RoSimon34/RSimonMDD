<?php
session_start();
include "common.php";
include_once "fbconnect.php";
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.facebook.com/2008/fbml">
    <head>
        <title>Gesture Facebook Login</title>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Scrollbar Visibility with jScrollPane and jQuery - Hide and show the scrollbar on demand" />
        <meta name="keywords" content="scrollbar, hide, hover, show, visibility, jscrollpane, jquery, facebook" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/style.css" />
	
		<link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow&v1' rel='stylesheet' type='text/css' />
		<link href='http://fonts.googleapis.com/css?family=PT+Serif+Caption:400,400italic' rel='stylesheet' type='text/css' />
	</head>
	<body>
	<div class="container">
			<div class="header">
				<!-- <h1>Gesture Art App.</h1> -->
			</div>
          <div class="top" >
          
          <div style="width:900px; margin:auto;">
         <div style="float:left;"><img src="images/facebook.jpg" /></div>  <div style="float:right; padding:6px 0 0 0; color:#D8DFEA;">
<?php				
if (isset($_SESSION['user'])) echo '<a href="logout.php">Logout</h5></a>';
else echo '<a href="' . $loginUrl . '">Login</a>';
?>
</div> 
          </div>  
    </div>
			
            <div class="wrapper">
              <div id="container-area" class="container-area">
			    <div class="container-area_p">
				  <div>
                  
                <div style="float:left;">  
				<?php if(isset($_SESSION['id'])) { ?>
<img src="https://graph.facebook.com/<?php echo $_SESSION['id']; ?>/picture?type=large"/>
<?php } ?>
<?php if(!isset($_SESSION['user'])) { ?>
<div id="f-connect-button"><a href='<?php echo $loginUrl ?>'><img src="images/f-connect.png" alt="Connect to your Facebook Account"/></a></div>
<?php } else { ?>
<?php
mysqlc();
$email = GetSQLValueString($_SESSION['user'], "text");
$query = sprintf("SELECT * FROM newmember WHERE email = %s",$email);
$res = mysql_query($query) or die('Query failed: ' . mysql_error() . "<br />\n$sql");
$row = mysql_fetch_array($res);
?> </div>
			<div style="float:left; margin-left:20px;">	<h1><?php echo($row['name']);?></h1>
				<div class="profile-info"></br>
					<?php
				echo "<b>   GENDER : </b>" . $row['gender'];
				echo "<br/><b>   EMAIL : </b>" . $row['email'];
				if($row['bio'] != "")
					echo "<br/><b>   BIO : </b>" . $row['bio'];
				else
					echo "<br/><b>   BIO : </b>You have probably not specified your About Me on Facebook! Specifying you might help you get more friends";
				?>				
				</div><div class="clr"></div>
		<?php } ?>	</div>
	</div><div class="clr"></div>
</div>
                  
              </div>
		  </div>
                    
                    
                   
    </div>
				<div class="clr"></div>
		  </div>
		</div>
</body>
</html>