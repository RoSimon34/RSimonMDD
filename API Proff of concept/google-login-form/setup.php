<?php

// Includes

require_once 'includes/google-api-php-client/apiClient.php';
require_once 'includes/google-api-php-client/contrib/apiOauth2Service.php';
require_once 'includes/idiorm.php';
require_once 'includes/relativeTime.php';

// Session. Pass your own name if you wish.

session_name('tzine_demo');
session_start();

// This is the database configuration with the IDIORM library

$host = '';
$user = 'root';
$pass = 'root';
$database = 'gestureDB';

ORM::configure("mysql:host=$host;dbname=$database");
ORM::configure('username', $user);
ORM::configure('password', $pass);

// This will be changing the connection to unicode
ORM::configure('driver_options', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

// Google API. Obtain these settings from https://code.google.com/apis/console/

$redirect_url = 'http://localhost:8888/google-login-form/'; // The url of your web site
$client_id = '406261192335.apps.googleusercontent.com'; // The client_id of your google API
$client_secret = '_G-ghY-RIw5tAlMrmHYWEbYK'; // The client_secret from google API
$api_key = 'AIzaSyDAgDdbooit4AghkTuZ0XM5QVyOzOMfeBk'; // The API key from the google API
