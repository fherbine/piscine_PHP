#!/usr/bin/php
<?php
if ($argc > 1)
{
	$argv[1] = preg_replace("/\s\s*/", " ", $argv[1]);
	$argv[1] = preg_replace("/^\s*|(\s*)$/", "", $argv[1]);
	echo $argv[1]."\n";
}
?>