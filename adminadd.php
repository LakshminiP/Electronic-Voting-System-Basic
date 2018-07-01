<DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="frontpage.css">
<title>Add Candidates</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
	
 <br> <div class="jumbotron">

<div class="row">
    <h2 class="h2"><center>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Electronic Voting System</center></h2>
      
     </div>
  
   </div>
<div class="row xx">


<div class="hd">
<p align="center"><font color="white">ADD CANDIDATES</font></p>
</div>
</div>
<?php
require 'connect.inc.php';
if(isset($_POST['Name'])&& isset($_POST['Party'])&& isset($_POST['Municipal']) && isset($_POST['Village']))
{
	$Name=$_POST['Name'];
	$Party=$_POST['Party'];
	$Municipal=$_POST['Municipal'];
	$Village=$_POST['Village'];
	if(!empty($Name)&&  !empty($Party)&&  !empty($Municipal) &&  !empty($Village))
	{
	$query="INSERT INTO viewcomp VALUES('".mysql_real_escape_string($Name)."','".mysql_real_escape_string($Party)."','".mysql_real_escape_string($Municipal)."','".mysql_real_escape_string($Village)."');";
		if(mysql_query($query))
		{
		echo '<b><align="center">Candidate name '.$Name.'  is inserted successfully into database!!!<b>';
		}
	else
	{
		echo '<b>Data insertion failed :-(</b>';
	}
	}
	else
	{
	echo '<b>Fill complete data</b>';	
	}	
}
?>	
<form method="POST" action="adminadd.php"   >
<div>
<br><br>
<center><font color="#663300"><b>CANDIDATE NAME :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </b></font><input type="text" value="<?php if(isset($Name)){ echo $Name; } ?>" name="Name"/></br></br></center> <br>
<center><font color="#663300"><b>PARTY NAME :&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </b></font><input type="text" value="<?php if(isset($Party)){ echo $Party; } ?>" name="Party"/></br></br></center> <br>
<center><font color="#663300"><b>MUNICIPALITY:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></font><input type="text" value="<?php if(isset($Municipal)){ echo $Municipal; } ?>" name="Municipal"/></br></br></center> <br>
<center><font color="#663300"><b>VILLAGE  :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </b></font><input type="text" value="<?php if(isset($Village)){ echo $Village; } ?>" name="Village"/><br><br></center> <br>
<center><button type="submit"><font color="#663300"><b> ADD</b></font></button></br></br></br></center>
</form>
</table><br><a href="adminlog.php"  class="btn btn-danger" role="button"> <span class="glyphicon glyphicon-menu-left" ></span>BACK TO ADMIN LOGIN</a><br>
</div><br>
</body>
</html>