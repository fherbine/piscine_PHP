#!/usr/bin/php
<?php
	function ft_split($to_spl)
	{
		$to_spl = preg_replace("/ +|\t+/", " ", $to_spl);
		$new = explode(" ", $to_spl);
		$new = array_filter($new);
		return $new;
	}
	$i = 0;
	$i = 0;
	$final = array();
	$tmp = array();
	$ffinal = array();

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
	usort($final, "strcasecmp");
	for ($i=0;$i < count($final); $i++)
	{
		if (ereg("^[A-Za-z].*", $final[$i]))
		{
			$ffinal[$i2] = $final[$i];
			$i2++;
		}
	}
	for ($i=0;$i < count($final); $i++)
	{
		if (ereg("^[0-9].*", $final[$i]))
		{
			$ffinal[$i2] = $final[$i];
			$i2++;
		}
	}
	for ($i=0;$i < count($final); $i++)
	{
		if (ereg("^[^a-zA-Z0-9].*", $final[$i]))
		{
			$ffinal[$i2] = $final[$i];
			$i2++;
		}
	}
	foreach ($ffinal as $display)
		echo $display."\n";
?>
