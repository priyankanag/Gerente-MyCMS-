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
      <h1><a href="index.html">  <?php
		$lines=file("config.inc");
		echo $lines[0];
			?></a></h1>
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
    <h2 class="title style11">Add new project </h2>
	 <h3>Enter details against the new project to be added</h3> <br />
	 <div class="entry"></div>
</div>
	<div class="post">
						
	
	<!--Login info-->
	<fieldset><?php
		error_reporting(0);
		if($_POST["projectname"]!=null && $_POST["projectdescription"]!=null && $_POST["projectmanager"]!=null && $_POST["projectdeveloper"]!=null && $_POST["projecttargetdate"]!=null && $_POST["projectresources"]!=null)
		{
			$lines=file("config.inc");
					$uname=trim(str_rot13($lines[2]));
					$pwd=trim(str_rot13($lines[3]));
					$projectname=$_POST["projectname"];
					$projectdescription=$_POST["projectdescription"];
					$projectmanager=$_POST["projectmanager"];
					$projectdeveloper=$_POST["projectdeveloper"];
					$projecttargetdate=$_POST["projecttargetdate"];
					$projectresources=$_POST["projectresources"];
					
					
					$con = mysql_connect($lines[5],$uname,$pwd);
					if(!$con)
					{
					  die('Could not connect: ' . mysql_error());
					}
					mysql_select_db(trim(str_rot13($lines[1])));
					$sql = "INSERT INTO  ProjectInfo(projectID,projectname,projectdescription,projectmanager,projectdeveloper,targetdate,resources)
							VALUES (NULL ,'$projectname',  '$projectdescription',   '$projectmanager',   '$projectdeveloper',  '$projecttargetdate',   '$projectresources'
							);";
					if(mysql_query($sql,$con))
					{
						echo "<h3>Project added successfully</h3>";
						}
						
					else
					{
						echo "<h3>Project addition failed</h3>";
						}
					mysql_close($con);
		}
		?>
		<form action="AddProject.php" method="POST">
		<table cellspacing="4px" width="735">
			<tr>
				<td>Name of Project:</td>
			  <td width="504"><input type="text" name="projectname" /></td></tr>
			<tr>
				<td width="213">Description:</td>
			  <td width="504"><input type="text" name="projectdescription" /></td>
	  	  </tr>
			<tr>
				<td>Project Manager: </td>
			  <td width="504"><select name="projectmanager"><?php
					$lines=file("config.inc");
					$uname=trim(str_rot13($lines[2]));
					$pwd=trim(str_rot13($lines[3]));
					
					$con = mysql_connect($lines[5],$uname,$pwd);
					if(!$con)
					{
					  die('Could not connect: ' . mysql_error());
					}
					mysql_select_db(trim(str_rot13($lines[1])));
					$sql = "SELECT username FROM USERS where designation='Man'";
					$retval = mysql_query( $sql, $con);
											
								
					while($row = mysql_fetch_array($retval))
					{
						echo "<option value='{$row['username']}'>{$row['username']}</option>";
								
					} 
					
					
					?>	</select></td></tr>
			  <tr>
				<td>Project Developer: </td>
			  <td width="504"><select name="projectdeveloper">
				  <?php
					$sql = "SELECT username FROM USERS where designation='Dev'";
					$retval = mysql_query( $sql, $con);
											
								
					while($row = mysql_fetch_array($retval))
					{
						echo "<option value='{$row['username']}'>{$row['username']}</option>";
								
					} 
			  mysql_close($con);
			  ?></select></td></tr>
			
			<tr>
				<td>
					Target Date:<span class="style12">*</span></td>
					<td><input name="projecttargetdate" type="text" size="25" placeholder="YYYY-MM-DD">
			
				</td>
				
			</tr>
			
			<tr>
				<td>Resources to be used:</td>
				<td><input type="text" name="projectresources" /></td>
			</tr>
			
		<tr>
		<td width="213"><input type="submit" value="Create Project"/> <input type="reset" value="Reset"/> </td>
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
