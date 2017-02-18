<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Incident Reporting</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="main.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php
include("database.php");
include("header.php");

if($_SESSION['uname']==""){
	header('Location:index.php');
}
echo "<h1  align=center>Responder Window</h1>";
		echo '<table width="28%" align="center">
  <tr>
    <td width="7%" height="65">Reporters</td>
	<td width="7%" height="65">Date</td>
	<td width="7%" height="65">Time</td>
  </tr> ';
	$rs1=mysql_query("select * from incidentreport where I_Category='{$_SESSION['Category']}'");
	$X=1;
	while($row1 = mysql_fetch_array($rs1, MYSQL_ASSOC)){
	echo'<tr>
	<td><form name="form2" method="post" action="responder.php">
	 '.$X++.')<input type="submit" name="ReporterName" value='.$row1['ReporterName'].'>
	 </form>
	</td>
	<td>'.$row1['Dated'].'</td>
	<td>'.$row1['Timer'].'</td>
     </tr>';	 	 
	 }
   echo' </table>';
		exit;


?>