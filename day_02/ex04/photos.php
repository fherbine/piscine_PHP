#!/usr/bin/php
<?php
	if ($argc > 1)
	{
		$flux = curl_init($argv[1]);
		if ($flux !== false)
		{
			curl_setopt($flux, CURLOPT_RETURNTRANSFER, true);
			$page = curl_exec($flux);
			if ($page !== false)
			{
				preg_match_all('/<img[^<]src ?= ?"([^<|^"]*)"[^<]*>/', $page, $matchs);
				$srcs = $matchs[1];
				for($i=0; $i < count($srcs); $i++)
				{
					echo preg_replace("/.*\//", "", $srcs[$i]);
					echo ($i == count($srcs) - 1) ? "" : "\n";
				}
			}
			curl_close($flux);
		}
	}
?> 
