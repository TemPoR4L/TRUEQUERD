<?php
	if (isset($_GET["category"]))
	{
		$category = $_GET["category"];
		
		if (isset($_GET["query"]))
		{
			$queryArr = explode("+", $_GET["query"]);
			
			for ($i = 0; $i <= count($queryArr); $i++)
			{
				if ($i > 0)
				{
					$query = $query . " ". $queryArr[$i];
				} else {
					$query = $query . $queryArr[$i];
				}
			}
			
			echo $query;

		}
	}
?>