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

$sql = "SELECT * FROM test_table";
$result = mysqli_query($link,$sql) or die("Unable to select: ".mysql_error());
print "<table>\n";
while($row = mysqli_fetch_row($result)) {
   print "<tr>\n";
   foreach($row as $field) {
       print "<td>$field</td>\n";
   }
   print "</tr>\n";
}
print "</table>\n";
mysqli_close($link);

?>