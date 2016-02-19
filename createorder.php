<?php

		$url=$_SERVER['REQUEST_URI'];
		$j = $_GET["j"];
		$orderNo1 = $_GET["orderNo"];
		$u = explode("&",$url);
        for($l = 1; $l <= $j; $l++)
		{
			$labelID = $u[$l];
			echo "labelID=".$labelID.", ";
		}



?>