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
      <h1><a href="index.html"> <?php
		$lines=file("config.inc");
		echo $lines[0];
			?>
			</a></h1>
     </div>
     <div id="menu">
      <ul>
        <li><a href="ProjectDisplay.php">Home</a></li>
        <li><a href="AddProject.php">Add a Project</a></li>
      </ul>
    </div>
  </div>
  <div id="page">
    <div id="content">
    <div class="entry"></div>
</div>
	<div class="post">
<?php
session_start();
$lines=file("config.inc");
$uname=trim(str_rot13($lines[2]));
$pwd=trim(str_rot13($lines[3]));
$con = mysql_connect($lines[5],$uname,$pwd);
$bugdescription=$_POST["bugdescription"];
$bugassignedto=$_POST["bugassignedto"];
$bugassignedby=$_SESSION['username'];
if(!$con)
{
	die('Could not connect: ' . mysql_error());
	}
mysql_select_db(trim(str_rot13($lines[1])));

$sql2 = "INSERT into `buginfo` (`bugID` ,`bugdescription` ,	`bugassignedto` ,`bugfiledate` ,`bugassignedby` ,`bugstatus`)
				VALUES (NULL ,  '$bugdescription',  '$bugassignedto', CURRENT_TIMESTAMP ,  '$bugassignedby',  'open');";
					if(mysql_query($sql2,$con))
					{
					echo "<h3>Bug added successfully</h3>";
					print '<script type="text/javascript">
							alert("Bug added successfully");
					
							</script>';
					
					}
						
					else
					{
					echo "<h3>Adding bug feature itself has bugs</h3>";
					}
					
					
					
?>
</div>
<br/>
<br/>
<form action="ProjectDisplay.php">
<input type="submit" value="Go back to view the list of projects"/> 
</div>
</div>

 <div id="footer">
    <p>Designed and developed by Msc.CA (SICSR)</p>
  </div>
</div>
</body>
</html>
