<?php
include("database.php");
include("header.php");
extract($_GET);
if($_SESSION['uname']==""){
	header('Location:index.php');
}
$rs2=mysql_query("select * from incidentreport where ReporterName='{$_GET['ReporterName']}'");
$row2= mysql_fetch_array($rs2, MYSQL_ASSOC);
?>
<html>
<head>
<title>Reporter Details</title>
<link href="main.css" rel="stylesheet" type="text/css">
</head>
<body>

<form name="form1" method="post" action="" >
       <i class="fa fa-male" aria-hidden="true">
		<center><strong><p>Reporter Details</p></strong></center>
		<br>
		<center>Reporter:<?php echo $row2['ReporterName'];?></center><br>		
		<center>Incident:<?php echo $row2['I_Name'];?></center><br>
		<center>Location:<?php echo $row2['Location'];?></center><br>
		<center>Date:<?php echo $row2['Dated'];?></center><br>
		<center>Time:<?php echo $row2['Timer'];?></center><br>
		<center>Summary:<?php echo $row2['Summary'];?></textarea></center><br>         
     </form>	 
</body>