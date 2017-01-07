<?php 

$dbhost = 'dblab.nonrelevant.net';
$dbuser = 'your_username';
$dbpass = 'your_mysql_password';

$connectionstring = mysql_connect($dbhost, $dbuser, $dbpass) or die('Error connecting to mysql');

$dbname = 'your_database_name';
mysql_select_db($dbname,$connectionstring) or die("Couldn't open your_database: ");
mysql_query('set character set greek',$connectionstring);
mysql_query("SET NAMES 'greek'",$connectionstring);
?> 
