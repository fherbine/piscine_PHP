#!/usr/bin/php
<?php
function first_modif($matches)
{
	return $matches[1].strtoupper($matches[2]);
}
function second_modif($matches)
{
	return strtoupper($matches[1]).$matches[2];
}
if ($argc > 1)
{
	$page = file_get_contents($argv[1]);
	if ($page !== false)
	{
		echo $page;
		$page = preg_replace_callback("/(<a[^<]*>)([^<]*)/", first_modif, $page);
		$page = preg_replace_callback("/([^>]*)(<\/a>)/", second_modif, $page);
		$page = preg_replace_callback('/(<a.*title=")([^"]*)/', first_modif, $page);
		echo $page;
	}
}
?>
