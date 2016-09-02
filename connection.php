<?php

$hostname = ""; // the hostname you created when creating the database
$username = "";      // the username specified when setting up the database
$password = "";      // the password specified when setting up the database
$database = "";      // the database name chosen when setting up the database 

$link = mysqli_connect($hostname, $username, $password, $database);
if (mysqli_connect_errno()) {
   die("Connect failed: %s\n" + mysqli_connect_error());
   exit();
}

function SignIn()
{
	session_start(); //starting the session for user profile page
	if(!empty($_POST['user'])) //checking the 'user' name which is from Sign-In.html, is it empty or have some text
	{ 
		$query =  mysql_query ("SELECT * FROM UserName where userName = '$_POST[user]' AND pass = '$_POST[pass]'") or die(mysql_error());
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