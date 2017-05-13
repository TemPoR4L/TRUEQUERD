<?php
	require_once("functions.php");
	
	if (isset($_GET["username"]) && $_GET["username"] != "")
	{
		$user = $_GET["username"];
		
		if (userExist($user))
		{
			echo "TRUE";
		} else {
			echo "FALSE";
		}
	} else {
		echo "FALSE";
	}
	

?>