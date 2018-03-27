#!/usr/bin/php
<?php
	if ($argc == 2)
	{
		$line = trim($argv[1]);
		$line = preg_replace("/ +/", " ", $line);
		echo $line."\n";
	}
?>
