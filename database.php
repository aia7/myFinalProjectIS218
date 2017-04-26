<?php
	
	date_default_timezone_set('America/New_York');
	
	
	
	$hostname = 'sql1.njit.edu';
	$username = 'aia7';
	$password = 'qGd11eane';
	$database = 'aia7';


	try {
        
        //$db = new PDO("$hostname", "$username", "$password","$database");
        $db = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
        
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('database_error.html');
        exit();
    }
?>