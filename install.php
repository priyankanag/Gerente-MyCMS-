<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--Developers: 
Priyanka Nag (12030142001)
Raman -->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Oswald" rel="stylesheet" type="text/css" />
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<style type="text/css">
<!--
.style4 {
  color: #FFFFFF;
	font-weight: bold;
	font-size: 19px;
}
.style9 {color: #000000; font-size: 14px; }
.style11 {color: #000000}
.style12 {color: #FF0000}
-->
</style>
</head>
<body>
<div id="wrapper">
  <div id="header">
    <div id="logo">
   </div>
</div>
  <div id="page">
    <div id="content">
    <h2 class="title style11">Setting your Environment up.... </h2>
	 <h3>Please wait for sometime and refresh your page!</h3> <br />
	 <div class="entry"></div>
<?php
$sitename=$_POST["sitename"];
$dbname=$_POST["dbName"];
$MySQLusername=$_POST["username"];
$MySQLpassword=$_POST["password"];
$installed=1;
$hostname="localhost";

$dbhandle = mysql_connect($hostname, $MySQLusername, $MySQLpassword) or die("Unable to connect to MySQL");
echo "<h3>Successfully connected to MySQL</h3><br>";

if(mysql_select_db($dbname))
{
	echo "<h3><font color='green'>Database exists</font></h3><br>";
	mysql_select_db($dbname,$dbhandle) or die("Unable to select database\n");
	
	$usertable="CREATE TABLE IF NOT EXISTS USERS(
				uid INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
				username VARCHAR(30) NOT NULL UNIQUE,
				password VARCHAR(30) NOT NULL,
				name VARCHAR(30) NOT NULL,
				emailid VARCHAR(40) NOT NULL UNIQUE,
				designation VARCHAR(30) NOT NULL,
				areaofwork VARCHAR(30) NOT NULL);";
	mysql_query($usertable,$dbhandle);
	
	$projectinfo="CREATE TABLE IF NOT EXISTS ProjectInfo(
					projectID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
					projectname VARCHAR(30) NOT NULL ,
					projectdescription VARCHAR(500) NOT NULL,
					projectmanager VARCHAR(50) NOT NULL,
					projectdeveloper VARCHAR(50) NOT NULL,
					targetdate date NOT NULL,
					resources VARCHAR(30) NOT NULL);";
	
	mysql_query($projectinfo,$dbhandle);
	
	$buginfo="
			CREATE TABLE IF NOT EXISTS `buginfo` (
			  `bugID` int(11) NOT NULL AUTO_INCREMENT,
			  `bugdescription` varchar(300) DEFAULT NULL,
			  `bugassignedto` varchar(30) NOT NULL,
			  `bugfiledate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
			  `bugassignedby` varchar(30) NOT NULL,
			  `bugstatus` varchar(30) NOT NULL,
			  PRIMARY KEY (`bugID`)
			);";
		mysql_query($buginfo,$dbhandle);		
	
}
else
{
	echo "<h3> <font color='red'>Database does not exist, Please enter an existing database name...</font></h3><br/>";
}


$dbname=str_rot13($dbname);
$MySQLusername=str_rot13($MySQLusername);
$MySQLpassword=str_rot13($MySQLpassword);
$f = fopen("config.inc", "w");
fwrite($f,"$line[]\r\n") or die("Couldn't open for writing!");
fwrite($f,"$dbname\r\n") or die("Couldn't open for writing!");
fwrite($f,"$MySQLusername\r\n") or die("Couldn't open for writing!"); 
fwrite($f,"$MySQLpassword\r\n") or die("Couldn't open for writing!");
fwrite($f,"$installed\r\n") or die("Couldn't open for writing!"); 
fwrite($f,"$hostname") or die("Couldn't open for writing!"); 
fclose($f);

?>

</div>
</body>
</html>
