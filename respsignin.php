<?php include("database.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Incident Reporting</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="main.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php
extract($_POST);

if(isset($submit))
{
	$rs=mysql_query("select * from responder where Resp_Name='$Resp_Name' and Pass='$pass'");
	$row = mysql_fetch_array($rs, MYSQL_ASSOC);
	if(mysql_num_rows($rs)<1)
	{
		$found="N";
	}
	else
	{
		$_SESSION['Resp_Name']=$Resp_Name;
		$_SESSION['uname']=$Resp_Name;
	    $_SESSION['Category']=$row['Category'];
		header('Location:resphome.php');
	}
}
?>
<form class="login" method="post" action="">
		<i class="fa fa-male" aria-hidden="true">
		<center><strong><p id="gradelister">Incident Reporting</p></strong></center>
		<center><p id="heading">Responder Login</p></center>
		<br>
		<center><input name="Resp_Name" id="Resp_Name" type="text" placeholder="Username" required autofocus></center>
		<br>
		<center><input name="pass" id="pass" type="password" placeholder="Password" required autofocus></center><br>
		<?php
		  if(isset($found))
		  {
		  	echo "Invalid Resp_Name or Password";
		  }
		  ?>
		<center><input name="submit" type="submit" id="submit" value="Login"></center>
	   <div align="center"><span class="style4">New User ? <a href="signup.php">Signup Free</a></span></div>
	   </form>
</body>
</html>
