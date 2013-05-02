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
      <h1><a href="#"><?php
		$lines=file("config.inc");
		echo $lines[0];
			?></a></h1>
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
    <h2 class="title style11">Report a Bug </h2>
	 <h3>Having an issue? Report it here:</h3> <br />
	 <div class="entry"></div>
</div>
	<div class="post">
						
	<form action="" method="POST" name="userregform">
	<!--Login info-->
	<fieldset>
		
		<table cellspacing="4px" width="735">
			<tr>
				<td>Descripiton of Bug:</td>
			  <td width="504"><input type="text" name="BugDetails" /></td></tr>
		
			<tr>
				<td>Bug Assigned to: </td>
			  <td width="504"><input type="text" name="BugAssigned" /></td></tr>
						<tr>
				<td>Status of Bug </td>
				 <td>
					<input type="radio" name="status" value="Rep"  checked="checked"/> Reported <br />
					<input type="radio" name="status" value="Res" /> Resolved <br />
					<input type="radio" name="status" value="BWU" /> Being worked upon</td>
				</tr>
					
		<tr>
		<td width="213"><input type="submit" value="Report a Bug"/> <input type="reset" value="Reset"/> </td>
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
