<DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="frontpage.css">
<title>Delete Candidates</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body >
<div class="container">
<div class="row xx">

	
  <div class="jumbotron">

<div class="row">
    <h2 class="h2"><center>&nbsp&nbsp&nbsp&nbsp&nbsp Electronic Voting system</center></h2>

     </div>
  
   </div>
<div class="hd">
<p align="center"><font color="white">DELETE CANDIDATES</font></p>
</div>
</div>
<?php
require 'connect.inc.php';
if(isset($_POST['Name'])&& isset($_POST['Party']))
{
	$Name=$_POST['Name'];
	$Party=$_POST['Party'];
    if(!empty($Name)&&  !empty($Party))
	{
	$query="DELETE FROM viewcomp WHERE Name='$Name' AND Party='$Party';";
		if(mysql_query($query))
		{
		echo '<b>Candidate name '.$Name.'  is successfully deleted from database!!!<b>';
		}
	else
	{
		echo '<b>Data deletion failed :-(</b>';
	}
	}
	else
	{
	echo '<b>Fill complete data</b>';	
	}	
}
?>	
<form method="POST" action="admindel.php"   >
<div><br>
<center><font color="#663300"><b>CANDIDATE NAME : </b></font><input type="text" value="<?php if(isset($Name)){ echo $Name; } ?>" name="Name"/></br></br></br></center>
<center><font color="#663300"><b>PARTY COMPANY : </b></font><input type="text" value="<?php if(isset($Party)){ echo $Party; } ?>" name="Party"/></br></br></br></center>
<center><button type="submit"><font color="#663300"><b> DELETE</b></font></button></br></br></br></center>
</table><br><a href="adminlog.php"  class="btn btn-danger" role="button"> <span class="glyphicon glyphicon-menu-left" ></span>BACK TO ADMIN LOGIN</a><br>

</div>
</form>
</div><br><br>
</body>
</html>