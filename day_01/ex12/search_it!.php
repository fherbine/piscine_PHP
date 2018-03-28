#!/usr/bin/php
<?php
if ($argc > 2)
{
	$looking_for = $argv[1];
	unset ($argv[0]);
	unset ($argv[1]);
	for ($i=2; $i < $argc; $i++)
	{
		$elm = array();
		$elm = explode(":", $argv[$i]);
		unset ($argv[$i]);
		$argv[$elm[0]] = $elm[1];
	}
	if ($argv[$looking_for])
		echo $argv[$looking_for]."\n";
}
?>
