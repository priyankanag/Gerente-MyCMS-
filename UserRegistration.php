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
  <h3><a href="Login.php"><strong>Login</strong></a> </h3>
    <div id="logo">
      <h1><a href="index.html"><?php
		$lines=file("config.inc");
		echo $lines[0];
			?></a></h1>
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
    <h2 class="title style11">Join the family </h2>
	 <h3>Enter your basic details here:</h3> 
	 <br />
	 <div class="entry"></div>
</div>
	<div class="post">
					
	
	<!--Login info-->
	<fieldset>
		<?php
		error_reporting(0);
		if($_POST["UserName"]!=null && $_POST["Password"]!=null && $_POST["Name"]!=null && $_POST["emailid"]!=null && $_POST["areaofwork"]!=null)
		{
					$lines=file("config.inc");
					$uname=trim(str_rot13($lines[2]));
					$pwd=trim(str_rot13($lines[3]));
					$username=$_POST["UserName"];
					$password=$_POST["Password"];
					$name=$_POST["Name"];
					$emailid=$_POST["emailid"];
					$designation=$_POST["designation"];
					$areaofwork=$_POST["areaofwork"];
					
					$con = mysql_connect($lines[5],$uname,$pwd);
					
					mysql_select_db(trim(str_rot13($lines[1])));
					$sql = "INSERT INTO  USERS(uid,username,password,name,emailid,designation,areaofwork)
							VALUES (NULL ,'$username','$password','$name','$emailid','$designation','$areaofwork'
							);";
					if(mysql_query($sql,$con))
					{
						echo "<h3><font color='red'>User Registered Successfully</font></h3>";
					}
					else
					{
						echo "<font color='red'>User Registration Failed</font>";
						}
		}
		?>	
		<form action="UserRegistration.php" method="POST">
		<table cellspacing="4px" width="735">
			<tr>
				<td>User Name:</td>
			  <td width="504"><input type="text" name="UserName" /></td></tr>
		
			<tr>
				<td>Enter your password: </td>
			  <td width="504"><input type="password" name="Password" /></td></tr>
			<tr>
				<td width="213">Re-enter your password:</td>
			  <td width="504"><input type="password" name="Re-password" /></td>
	  	  </tr>
			<tr>
				<td>Name:</td>
			  <td width="504"><input type="text" name="Name" /></td>
				
			</tr>
			<tr>
				<td>Email ID:</td>
			  <td width="504"><input type="text" name="emailid" /></td></tr>
			<tr>
				<td>Designation </td>
				 <td>
					<input type="radio" name="designation" value="Dev"  checked="checked"/> Developer
					<input type="radio" name="designation" value="Man" /> Manager</td>
					
				</tr>
				<tr>
				<td>Area of work:</td>
			  <td width="504"><input type="text" name="areaofwork" /></td></tr>
					
		<tr>
		<td width="213"><input type="submit" value="Register"/> <input type="reset" value="Reset"/> </td>
		</tr>			
	</table>
	</fieldset>		
	</form>
</div>
</div>
</div>

 <div id="footer">
    <p>Designed and developed by Msc.CA (SICSR)</p>
  </div>
</div>
</body>
</html>
