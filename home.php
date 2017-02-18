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
echo "<h1  align=center>Incident Reporting</h1>";
		echo '<table border="0" align="center">
  <tr>
    <td  height="65" ></td>
    <td bordercolor="#0000FF"> <a href="incident.php" class="">Report Incident</a></td>
  </tr>
</table>';
		exit;

?>
</body>
</html>