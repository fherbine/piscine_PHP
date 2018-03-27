#!/usr/bin/php
<?php
	function ft_split($to_spl)
	{
		$new = explode(" ", $to_spl);
		$new = array_filter($new);
		return $new;
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
