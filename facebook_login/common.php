<?php
function mysqlc()
// This function will connect to my Sequel database
{
	$con=mysql_connect("localhost:8888","root","root");// connnect to host, username, & password
	if(!$con)
	{
		die("Could not connect to MySQL"); // If we not able to connect to database show the message below
	}
	mysql_select_db("gestureDB",$con) or die ("could not open database"); // Select database "gestureDB"
}

function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
	$theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
	$theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);
	switch ($theType) 
	{
		case "text":
		$theValue = ($theValue != "") ? "'" . $theValue . "'" : "''";
		break;
		case "long":
		case "int":
		$theValue = ($theValue != "") ? intval($theValue) : "''";
		break;
		case "double":
		$theValue = ($theValue != "") ? "'" . doubleval($theValue) . "'" : "''";
		break;
		case "date":
		$theValue = ($theValue != "") ? "'" . $theValue . "'" : "''";
		break;
		case "defined":
		$theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
		break;
	}
	return $theValue;
}

?>