<?php 
function ft_split($str0)
{
	$ref = explode(" ", $str0);
	$ref = array_filter($ref);
	sort($ref);
	return ($ref);
}
?>
