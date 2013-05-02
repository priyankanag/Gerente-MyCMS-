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
      <h1><a href="index.html"> 
      		<?php
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
    <h2 class="title style11">Login </h2>
	 <div class="entry"></div>
</div>
	<div class="post">
						
	
	<!--Login info-->
	<fieldset>
		
		<?php
		
		error_reporting(0);
		session_start();
		if($_POST["loginname"]!=null && $_POST["loginpassword"]!=null)
		{
					$lines=file("config.inc");
					$uname=trim(str_rot13($lines[2]));
					$pwd=trim(str_rot13($lines[3]));
					$loginname=$_POST["loginname"];
					$loginpassword=$_POST["loginpassword"];
									
					$con = mysql_connect($lines[5],$uname,$pwd);
					
					mysql_select_db(trim(str_rot13($lines[1])));
					$sql = "SELECT username,password FROM USERS WHERE username='$loginname' AND password='$loginpassword';";
					$result = mysql_query($sql,$con);
					$count=mysql_num_rows($result);
					while($row = mysql_fetch_array($result))
					{
						$_SESSION['username']=$row['username'];
					}
						
						}
					if($count==1)
					{
						
						$_SESSION['loggedin']=1;
						
						header('Location: ./ProjectDisplay.php');
					}
					else
					{
						echo "<h3>Login failed</h3>";
						}

					
		
		?>
		<form action="" method="POST" >
		<table cellspacing="4px" width="735">
			<tr>
				<td>Username:</td>
			  <td width="504"><input type="text" name="loginname" /></td></tr>
		
			<tr>
				<td>Password: </td>
			  <td width="504"><input type="password" name="loginpassword" /></td></tr>
		<tr>
		<td width="213"><input type="submit" value="Login"/> <input type="reset" value="Reset"/> </td>
		</tr>			
	</table>
	</fieldset>		
	</form>
</div>
<br/>
<h3>First time users, please <a href="UserRegistration.php">Register</a></h3>
</div>
</div>

 <div id="footer">
    <p>Designed and developed by Msc.CA (SICSR)</p>
  </div>
</div>
</body>
</html>
