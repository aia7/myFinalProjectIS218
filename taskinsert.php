<?php
// if(isset($_POST['submit']))
require('database.php');

{
	$fname=$_POST['FirstName'];
	$dname=$_POST['Description'];
	$start=$_POST['StartDate'];
	$message=$_POST['message'];

	

	$sql="INSERT INTO todo (FirstName,Description,StartDate,message) VALUES (
	'$fname','$dname','$start','$message')";


	$statement = $db->prepare($sql);
	$statement->execute();
	$statement->closeCursor();


}
	?>