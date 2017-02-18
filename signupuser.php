<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>User Signup</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="main.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php
include("header.php");
extract($_POST);
include("database.php");
$rs=mysql_query("select * from user where uname='$uname'");
if (mysql_num_rows($rs)>0)
{
	echo "<br><br><br><div class=head1>uname Already Exists</div>";
	exit;
}
$query="insert into user(user_id,uname,pass,name,email,phone) values('$uid','$uname','$pass','$name','$emailId','$phone')";
$rs=mysql_query($query)or die("Could Not Perform the Query");
echo "<br><br><br><div class=head1>Your Account  $uname Created Sucessfully</div>";
//echo "<br><a href=index.php>Login</a>";
$_SESSION['uname']=$uname;
 echo "<h1  align=center>Incident Reporting</h1>";
		echo '<table border="0" align="center">
  <tr>
    <td  height="65" ></td>
    <td bordercolor="#0000FF"> <a href="incident.php" class="">Report Incident</a></td>
  </tr>
</table>';

?>
</body>
</html>

