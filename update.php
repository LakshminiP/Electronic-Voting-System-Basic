<DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="frontpage.css">
<title>Update Candidate</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style >
 body{
	padding-top:30px;
	padding-bottom:30px;
	}
	table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}
tr:nth-child(even){background-color:#f2f2f2;}


th {
    background-color: black;
    color: white;
}
</style>
</head>
<body >
<div class="container">
<div class="row xx">
	
  <div class="jumbotron">

<div class="row">
    <h2 class="h2"><center>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Electronic Voting system</center></h2>
      
     </div>
  
   </div>
<div class="hd">
<p align="center"><font color="white">UPDATE CANDIDATES</font></p>
</div>
</div>
<?php
     //Connect with MYSQL
	     $con = mysqli_connect('localhost','root','');
		 
		 mysqli_select_db($con,'db');
		 
		 $sql = "SELECT * FROM viewcomp";
		 
		 $records = mysqli_query($con,$sql);
?>
<table>
<tr>
<th>Candidate Name</th>
<th>Party</th>
<th>Municipality</th>
<th>Village</th></tr>
  <?php
  while($row = mysqli_fetch_array($records))
  {
        echo "<tr><form action=up1.php method=post>";
		echo "<td><input type=text name=Name value='".$row['Name']."'></td>";
		echo "<td><input type=text name=Party value='".$row['Party']."'></td>";
		echo "<td><input type=text name=Municipal value='".$row['Municipal']."'></td>";
		echo "<td><input type=text name=Village value='".$row['Village']."'></td>";
		echo "<td><input type=submit>";
		echo "</form></tr>";
		}
		
		?>
	</table><br><a href="adminlog.php"  class="btn btn-danger" role="button"> <span class="glyphicon glyphicon-menu-left" ></span>BACK TO ADMIN LOGIN</a><br>
</body>
	</html>