#!/usr/bin/php
<?php
	function ft_split($to_spl)
	{
		$fin = array();
		$to_spl = preg_replace("/ +/", " ", $to_spl);
		$new = explode(" ", $to_spl);
		foreach ($new as $el)
		{
			if ($el != "")
				$fin[] = $el;
		}
		return $fin;
	}
	$i = 0;
	$final = array();
	foreach ($argv as $av_el)
	{
		if ($av_el != $argv[0])
		{
			$tmp = ft_split($av_el);
			foreach ($tmp as $elem)
			{
				$final[$i] = $elem;
				$i++;
			}
		}
	}
	sort($final);
	foreach ($final as $display)
	{
		echo $display."\n";
	}
?>
