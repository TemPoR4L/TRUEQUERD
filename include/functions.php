<?php

	include ("../config.php");

	function SQLCon()
	{
		$con = mysqli_connect(MYSQL_HOSTNAME, MYSQL_USERNAME, MYSQL_PASSWORD, MYSQL_DBNAME);
		
		if ($con) 
		{
			return $con;
		} else {
			return null;
		}
		
	}
	
	function encryptPassword ($password)
	{
		if ($password != "")
		{
			$password = hash(algorithm, $password, false);
			$password = hash(algorithm, $password . secretKey, false);
			$password = hash(algorithm, $password, false);
			
			return $password;
		} else{
			return null;
		}
	}
	
	function userExist($user)
	{
		$con = SQLCon();
		if ($con)
		{
			
			$query = $con->query("SELECT * FROM `usuarios` WHERE `userNew`='". $con->real_escape_string($user) ."'");
			
			if ($query->num_rows > 0)
			{
				$con->close();
				return true;
			} else {
				$con->close();
				return false;
			}
			$con->close();
		} else {
			return true; //puede ser que haya un error en la DB.
		}
	}
	

?>