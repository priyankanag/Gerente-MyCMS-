<?php
error_reporting(0);
  	$lines=file("config.inc");
		
		if($lines[4]==1)
		{
			header('Location: ./ProjectDisplay.php');
		};
?>



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
      <img src="images/Logo.jpg" width="120" height="80"/>
    </div>    
  </div>
   
  <div id="page">
    <div id="content">
     <h2 class="title style11">Set your gerente Up </h2>
	  <div class="entry">
	  <p class="style9">Gerente is a project management system. Users can manage all their project using this system. Each user can have different role on a project and the project can be declared as public or private as per the creator of the project. This system helps users to do various tasks such as creating gnat chart, tracking time of the project, adding news, posting messages, share files etc. The system also is flexible enough and has a issue tracking system. Users can create custom fields as well for issues, time-entries, project and users. <br/>
Users are notified about the changes on their registered email ids. The notifications can include project activity, news, issues, issue changes etc.</p> <br/>
	  </div>
</div>
					<div class="post">
						
						<form action="install.php" method="POST">
	<!--Login info-->
	<fieldset>
		<table cellspacing="4px" width="839">
			<tr>
				<td colspan="2">
				Site Name<span class="style12">*</span>	</td>
				<td width="144">
					<input type="text" name="sitename" />			  </td>
				<td colspan="2"> (This will be the name of your project management system)</td>
			</tr>
			<tr>
				<td><span class="style8">Database name <span class="style12">*</span>	</span></td>
				<td>&nbsp;				</td>
				<td><input type="text" name="dbName" /></td>
				<td colspan="2"> (The database already needs to exist)</td>
			</tr>
			<tr>
				<td colspan="2">
				Username<span class="style12">*</span>	</td>
				<td width="144"><input type="text" name="username" /></td>
				<td colspan="2"> (Enter your MySQL username)</td>
			</tr>
			<tr>
				<td width="122">
				Password <span class="style12">*</span>	</td>
				<td width="1">&nbsp;				</td>
				<td>
				<input type="password" name="password" />				</td>
				<td colspan="2"> (Enter your MySQL password)</td>
			</tr>
			<tr><td><input type="submit" value="Save details" style="background:#FF6600"  onclick="validateform()"/> </td></tr>
			
	</table>
	</fieldset>	
	
	<br />
	
	</form>
</div>
</div>
</div>

 <div id="footer">
    <p>Designed and developed by Msc.CA(SICSR)</p>
  </div>
</div>
</body>
</html>
