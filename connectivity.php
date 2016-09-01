<?php

$hostname = "mysql.example.com"; // the hostname you created when creating the database
$username = "yourusername";      // the username specified when setting up the database
$password = "yourpassword";      // the password specified when setting up the database
$database = "databasename";      // the database name chosen when setting up the database 

$link = mysqli_connect($hostname, $username, $password, $database);
if (mysqli_connect_errno()) {
   die("Connect failed: %s\n" + mysqli_connect_error());
   exit();
}



define('DB_HOST', '');
define('DB_NAME', '');
define('DB_USER','');
define('DB_PASSWORD','');
$con=mysql_connect(logintest.pouncingfoxdev.website,pistonlegs,Paintball944) or die("It didn't work 1: " . mysql_error());
$db=mysql_select_db(pouncingfoxdevlogintest,$con) or die("Failed to connect to MySQL: " . mysql_error());

$ID = $_POST['user'];
$Password = $_POST['pass'];







function SignIn()
{
	session_start(); //starting the session for user profile page
	if(!empty($_POST['user'])) //checking the 'user' name which is from Sign-In.html, is it empty or have some text
	{ 
		$query = mysql_query("SELECT * FROM UserName where userName = '$_POST[user]' AND pass = '$_POST[pass]'") or die(mysql_error());
		$row = mysql_fetch_array($query) or die(mysql_error()); if(!empty($row['userName']) AND !empty($row['pass']))
		{
			$_SESSION['userName'] = $row['pass'];
			header($url = "Location: " . $row['defaultpage']);
			}
			else
			{
				echo "SORRY... YOU ENTERD WRONG ID AND PASSWORD... PLEASE RETRY...";
			}
}
}
if(isset($_POST['submit']))
{
	SignIn();
}
?>