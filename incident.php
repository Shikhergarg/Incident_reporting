<?php
include("database.php");
include("header.php");

if($_SESSION['uname']==""){
	header('Location:index.php');
}
$uname=$_SESSION['uname'];

if(isset($_POST['Submit'])){
	echo "<script>alert('".$uname."');</script>";
	
	$name=$_SESSION['uname'];
	$I_Name=$_POST['I_Name'];
	$category=$_POST['I_category'];
	$loc=$_POST['Location'];
	$date=$_POST['Date'];
	$time=$_POST['Time'];
	$summary=$_POST['Summary'];
	
	$sql="insert into incidentReport(ReporterName,I_Name,I_Category,Location,Dated,Timer,Summary) values('$uname','$I_Name','$category','$loc','$date','$time','$summary')"; 
	$rs=mysql_query($sql)or die("Could Not Perform the Query");

	}

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Incident Report</title>
<link href="main.css" rel="stylesheet" type="text/css">
</head>

<body>
   
	 <form name="form1" method="post" action="" >
       <i class="fa fa-male" aria-hidden="true">
		<center><strong><p>Incident Report</p></strong></center>
		
		<br>
		<center>Incident<input name="I_Name" type="text" placeholder="Incident Name"  required autofocus></center><br>
		<center>Incident Category
		<select name="I_category">
          <option  value="Doctor">Doctor</option>
          <option value="Wardon">Wardon</option>
          <option value="Lawyer">Lawyer</option>
          <option value="Police">Police</option>
        </select>
		<center><br>
		<center>Location<input name="Location" type="text" placeholder="Location Name"  required autofocus></center><br>
		<center>Date<input name="Date" type="date" ></center><br>
		<center>Time<input name="Time" type="time" ></center><br>
		<center>Summary<textarea name="Summary" rows="10" cols="30">
                  The cat was playing in the garden.
                </textarea></center><br>
		<input type="submit" name="Submit" value="Post">          
     </form>
	 <a href="signout.php" class="">signout</a></td>
   
</body>
</html>
