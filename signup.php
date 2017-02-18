<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>New user signup </title>
<script language="javascript">
function check()
{

 if(document.form1.lid.value=="")
  {
    alert("Plese Enter Login Id");
	document.form1.lid.focus();
	return false;
  }
 
 if(document.form1.pass.value=="")
  {
    alert("Plese Enter Your Password");
	document.form1.pass.focus();
	return false;
  } 
  if(document.form1.cpass.value=="")
  {
    alert("Plese Enter Confirm Password");
	document.form1.cpass.focus();
	return false;
  }
  if(document.form1.pass.value!=document.form1.cpass.value)
  {
    alert("Confirm Password does not matched");
	document.form1.cpass.focus();
	return false;
  }
  if(document.form1.name.value=="")
  {
    alert("Plese Enter Your Name");
	document.form1.name.focus();
	return false;
  }
  if(document.form1.address.value=="")
  {
    alert("Plese Enter Address");
	document.form1.address.focus();
	return false;
  }
  if(document.form1.city.value=="")
  {
    alert("Plese Enter City Name");
	document.form1.city.focus();
	return false;
  }
  if(document.form1.phone.value=="")
  {
    alert("Plese Enter Contact No");
	document.form1.phone.focus();
	return false;
  }
  if(document.form1.email.value=="")
  {
    alert("Plese Enter your Email Address");
	document.form1.email.focus();
	return false;
  }
  e=document.form1.email.value;
		f1=e.indexOf('@');
		f2=e.indexOf('@',f1+1);
		e1=e.indexOf('.');
		e2=e.indexOf('.',e1+1);
		n=e.length;

		if(!(f1>0 && f2==-1 && e1>0 && e2==-1 && f1!=e1+1 && e1!=f1+1 && f1!=n-1 && e1!=n-1))
		{
			alert("Please Enter valid Email");
			document.form1.email.focus();
			return false;
		}
  return true;
  }
  
</script>
<link href="main.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php
include("header.php");
?>
   
	  <form name="form1" method="post" action="signupuser.php" >
	 //<form name="form1" method="post" action="" >
       <i class="fa fa-male" aria-hidden="true">
		<center><strong><p id="gradelister">Incident Reporting</p></strong></center>
		<center><p id="heading">Register</p></center>
		<br>
		<center><input name="name" type="text" placeholder="Name"  required autofocus></center><br>
		<center><input name="uname" type="text" placeholder="UserName"  required autofocus></center><br>
		<center><input name="pass" type="password" placeholder="Password"  required autofocus></center><br>
		<center><input name="confirmpass" type="password" placeholder="Confirm Password" required autofocus></center><br>
        <center><input name="emailId" type="email" placeholder="EmailId"  required autofocus></center><br>
		<center><input name="phone" type="phone" placeholder="Phone No"  required autofocus></center><br>
	   <center><input type="submit" name="Submit" value="Signup"></center>          
     </form>
   
</body>
</html>
