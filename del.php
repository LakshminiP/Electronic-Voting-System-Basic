<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="frontpage.css">
<title>Vote Candidates</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body style="background-color:white">
<div class="container">
<div class="row xx"><br><br>
<div class="jumbotron">

<div class="row">
    <h2 class="h2"><center>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Electronic Voting System</center></h2>
     
     </div>
  
   </div>
<div class="hd">
<p align="center"><font color="white">VOTE CANDIDATES</font></p>
</div>
</div>
<?php
require 'connect.inc.php';
	$username=$_POST['username'];
	$Name=$_POST['Name'];
	$Party=$_POST['Party'];
	$Municipal=$_POST['Municipal'];
	$Village=$_POST['Village'];
	$query="INSERT INTO viewpur VALUES('".mysql_real_escape_string($username)."','".mysql_real_escape_string($Name)."','".mysql_real_escape_string($Party)."','".mysql_real_escape_string($Municipal)."','".mysql_real_escape_string($Village)."');";
		if(mysql_query($query))
		{
		echo '<center><font color="#663300"><b>Vote is succesfully inserted into database: </b></font>';
		}
	else
	{
		echo '<center><font color="#663300"><b>Data insertion failed </b></font>';

	}
	echo '<br>';echo '<br>';
echo'<br><a href="userlog.php"  class="btn btn-danger" role="button"> <span class="glyphicon glyphicon-menu-left" ></span>BACK TO USER LOGIN</a><br>';
echo '<br>';echo '<br>';
?> 