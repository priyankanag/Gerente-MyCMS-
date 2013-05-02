<?php
  	error_reporting(0);
		session_start();
		$lines=file("config.inc");
		
		if($lines[4]!=1)
		{
			header('Location: ./index.php');
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
      <h1><a href="index.html">
		  <?php
		$lines=file("config.inc");
		echo $lines[0];
			?>
			</a></h1>
      <pre class="clearfix style4"><em>A way to track and manage your projects </em></pre>
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
    <h2 class="title style11">Project Information </h2>
	 <h3>The list of projects being worked upon is displayed below:</h3> <br />
	 <div class="entry">
	<div class="post">
					
					<?php
					$lines=file("config.inc");
					$uname=trim(str_rot13($lines[2]));
					$pwd=trim(str_rot13($lines[3]));
					$_SESSION['projectid']=$_POST["projectid"];
					$con = mysql_connect($lines[5],$uname,$pwd);
					if(!$con)
					{
					  die('Could not connect: ' . mysql_error());
					}
					mysql_select_db(trim(str_rot13($lines[1])));
					$sql = "SELECT * FROM ProjectInfo where projectid=".$_SESSION['projectid'];
					$retval = mysql_query( $sql, $con);
					if(! $retval )
					{
					  die('Could not get data: ' . mysql_error());
					}
					echo "<fieldset>";
					while($row = mysql_fetch_array($retval))
					{
						echo "<strong>Project Name</strong>: {$row['projectname']} <br/>
							<strong>Project Description</strong>: {$row['projectdescription']} <br/>
							<strong>Project Manager</strong>: {$row['projectmanager']} <br/>
							<strong>Project Developer</strong>: {$row['projectdeveloper']} <br/>
							<strong>Project Target Date</strong>: {$row['targetdate']} <br/>
							<strong>Project Resources</strong>: {$row['resources']} <br/><br/><br/><br/>
						
						";
								
					}
					
					echo "<fieldset>
							<form method='post' action='FileBug.php'>
							
							Bug Description:  <input type='text' name='bugdescription'><br/>
							Assigned this bug to :<select name='bugassignedto'>";
							$sql1 = "SELECT username FROM USERS";
							$retval1 = mysql_query( $sql1, $con);
							while($row = mysql_fetch_array($retval1))
							{
							echo "<option value='{$row['username']}'>{$row['username']}</option>";
							} 
					echo "</select><br/><input type='submit' value='File this bug'>
							</form></fieldset>";
					echo "</fieldset>";
					
					
					?>	
	
</div>

</div>
<div id="footer">
    <p>Designed and developed by Msc.CA (SICSR)</p>
  </div>
</div>
</body>
</html>
