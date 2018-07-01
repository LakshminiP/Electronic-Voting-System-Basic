<?php
//Connect with MYSQL
	     $con = mysqli_connect('localhost','root','');
		 
		 mysqli_select_db($con,'db');
		 
		 $sql = "UPDATE viewcomp SET Name='$_POST[Name]',Party='$_POST[Party]',Municipal='$_POST[Municipal]',Village='$_POST[Village]' WHERE Name='$_POST[Name]'";
		 
		 if(mysqli_query($con,$sql))
			 header("refresh:1; url=update.php");
		 else
			  echo "NOT Update";
?>