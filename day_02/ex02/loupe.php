#!/usr/bin/php
<?php
if ($argc > 1)
{
	$flux = curl_init($argv[1]);
	if ($flux)
	{
		curl_setopt($flux, CURLOPT_RETURNTRANSFER, true);
		$page = curl_exec($flux);
		// Ici le REGEX = > separateur
		if ($content = preg_split("/(<html|<HTML)/", $page))
		{
			foreach ($content as $expr)
			{
				if (preg_match("/[^<]/", $expr))
					$page = $expr;
			}
			$expr = "<html".$expr;
			preg_replace("/(^<a)/", , $expr);
			print_r($expr);
		}
		curl_close($flux);
	}
}
?>
