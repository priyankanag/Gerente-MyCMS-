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
      <h1><a href="#"><h1><a href="#"><h1><?php
		$lines=file("config.inc");
		echo $lines[0];
			?></a></h1></a></h1>
      <pre class="clearfix style4"><em>A way to track and manage your projects </em></pre>
    </div>
     <div id="menu">
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Projects</a></li>
        <li><a href="#">Help</a></li>
      </ul>
    </div>
  </div>
  <div id="page">
    <div id="content">
    <h2 class="title style11">View Bug's status </h2>
	 <h3>View the status of your Bug here:</h3> <br />
	 <div class="entry"></div>
</div>
	<div class="post">
				
	<?php
					$lines=file("config.inc");
					$uname=trim(str_rot13($lines[2]));
					$pwd=trim(str_rot13($lines[3]));
					
					$con = mysql_connect($lines[5],$uname,$pwd);
					if(!$con)
					{
					  die('Could not connect: ' . mysql_error());
					}
					mysql_select_db(trim(str_rot13($lines[1])));
					$sql = 'SELECT * FROM buginfo';
					$retval = mysql_query( $sql, $con);
					if(! $retval )
					{
					  die('Could not get data: ' . mysql_error());
					}
					echo "<fieldset>
						<table width='735'><th>Bug ID</th><th>Bug Description</th><th>Assigned To</th><th>File Date</th><th>Assigned By</th><th>Status</th>";
					while($row = mysql_fetch_array($retval))
					{
						echo "<tr align='center'><td>{$row['bugID']}</td><td>{$row['bugdescription']}</td><td>{$row['bugassignedto']}</td><td>{$row['bugfiledate']}</td><td>{$row['bugassignedby']}</td><td>{$row['bugstatus']}</td></tr>";
								
					} 
					echo "	
							</table>
						
								
								</fieldset>";
					
					mysql_close($con);
					?>	
					
</div>
</div>
</div>

 <div id="footer">
    <p>Designed and developed by Msc.CA (SICSR)</p>
  </div>
</div>
</body>
</html>
