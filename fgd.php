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
echo '<form method="POST" action="del.php">';
echo '<center><font color="#663300"><b>USER NAME : </b></font>';
echo '<input type="text" name="username" maxlength="20" value="<?php if(isset($username)){ echo $username; } ?>" required>';
echo '<br>';
echo '<br>';
$sql = "SELECT Name FROM viewcomp";
$result = mysql_query($sql);
echo '<center><font color="#663300"><b>CANDIDATE NAME : </b></font>';
echo "<select name='Name'>";
while ($row = mysql_fetch_array($result)) {
    echo "<option value='" . $row['Name'] ."'>" . $row['Name'] ."</option>";
}
echo "</select>";
echo '<br>';
echo '<br>';
$sql = "SELECT Party FROM viewcomp";
$result = mysql_query($sql);
echo '<center><font color="#663300"><b>PARTY NAME : </b></font>';
echo "<select name='Party'>";
while ($row = mysql_fetch_array($result)) {
    echo "<option value='" . $row['Party'] ."'>" . $row['Party'] ."</option>";
}
echo "</select>";
echo '<br>';
echo '<br>';
$sql = "SELECT Municipal FROM viewcomp";
$result = mysql_query($sql);
echo '<center><font color="#663300"><b>MUNICIPAL NAME : </b></font>';
echo "<select name='Municipal'>";
while ($row = mysql_fetch_array($result)) {
    echo "<option value='" . $row['Municipal'] ."'>" . $row['Municipal'] ."</option>";
}
echo "</select>";
echo '<br>';
echo '<br>';
$sql = "SELECT Village FROM viewcomp";
$result = mysql_query($sql);
echo '<center><font color="#663300"><b>VILLAGE NAME : </b></font>';
echo "<select name='Village'>";
while ($row = mysql_fetch_array($result)) {
    echo "<option value='" . $row['Village'] ."'>" . $row['Village'] ."</option>";
}
echo "</select>";
echo '<br>';
echo '<br>';
echo '<br>';
echo '<center><button type="submit"><font color="#663300"><b> SUBMIT</b></font></button></br></br></br></center>';
echo '</form>';
 echo'<br><a href="userlog.php"  class="btn btn-danger" role="button"> <span class="glyphicon glyphicon-menu-left" ></span>BACK TO USER LOGIN</a><br>';
echo '<br>';echo '<br>';
?> 




















